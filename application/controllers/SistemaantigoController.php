<?php

class SistemaantigoController extends Internals_Controller_CloseAction {
	
	public function init(){
		$this->_helper->layout()->disableLayout();
		$this->_helper->viewRenderer->setNoRender();
		$this->permissao = 3;
		parent::init();
	}
	
	public function indexAction() {
		$this->_redirect("http://centraldeadoradores.com.br/enter.php?id=".$this->userId);
	}

}
