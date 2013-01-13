<?php

class Internals_NovoUsuarioMail {
	
	private $subject;
	private $message;
	private $nome;
	private $to;
	private $senha;
	
	function __construct($nome, $to, $senha) {
		$this->nome = $nome;
		$this->to = $to;
		$this->senha = $senha;
	}
	
	public function enviar(){
		$settings = array('ssl'=>'ssl',
				'port'=>465,
				'auth' => 'login',
				'username' => 'centraldeadoradores@centraldeadoradores.com.br',
				'password' => 'adoradoresmail');
		$transport = new Zend_Mail_Transport_Smtp('smtp.gmail.com', $settings);
		$email_from = "centraldeadoradores@centraldeadoradores.com.br";
		$name_from = "Central de Adoradores";
		$email_to = $this->to;
		$name_to = $this->nome;
		$mail = new Zend_Mail ();
		$mail->setReplyTo($this->email_from, $name_from);
		$mail->setFrom ($email_from, $name_from);
		$mail->addTo ($email_to, $name_to);
		$mail->setSubject ($this->subject);
		$mail->setBodyHtml($this->message, "UTF-8");
		$mail->send($transport);
	}
	
	public function lembrarSenhaMessage($token, $baseUrl){
		$this->subject = "Alteracao de senha - Central de Adoradores";
		$this->message =
			"<div style='width:700px;'>
				<h2>Cadastro Central de Adoradores</h2>
				<p>Um pedido de alteração de senha foi feito!</p>
				<p>Caso você não tenha feito este pedido, por favor desconsidere este e-mail.</p>
				<p>&nbsp;</p>
				<p><b>Sua senha foi alterada para : </b>".$this->senha."</p>
				<p>&nbsp;</p>
				<p>Para efetivar a alteração, <a href='http://v2.centraldeadoradores.com.br/login/confirmaralteracao?token=".$token."'>clique aqui</a></p>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
				<hr />
				<p><b>Este é um e-mail automático, por favor, não responda.</b></p>
			</div>";
	}
	
	public function novoUsuarioMessage(){
		$this->subject = "Cadastro - Central de Adoradores";
		$this->message = 
			"<div style='width:700px;'>
				<h2>Cadastro Central de Adoradores</h2>
				<p>Seu cadastro na central de adoradores foi criado!</p>
				<p>Para acessar o sistema acesse o link <a href='http://www.centraldeadoradores.com.br'>www.centraldeadoradores.com.br</a>
				e digite seu usuário e a senha. No sistema, você pode alterar os seus dados de cadastro, ter acesso aos kits de ensaio...</p>
				<p>&nbsp;</p>
				<p><b>E-mail : </b>".$this->to."</p>
				<p><b>Senha : </b>".$this->senha."</p>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
				<hr />
				<p><b>Este é um e-mail automático, por favor, não responda.</b></p>
			</div>";
	}
	
}

?>