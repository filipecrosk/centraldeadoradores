<?php

class EscalaController extends Internals_Controller_CloseAction {

	public function init(){
		parent::init();

		$baseUrl = Zend_Controller_Front::getInstance ()->getRequest ()->getBaseUrl ();
		$this->view->headLink ()->prependStylesheet ( $baseUrl . "/default/jqueryui/css/ui-darkness/jquery-ui-1.8.23.custom.css" );
		$this->view->headScript ()->prependFile ( $baseUrl . '/default/jqueryui/js/jquery.ui.datepicker.min.js', 'text/javascript' );
		$this->view->headScript ()->prependFile ( $baseUrl . '/default/jqueryui/js/jquery.ui.autocomplete.min.js', 'text/javascript' );
		$this->view->headScript ()->prependFile ( $baseUrl . '/default/jqueryui/js/jquery.ui.position.min.js', 'text/javascript' );
		$this->view->headScript ()->prependFile ( $baseUrl . '/default/jqueryui/js/jquery.ui.widget.min.js', 'text/javascript' );
		$this->view->headScript ()->prependFile ( $baseUrl . '/default/jqueryui/js/jquery.ui.core.min.js', 'text/javascript' );
		$this->view->headScript ()->prependFile ( $baseUrl . '/default/js/jquery-mask.js', 'text/javascript' );

		Internals_SubMenu::AddItem("Minhas escalas", null);
		Internals_SubMenu::AddItem("Escalas", "escala/index");
		if($this->nivelPermissao == 3){
			Internals_SubMenu::AddItem("Resumo", "escala/resumo");
		}
		Internals_SubMenu::AddItem("Minhas escalas confirmadas", "escala/confirmadas");
		Internals_SubMenu::AddItem("Minhas escalas a confirmar", "escala/aconfirmar");
	}

