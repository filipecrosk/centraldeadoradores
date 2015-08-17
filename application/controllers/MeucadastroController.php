<?php

class MeucadastroController extends Internals_Controller_CloseAction {

	public function init(){
		parent::init();
		$baseUrl = Zend_Controller_Front::getInstance ()->getRequest ()->getBaseUrl ();
		$this->view->headScript ()->prependFile ( $baseUrl . '/default/js/jquery-mask.js', 'text/javascript' );
	}
	
	public function indexAction() {
		$usuario = UsuarioQuery::create()->findPk($this->userId);
		$this->view->nome = $usuario->getNome();
		$this->view->apelido = $usuario->getApelido();
		$this->view->email = $usuario->getEmail();
		$this->view->endereco = $usuario->getEndereco();
		$this->view->telefone = $usuario->getTelefone();
		$this->view->celular = $usuario->getCelular();
		$this->view->aniversario = $usuario->getAniversario();
	}
	
	public function updateAction(){
		$this->_helper->layout()->disableLayout();
		$this->_helper->viewRenderer->setNoRender();
		$usuario = UsuarioQuery::create()->findPk($this->userId);
		$nome = $this->getRequest()->getPost('nome', null);
		$apelido = $this->getRequest()->getPost('apelido', null);
		$email = $this->getRequest()->getPost('email', null);
		$endereco = $this->getRequest()->getPost('endereco', null);
		$telefone = $this->getRequest()->getPost('telefone', null);
		$celular = $this->getRequest()->getPost('celular', null);
		$aniversario = $this->getRequest()->getPost('aniversario', null);
		if($nome != null){
			$usuario->setNome($nome);
		}
		if($email != null){
			$usuario->setEmail($email);
		}
		if($telefone != null){
			$usuario->setTelefone($telefone);
		}
		if($celular != null){
			$usuario->setCelular($celular);
		}
		if($endereco != null){
			$usuario->setEndereco($endereco);
		}
		if($aniversario != null){
			$usuario->setAniversario($aniversario);
		}
		$usuario->setApelido($apelido);
		$usuario->save();
		Internals_Message::success("Dados atualizados com sucesso!");
		$this->_redirect("/meucadastro");
	}

}
