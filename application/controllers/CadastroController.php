<?php

class CadastroController extends Zend_Controller_Action {
	
	public function init(){
		$this->_helper->layout()->setLayout("1column");
		$this->view->actionName = $this->getRequest()->getActionName();
		$baseUrl = Zend_Controller_Front::getInstance ()->getRequest ()->getBaseUrl ();
		$this->view->headScript ()->prependFile ( $baseUrl . '/default/js/jquery-mask.js', 'text/javascript' );
	}
	
	public function indexAction() {
		$this->view->ministerios = MinisterioQuery::create()->orderByNome()->find();
		$this->view->funcoes = FuncaoQuery::create()->orderByNome()->find();
	}
	
	public function doAction(){
		$this->_helper->viewRenderer->setRender("index");
		
		$validator = new Zend_Validate_EmailAddress();
		$this->view->ministerios = MinisterioQuery::create()->find();
		$this->view->funcoes = FuncaoQuery::create()->find();
		
		$nome = $this->getRequest()->getPost('nome', null);
		$apelido = $this->getRequest()->getPost('apelido', null);
		$email = $this->getRequest()->getPost('email', null);
		$senha = $this->getRequest()->getPost('senha', null);
		$confirmacao = $this->getRequest()->getPost('confirmacao', null);
		$endereco = $this->getRequest()->getPost('endereco', null);
		$telefone = $this->getRequest()->getPost('telefone', null);
		$celular = $this->getRequest()->getPost('celular', null);
		$aniversario = $this->getRequest()->getPost('aniversario', null);
		$this->setValues($nome, $email, $endereco, $telefone, $celular, $aniversario);
		
		if($nome == null){
			$this->view->hasNomeError = true;
			Internals_Message::error("Nome inválido!");
			return ;
		}
		if(UsuarioQuery::create()->filterByNome($nome)->findOne() != null){
			$this->view->hasNomeError = true;
			Internals_Message::error("O cadastro já foi efetuado para este nome! Caso tenha esquecido a sua senha, clique clique <a href='/login/lembrarsenha'>aqui.</a>");
			return ;
		}
		if($email == null || !$validator->isValid($email)){
			$this->view->hasEmailError = true;
			Internals_Message::error("E-mail inválido!");
			return ;
		}
		if(UsuarioQuery::create()->filterByEmail($email)->findOne() != null){
			$this->view->hasEmailError = true;
			Internals_Message::error("O cadastro já foi efetuado para este e-mail! Caso tenha esquecido a sua senha, clique <a href='/login/lembrarsenha'>aqui.</a>");
			return ;
		}
		if($senha == null || strlen($senha) < 8){
			$this->view->hasSenhaError = true;
			Internals_Message::error("Senha inválida! A senha precisa ter mais de 8 caracteres.");
			return ;
		}
		if($senha != $confirmacao){
			$this->view->hasSenhaError = true;
			Internals_Message::error("A senha não corresponde à confirmação.");
			return ;
		}
		if($endereco == null){
			$this->view->hasEnderecoError = true;
			Internals_Message::error("Endereço inválido!");
			return ;
		}
		if($celular == null){
			$this->view->hasCelularError = true;
			Internals_Message::error("Celular inválido!");
			return ;
		}
		if($aniversario == null){
			$this->view->hasAniversarioError = true;
			Internals_Message::error("Aniversário inválido!");
			return ;
		}
		$ministerios = $this->getRequest()->getPost('ministerios', null);
		$funcoes = $this->getRequest()->getPost('funcoes', null);
		if($ministerios[0] === ""){
			$this->view->hasMinisteriosError = true;
			Internals_Message::error("O campo área é de preenchimento obrigatório!");
			return ;
		}
		if(in_array("1", $ministerios) && $telefone == null){
			$this->view->hasTelefoneError = true;
			Internals_Message::error("O campo telefone é de preenchimento obrigatório!");
			return ;
		}
		if((in_array("1", $ministerios) || in_array("2", $ministerios)) && $funcoes[0] == ""){
			$this->view->hasFuncoesError = true;
			Internals_Message::error("O campo função é de preenchimento obrigatório!");
			return ;
		}
		$usuario = new Usuario();
		$usuario->setNome($nome);
		$usuario->setApelido($apelido);
		$usuario->setEmail($email);
		$usuario->setSenha(md5($senha));
		$usuario->setEndereco($endereco);
		if($telefone != ""){
			$usuario->setTelefone($telefone);
		}
		$usuario->setCelular($celular);
		$usuario->setAniversario($aniversario);
		$usuario->save();
		
		$this->criarFuncoes($funcoes, $usuario->getId());
		$this->criarMinisterios($ministerios, $usuario->getId());
		
		$envioEmail = new Internals_NovoUsuarioMail($nome, $email, $senha);
		$envioEmail->novoUsuarioMessage();
		$envioEmail->enviar();
		
		Internals_Message::success("Cadastro efetuado com sucesso. Agora você pode fazer o login.");
		$this->_redirect("login");
	}
	
	private function setValues($nome, $email, $endereco, $telefone, $celular, $aniversario){
		$this->view->nome = $nome;
		$this->view->email = $email;
		$this->view->endereco = $endereco;
		$this->view->telefone = $telefone;
		$this->view->celular = $celular;
		$this->view->aniversario = $aniversario;
	}
	
	private function criarFuncoes($funcoes, $idUsuario){
		$funcoesAdicionar = array();
		foreach ($funcoes as $idFuncao){
			if(!in_array($idFuncao, $funcoesAdicionar)){
				$funcao = FuncaoQuery::create()->findPk($idFuncao);
				if($funcao != null){
					$funcoesAdicionar[] = $idFuncao;
					$novaFuncao = new UsuarioFuncao();
					$novaFuncao->setIdFuncao($idFuncao);
					$novaFuncao->setIdUsuario($idUsuario);
					$novaFuncao->save();
				}
			}
		}
	}
	private function criarMinisterios($ministerios, $idUsuario){
		$ministeriosAdicionar = array();
		foreach ($ministerios as $idMinisterio){
			if(!in_array($idMinisterio, $ministeriosAdicionar)){
				$ministerio = MinisterioQuery::create()->findPk($idMinisterio);
				if($ministerio != null){
					$ministeriosAdicionar[] = $idMinisterio;
					$novoMinisterio = new UsuarioMinisterio();
					$novoMinisterio->setIdUsuario($idUsuario);
					$novoMinisterio->setIdMinisterio($idMinisterio);
					$novoMinisterio->save();
				}
			}
		}
	}
}