	public function indexAction() {
		$escalasPendentes = EscalaPessoaQuery::create()->filterByIdUsuario($this->userId)
			->filterByIdStatusEscala(1)
			->filterByData(array("min"=>date("Y-m-d H:i:s")))
			->count();
		/*
		if($this->nivelPermissao != 3){
			if($escalasPendentes > 0){
				$this->_redirect("escala/aconfirmar");
			} else {
				$this->_redirect("escala/confirmadas");
			}
		}
		*/
		$dados = EscalaPessoaQuery::create()
		->addAsColumn("pendente", '(select count(*) from escala_pessoa as pp1 where pp1.Id_Local = escala_pessoa.Id_Local and pp1.Data = escala_pessoa.Data and pp1.Id_Status_Escala = 1)')
		->addAsColumn("confirmada", '(select count(*) from escala_pessoa as pp2 where pp2.Id_Local = escala_pessoa.Id_Local and pp2.Data = escala_pessoa.Data and pp2.Id_Status_Escala = 2)')
		->addAsColumn("recusada", '(select count(*) from escala_pessoa as pp3 where pp3.Id_Local = escala_pessoa.Id_Local and pp3.Data = escala_pessoa.Data and pp3.Id_Status_Escala = 3)')
		->joinUsuarioRelatedByIdResponsavel()
		->joinLocal()
		->joinTipoEscala()
		->groupByIdLocal()
		->groupByData()
		->filterByData(array('min'=>date("Y-m-d H:i:s")))
		->withColumn("usuario.Nome")
		->condition('cond1', 'escala_pessoa.IS_ESCALA_BANDA = 1')
		->condition('cond2', 'escala_pessoa.ID_USUARIO= '.$this->userId)
		->condition('cond3', 'true='.($this->nivelPermissao=="3"?"true":"false"))
		->where(array('cond1', 'cond2', 'cond3'), 'or')
		->select(Array('Id','Local.Nome', 'Data', 'Local.Id', 'TipoEscala.Nome'))
		->find()
		->toArray();

		$this->view->grid = new Internals_View_Helper_Grid(EscalaPessoaPeer::OM_CLASS, $this->view, $dados);
		$this->view->grid->addColumn(LocalPeer::NOME, "Local", LocalPeer::OM_CLASS);
		$this->view->grid->addColumn(EscalaPessoaPeer::DATA, "Data e Hora");
		$this->view->grid->addColumn("usuarioNome", "Responsável", UsuarioPeer::OM_CLASS, false);
		$this->view->grid->addColumn(TipoEscalaPeer::NOME, "Tipo de escala", TipoEscalaPeer::OM_CLASS);
		$this->view->grid->setShowWeekDay();
		$this->view->grid->setShowDayPart();
		$this->view->grid->setPaginate(false);
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
		if($this->nivelPermissao == 3){
			$this->view->grid->addFlagColumn("Status",$criterio);
			$criterio = array(array("<img alt='delete' onclick='javascript:confirmDelete(this); return false;' src='/default/images/icone-delete.png' style=' width:20px; display: block; margin-left: auto;margin-right: auto;' >", false));
			$this->view->grid->addFlagColumn("Excluir",$criterio);
			$link = array("/escala/excluir?data=[1]&idLocal=[2]"=>array(EscalaPessoaPeer::OM_CLASS=>EscalaPessoaPeer::DATA,
					LocalPeer::OM_CLASS=>LocalPeer::ID));
			$this->view->grid->addLink("Excluir", $link, null, false);
		}
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

	public function resumoAction(){
		$dados = EscalaPessoaQuery::create()
		->joinLocal()
		->joinTipoEscala()
		->groupByIdLocal()
		->groupByData()
		->select(Array('Id','Local.Nome', 'Data', 'Local.Id', 'TipoEscala.Nome'))
		->find()
		->toArray();

		$this->view->grid = new Internals_View_Helper_Grid(EscalaPessoaPeer::OM_CLASS, $this->view, $dados);
		$this->view->grid->addColumn(LocalPeer::NOME, "Local", LocalPeer::OM_CLASS);
		$this->view->grid->addColumn(EscalaPessoaPeer::DATA, "Data e Hora");
		$this->view->grid->addColumn(TipoEscalaPeer::NOME, "Tipo de escala", TipoEscalaPeer::OM_CLASS);
		$link = array("/escala/detalhes?data=[1]&idLocal=[2]"=>array(EscalaPessoaPeer::OM_CLASS=>EscalaPessoaPeer::DATA,
				LocalPeer::OM_CLASS=>LocalPeer::ID));
		$this->view->grid->addLink(LocalPeer::NOME, $link, LocalPeer::OM_CLASS);
		$this->view->grid->setShowWeekDay();
		$this->view->grid->setShowDayPart();
	}

	public function confirmadasAction(){
		$dados = EscalaPessoaQuery::create()
			->joinLocal()
			->joinTipoEscala()
			->filterByIdUsuario($this->userId)
			->filterByData(array('min'=>date("Y-m-d H:i:s")))
			->filterByIdStatusEscala(2)
			->select(array('Id','Local.Id', 'Local.Nome', 'Data', 'IdStatusEscala', 'TipoEscala.Nome'))
			->find()
			->toArray();
		$this->view->grid = new Internals_View_Helper_Grid(EscalaPessoaPeer::OM_CLASS, $this->view, $dados);
		$this->view->grid->addColumn(LocalPeer::NOME, "Local", LocalPeer::OM_CLASS);
		$this->view->grid->addColumn(EscalaPessoaPeer::DATA, "Data e hora");
		$this->view->grid->addColumn(TipoEscalaPeer::NOME, "Tipo de escala", TipoEscalaPeer::OM_CLASS);
		$this->view->grid->setShowWeekDay();
		$this->view->grid->setShowDayPart();
		$this->view->grid->setPaginate(false);

		$criterio =
		array(array("<img alt='recusar' src='/default/images/icone-negativo.png' alt='Escala recusada' style='display: block;margin-left: auto;margin-right: auto;' >", false));
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

		$modalFalhaRecusa = new Internals_Modal("Não é permitido cancelar a escala com menos de 1 semana de antecedencia.<br>
												Por favor, entre em contato com a liderança para solucionar o seu problema.<br>
												<a href='mailto:bet@ibcbh.com.br'>bet@ibcbh.com.br</a>", "Falha recusa");
		$modalFalhaRecusa->putOkButton();
		$modalFalhaRecusa->setModalName("FalhaRecusa");

		$this->view->modal = array();
		$this->view->modal[] = $modalMotivo;
		$this->view->modal[] = $modalRecusar;
		$this->view->modal[] = $modalFalhaRecusa;

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
					if(!$(this).hasClass('disabled') && $('#textAreaMotivo').val() != ''){
						$('#".$modalMotivo->getModalName()."').modal('hide');
						$(this).button('reset');
						$('#".$modalRecusar->getModalName()."').modal('show');
						$('.".$modalRecusar->getModalName()."Yes').click(function(){
							var botaoYes = $(this);
							botaoYes.button('loading');
							var arr = link.attr('href').split('?');
							$.ajax({
								type: 'POST',
								data: { param: arr[1]},
								url: '/ajax/checkdataforrecusa',
								success: function(data) {
									if(data === 'false'){
										botaoYes.button('reset');
										$('#".$modalRecusar->getModalName()."').modal('hide');
										$('#".$modalFalhaRecusa->getModalName()."').modal('show');
									} else {
										$(window.location).attr('href', link.attr('href') + '&motivo=' + $('#textAreaMotivo').val() );
									}
								}
							});
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
			->filterByIdUsuario($this->userId)
			->filterByData(array('min'=>date("Y-m-d H:i:s")))
			->filterByIdStatusEscala(1)
			->condition('cond1', 'escala_pessoa.IS_ESCALA_BANDA = 0') // create a condition named 'cond1'
			->condition('cond2', 'escala_pessoa.ID_RESPONSAVEL= '.$this->userId)       // create a condition named 'cond2'
			->where(array('cond1', 'cond2'), 'or')
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
					'Funcoes'=>$funcoes,
					'TipoEscala'=>$dado->getTipoEscala()->getNome()
			);
			$arrDados[] = $reg;
		}

		$this->view->grid = new Internals_View_Helper_Grid(EscalaPessoaPeer::OM_CLASS, $this->view, $arrDados);

		$this->view->grid->addColumn(LocalPeer::NOME, "Local", LocalPeer::OM_CLASS);
		$this->view->grid->addColumn(EscalaPessoaPeer::DATA, "Data e hora");
		$this->view->grid->addColumn("Funcoes", "Funções", null, false);
		$this->view->grid->addColumn("TipoEscala", "Tipo de escala", null, false);
		$this->view->grid->setShowWeekDay();
		$this->view->grid->setShowDayPart();
		$this->view->grid->setPaginate(false);

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

		$modalFalhaRecusa = new Internals_Modal("Não é permitido cancelar a escala com menos de 1 semana de antecedencia.<br>
												Por favor, entre em contato com a liderança para solucionar o seu problema.<br>
												<a href='mailto:bet@ibcbh.com.br'>bet@ibcbh.com.br</a>", "Falha recusa");
		$modalFalhaRecusa->putOkButton();
		$modalFalhaRecusa->setModalName("FalhaRecusa");

		$this->view->modal[] = $modalConfirmar;
		$this->view->modal[] = $modalRecusar;
		$this->view->modal[] = $modalMotivo;
		$this->view->modal[] = $modalFalhaRecusa;

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
									var botaoYes = $(this);
									botaoYes.button('loading');
									var arr = link.attr('href').split('?');
									$.ajax({
										type: 'POST',
										data: { param: arr[1]},
										url: '/ajax/checkdataforrecusa',
										success: function(data) {
											if(data === 'false'){
												botaoYes.button('reset');
												$('#".$modalRecusar->getModalName()."').modal('hide');
												$('#".$modalFalhaRecusa->getModalName()."').modal('show');
											} else {
												$(window.location).attr('href', link.attr('href') + '&motivo=' + $('#textAreaMotivo').val() );
											}
										}
									});
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


		if($this->nivelPermissao == 3){
			$this->view->botao = "<a class='btn btn-primary' href='/escala/novousuario?local=" . $idLocal . "
								&data=" . $this->getRequest()->getParam("data") . "'><i class='icon-white icon-plus'></i>Adicionar usuário</a>";
		}

		for ($i = 0; $i < count($dados); $i++) {
			$usuario = UsuarioQuery::create()
				->findPk($dados[$i]["EscalaPessoaIdUsuario"]);
			$dados[$i]["UsuarioId"] = $usuario->getId();
			$dados[$i]["UsuarioNome"] = $usuario->getNome();
		}

		$this->view->grid = new Internals_View_Helper_Grid(EscalaPessoaFuncaoPeer::OM_CLASS, $this->view, $dados);

		$this->view->grid->addColumn("UsuarioNome", "Nome", UsuarioPeer::OM_CLASS, false);
		$this->view->grid->addColumn(FuncaoPeer::NOME, "Função", FuncaoPeer::OM_CLASS);
		if($this->nivelPermissao == 3){
			$this->view->grid->addColumn("EscalaPessoaMotivoRecusa", "Motivo Recusa", EscalaPessoaPeer::OM_CLASS, false);
			$link = array("/usuarios/detalhe?idUsuario=[1]"=>array(false => "UsuarioId"));
			$this->view->grid->addLink("UsuarioNome", $link, null,false);

			$criterio = array(array("<img src='/default/images/icone-interrogacao.png' alt='Confirmação pendente' style='display: block;margin-left: auto;margin-right: auto;' >", array("EscalaPessoa.IdStatusEscala", "equal", "1"))
							 ,array("<img src='/default/images/icone-positivo.png' alt='Escalado' style='display: block;margin-left: auto;margin-right: auto;' >", array("EscalaPessoa.IdStatusEscala", "equal", "2"))
							 ,array("<img src='/default/images/icone-negativo.png' alt='Não escalado' style='display: block;margin-left: auto;margin-right: auto;' >", array("EscalaPessoa.IdStatusEscala", "equal", "3")));
			$this->view->grid->addFlagColumn("Escala confirmada",$criterio);
		}
		$this->view->grid->setPaginate(false);
	}

	public function novousuarioAction(){
		$this->view->data = $this->getRequest()->getParam("data", null);
		$this->view->idLocal = $this->getRequest()->getParam("local", null);

		$func = FuncaoQuery::create()->orderByNome()->find();
		$funcoes = "<option selected='selected'></option>";
		foreach ($func as $funcao){
			$funcoes .= "<option value='" . $funcao->getId() . "'>" . $funcao->getNome() . "</option>";
		}
		$this->view->funcoes = $funcoes;
		if($this->getRequest()->isPost()){
			$data = $this->getRequest()->getPost('data', null);
			$idLocal = $this->getRequest()->getPost('idLocal', null);
			$nome = $this->getRequest()->getPost('nome', null);
			$idsFuncoes = $this->getRequest()->getPost('idsFuncoes', null);

			$escalaPronta = EscalaPessoaQuery::create()
				->filterByData(str_replace("%20", " ", $data ))
				->filterByIdLocal($idLocal)
				->find();

			$funcoes = explode(",", $idsFuncoes);

			$escala = new EscalaPessoa ();
			$usuario = UsuarioQuery::create ()->filterByNome ( $nome )->findOne ();
			$escala->setIdLocal ( $escalaPronta->getFirst()->getIdLocal () );
			$escala->setIdUsuario ( $usuario->getId () );
			$escala->setIdResponsavel ( $escalaPronta->getFirst()->getIdResponsavel () );
			$escala->setData ( str_replace("%20", " ", $data ) );
			$escala->setIdStatusEscala ( 1 );
			foreach ($funcoes as $func){
				$funcao = new EscalaPessoaFuncao();
				$funcao->setIdFuncao($func);
				$escala->addEscalaPessoaFuncao($funcao);
			}
			$escala->save ();

			$email = new EmailHeader();
			$email->setAssunto("Nova escala criada!");
			$email->setIdUsuario ( $this->userId );
			$email->setDataCadastro ( date ( 'Y-m-d H:i:s' ) );
			$email->setCorpoMensagem("
					<h2 style=\"text-align: center; \">
					<em><strong>Nova escala criada!</strong></em>
					</h2>
					<p>
					Uma nova escala foi criada e voc&ecirc; foi escalado!
					</p>
					<p>
					Por favor, confirme ou recuse a presen&ccedil;a na ministra&ccedil;&atilde;o e nos ensaios assim que poss&iacute;vel.
					Para visualizar todas as suas escalas pendentes, <a href=\"http://v2.centraldeadoradores.com.br\">clique aqui.</a>
					</p>
					");
			$alertEmail = new EmailDetail();
			$alertEmail->setEmailHeader($email);
			$alertEmail->setUsuario($usuario);
			$alertEmail->save();

			Internals_Message::success("Escala gravada com sucesso.");
			$this->_redirect("escala");
		}
	}

	public function confirmarAction(){
		$this->_helper->layout()->setLayout("blank");
		$this->_helper->viewRenderer->setNoRender();
		$idEscala = $this->getRequest()->getParam('idEscala', null);
		$escala = EscalaPessoaQuery::create()->findPk($idEscala);
		$escala->setIdStatusEscala(2);
		$escala->save();
		if($escala->getIsEscalaBanda() == 1){
			$bandaEscalada = EscalaPessoaQuery::create()
				->filterByIdResponsavel($escala->getIdResponsavel())
				->filterByIdLocal($escala->getIdLocal())
				->filterByData($escala->getData('Y-m-d H:i:s'))
				->filterByIdStatusEscala(1)
				->find();
			foreach ($bandaEscalada as $membro) {
				$membro->setIdStatusEscala(2);
				$membro->save();
			}
		}
		Internals_Message::success("Escala confirmada com sucesso!");
		$this->_redirect("escala/aconfirmar");
	}

	public function recusarAction(){
		$this->_helper->layout()->setLayout("blank");
		$this->_helper->viewRenderer->setNoRender();
		$idEscala = $this->getRequest()->getParam('idEscala', null);
		$motivo = $this->getRequest()->getParam('motivo', null);
		$escala = EscalaPessoaQuery::create()->findPk($idEscala);
		if($escala->getIsEscalaBanda() == 0 || $escala->getIdResponsavel() == $this->userId){
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
			$respDest = false;
			$destinatarios = UsuarioQuery::create()
				->filterByNivelpermissao(3)
				->find();
			foreach ( $destinatarios as $destinatario ) {
				try {
					if($destinatario->getId() == $escala->getIdResponsavel())
						$respDest = true;
					$alertEmail = new EmailDetail();
					$alertEmail->setEmailHeader($email);
					$alertEmail->setUsuario($destinatario);
					$alertEmail->save();
				} catch ( Exception $ex ) {
					echo "Ocorreu um erro. ".$ex;
					return;
				}
			}
			if(!$respDest){
				try {
					$destinatario = UsuarioQuery::create()
						->findPk($escala->getIdResponsavel());
					$alertEmail = new EmailDetail();
					$alertEmail->setEmailHeader($email);
					$alertEmail->setUsuario($destinatario);
					$alertEmail->save();
				} catch ( Exception $ex ) {
					echo "Ocorreu um erro. ".$ex;
					return;
				}
			}
			if($escala->getIsEscalaBanda() == 1){
				$bandaEscalada = EscalaPessoaQuery::create()
				->filterByIdResponsavel($escala->getIdResponsavel())
				->filterByIdLocal($escala->getIdLocal())
				->filterByData($escala->getData('Y-m-d H:i:s'))
				->find();
				foreach ($bandaEscalada as $membro) {
					$membro->setIdStatusEscala(3);
					$membro->setMotivoRecusa($motivo);
					$membro->save();
				}
			} else {
				$escala->setIdStatusEscala(3);
				$escala->setMotivoRecusa($motivo);
				$escala->save();
			}
			Internals_Message::success("Escala recusada com sucesso!");
			$this->_redirect("escala");
		} else {
			Internals_Message::error("Esta escala foi feita pra toda a banda! Para cancelar, entre em contato com seu líder de banda.");
			$this->_redirect("escala");
		}
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
