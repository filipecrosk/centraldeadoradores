<?php

class ImportacaoController extends Zend_Controller_Action {
	
	public function indexAction() {
		$this->_helper->layout()->disableLayout();
		$this->_helper->viewRenderer->setNoRender(true);
		
		$kit = ArquivoQuery::create()->findPk(1);
		
		$this->getResponse()
			->setHeader('Content-Disposition', 'attachment; filename='.$kit->getNome())
			->setHeader('Content-type', 'audio/mpeg');
		
		echo stream_get_contents($kit->getConteudo(), -1, 0);
		
		
	}
}
