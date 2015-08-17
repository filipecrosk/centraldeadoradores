<?php

class Internals_Controller_CloseAction extends Zend_Controller_Action {
	
	protected $permissao;
	protected $userId;
	protected $userName;
	protected $nivelPermissao;
	
	public function init() {
		$this->view->action = Zend_Controller_Front::getInstance()->getRequest()->getActionName();
		if(!Internals_Auth::Check($this->permissao)){
			$this->_redirect("login");
		} else {
			$userCredentials = new Zend_Session_Namespace('UserCredentials');
			$this->userId = $userCredentials->id;	
			$this->userName = $userCredentials->nome;
			$this->nivelPermissao = $userCredentials->nivelPermissao;
			if(Zend_Controller_Front::getInstance()->getRequest()->getControllerName() != "dados"){
				$dados = DadosQuery::create()->filterByIdUsuario($this->userId)->findOne();
				if($dados == null){
					$this->_redirect("dados");
				}
			}
		}
	}
}
