<?php

class EscalaController extends Internals_Controller_CloseAction {
	
	public function init(){
		parent::init();
		Internals_SubMenu::AddItem("Minhas escalas", null);
		if($this->nivelPermissao == 3){
			Internals_SubMenu::AddItem("Resumo", "escala/index");
		}
		Internals_SubMenu::AddItem("Minhas escalas confirmadas", "escala/confirmadas");
		Internals_SubMenu::AddItem("Minhas escalas a confirmar", "escala/aconfirmar");
	}
	
	public function indexAction() {
		$userCredentials = new Zend_Session_Namespace('UserCredentials');
		$escalasPendentes = EscalaPessoaQuery::create()->filterByIdUsuario($userCredentials->id)
			->filterByIdStatusEscala(1)
			->filterByData(array("min"=>date("Y-m-d H:i:s")))
			->count();
		if($this->nivelPermissao != 3){
			if($escalasPendentes > 0){ 
				$this->_redirect("escala/aconfirmar");
			} else {
				$this->_redirect("escala/confirmadas");
			}
		}
		$dados = EscalaPessoaQuery::create()
			->addAsColumn("pendente", '(select count(*) from escala_pessoa as pp1 where pp1.Id_Local = escala_pessoa.Id_Local and pp1.Data = escala_pessoa.Data and pp1.Id_Status_Escala = 1)')
			->addAsColumn("confirmada", '(select count(*) from escala_pessoa as pp2 where pp2.Id_Local = escala_pessoa.Id_Local and pp2.Data = escala_pessoa.Data and pp2.Id_Status_Escala = 2)')
			->addAsColumn("recusada", '(select count(*) from escala_pessoa as pp3 where pp3.Id_Local = escala_pessoa.Id_Local and pp3.Data = escala_pessoa.Data and pp3.Id_Status_Escala = 3)')
			->joinLocal()
			->groupByIdLocal()
			->groupByData()
			->filterByData(array('min'=>date("Y-m-d H:i:s")))
			->select(Array('Id','Local.Nome', 'Data', 'Local.Id'))
			->find()
			->toArray();
		
		$this->view->grid = new Internals_View_Helper_Grid(EscalaPessoaPeer::OM_CLASS, $this->view, $dados);
		$this->view->grid->addColumn(LocalPeer::NOME, "Local", LocalPeer::OM_CLASS);
		$this->view->grid->addColumn(EscalaPessoaPeer::DATA, "Data e Hora");
		$this->view->grid->setShowWeekDay();
		$this->view->grid->setShowDayPart();
		$link = array("/escala/detalhes?data=[1]&idLocal=[2]"=>array(EscalaPessoaPeer::OM_CLASS=>EscalaPessoaPeer::DATA,
  																	 LocalPeer::OM_CLASS=>LocalPeer::ID));
	 	$this->view->grid->addLink(LocalPeer::NOME, $link, LocalPeer::OM_CLASS);
		
		$criterio = array(
							array("<img src='/default/images/icone-negativo.png' alt='Escala recusada' style='display: block;margin-left: auto;margin-right: auto;' >", array("recusada", "notequal", "0")),
							array("<img src='/default/images/icone-positivo.png' alt='Escalado' style='display: block;margin-left: auto;margin-right: auto;' >", array("pendente", "equal", "0")),
							array("<img src='/default/images/icone-interrogacao.png' alt='Escalado' style='display: block;margin-left: auto;margin-right: auto;' >", array("pendente", "notequal", "0"))
						 );
		
		$modalConfirmaNovoLocal = new Internals_Modal ( "O local digitado não está cadastrado. Deseja cadastrar este local?", "Novo local" );
		$modalConfirmaNovoLocal->putYesButton ();
		$modalConfirmaNovoLocal->putNoButton ();
		$modalConfirmaNovoLocal->setModalName ( "ConfirmaNovoLocal" );
		$this->view->modal = array ();
		$this->view->modal [] = $modalConfirmaNovoLocal;
		
		$this->view->grid->addFlagColumn("Status",$criterio);
		$criterio = array(array("<img alt='delete' onclick='javascript:confirmDelete(this); return false;' src='/default/images/icone-delete.png' style=' width:20px; display: block; margin-left: auto;margin-right: auto;' >", false));
		$this->view->grid->addFlagColumn("Excluir",$criterio);
		$link = array("/escala/excluir?data=[1]&idLocal=[2]"=>array(EscalaPessoaPeer::OM_CLASS=>EscalaPessoaPeer::DATA,
  																	 LocalPeer::OM_CLASS=>LocalPeer::ID));
		$this->view->grid->addLink("Excluir", $link, null, false);
		
		$this->view->inlineScript ()->captureStart ();
		echo 
		"
		var link = '';
		function confirmDelete(comp){
			link = $(comp).parent().attr('href');
			$('#" . $modalConfirmaNovoLocal->getModalName () . "').modal('show');
		}
		$(document).ready(function() {
			$('." . $modalConfirmaNovoLocal->getModalName () . "Yes').click(function(){
				$('#" . $modalConfirmaNovoLocal->getModalName () . "').modal('hide');
				window.location.replace(link);
			});
		});
		";
		$this->view->inlineScript ()->captureEnd ();
	}
	
