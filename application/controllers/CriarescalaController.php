<?php

class CriarescalaController extends Internals_Controller_CloseAction {
	
	public function init() {
		$this->permissao = 3;
		parent::init ();
		$baseUrl = Zend_Controller_Front::getInstance ()->getRequest ()->getBaseUrl ();
		$this->_helper->layout ()->setLayout ( "1column" );
		$this->view->headLink ()->prependStylesheet ( $baseUrl . "/default/jqueryui/css/ui-darkness/jquery-ui-1.8.23.custom.css" );
		$this->view->headScript ()->prependFile ( $baseUrl . '/default/jqueryui/js/jquery.ui.datepicker.min.js', 'text/javascript' );
		$this->view->headScript ()->prependFile ( $baseUrl . '/default/jqueryui/js/jquery.ui.autocomplete.min.js', 'text/javascript' );
		$this->view->headScript ()->prependFile ( $baseUrl . '/default/jqueryui/js/jquery.ui.position.min.js', 'text/javascript' );
		$this->view->headScript ()->prependFile ( $baseUrl . '/default/jqueryui/js/jquery.ui.widget.min.js', 'text/javascript' );
		$this->view->headScript ()->prependFile ( $baseUrl . '/default/jqueryui/js/jquery.ui.core.min.js', 'text/javascript' );
		$this->view->headScript ()->prependFile ( $baseUrl . '/default/js/jquery-mask.js', 'text/javascript' );
	}
	
