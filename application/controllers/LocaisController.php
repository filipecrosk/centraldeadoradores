<?php

class LocaisController extends Internals_Controller_CrudCloseAction {
	
	public function init(){
		$this->permissao = 3;
		parent::init();
		$baseUrl = Zend_Controller_Front::getInstance ()->getRequest ()->getBaseUrl ();
		$this->_helper->layout()->setLayout("1column");
	}
	
	public function indexAction() {
		$this->view->modal = array();
		$crudModal = new Internals_CrudModal(new Application_Form_Locais(), "Novo Local", $this->view);
		$locaisData = LocalQuery::create()
			->orderByNome()
			->select(array('Id', 'Nome', 'Endereco'))
			->find()
			->toArray();
		$this->grid = new Internals_View_Helper_Grid(LocalPeer::OM_CLASS, $this->view, $locaisData);
		$this->grid->addColumn(LocalPeer::NOME, "Nome");
		$this->grid->addColumn(LocalPeer::ENDERECO, "Endereço");
		
		$criterio = array(array("<img alt='editar' onclick='javascript:" . $crudModal->getEditFunction() . "(this);' src='/default/images/icone-editar.png' style='display: block; width:20px; margin-left: auto;margin-right: auto;' >", false));
		$this->grid->addFlagColumn("Editar",$criterio);
		$criterio = array(array("<img alt='delete' onclick='javascript:" . $crudModal->getDeleteFunction() . "(this);return false;' src='/default/images/icone-delete.png' style=' width:20px; display: block; margin-left: auto;margin-right: auto;' >", false));
		$this->grid->addFlagColumn("Excluir",$criterio);
		
		$link = array("#?[1]"=>array(LocalPeer::OM_CLASS=>LocalPeer::ID));
		$this->grid->addLink("Editar", $link, null, false);
		$link = array("/locais/excluir?id=[1]"=>array(LocalPeer::OM_CLASS=>LocalPeer::ID));
		$this->grid->addLink("Excluir", $link, null, false);
		
		$this->view->modal[] = $crudModal;
		$this->view->crudModalAddAction = $crudModal->getAddAction();
	}
	
	public function salvarAction(){
		$this->_helper->layout()->disableLayout();
		$this->_helper->viewRenderer->setNoRender(true);
		$nome = $this->getRequest()->getPost('nome', null);
		$endereco = $this->getRequest()->getPost('endereco', null);
		if($nome != null && $endereco != null){
			$local = new Local();
			$local->setNome($nome);
			$local->setEndereco($endereco);
			$local->save();
		} else {
			throw new Exception();
		}
	}
	
	public function excluirAction(){
		$this->_helper->layout()->disableLayout();
		$this->_helper->viewRenderer->setNoRender(true);
		$id = $this->getRequest()->getParam("id");
		LocalQuery::create()->findPk($id)->delete();
		Internals_Message::success("Local excluído com sucesso!");
		$this->_redirect("/locais");
	}
	
	public function editarAction(){
		$this->_helper->layout()->disableLayout();
		$this->_helper->viewRenderer->setNoRender(true);
		$id = $this->getRequest()->getPost('id', null);
		$nome = $this->getRequest()->getPost('nome', null);
		$endereco = $this->getRequest()->getPost('endereco', null);
		$local = LocalQuery::create()->findPk($id);
		if($nome != null && $endereco != null){
			$local->setNome($nome);
			$local->setEndereco($endereco);
			$local->save();
		} else {
			throw new Exception();
		}
	}
	
	public function getformeditAction(){
		$this->_helper->layout()->disableLayout();
		$this->_helper->viewRenderer->setNoRender(true);
		$id = $this->getRequest()->getPost('id', null);
		$local = LocalQuery::create()
			->findPk($id);
		echo "id:".$local->getId().",".
			 "nome:".$local->getNome().",".
			 "endereco:".$local->getEndereco();
	}
}
