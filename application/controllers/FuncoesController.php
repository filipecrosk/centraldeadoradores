<?php

class FuncoesController extends Internals_Controller_CrudCloseAction {
	
	public function init(){
		$this->permissao = 3;
		parent::init();
		$this->_helper->layout()->setLayout("1column");
	}
	
	public function indexAction() {
		$this->view->modal = array();		
		$crudModal = new Internals_CrudModal(new Application_Form_Funcoes(), "Nova Função", $this->view);
		$funcoes = FuncaoQuery::create()->orderByNome()->find()->toArray();
		$this->grid = new Internals_View_Helper_Grid(FuncaoPeer::OM_CLASS, $this->view, $funcoes);
		$this->grid->addColumn(FuncaoPeer::NOME, "Nome da Função");
		
		$criterio = array(array("<img alt='editar' onclick='javascript:" . $crudModal->getEditFunction() . "(this);' src='/default/images/icone-editar.png' style='display: block; width:20px; margin-left: auto;margin-right: auto;' >", false));
		$this->grid->addFlagColumn("Editar",$criterio);
		$criterio = array(array("<img alt='delete' onclick='javascript:" . $crudModal->getDeleteFunction() . "(this);return false;' src='/default/images/icone-delete.png' style=' width:20px; display: block; margin-left: auto;margin-right: auto;' >", false));
		$this->grid->addFlagColumn("Excluir",$criterio);
		
		$link = array("#?[1]"=>array(FuncaoPeer::OM_CLASS=>FuncaoPeer::ID));
		$this->grid->addLink("Editar", $link, null, false);
		$link = array("/funcoes/excluir?id=[1]"=>array(FuncaoPeer::OM_CLASS=>FuncaoPeer::ID));
		$this->grid->addLink("Excluir", $link, null, false);
		
		$this->view->modal[] = $crudModal;
		$this->view->crudModalAddAction = $crudModal->getAddAction();
	}
	
	public function salvarAction(){
		$this->_helper->layout()->disableLayout();
		$this->_helper->viewRenderer->setNoRender(true);
		$nomeFuncao = $this->getRequest()->getPost('nome', null);
		if($nomeFuncao != null){
			$funcao = new Funcao();
			$funcao->setNome($nomeFuncao);
			$funcao->save();
		} else {
			throw new Exception();
		}
	}
	
	public function excluirAction(){
		$this->_helper->layout()->disableLayout();
		$this->_helper->viewRenderer->setNoRender(true);
		$idFuncao = $this->getRequest()->getParam("id");
		FuncaoQuery::create()->findPk($idFuncao)->delete();
		Internals_Message::success("Função excluída com sucesso!");
		$this->_redirect("/funcoes");
	}
	
	public function editarAction(){
		$this->_helper->layout()->disableLayout();
		$this->_helper->viewRenderer->setNoRender(true);
		$idFuncao = $this->getRequest()->getPost('id', null);
		$nomeFuncao = $this->getRequest()->getPost('nome', null);
		$funcao = FuncaoQuery::create()->findPk($idFuncao);
		$funcao->setNome($nomeFuncao);
		
		$funcao->save();
	}
	
	public function getformeditAction(){
		$this->_helper->layout()->disableLayout();
		$this->_helper->viewRenderer->setNoRender(true);
		$idFuncao = $this->getRequest()->getPost('id', null);
		$funcao = FuncaoQuery::create()
			->findPk($idFuncao);
		echo "id:".$funcao->getId().",".
				"nome:".$funcao->getNome();
	}
}
