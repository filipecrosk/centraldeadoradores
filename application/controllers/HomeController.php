<?php

class HomeController extends Internals_Controller_CloseAction
{

	public function init()
	{
		parent::init();
		$this->view->action = Zend_Controller_Front::getInstance()->getRequest()->getActionName();
		Internals_SubMenu::AddItem("Home", null);
		Internals_SubMenu::AddItem("Notícias", "home/index");
		Internals_SubMenu::AddItem("Aniversariantes", "home/aniversariantes");
	}

	public function indexAction()
	{
		$dados = null;
		$dados = EmailDetailQuery::create()
							->filterByIdDestinatario($this->userId)
							->orderByDataCadastro()
							->find()
							->toArray();

		for ($i = 0; $i < count($dados); $i++) {
			$email = EmailHeaderQuery::create()
				->findPk($dados[$i]["IdEmail"]);
			$dados[$i]["idEmail"] = $email->getIdEmail();
			$dados[$i]["Assunto"] = $email->getAssunto();
			$dados[$i]["Data"] = $email->getDataCadastro();
		}

		$this->view->grid = new Internals_View_Helper_Grid(EmailDetailPeer::OM_CLASS, $this->view, $dados);

		$this->view->grid->addColumn("Assunto", "Assunto", EmailHeaderPeer::OM_CLASS, false);
		$this->view->grid->addColumn("Data", "Data", EmailHeaderPeer::OM_CLASS, false);
		$this->view->grid->setSort(false);

		$link = array("/home/email?id=[1]"=>array(false => "idEmail"));
		$this->view->grid->addLink("Assunto", $link, null, false);
		$this->view->grid->addLink("Data", $link, null, false);
	}

	public function emailAction(){
		$idemail = $this->getRequest()->getParam("id");
		$data = $this->getRequest()->getParam("data");

		$this->view->assunto = EmailHeaderQuery::create()->filterByIdEmail($idemail)->select(array('Assunto'))->findOne();
		$this->view->mensagem = EmailHeaderQuery::create()->filterByIdEmail($idemail)->select(array('CorpoMensagem'))->findOne();
		$data = EmailHeaderQuery::create()->filterByIdEmail($idemail)->select(array('DataCadastro'))->findOne();
		$data = new DateTime($data);
		$this->view->data = $data->format('d/m/Y \à\s H:i');

	}

	public function aniversariantesAction(){
		$idemail = $this->getRequest()->getParam("id");
		$filterData = $this->getRequest()->getParam("filterMes");
		if ( $filterData == null ){
			$data = new DateTime($filterData);
			$this->view->data = $data->format('F');
			$filterData = $data->format('m');
		} else {
			$data = new DateTime("2013-". $filterData ."-01");
			$this->view->data = $data->format('F');
		}

		$dados = UsuarioQuery::create()->where('Aniversario LIKE "%/'. $filterData .'"')->find()->toArray();

		$this->view->grid = new Internals_View_Helper_Grid(UsuarioPeer::OM_CLASS, $this->view, $dados);

		$this->view->grid->addColumn(UsuarioPeer::ANIVERSARIO, "Aniversário");
		$this->view->grid->addColumn(UsuarioPeer::NOME, "Nome");
		$this->view->grid->addColumn(UsuarioPeer::EMAIL, "E-mail");
		$link = array("/usuarios/detalhe?idUsuario=[1]"=>array(UsuarioPeer::OM_CLASS=>UsuarioPeer::ID));
		$this->view->grid->addLink("Nome", $link, null,false);
		$link = array("mailto:[1]"=>array(UsuarioPeer::OM_CLASS=>UsuarioPeer::EMAIL));
		$this->view->grid->addLink("Email", $link, null,false);
	}

}