	public function confirmadasAction(){
		$dados = EscalaPessoaQuery::create()
			->joinLocal()
			->filterByIdUsuario($this->userId)
			->filterByData(array('min'=>date("Y-m-d H:i:s")))
			->filterByIdStatusEscala(2)
			->select(array('Id','Local.Id', 'Local.Nome', 'Data', 'IdStatusEscala'))
			->find()
			->toArray();
		$this->view->grid = new Internals_View_Helper_Grid(EscalaPessoaPeer::OM_CLASS, $this->view, $dados);
		$this->view->grid->addColumn(LocalPeer::NOME, "Local", LocalPeer::OM_CLASS);
		$this->view->grid->addColumn(EscalaPessoaPeer::DATA, "Data e hora");
		$this->view->grid->setShowWeekDay();
		$this->view->grid->setShowDayPart();
		
		$criterio = array(array("<img alt='recusar' src='/default/images/icone-negativo.png' alt='Escala recusada' style='display: block;margin-left: auto;margin-right: auto;' >", false));
		$this->view->grid->addFlagColumn("Cancelar",$criterio);
		$link = array("/escala/recusar?idEscala=[1]"=>array(EscalaPessoaPeer::OM_CLASS=>EscalaPessoaPeer::ID));
		$this->view->grid->addLink("Cancelar", $link, null, false);
		
		$modalMotivo = new Internals_Modal("Qual o motivo do cancelamento?<br><br><textarea class=\"input-xlarge\" id=\"textAreaMotivo\" rows=\"3\" style=\" width:95%;\"></textarea>", "Motivo do cancelamento");
		$modalMotivo->putSaveButton();
		$modalMotivo->putCancelButton();
		$modalMotivo->setModalName("Motivo");
		$modalRecusar = new Internals_Modal("Deseja realmente cancelar esta escala?", "Cancelar escala");
		$modalRecusar->putYesButton();
		$modalRecusar->putNoButton();
		$modalRecusar->setModalName("Cancelar");
		
		$this->view->modal = array();
		$this->view->modal[] = $modalMotivo;
		$this->view->modal[] = $modalRecusar;
		
		$this->view->inlineScript ()->captureStart ();
		echo "
		$(document).ready(function() {
			$('.".$this->view->grid->getGridName()."Link').click(function(){
				var link = $(this);
				$('#textAreaMotivo').val('');
				$('#".$modalMotivo->getModalName()."').modal('show');
				$('.".$modalMotivo->getModalName()."Save').addClass('disabled');
				$('#textAreaMotivo').change(function(){
					if($('#textAreaMotivo').val() != ''){
						$('.".$modalMotivo->getModalName()."Save').removeClass('disabled');
					} else {
						$('.".$modalMotivo->getModalName()."Save').addClass('disabled');
					}
				});
				$('.".$modalMotivo->getModalName()."Save').click(function(){
					if($('#textAreaMotivo').val() != ''){
						$('#".$modalMotivo->getModalName()."').modal('hide');
						$(this).button('reset');
						$('#".$modalRecusar->getModalName()."').modal('show');
						$('.".$modalRecusar->getModalName()."Yes').click(function(){
							$(this).button('loading');
							$(window.location).attr('href', link.attr('href') + '&motivo=' + $('#textAreaMotivo').val() );
						});
					}
				});
			return false;
			});
		} );";
		$this->view->inlineScript ()->captureEnd ();
	}
	