	public function indexAction() {
		$this->view->bandas = BandaQuery::create ()->find ();
		
		$modalCreateLocal = new Internals_Modal ( null, "Cadastrar novo local", $this->view );
		$modalCreateLocal->putSaveButton ();
		$modalCreateLocal->putCancelButton ();
		$modalCreateLocal->setModalName ( "NovoLocal" );
		$body = '<form class="form-horizontal">
				    <div class="control-group">
				      <label class="control-label" for="nomeLocal">Nome: </label>
				      <div class="controls">
				        <input type="text" class="input-xlarge" id="nomeLocal">
				      </div>
				    </div>
				    <div class="control-group">
				    	<label class="control-label" for="enderecoLocal">Endereço: </label>
				    	<div class="controls">
				        	<input type="text" class="input-xlarge" id="enderecoLocal">
				      </div>
				  	</div>
				</form>';
		$modalCreateLocal->setBody ( $body );
		$modalConfirmaNovoLocal = new Internals_Modal ( "O local digitado não está cadastrado. Deseja cadastrar este local?", "Novo local" );
		$modalConfirmaNovoLocal->putYesButton ();
		$modalConfirmaNovoLocal->putNoButton ();
		$modalConfirmaNovoLocal->setModalName ( "ConfirmaNovoLocal" );
		$modalDicas = new Internals_Modal ( null, "Dicas", $this->view );
		$modalDicas->putOkButton();
		$modalDicas->setWidth(700);
		$modalDicas->setModalName ( "Dicas" );
		$this->view->modal = array ();
		$this->view->modal [] = $modalCreateLocal;
		$this->view->modal [] = $modalConfirmaNovoLocal;
		$this->view->modal [] = $modalDicas;
		$this->view->modalName = $modalConfirmaNovoLocal->getModalName ();
		$this->view->modalDicalName = $modalDicas->getModalName();
		
		$this->view->inlineScript ()->captureStart ();
		echo "$(document).ready(function() {
					$('." . $modalConfirmaNovoLocal->getModalName () . "Yes').click(function(){
						$('#" . $modalConfirmaNovoLocal->getModalName () . "').modal('hide');
						$('#" . $modalCreateLocal->getModalName () . "').modal('show');
						$(\"#nomeLocal\").val($(\"#local\").val());
					});
					$('." . $modalCreateLocal->getModalName () . "Save').click(function(){
						$(this).button('loading');
						$.ajax({
									url: '/ajax/novolocal',
									type: 'post',
									dataType: 'html',
									data: { 'nomeLocal': $(\"#nomeLocal\").val(), 'enderecoLocal': $(\"#enderecoLocal\").val() },
									success: function(data) {
										$('#" . $modalCreateLocal->getModalName () . "').modal('hide');
										$(this).button('reset');
									},
									error: function(data){
										alert(data);
									}
								});
					});
				} );";
		$this->view->inlineScript ()->captureEnd ();
	}
	
	public function novaAction() {
		$this->_helper->layout ()->disableLayout ();
		$this->_helper->viewRenderer->setNoRender ();
		$nomeLocal = $this->getRequest ()->getPost ( 'local', null );
		$data = $this->getRequest ()->getPost ( 'data', null );
		$hora = $this->getRequest ()->getPost ( 'hora', null );
		$nomeResponsavel = $this->getRequest ()->getPost ( 'nomeResponsavel', null );
		$escala = $this->getRequest ()->getPost ( 'escalados', null );
		$local = LocalQuery::create ()->filterByNome ( $nomeLocal )->findOne ();
		
		$responsavel = UsuarioQuery::create ()->filterByNome ( $nomeResponsavel )->findOne ();
		
		$funcoes = FuncaoQuery::create ()->find ();
		$arrFuncoes = array ();
		foreach ( $funcoes as $funcao ) {
			$arrFuncoes [$funcao->getNome ()] = $funcao->getId ();
		}
		$escalados = split ( ",", $escala );
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
		foreach ( $escalados as $escalado ) {
			try {
				$reg = split ( ":", $escalado );
				$escala = new EscalaPessoa ();
				$usuario = UsuarioQuery::create ()->filterByNome ( $reg [0] )->findOne ();
				$escala->setIdLocal ( $local->getId () );
				$escala->setIdUsuario ( $usuario->getId () );
				$escala->setIdResponsavel ( $responsavel->getId () );
				$escala->setData ( $data . " " . $hora );
				$escala->setIdStatusEscala ( 1 );
				$escala->save ();
				$funcoes = split ( '-', $reg [1] );
				foreach ( $funcoes as $idFuncao ) {
					try {
						$escalaFuncao = new EscalaPessoaFuncao ();
						$escalaFuncao->setIdEscalaPessoa ( $escala->getId () );
						$escalaFuncao->setIdFuncao ( $idFuncao );
						$escalaFuncao->save ();
					} catch ( Exception $ex ) { }
				}
				$alertEmail = new EmailDetail();
				$alertEmail->setEmailHeader($email);
				$alertEmail->setUsuario($usuario);
				$alertEmail->save();
			} catch ( Exception $ex ) { }
		}
		echo "sucesso";
	}
	
	public function getdicaAction(){
		$this->_helper->layout()->disableLayout();
		$this->_helper->viewRenderer->setNoRender();
		$data = $this->getRequest()->getPost('data', null);
		$hora = $this->getRequest()->getPost('hora', null);
		$arrHora = split(":", $hora);
		$diaSemana = date("N", strtotime($data));
		
		$pdo = new PDO ( "mysql:host=mysql.centraldeadoradores.com.br;dbname=adoradores", "adoradoresdb", "adoradoresdb", 
		  array(
		    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
		  ) );
		if (! $pdo) {
			die ( 'Erro ao criar a conexão' );
		}

		$condition = array();
		
		if($arrHora[0] > 7 && $arrHora[0] < 12){
			if($diaSemana == 1){
				$condition[] = "manhaSegunda = 1";
			} else if($diaSemana == 2){
				$condition[] = "manhaTerca = 1";
			} else if($diaSemana == 3){
				$condition[] = "manhaQuarta = 1";
			} else if($diaSemana == 4){
				$condition[] = "manhaQuinta = 1";
			} else if($diaSemana == 5){
				$condition[] = "manhaSexta = 1";
			} else if($diaSemana == 6){
				$condition[] = "manhaSabado = 1";
			} else if($diaSemana == 7){
				$condition[] = "manhaDomingo = 1";
			} 
		} else if($arrHora[0] >= 12 && $arrHora[0] < 18){
			if($diaSemana == 1){
				$condition[] = "tardeSegunda = 1";
			} else if($diaSemana == 2){
				$condition[] = "tardeTerca = 1";
			} else if($diaSemana == 3){
				$condition[] = "tardeQuarta = 1";
			} else if($diaSemana == 4){
				$condition[] = "tardeQuinta = 1";
			} else if($diaSemana == 5){
				$condition[] = "tardeSexta = 1";
			} else if($diaSemana == 6){
				$condition[] = "tardeSabado = 1";
			} else if($diaSemana == 7){
				$condition[] = "tardeDomingo = 1";
			}
		} else if($arrHora[0] >= 18 || $arrHora[0] < 7){
			if($diaSemana == 1){
				$condition[] = "noiteSegunda = 1";
			} else if($diaSemana == 2){
				$condition[] = "noiteTerca = 1";
			} else if($diaSemana == 3){
				$condition[] = "noiteQuarta = 1";
			} else if($diaSemana == 4){
				$condition[] = "noiteQuinta = 1";
			} else if($diaSemana == 5){
				$condition[] = "noiteSexta = 1";
			} else if($diaSemana == 6){
				$condition[] = "noiteSabado = 1";
			} else if($diaSemana == 7){
				$condition[] = "noiteDomingo = 1";
			}
		}
		
		$usuarios = $pdo->query ( "SELECT usuario.Nome, usuario.Apelido, usuario.Email
				FROM dados
				INNER JOIN 	usuario on usuario.Id = dados.Id_Usuario
				WHERE ".implode(" AND ", $condition)."
				ORDER BY usuario.Nome asc
				" )->fetchAll(PDO::FETCH_ASSOC);
		
		$grid = new Internals_View_Helper_Grid(UsuarioPeer::OM_CLASS, $this->view, $usuarios);
		
		$grid->addColumn("Nome", "Nome", null, false);
		$grid->addColumn("Apelido", "Apelido", null, false);
		$grid->addColumn("Email", "E-Mail", null, false);
		$grid->renderGrid();
		
		
		//echo "hora ".$arrHora[0]."  dia ".$diaSemana;
	}

}
