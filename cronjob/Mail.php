<?php
set_time_limit ( 0 );
require_once 'init.php';

class Cronjob_Mail {
	
	private $pdo = null;
	private $contaEmail = null;
	
	function __construct() {
		$this->start ();
	}
	
	private function start() {
		$this->pdo = new PDO ( "mysql:host=mysql.centraldeadoradores.com.br;dbname=adoradores", "adoradoresdb", "adoradoresdb" );
		if (! $this->pdo) {
			die ( 'Erro ao criar a conexão' );
		}
		$this->contaEmail = $this->pdo->query ( "SELECT * 
				FROM conta_email" )->fetchAll ();
		$this->verificaConta ();
	}
	
	private function verificaConta() {
		echo ($this->contaEmail [0] ['Ultimo_Envio'] < date("Y-m-d H:i:s", strtotime ("-1 hour"))?"true":"false")."<br>";
		echo $this->contaEmail [0] ['Emails_Enviados']."<br>";
		if ($this->contaEmail [0] ['Ultimo_Envio'] < date("Y-m-d H:i:s", strtotime ("-1 hour"))) {
			$this->contaEmail [0] ['Emails_Enviados'] = 0;
			$this->getAllEmails ();
		} else if ($this->contaEmail [0] ['Emails_Enviados'] < 80) {
			$this->getAllEmails ();
		}
	}
	
	private function getAllEmails() {
		$emailsEnviar = $this->pdo->query ( "
											SELECT  Enviar.*,
											        usuario.Nome as Remetente
											FROM
											(
											    SELECT  email_detail.Id_Email_Enviado,
											            email_header.Id_Usuario as remetenteId,
											            email_header.Assunto,
											            email_header.Corpo_Mensagem,
														email_header.Id_Email as IdHeader,
											            usuario.Id,
											            usuario.Nome,
											            usuario.Email
											    FROM email_detail
											    INNER JOIN usuario on usuario.Id = email_detail.Id_Destinatario
											    INNER JOIN email_header on email_header.Id_Email = email_detail.Id_Email
											    WHERE Enviado = 0
											) as Enviar
											INNER JOIN usuario on usuario.Id = Enviar.remetenteId
											" )->fetchAll ();
		
		foreach ( $emailsEnviar as $enviar ) {
			try {
				if ($this->contaEmail [0] ["Emails_Enviados"] >= 80) {
					break;
				}
				$anexos = $this->getAttachments($enviar ['IdHeader']);
				$this->sendMail ( $enviar ['Email'], $enviar ['Nome'], $enviar ['Assunto'], $enviar ['Corpo_Mensagem'], $anexos,$enviar ['Remetente'] );
				$this->updateEmailEnviado ( $enviar ["Id_Email_Enviado"] );
				//$this->reset($enviar["Id_Email_Enviado"]);
				$this->contaEmail [0] ["Emails_Enviados"] ++;
			}
			catch (Exception $ex){
				echo "== Exceção : " . $ex->getMessage() . " Usuário -> ".$enviar ['Nome']." ==";
			}
		}
		$this->contaEmail [0] ['Ultimo_Envio'] = date ( 'Y-m-d H:i:s' );
		$this->updateConta ();
		echo "Enviados".$this->contaEmail [0] ["Emails_Enviados"];
	}
	
	private function sendMail($to, $nome, $assunto, $corpo, $anexos, $remetente) {
		$settings = array ('ssl' => 'ssl', 'port' => 465, 'auth' => 'login', 'username' => $this->contaEmail [0] ["UserName"], 'password' => $this->contaEmail [0] ["Password"] );
		$transport = new Zend_Mail_Transport_Smtp ( 'smtp.gmail.com', $settings );
		$email_from = "centraldeadoradores@centraldeadoradores.com.br";
		$name_from = "Central de Adoradores";
		$email_to = $to;
		$name_to = Internals_Util::removeSpecial ( $nome );
		$mail = new Zend_Mail ();
		$mail->setReplyTo ( $email_from, $name_from );
		$mail->setFrom ( $email_from, $name_from );
		$mail->addTo ( $email_to, $name_to );
		$mail->setSubject ( Internals_Util::removeSpecial ( $assunto ) );
		$mail->setBodyHtml ( "<div style='width:700px;'>" . $corpo . "<p>" . $remetente . "</p></div>", "UTF-8" );
		$mail = $this->addAttachments($mail, $anexos);
		$mail->send ( $transport );
	}
	
	private function getAttachments($IdHeader){
		$arquivos = $this->pdo->query ( "
											SELECT * 
											FROM arquivo_email
											INNER JOIN arquivo on arquivo.Id = arquivo_email.Id_Arquivo
											WHERE Id_Email = " . $IdHeader . "
											" )->fetchAll ();
		return $arquivos;
	}
	
	private function addAttachments($mail, $anexos){
		if($anexos != null){
			$mail->createAttachment($anexos[0]["Conteudo"], $anexos[0]["Mime"], Zend_Mime::DISPOSITION_INLINE, Zend_Mime::ENCODING_BASE64, $anexos[0]["Nome"]);
		}
		return $mail;
	}
	
	private function updateEmailEnviado($idEmailEnviado) {
		$stmt = $this->pdo->prepare ( '	UPDATE email_detail
										SET
										Enviado = 1
										WHERE Id_Email_Enviado = :id
									' );
		$stmt->execute ( array (':id' => $idEmailEnviado ) );
	}
	
	private function updateConta() {
		
		$stmt = $this->pdo->prepare ( '	
										UPDATE conta_email
										SET
										Emails_Enviados = :Emails_Enviados,
										Ultimo_Envio = :Ultimo_Envio 
										WHERE Id_Conta_Email = :id
									' );
		$stmt->execute ( array (':Emails_Enviados' => $this->contaEmail [0] ["Emails_Enviados"], ':Ultimo_Envio' => $this->contaEmail [0] ["Ultimo_Envio"], ':id' => $this->contaEmail [0] ['Id_Conta_Email'] ) );
	}
	/*
	private function reset($idEmailEnviado) {
		$stmt = $this->pdo->prepare ( '	UPDATE email_detail
				SET
				Enviado = 0
				WHERE Id_Email_Enviado = :id
				' );
		$stmt->execute ( array (':id' => $idEmailEnviado ) );
	}
	*/
}
new Cronjob_Mail ();
?>