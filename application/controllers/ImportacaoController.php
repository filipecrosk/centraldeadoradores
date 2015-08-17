<?php

class ImportacaoController extends Zend_Controller_Action {
	
	public function indexAction() {
		$this->_helper->layout()->disableLayout();
		$this->_helper->viewRenderer->setNoRender(true);
		
		$date = new DateTime( "26-01-2013 00:00:00");
		echo $date->format('Y-m-d H:i:s');
	}
}
