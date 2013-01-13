<?php

class DadosController extends Internals_Controller_CloseAction {
	
	public function init(){
		parent::init();
		$dados = DadosQuery::create()
			->filterByIdUsuario($this->userId)
			->findOne();
		if($dados != null){
			$this->_redirect("/index");
		}
		$baseUrl = Zend_Controller_Front::getInstance ()->getRequest ()->getBaseUrl ();
		$this->view->headLink ()->prependStylesheet ( $baseUrl . "/default/style2.css" );
		$this->view->headLink ()->prependStylesheet ( $baseUrl . "/default/reset.css" );
		$this->view->headScript ()->prependFile ( $baseUrl . '/default/bootstrap/js/bootstrap.min.js', 'text/javascript' );
		$this->view->headScript ()->prependFile ( $baseUrl . '/default/js/jquery-1.8.9.min.js', 'text/javascript' );
	}
	
	public function indexAction() {
		if($this->getRequest()->isPost()){
			$dados = new Dados ();
			$dados->setIdUsuario($this->userId);
			$dados->setEstaemcelula ( $_POST ['estaEmCelula'] == '1' ? true : false );
			if ($_POST ['estaEmCelula'] == '1') {
				$dados->setDiacelula ( $_POST ['diaCelula'] );
				$dados->setHoracelula ( $_POST ['horaCelula'] );
				$dados->setMinutocelula ( $_POST ['minutoCelula'] );
				$dados->setPeriodocelula ( $_POST ['periodoCelula'] );
			}
			$dados->setCoordenador ( $_POST ['coordenador'] == '1' ? true : false );
			if ($_POST ['coordenador'] == '1') {
				$dados->setDiacoordenador ( $_POST ['diaCoordenador'] );
				$dados->setHoracoordenador ( $_POST ['horaCoordenador'] );
				$dados->setMinutocoordenador ( $_POST ['minutoCoordenador'] );
				$dados->setPeriodocoordenador ( $_POST ['periodoCoordenador'] );
				$dados->setFrequenciacoordenador ( $_POST ['frequenciaCoordenador'] );
			}
			$dados->setDiscipulador ( $_POST ['discipulador'] == '1' ? true : false );
			if ($_POST ['discipulador'] == '1') {
				$dados->setDiadiscipulador ( $_POST ['diaDiscipulador'] );
				$dados->setHoradiscipulador ( $_POST ['horaDiscipulador'] );
				$dados->setMinutodiscipulador ( $_POST ['minutoDiscipulador'] );
				$dados->setPeriododiscipulador ( $_POST ['periodoDiscipulador'] );
				$dados->setFrequenciadiscipulador ( $_POST ['frequenciaDiscipulador'] );
			}
			$dados->setLider ( $_POST ['lider'] == '1' ? true : false );
			if ($_POST ['lider'] == '1') {
				$dados->setDialider ( $_POST ['diaLider'] );
				$dados->setHoralider ( $_POST ['horaLider'] );
				$dados->setMinutolider ( $_POST ['minutoLider'] );
				$dados->setPeriodolider ( $_POST ['periodoLider'] );
				$dados->setFrequencialider ( $_POST ['frequenciaLider'] );
			} else {
				$dados->setNomelider ( $_POST ['nomeLider'] );
				$dados->setLidertreinamento ( $_POST ['liderTreinamento'] );
			}
			$dados->setCcm ( $_POST ['ccm'] == '1' ? true : false );
			if ($_POST ['ccm'] == '1') {
				$dados->setDiaccm ( $_POST ['diaCCM'] );
				$dados->setHoraccm ( $_POST ['horaCCM'] );
				$dados->setMinutoccm ( $_POST ['minutoCCM'] );
				$dados->setPeriodoccm ( $_POST ['periodoCCM'] );
			}
			if (isset($_POST ['manhaDomingo']))
				$dados->setManhadomingo ( TRUE );
			else
				$dados->setManhadomingo ( FALSE );
			if (isset($_POST ['manhaSegunda']))
				$dados->setManhasegunda ( true );
			else
				$dados->setManhasegunda ( false );
			if (isset($_POST ['manhaTerca']))
				$dados->setManhaterca ( true );
			else
				$dados->setManhaterca ( false );
			if (isset($_POST ['manhaQuarta']))
				$dados->setManhaquarta ( true );
			else
				$dados->setManhaquarta ( false );
			if (isset($_POST ['manhaQuinta']))
				$dados->setManhaquinta ( true );
			else
				$dados->setManhaquinta ( false );
			if (isset($_POST ['manhaSexta']))
				$dados->setManhasexta ( true );
			else
				$dados->setManhasexta ( false );
			if (isset($_POST ['manhaSabado']))
				$dados->setManhasabado ( true );
			else
				$dados->setManhasabado ( false );
			
			if (isset($_POST ['tardeDomingo']))
				$dados->setTardedomingo ( TRUE );
			else
				$dados->setTardedomingo ( FALSE );
			if (isset($_POST ['tardeSegunda']))
				$dados->setTardesegunda ( true );
			else
				$dados->setTardesegunda ( false );
			if (isset($_POST ['tardeTerca']))
				$dados->setTardeterca ( true );
			else
				$dados->setTardeterca ( false );
			if (isset($_POST ['tardeQuarta']))
				$dados->setTardequarta ( true );
			else
				$dados->setTardequarta ( false );
			if (isset($_POST ['tardeQuinta']))
				$dados->setTardequinta ( true );
			else
				$dados->setTardequinta ( false );
			if (isset($_POST ['tardeSexta']))
				$dados->setTardesexta ( true );
			else
				$dados->setTardesexta ( false );
			if (isset($_POST ['tardeSabado']))
				$dados->setTardesabado ( true );
			else
				$dados->setTardesabado ( false );
			
			if (isset($_POST ['noiteDomingo']))
				$dados->setNoitedomingo ( TRUE );
			else
				$dados->setNoitedomingo ( FALSE );
			if (isset($_POST ['noiteSegunda']))
				$dados->setNoitesegunda ( true );
			else
				$dados->setNoitesegunda ( false );
			if (isset($_POST ['noiteTerca']))
				$dados->setNoiteterca ( true );
			else
				$dados->setNoiteterca ( false );
			if (isset($_POST ['noiteQuarta']))
				$dados->setNoitequarta ( true );
			else
				$dados->setNoitequarta ( false );
			if (isset($_POST ['noiteQuinta']))
				$dados->setNoitequinta ( true );
			else
				$dados->setNoitequinta ( false );
			if (isset($_POST ['noiteSexta']))
				$dados->setNoitesexta ( true );
			else
				$dados->setNoitesexta ( false );
			if (isset($_POST ['noiteSabado']))
				$dados->setNoitesabado ( true );
			else
				$dados->setNoitesabado ( false );
			
			$dados->setObservacao($_POST['observacao']);
			
			$dados->save ();
			Internals_Message::success("Obrigado por preencher ao formulário de levantamento de dados.");
			$this->_redirect("/index");
		}
	}

}
