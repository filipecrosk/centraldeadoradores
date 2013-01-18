<?php

class Internals_CrudModal extends Internals_Modal{
	
	public function __construct($form, $title, $view){
		parent::__construct(null, $title, $view);
		$this->setForm($form);
		$this->putSaveButton();
		$this->putCancelButton();
		$this->generateCrudAction();
	}
	
	public function getAddAction(){
		$html = '<div class="defaultAction" style="text-align:right;margin:10px;">' . PHP_EOL;
		$html .= '	<a class="btn btn-primary" onclick="' . $this->getOpenFunction() . '();">' . PHP_EOL;
		$html .= '		<i class="icon-white icon-plus"></i>' . PHP_EOL;
		$html .= '		Adicionar' . PHP_EOL;
		$html .= '	</a>' . PHP_EOL;
		$html .= '</div>' . PHP_EOL;
		
		return $html;
	}
	
	public function generateCrudAction(){
		$this->view->inlineScript ()->captureStart ();
		echo "
		function ".$this->getOpenFunction()."(){
			if($('#".$this->form->getName()."Action').length == 0){
				$('#".$this->form->getName()."').append('<input type=\"hidden\" id=\"".$this->form->getName()."Action\" name=\"".$this->form->getName()."Action\" value=\"salvar\" />');
			} else {
				$('#".$this->form->getName()."Action').val('salvar');
			}
			$('#".$this->form->getName()."').each(function(){
				this.reset();
			});
			$('.".$this->getModalName()."Save').button('reset');
			$('#".$this->getModalName()."').modal('show');
		}
		function ".$this->getSaveFunction()."(){
		if($('.".$this->getModalName()."Save').attr('disabled') != 'disabled'){
			$('.".$this->getModalName()."Save').button('loading');
			alert('".Zend_Controller_Front::getInstance()->getRequest()->getControllerName()."/'+$('#".$this->form->getName()."Action').val());
			$.post('".Zend_Controller_Front::getInstance()->getRequest()->getControllerName()."/'+$('#".$this->form->getName()."Action').val(), $('#".$this->form->getName()."').serialize())
				.success(function(data) {
					window.location.replace(\"".$this->getReloadSucessUrl()."\");
				})
				.error(function(data) {
					$.ajax({
						url: '/ajax/geterroralert',
						type: 'post',
						dataType: 'html',
						data: {\"texto\":\"Erro ao salvar.\"},
						success: function(data) {
							$(\"#alerts\").html(data);
							$(\".salvar\").button('reset');
							$('#".$this->getModalName()."').modal('hide');
							$('#".$this->form->getName()."').each(function(){
								this.reset();
							});
						}
					});
				});
			}
		}
		function " . $this->getEditFunction() . "(component){
			$('#".$this->form->getName()."').hide();
			$('#".$this->getModalName()."Loading').show();
			$('.".$this->getModalName()."Save').button('reset');
			$('#".$this->getModalName()."').modal('show');
			if($('#".$this->form->getName()."Action').length == 0){
				$('#".$this->form->getName()."').append('<input type=\"hidden\" id=\"".$this->form->getName()."Action\" name=\"".$this->form->getName()."Action\" value=\"editar\" />');
			} else {
				$('#".$this->form->getName()."Action').val('editar');
			}
			var id = $(component).parent('a').attr('href').split('?');
			$.ajax({
				url: '/".Zend_Controller_Front::getInstance()->getRequest()->getControllerName()."/getformedit',
				type: 'post',
				data: {'id':id[1]},
				success: function(data) {
					$('#".$this->form->getName()."').show();
					$('#".$this->getModalName()."Loading').hide();
					var elementos = data.split(',');
					jQuery.each(elementos, function(i, val) {
						var valores = val.split(':');
						var indice = document.getElementById($.trim(valores[0]));
						$(indice).val(valores[1]);
					});
				},
				error: function(data){
					var out = '';
					for (var i in data) {
						out += i + \": \" + data[i] + \"\\n\";
					}
				}
			});
		}
		function " . $this->getDeleteFunction() . "(component){
			if($('#ConfirmarExclusao').length == 0){
				var modal = \"<div class='modal hide' id='ConfirmarExclusao'><div class='modal-header'><button type='button' class='close' data-dismiss='modal'>×</button><h3>Exclusão</h3></div><div class='modal-body'><div class='hide' id='ConfirmarLoading' style='text-align:center;'><img src='/default/images/icone-formLoading.gif'><p style='margin-top:10px;'><b>Carregando...</b></p></div><p>Deseja realmente confirmar esta exclusão?</p></div><div class='modal-footer'><a href='#' id='confimarExclusao' data-loading-text='Excluindo...' class='btn btn-primary ConfirmarYes'>Sim</a><a href='#' class='btn ConfirmarNo' data-dismiss='modal'>Não</a></div></div>\";
				$('#modals').append(modal);
			}
			$('#ConfirmarExclusao').modal('show');
			$('#confimarExclusao').button('reset');
			$('#confimarExclusao').click(function(){
				$('#confimarExclusao').button('loading');
				window.location.replace($(component).parent('a').attr('href'));
			});
		}
	";
		$this->view->inlineScript ()->captureEnd ();
	}
	
}