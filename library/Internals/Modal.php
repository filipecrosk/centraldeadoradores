<?php

class Internals_Modal {
	
	private $modalName;
	private $type;
	private $header;
	private $body;
	private $width;
	
	protected $form;
	
	private $cancelButton = false;
	private $okButton = false;
	private $saveButton = false;
	private $yesButton = false;
	private $noButton = false;
	
	function __construct($body = null, $header = null, $view = null){
		$this->body = $body;
		$this->header = $header;
		$this->view = $view;
		$this->generateModalName();
	}
	
	public function renderModal(){
		$modal = '<div style="width:'.$this->width.'px;" class="modal hide" id="'.$this->getModalName().'">'.PHP_EOL;
		$modal .= '<div class="modal-header">'.PHP_EOL;
		$modal .= '<button type="button" class="close" data-dismiss="modal">×</button>'.PHP_EOL;
		$modal .= '<h3>'.$this->getHeader().'</h3>'.PHP_EOL;
		$modal .= '</div>'.PHP_EOL;
		$modal .= '<div class="modal-body">'.PHP_EOL;
		$modal .= '<div class="hide" id="' . $this->getModalName() . 'Loading" style="text-align:center;">'.PHP_EOL;
		$modal .= '<img src="/default/images/icone-formLoading.gif" />'.PHP_EOL;
		$modal .= '<p style="margin-top:10px;"><b>Carregando...</b></p>'.PHP_EOL;
		$modal .= '</div>'.PHP_EOL;
		if($this->getForm()){
			$modal .= $this->getForm().PHP_EOL;
		} else {
			$modal .= '<p>'.$this->getBody().'</p>'.PHP_EOL;
		}
		$modal .= '</div>'.PHP_EOL;
		$modal .= '<div class="modal-footer">'.PHP_EOL;
		if($this->okButton){
			$modal .= '<a href="#" class="btn btn-primary '.$this->getModalName().'Ok" data-dismiss="modal">Ok</a>'.PHP_EOL;
		}
		if($this->yesButton){
			$modal .= '<a href="#" class="btn btn-primary '.$this->getModalName().'Yes">Sim</a>'.PHP_EOL;
		}
		if($this->saveButton){
			$modal .= '<a href="#" autocomplete="off" data-loading-text="Salvando..." class="btn btn-primary '.$this->getModalName().'Save" onclick="'.($this->view != null? $this->getSaveFunction()."();" : "").'">Salvar</a>'.PHP_EOL;
		}
		if($this->cancelButton){
			$modal .= '<a href="#" class="btn  '.$this->getModalName().'Cancel" data-dismiss="modal">Cancelar</a>'.PHP_EOL;
		}
		if($this->noButton){
			$modal .= '<a href="#" class="btn  '.$this->getModalName().'No" data-dismiss="modal">Não</a>'.PHP_EOL;
		}		    
		$modal .= '</div>'.PHP_EOL;
		$modal .= '</div>'.PHP_EOL;
		
		return $modal;
	}
	
	public function getOpenFunction(){
		return "open".$this->getModalName();
	}
	
	public function generateOpenAction(){
		$this->view->inlineScript ()->captureStart ();
		echo "
		function ".$this->getOpenFunction()."(){
			$('.".$this->getModalName()."Save').click(function(){
				$(this).parent().parent().children('.modal-body').children('form').submit();
				$(this).button('loading');
			});
			$('.".$this->getModalName()."Save').button('reset');
			$('#".$this->getModalName()."').modal('show');
		}";
		$this->view->inlineScript ()->captureEnd ();
	}
	
	public function getSaveFunction(){
		return "save".$this->getModalName();
	}
	
	public function getEditFunction(){
		return "edit".$this->getModalName();
	}
	
	public function getDeleteFunction(){
		return "delete".$this->getModalName();
	}
	
	public function getReloadSucessUrl(){
		return "/".Zend_Controller_Front::getInstance()->getRequest()->getControllerName()."/reloadsucess";
	}
	
	public function getModalName(){
		return $this->modalName;
	}
	
	public function setModalName($modalName){
		$this->modalName = $modalName;
	}
	
	public function getHeader(){
		return $this->header;
	}
	
	public function setHeader($header){
		$this->header = $header;
	}
	
	public function getBody(){
		return $this->body;
	}
	
	public function setBody($body){
		$this->body = $body;
	}
	
	public function getForm(){
		return $this->form;
	}
	
	public function setForm($form){
		$this->form = $form;
	}
	
	public function getWidth(){
		return $this->width;
	}
	
	public function setWidth($width){
		$this->width = $width;
	}
	
	public function putYesButton(){
		$this->yesButton = true;
	}
	
	public function putSaveButton(){
		$this->saveButton = true;
	}
	
	public function putNoButton(){
		$this->noButton = true;
	}
	
	public function putOkButton(){
		$this->okButton = true;
	}
	
	public function putCancelButton(){
		$this->cancelButton = true;
	}
	
	private function generateModalName() {
		// /TODO Implementar o método que crie nomes pseudo-aleatórios para os grids
		$this->modalName = "modal".Internals_Util::randString(10);
	}
}

?>