<?php

class LoginController extends Zend_Controller_Action {
	
	public function init(){
		parent::init();
		if(Internals_Auth::Check()){
			$this->_redirect("index");
		}
		$this->_helper->layout()->setLayout("1column");
	}
	
	public function indexAction() {
		$this->_helper->layout()->setLayout("1column");
	}
	
	public function autenticarAction(){
		 $this->_helper->viewRenderer->setNoRender(true);

		 if(Internals_Auth::Autenticar($this->getRequest()->getPost('Usuario', null), $this->getRequest()->getPost('Senha', null))){
		 	$this->_redirect("index");
		 }
		 else{
		 	Internals_Message::error("Erro de login");
		 	$this->_redirect("login");
		 }

	}
	
	public function lembrarsenhaAction(){
		if($this->getRequest()->isPost()){
			$email = $this->getRequest()->getPost('email', null);
			$validator = new Zend_Validate_EmailAddress();
			if($validator->isValid($email)){
				$usuario = UsuarioQuery::create()->filterByEmail($email)->filterByDesabilitado(0)->findOne();
				if($usuario != null){
					$senha = Internals_Util::randString(8);
					$alteracao = new AlteracaoInformacaoUsuario();
					$alteracao->setIdUsuario($usuario->getId());
					$alteracao->setInformacaoAntiga($usuario->getSenha());
					$alteracao->setNovaInformacao(md5($senha));
					$alteracao->setData(date("Y-m-d H:i:s"));
					$alteracao->setIdTipoInformacaoId(4);
					$alteracao->save();
					
					$envioEmail = new Internals_NovoUsuarioMail($usuario->getNome(), $usuario->getEmail(), $senha);
					
					$envioEmail->lembrarSenhaMessage($alteracao->getToken()->getChave());
					$envioEmail->enviar();
					
					Internals_Message::info("Um e-mail foi enviado para você com a nova senha.");
					$this->_redirect("/login");
				} else {
					Internals_Message::error("O e-mail digitado não está cadastrado no sistema. <a>Faça o seu cadastro</a> no sistema. Caso não esteja conseguindo, entre em contato com a liderança do ministério.");
				}
			} else {
				Internals_Message::error("O e-mail digitado não é válido. Por favor, digite um e-mail válido.");
			}
		}
	}
	
	public function confirmaralteracaoAction(){
		$this->_helper->layout()->disableLayout();
		$this->_helper->viewRenderer->setNoRender();
		$chave = $this->getRequest()->getParam("token");
		$token = TokenQuery::create()
			->filterByChave($chave)
			->filterByUtilizada(0)
			->findOne();
		if($token != null){
			$alteracao = AlteracaoInformacaoUsuarioQuery::create()
				->filterByToken($token)
				->findOne();
			$usuario = $alteracao->getUsuario();
			$usuario->setSenha($alteracao->getNovaInformacao());
			$usuario->save();
			$token->setUtilizada(1);
			$token->save();
			Internals_Message::info("Senha alterada com sucesso. 
					A partir de agora você deverá usar a nova senha para fazer o login.");
			$this->_redirect("/login");
		} else {
			$baseUrl = Zend_Controller_Front::getInstance ()->getRequest ()->getBaseUrl ();
			Internals_Message::error("O token utilizado não tem mais valor. Caso necessite, 
					<a href='".$baseUrl."/login/lembrarsenha'>clique aqui</a> e peça uma nova senha.");
			$this->_redirect("/login");
		}
	}

}
