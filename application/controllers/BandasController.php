<?php

class BandasController extends Internals_Controller_CrudCloseAction {
	
	public function init(){
		$this->permissao = 3;
		parent::init();
		$baseUrl = Zend_Controller_Front::getInstance ()->getRequest ()->getBaseUrl ();
		$this->_helper->layout()->setLayout("1column");
		$this->view->headLink ()->prependStylesheet ( $baseUrl . "/default/jqueryui/css/ui-darkness/jquery-ui-1.8.23.custom.css" );
		$this->view->headScript ()->prependFile ( $baseUrl . '/default/jqueryui/js/jquery.ui.autocomplete.min.js', 'text/javascript' );
		$this->view->headScript ()->prependFile ( $baseUrl . '/default/jqueryui/js/jquery.ui.position.min.js', 'text/javascript' );
		$this->view->headScript ()->prependFile ( $baseUrl . '/default/jqueryui/js/jquery.ui.widget.min.js', 'text/javascript' );
		$this->view->headScript ()->prependFile ( $baseUrl . '/default/jqueryui/js/jquery.ui.core.min.js', 'text/javascript' );
	}
	
	public function indexAction() {
		$this->view->modal = array();
		$bandas = BandaQuery::create()
			->joinUsuarioRelatedByIdLider()
			->orderByNome()
			->withColumn("usuario.Nome")
			->select(array('Id', 'Nome'))
			->find();
		$crudModal = new Internals_CrudModal(new Application_Form_Bandas(), "Nova Banda", $this->view);
		$this->grid = new Internals_View_Helper_Grid(BandaPeer::OM_CLASS, $this->view, $bandas->toArray());
		$this->grid->addColumn(BandaPeer::NOME, "Nome da Banda");
		$this->grid->addColumn('usuarioNome', "Nome do Líder", UsuarioPeer::OM_CLASS, false);
		
		$criterio = array(array("<img alt='editar' onclick='javascript:" . $crudModal->getEditFunction() . "(this);' src='/default/images/icone-editar.png' style='display: block; width:20px; margin-left: auto;margin-right: auto;' >", false));
		$this->grid->addFlagColumn("Editar",$criterio);
		$criterio = array(array("<img alt='delete' onclick='javascript:" . $crudModal->getDeleteFunction() . "(this);return false;' src='/default/images/icone-delete.png' style=' width:20px; display: block; margin-left: auto;margin-right: auto;' >", false));
		$this->grid->addFlagColumn("Excluir",$criterio);
		
		$link = array("#?[1]"=>array(BandaPeer::OM_CLASS=>BandaPeer::ID));
		$this->grid->addLink("Editar", $link, null, false);
		$link = array("/bandas/excluir?id=[1]"=>array(BandaPeer::OM_CLASS=>BandaPeer::ID));
		$this->grid->addLink("Excluir", $link, null, false);
		
		$this->view->modal[] = $crudModal;
		$this->view->crudModalAddAction = $crudModal->getAddAction();
		
		$arrayUsuarios = "[";
		foreach(UsuarioQuery::create()->filterByDesabilitado(0)->find() as $usuario){
			if($arrayUsuarios != '['){
				$arrayUsuarios .= ',';
			}
			$arrayUsuarios .= "\"".$usuario->getNome()."\"";
		}
		$arrayUsuarios .= "]";
		$this->view->inlineScript ()->captureStart ();
			echo "
				$(document).ready(function(){
					var fonte = ".$arrayUsuarios.";
					$( \"#lider\" ).autocomplete({
						source: fonte
					});
				});
			";
		$this->view->inlineScript ()->captureEnd ();
	}
	
	public function salvarAction(){
		$this->_helper->layout()->disableLayout();
		$this->_helper->viewRenderer->setNoRender(true);
		$nomeBanda = $this->getRequest()->getPost('nome', null);
		$nomeLider = $this->getRequest()->getPost('lider', null);
		$lider = UsuarioQuery::create()->filterByNome($nomeLider)->findOne();
		$banda = new Banda();
		if($lider != null){
			$banda->setIdLider($lider->getId());
		}
		if($nomeBanda != null){
			$banda->setNome($nomeBanda);
			$banda->save();
		} else {
			throw new Exception();
		}
	}
	
	public function excluirAction(){
		$this->_helper->layout()->disableLayout();
		$this->_helper->viewRenderer->setNoRender(true);
		$idBanda = $this->getRequest()->getParam("id");
		BandaQuery::create()->findPk($idBanda)->delete();
		Internals_Message::success("Banda excluída com sucesso!");
		$this->_redirect("/bandas");
	}
	
	public function editarAction(){
		$this->_helper->layout()->disableLayout();
		$this->_helper->viewRenderer->setNoRender(true);
		$idBanda = $this->getRequest()->getPost('id', null);
		$nomeBanda = $this->getRequest()->getPost('nome', null);
		$nomeLider = $this->getRequest()->getPost('lider', null);
		$banda = BandaQuery::create()->findPk($idBanda);
		$banda->setNome($nomeBanda);
		if($nomeLider != null){
			$lider = UsuarioQuery::create()->filterByNome($nomeLider)->findOne();
			if($lider != null){
				$banda->setIdLider($lider->getId());
			}
		} else {
			$banda->setIdLider(null);
		}
		$banda->save();
	}
	
	public function getformeditAction(){
		$this->_helper->layout()->disableLayout();
		$this->_helper->viewRenderer->setNoRender(true);
		$idBanda = $this->getRequest()->getPost('id', null);
		$banda = BandaQuery::create()
			->findPk($idBanda);
		if($banda->getUsuarioRelatedByIdLider() != null){
			echo "id:".$banda->getId().",".
				 "nome:".$banda->getNome().",".
	 	 		 "lider:".$banda->getUsuarioRelatedByIdLider()->getNome();
		} else {
			echo "id:".$banda->getId().",".
				 "nome:".$banda->getNome().",".
				 "lider:";
		}
	}
}
