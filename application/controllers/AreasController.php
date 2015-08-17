<?php

class AreasController extends Internals_Controller_CrudCloseAction {
	
	public function init(){
		$this->permissao = 3;
		parent::init();
		$this->_helper->layout()->setLayout("1column");
	}
	
	public function indexAction() {
		$this->view->modal = array();
		$crudModal = new Internals_CrudModal(new Application_Form_Areas(), "Nova Área", $this->view);
		$ministeriosData = MinisterioQuery::create()
			->orderByNome()
			->select(array('Id', 'Nome'))
			->find()
			->toArray();
		$this->grid = new Internals_View_Helper_Grid(MinisterioPeer::OM_CLASS, $this->view, $ministeriosData);
		$this->grid->addColumn(MinisterioPeer::NOME, "Nome");
		
		$criterio = array(array("<img alt='editar' onclick='javascript:" . $crudModal->getEditFunction() . "(this);' src='/default/images/icone-editar.png' style='display: block; width:20px; margin-left: auto;margin-right: auto;' >", false));
		$this->grid->addFlagColumn("Editar",$criterio);
		$criterio = array(array("<img alt='delete' onclick='javascript:" . $crudModal->getDeleteFunction() . "(this);return false;' src='/default/images/icone-delete.png' style=' width:20px; display: block; margin-left: auto;margin-right: auto;' >", false));
		$this->grid->addFlagColumn("Excluir",$criterio);
		
		$link = array("#?[1]"=>array(MinisterioPeer::OM_CLASS=>MinisterioPeer::ID));
		$this->grid->addLink("Editar", $link, null, false);
		$link = array("/areas/excluir?id=[1]"=>array(MinisterioPeer::OM_CLASS=>MinisterioPeer::ID));
		$this->grid->addLink("Excluir", $link, null, false);
		
		$this->view->modal[] = $crudModal;
		$this->view->crudModalAddAction = $crudModal->getAddAction();
	}
	
	public function salvarAction(){
		$this->_helper->layout()->disableLayout();
		$this->_helper->viewRenderer->setNoRender(true);
		$nomeMinisterio = $this->getRequest()->getPost('nome', null);
		$ministerio = new Ministerio();
		$ministerio->setNome($nomeMinisterio);
		if($nomeMinisterio != null){
			$ministerio->save();
		} else {
			throw new Exception();
		}
	}
	
	public function excluirAction(){
		$this->_helper->layout()->disableLayout();
		$this->_helper->viewRenderer->setNoRender(true);
		$idMinisterio = $this->getRequest()->getParam("id");
		MinisterioQuery::create()->findPk($idMinisterio)->delete();
		Internals_Message::success("Área excluída com sucesso!");
		$this->_redirect("/areas");
	}
	
	public function editarAction(){
		$this->_helper->layout()->disableLayout();
		$this->_helper->viewRenderer->setNoRender(true);
		$idMinisterio = $this->getRequest()->getPost('id', null);
		$nomeMinisterio = $this->getRequest()->getPost('nome', null);
		$ministerio = MinisterioQuery::create()->findPk($idMinisterio);
		if($nomeMinisterio != null){
			$ministerio->setNome($nomeMinisterio);
			$ministerio->save();
		} else {
			throw new Exception();
		}
	}
	
	public function getformeditAction(){
		$this->_helper->layout()->disableLayout();
		$this->_helper->viewRenderer->setNoRender(true);
		$idMinsisterio = $this->getRequest()->getPost('id', null);
		$ministerio = MinisterioQuery::create()
			->findPk($idMinsisterio);
		echo "id:".$ministerio->getId().",".
			 "nome:".$ministerio->getNome();
	}
}