	public function aconfirmarAction(){
		$dados = EscalaPessoaQuery::create()
			->joinLocal()
			->filterByIdUsuario($this->userId)
			->filterByData(array('min'=>date("Y-m-d H:i:s")))
			->filterByIdStatusEscala(1)
			->find();
		$arrDados = array();
		foreach ($dados as $dado){
			$funcoes = "";
			foreach ($dado->getEscalaPessoaFuncaos() as $escalaFuncao) {
				if($funcoes != ""){
					$funcoes .= ", ";
				}
				$funcoes .= $escalaFuncao->getFuncao()->getNome();
			}
			$reg = array(
					'Local.Id'=>$dado->getLocal()->getId(),
					'Local.Nome'=>$dado->getLocal()->getNome(),
					'Data'=>$dado->getData("Y-m-d H:i:s"),
					'Id'=>$dado->getId(),
					'Funcoes'=>$funcoes
			);
			$arrDados[] = $reg;
		}
		
		$this->view->grid = new Internals_View_Helper_Grid(EscalaPessoaPeer::OM_CLASS, $this->view, $arrDados);
		
		$this->view->grid->addColumn(LocalPeer::NOME, "Local", LocalPeer::OM_CLASS);
		$this->view->grid->addColumn(EscalaPessoaPeer::DATA, "Data e hora");
		$this->view->grid->addColumn("Funcoes", "Funções", null, false);
		$this->view->grid->setShowWeekDay();
		$this->view->grid->setShowDayPart();
		
		$criterio = array(array("<img alt='confirmar' src='/default/images/icone-positivo.png' style='display: block;margin-left: auto;margin-right: auto;' >", false));
		$this->view->grid->addFlagColumn("Confirmar",$criterio);
		$criterio = array(array("<img alt='recusar' src='/default/images/icone-negativo.png' alt='Escala recusada' style='display: block;margin-left: auto;margin-right: auto;' >", false));
		$this->view->grid->addFlagColumn("Recusar",$criterio);
		
		$link = array("/escala/confirmar?idEscala=[1]"=>array(EscalaPessoaPeer::OM_CLASS=>EscalaPessoaPeer::ID));
		$this->view->grid->addLink("Confirmar", $link, null, false);
		$link = array("/escala/recusar?idEscala=[1]"=>array(EscalaPessoaPeer::OM_CLASS=>EscalaPessoaPeer::ID));
		$this->view->grid->addLink("Recusar", $link, null, false);
		
		$this->view->modal = array();
		$modalConfirmar = new Internals_Modal("Deseja realmente confirmar esta escala?", "Confirmar escala");
		$modalConfirmar->putYesButton();
		$modalConfirmar->putNoButton();
		$modalConfirmar->setModalName("Confirmar");
		$modalRecusar = new Internals_Modal("Deseja realmente recusar esta escala?", "Recusar escala");
		$modalRecusar->putYesButton();
		$modalRecusar->putNoButton();
		$modalRecusar->setModalName("Cancelar");
		$modalMotivo = new Internals_Modal("Qual o motivo da recusa?<br><br><textarea class=\"input-xlarge\" id=\"textAreaMotivo\" rows=\"3\" style=\" width:95%;\"></textarea>", "Motivo da recusa");
		$modalMotivo->putSaveButton();
		$modalMotivo->putCancelButton();
		$modalMotivo->setModalName("Motivo");
		$this->view->modal[] = $modalConfirmar;
		$this->view->modal[] = $modalRecusar;
		$this->view->modal[] = $modalMotivo;
		
		$this->view->inlineScript ()->captureStart ();
		echo "
			$(document).ready(function() {
				$('.".$this->view->grid->getGridName()."Link').click(function(){
					var link = $(this);
					if(link.children('img').attr('alt') == 'confirmar'){
						$(this).button('reset');
						$('#".$modalConfirmar->getModalName()."').modal('show');
						$('.".$modalConfirmar->getModalName()."Yes').click(function(){
							$(this).button('loading');
							$(window.location).attr('href', link.attr('href'));
						});
					} else {
						$('#textAreaMotivo').val('');
						$('#".$modalMotivo->getModalName()."').modal('show');
						$('.".$modalMotivo->getModalName()."Save').addClass('disabled');
						$('#textAreaMotivo').change(function(){
							if($('#textAreaMotivo').val() != ''){
								$('.".$modalMotivo->getModalName()."Save').removeClass('disabled');
							} else {
								$('.".$modalMotivo->getModalName()."Save').addClass('disabled');
							}
						});
						$('.".$modalMotivo->getModalName()."Save').click(function(){
							if($('#textAreaMotivo').val() != ''){
								$('#".$modalMotivo->getModalName()."').modal('hide');
								$(this).button('reset');
								$('#".$modalRecusar->getModalName()."').modal('show');
								$('.".$modalRecusar->getModalName()."Yes').click(function(){
									$(this).button('loading');
									$(window.location).attr('href', link.attr('href') + '&motivo=' + $('#textAreaMotivo').val() );
								});
							}
						});
					}
					return false;
				});
			} );";
		$this->view->inlineScript ()->captureEnd ();
	}
	
