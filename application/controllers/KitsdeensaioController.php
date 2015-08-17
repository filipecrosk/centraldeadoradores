<?php

class KitsdeensaioController extends Internals_Controller_CloseAction {

	public function init(){
		parent::init();
		Internals_SubMenu::AddItem("Geral", "kitsdeensaio/?tipo=0");
		$funcoes = FuncaoQuery::create()->orderByNome()->find();
		foreach ($funcoes as $funcao){
			$arquivoPresente = KitsEnsaioQuery::create()
				->filterByIdFuncao($funcao->getId())
				->findOne();
			if($arquivoPresente){
				Internals_SubMenu::AddItem($funcao->getNome(), "kitsdeensaio/?tipo=" . $funcao->getId());
			}
		}
	}

	public function indexAction() {
		$tipo = $this->getRequest()->getParam("tipo");
		$kits = KitsEnsaioQuery::create()
			->joinFuncao()
			->orderByNome()
			->select(array('Id', 'Nome', 'Funcao.Nome'));
		if($tipo != null && $tipo != 0){
			$kits->filterByIdFuncao($tipo);
		}

		$this->view->grid = $grid = new Internals_View_Helper_Grid(KitsEnsaioPeer::OM_CLASS, $this->view, $kits->find()->toArray());
		$this->view->grid->target = "_blank";
		$this->view->grid->addColumn(KitsEnsaioPeer::NOME, "Nome");
		$this->view->grid->addColumn(FuncaoPeer::NOME, "Função", FuncaoPeer::OM_CLASS);
		$criterio = array(array("<img alt='Baixar' src='/default/images/icone-download.png' style='display: block; width:20px; margin-left: auto;margin-right: auto;' >", false));
		$this->view->grid->addFlagColumn("Baixar",$criterio);
		$link = array("/kitsdeensaio/download?id=[1]"=>array(KitsEnsaioPeer::OM_CLASS=>KitsEnsaioPeer::ID));
		$this->view->grid->addLink("Baixar", $link, null, false);
	}

	public function downloadAction(){
		$this->_helper->layout()->disableLayout();
		$this->_helper->viewRenderer->setNoRender(true);
		$id = $this->getRequest()->getParam("id");
		$kit = KitsEnsaioQuery::create()->findPk($id);
		$nomeArquivo = split('/', $kit->getCaminho());
		$this->getResponse()
		->setHeader('Content-Disposition', 'attachment; filename='.end($nomeArquivo));
		//->setHeader('Content-type', 'audio/mpeg');
		readfile($kit->getCaminho());
	}

}
