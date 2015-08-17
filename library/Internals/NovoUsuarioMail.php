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
		/*$settings = array('ssl'=>'ssl',
				'port'=>465,
				'auth' => 'login',
				'username' => 'centraldeadoradores@centraldeadoradores.com.br',
				'password' => 'adoradoresmail');
		$transport = new Zend_Mail_Transport_Smtp('smtp.gmail.com', $settings);*/
		$settings = array ('ssl' => 'tls', 'port' => 587, 'auth' => 'login', 'username' => 'AKIAIHZPVJKFFRS3DVZQ', 'password' => 'AvGezXL+DunKhrQnv5DBXQPCH9GNTxyrwp5/PKcIK82q' );
		$transport = new Zend_Mail_Transport_Smtp ( 'email-smtp.us-east-1.amazonaws.com', $settings );

		$email_from = "centraldeadoradores@centraldeadoradores.com.br";
		$name_from = "Central de Adoradores";
		$email_to = $this->to;
		$name_to = $this->nome;
		$mail = new Zend_Mail ();
		#$mail->setReplyTo( $email_from, $name_from);
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
				<h2>Você solicitou uma nova senha, confira as instruções:</h2>
				<p><strong style='font-size:18px'>1. <a href='http://v2.centraldeadoradores.com.br/login/confirmaralteracao?token=".$token."'>Para efetivar a alteração clique aqui</a>, ou copie e cole a URL no seu navegador:</strong> http://v2.centraldeadoradores.com.br/login/confirmaralteracao?token=".$token."</p>
				<h3><b>2. Copie e use sua nova senha: </b>".$this->senha."</h3>
				<p>3. Caso queira trocar sua senha para alguma senha que seja mais fácil para você lembrar, é muito simples, confira:
				<br>
				&nbsp; 3.1. Depois que você já tiver acessado o sistema, clique no menu <strong>Configurações > Alterar Senha</strong>.
				<br>
				&nbsp; 3.2. Digite sua senha atual, que acabamos de gerar, ou seja: <em>".$this->senha."</em>
				<br>
				&nbsp; 3.3. Agora informe a senha que você gostaria de usar e depois digite novamente no campo de confirmação de senha.
				<br>
				&nbsp; 3.4. Clique no botão <strong>Alterar</strong> e pronto!!! Sua senha foi alterada e no próximo acesso você já poderá utiliza-la.
				</p>
				<p>&nbsp;</p>
				<p>Caso você não tenha feito este pedido, por favor desconsidere este e-mail.</p>
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