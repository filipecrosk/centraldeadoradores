<?php

class UploadkitsController extends Internals_Controller_CrudCloseAction {
	
	public function init(){
		$this->permissao = 3;
		parent::init();
		$this->_helper->layout()->setLayout("1column");
	}
	
	public function indexAction() {
		$this->view->funcoes = FuncaoQuery::create()->orderByNome()->find();
	}

	public function novoAction(){
		$this->_helper->layout()->disableLayout();
		$this->_helper->viewRenderer->setNoRender(true);
		$idFuncao = $this->getRequest()->getPost('funcao', null);
		$nomeArquivo = $this->getRequest()->getPost('nomeArquivo', null);
		$caminho = "";
		
		$funcao = FuncaoQuery::create()->findPk($idFuncao);
		if($funcao == null){
			Internals_Message::error("Selecione uma função para o arquivo!");
			$this->_redirect("/uploadkits");
		}
		$imageAdapter = new Zend_File_Transfer_Adapter_Http();
		$imageAdapter->setDestination('../upload');
		if(is_uploaded_file($_FILES['arquivo']['tmp_name'])){
			if (!$imageAdapter->receive()){
				$messages = $imageAdapter->getMessages($_FILES['arquivo']);
				Internals_Message::error("Um erro ocorreu ao enviar o arquivo!");
			}else{
				$caminho = $imageAdapter->getFileName('arquivo');
				Internals_Message::success("Arquivo enviado com sucesso!");
				$kit = new KitsEnsaio();
				$kit->setNome($nomeArquivo);
				$kit->setCaminho($caminho);
				$kit->setIdFuncao($funcao->getId());
				$kit->save();
			}
		}else{
			Internals_Message::error("Um erro ocorreu ao enviar o arquivo!");
		}
		$this->_redirect("/uploadkits");
	}
	
	public function checkuploadAction(){
		
	}
	
}