	public function detalhesAction(){
		$idLocal = $this->getRequest()->getParam("idLocal");
		$data = $this->getRequest()->getParam("data");
		
		$this->view->local = LocalQuery::create()->filterById($idLocal)->select(array('Nome'))->findOne();
		$data = new DateTime($data);
		$this->view->data = $data->format('d/m/Y \à\s H:i');
		
		$dados = EscalaPessoaFuncaoQuery::create()
			->joinEscalaPessoa()
			->joinFuncao()
			->useEscalaPessoaQuery()
				->filterByData($data)
				->filterByIdLocal($idLocal)
			->endUse()
			->withColumn("Funcao.Nome")
			->withColumn("EscalaPessoa.IdStatusEscala")
			->withColumn("EscalaPessoa.MotivoRecusa")
			->withColumn("EscalaPessoa.IdUsuario")
			->select(array("Funcao.Nome", "EscalaPessoa.IdStatusEscala"))
			->find()
			->toArray();
		
		for ($i = 0; $i < count($dados); $i++) {
			$usuario = UsuarioQuery::create()
				->findPk($dados[$i]["EscalaPessoaIdUsuario"]);
			$dados[$i]["UsuarioId"] = $usuario->getId();
			$dados[$i]["UsuarioNome"] = $usuario->getNome();
		}
		
		$this->view->grid = new Internals_View_Helper_Grid(EscalaPessoaFuncaoPeer::OM_CLASS, $this->view, $dados);
		
		$this->view->grid->addColumn("UsuarioNome", "Nome", UsuarioPeer::OM_CLASS, false);
		$this->view->grid->addColumn(FuncaoPeer::NOME, "Função", FuncaoPeer::OM_CLASS);
		$this->view->grid->addColumn("EscalaPessoaMotivoRecusa", "Motivo Recusa", EscalaPessoaPeer::OM_CLASS, false);
		
		$link = array("/usuarios/detalhe?idUsuario=[1]"=>array(false => "UsuarioId"));
		$this->view->grid->addLink("UsuarioNome", $link, null,false);
		
		$criterio = array(array("<img src='/default/images/icone-interrogacao.png' alt='Confirmação pendente' style='display: block;margin-left: auto;margin-right: auto;' >", array("EscalaPessoa.IdStatusEscala", "equal", "1"))
						 ,array("<img src='/default/images/icone-positivo.png' alt='Escalado' style='display: block;margin-left: auto;margin-right: auto;' >", array("EscalaPessoa.IdStatusEscala", "equal", "2"))
						 ,array("<img src='/default/images/icone-negativo.png' alt='Não escalado' style='display: block;margin-left: auto;margin-right: auto;' >", array("EscalaPessoa.IdStatusEscala", "equal", "3")));
		$this->view->grid->addFlagColumn("Escala confirmada",$criterio);
	}
	
