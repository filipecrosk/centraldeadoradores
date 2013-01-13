<?php

class Internals_Controller_CrudCloseAction extends Internals_Controller_CloseAction {

	protected $grid;
	protected $modal;
	
	public function init(){
		parent::init();
		
	}
	
	public function postDispatch(){
		parent::postDispatch();
		if($this->grid != null){
			$this->view->grid = $this->grid->renderGrid();
		}
	}
	
	public function reloadsucessAction(){
		Internals_Message::success("Gravado com sucesso!");
		$this->_redirect("/".Zend_Controller_Front::getInstance()->getRequest()->getControllerName());
	}	
}
