<?php

class EnvioemailController extends Internals_Controller_CloseAction {
	
	public function init() {
		$this->permissao = 3;
		parent::init ();
		
		$this->_helper->layout ()->setLayout ( "1column" );
		$baseUrl = Zend_Controller_Front::getInstance ()->getRequest ()->getBaseUrl ();
		$this->view->headScript ()->prependFile ( $baseUrl . '/default/bootstrap/js/typeahead.js', 'text/javascript' );
		$this->view->headScript ()->prependFile ( $baseUrl . '/default/ckeditor/ckeditor.js', 'text/javascript' );
	}
	
	public function indexAction() {
	
	}
	
	public function marcarenvioAction() {
		$this->_helper->layout ()->disableLayout ();
		$this->_helper->viewRenderer->setNoRender ();
		
		$destinatarios = $this->getRequest ()->getPost ( 'destinatarios', null );
		$assunto = $this->getRequest ()->getPost ( 'assunto', null );
		$corpoMensagem = $this->getRequest ()->getPost ( 'corpoMensagem', null );
		$email = new EmailHeader ();
		$email->setAssunto ( $assunto );
		$email->setCorpoMensagem ( $corpoMensagem );
		$email->setIdUsuario ( $this->userId );
		$now = date ( 'Y-m-d H:i:s' );
		$email->setDataCadastro ( date ( 'Y-m-d H:i:s' ) );
		$email->save ();
		$this->separarDestinatarios ( $email->getIdEmail (), $destinatarios );
	}
	
	private function separarDestinatarios($idEmail, $destinatarios) {
		$usuariosDestinatario = array ();
		foreach ( $destinatarios as $destinatario ) {
			$dest = split ( ':', $destinatario );
			if ($dest [0] == "Area") {
				$integrantes = MinisterioQuery::create ()->filterByNome ( $dest [1] )->find ()->populateRelation ( "UsuarioMinisterio" )->populateRelation ( "Usuario" );
				foreach ( $integrantes as $integrante ) {
					if (! in_array ( $integrante, $usuariosDestinatario )) {
						$usuariosDestinatario [] = $integrante;
					}
				}
			} else if ($dest [0] == "Banda") {
				$bandas = BandaQuery::create ()->filterByNome ( $dest [1] )->joinUsuarioRelatedByIdBanda ()->findOne ();
				foreach ( $bandas->getUsuariosRelatedByIdBanda () as $integrante ) {
					if (! in_array ( $integrante, $usuariosDestinatario )) {
						$usuariosDestinatario [] = $integrante;
					}
				}
			} else if ($dest [0] == "Função") {
				$integrantes = FuncaoQuery::create ()->filterByNome ( $dest [1] )->find ()->populateRelation ( "UsuarioFuncao" )->populateRelation ( "Usuario" );
				foreach ( $integrantes as $integrante ) {
					if (! in_array ( $integrante, $usuariosDestinatario )) {
						$usuariosDestinatario [] = $integrante;
					}
				}
			} else if ($dest [0] == "Todos") {
				$integrantes = UsuarioQuery::create ()->filterByDesabilitado ( 0 )->find ();
				foreach ( $integrantes as $integrante ) {
					if (! in_array ( $integrante, $usuariosDestinatario )) {
						$usuariosDestinatario [] = $integrante;
					}
				}
			} else {
				$dest = split ( '\(', $destinatario );
				$integrante = UsuarioQuery::create ()->filterByEmail ( trim ( substr ( $dest [1], 0, - 1 ) ) )->filterByNome ( trim ( substr ( $dest [0], 0, - 4 ) ) )->findOne ();
				if (! in_array ( $integrante, $usuariosDestinatario )) {
					$usuariosDestinatario [] = $integrante;
				}
			}
		}
		$this->criarDetails ( $idEmail, $usuariosDestinatario );
	}
	
	private function criarDetails($idEmail, $destinatarios) {
		foreach ( $destinatarios as $destinatario ) {
			$email = new EmailDetail ();
			$email->setIdDestinatario ( $destinatario->getId () );
			$email->setIdEmail ( $idEmail );
			$email->save ();
		}
	}
}