	public function confirmarAction(){
		$this->_helper->layout()->setLayout("blank");
		$this->_helper->viewRenderer->setNoRender();
		$idEscala = $this->getRequest()->getParam('idEscala', null);
		$escala = EscalaPessoaQuery::create()->findPk($idEscala);
		$escala->setIdStatusEscala(2);
		$escala->save();
		Internals_Message::success("Escala confirmada com sucesso!");
		$this->_redirect("escala/aconfirmar");
	}
	
	public function recusarAction(){
		$this->_helper->layout()->setLayout("blank");
		$this->_helper->viewRenderer->setNoRender();
		$idEscala = $this->getRequest()->getParam('idEscala', null);
		$motivo = $this->getRequest()->getParam('motivo', null);
		$escala = EscalaPessoaQuery::create()->findPk($idEscala);
		$usuario = $escala->getUsuarioRelatedByIdUsuario();
		$local = $escala->getLocal();
		
		$email = new EmailHeader();
		$email->setAssunto("Cancelamento de Escala");
		$email->setIdUsuario ( $usuario->getId() );
		$email->setDataCadastro ( date ( 'Y-m-d H:i:s' ) );
		$email->setCorpoMensagem("
		<h2 style=\"text-align: center; \">
			<em><strong>Escala cancelada!</strong></em>
		</h2>
		<p>
			O usu&acute;rio " . $usuario->getNome() . " cancelou a escala para o dia " . str_replace("à", "&agrave;", $escala->getData('d/m/Y à\s H:i')) . " 		
			no local " . $local->getNome() . ".
		</p>
		<p>
			Confira a escala <a href=\"http://v2.centraldeadoradores.com.br/escala/detalhes?data=" . str_replace(" ", "%20", $escala->getData('Y-m-d H:i:s')) . "&idLocal=" . $local->getId() . "\">clicando aqui.</a>
		</p>
		");
		$destinatarios = UsuarioQuery::create()
			->filterByNivelpermissao(3)
			->find();
		foreach ( $destinatarios as $destinatario ) {
			try {
				$alertEmail = new EmailDetail();
				$alertEmail->setEmailHeader($email);
				$alertEmail->setUsuario($destinatario);
				$alertEmail->save();
			} catch ( Exception $ex ) {
				echo "Ocorreu um erro. ".$ex;
				return;
			}
		}
		
		$escala->setIdStatusEscala(3);
		$escala->setMotivoRecusa($motivo);
		$escala->save();
		Internals_Message::success("Escala recusada com sucesso!");
		$this->_redirect("escala/aconfirmar");
	}
	public function excluirAction(){
		$this->_helper->layout()->setLayout("blank");
		$this->_helper->viewRenderer->setNoRender();
		$data = $this->getRequest()->getParam('data', null);
		$local = $this->getRequest()->getParam('idLocal', null);
		$escalas = EscalaPessoaQuery::create()
			->filterByData($data)
			->filterByIdLocal($local)
			->delete();		
		Internals_Message::success("Escala excluída com sucesso.");
		$this->_redirect("escala");
	}
}