<?php

class UsuariosController extends Internals_Controller_CrudCloseAction {
	
	public function init(){
 		$this->permissao = 3;
		parent::init();
		$this->_helper->layout()->setLayout("1column");
	}
	
	public function indexAction() {
		$this->view->ministerios = MinisterioQuery::create()->orderByNome()->find();
		$this->view->funcoes = FuncaoQuery::create()->orderByNome()->find();
		$this->view->modal = array();
		$crudModal = new Internals_CrudModal(new Application_Form_Usuarios(), "Novo Usuário", $this->view);
		$filterMinisterio = $this->getRequest()->getParam("filterMinisterio");
		$filterFuncao = $this->getRequest()->getParam("filterFuncao");
		
		if($filterMinisterio != null && $filterMinisterio != -2){
			$usuariosData = UsuarioMinisterioQuery::create()
				->filterByIdMinisterio($filterMinisterio)
				->joinUsuario()
				->select(array('IdUsuario','Usuario.Id', 'Usuario.Nome', 'Usuario.Email', 'Usuario.Apelido'))
				->orderBy('Usuario.Nome')
				->find()
				->toArray();
			$this->grid = new Internals_View_Helper_Grid(UsuarioMinisterioPeer::OM_CLASS, $this->view, $usuariosData);
			$this->grid->addColumn(UsuarioPeer::NOME, "Nome", UsuarioPeer::OM_CLASS);
			$this->grid->addColumn(UsuarioPeer::APELIDO, "Apelido", UsuarioPeer::OM_CLASS);
			$this->grid->addColumn(UsuarioPeer::EMAIL, "E-Mail", UsuarioPeer::OM_CLASS);
			
			$link = array("/usuarios/detalhe?idUsuario=[1]"=>array(UsuarioMinisterioPeer::OM_CLASS=>UsuarioMinisterioPeer::ID_USUARIO));
			$this->grid->addLink("Nome", $link, UsuarioPeer::OM_CLASS, false);
			
		} else if($filterMinisterio != null && $filterMinisterio == -2){
			$usuariosData = UsuarioQuery::create()->filterByDesabilitado(0)
				->orderByNome()
				->useUsuarioMinisterioQuery(null, Criteria::LEFT_JOIN)
					->filterById(null, Criteria::ISNULL)
				->endUse()
				->select(array('Id', 'Nome', 'Email', 'Apelido'))
				->find()
				->toArray();
			$this->grid = new Internals_View_Helper_Grid(UsuarioPeer::OM_CLASS, $this->view, $usuariosData);
			$this->grid->addColumn(UsuarioPeer::NOME, "Nome");
			$this->grid->addColumn(UsuarioPeer::APELIDO, "Apelido");
			$this->grid->addColumn(UsuarioPeer::EMAIL, "E-Mail");
			$link = array("/usuarios/detalhe?idUsuario=[1]"=>array(UsuarioPeer::OM_CLASS=>UsuarioPeer::ID));
			$this->grid->addLink("Nome", $link, null, false);
		} else if($filterFuncao != null){

		}else {
			$usuariosData = UsuarioQuery::create()->filterByDesabilitado(0)
				->orderByNome()
				->select(array('Id', 'Nome', 'Email', 'Apelido'))
				->find()
				->toArray();
			$this->grid = new Internals_View_Helper_Grid(UsuarioPeer::OM_CLASS, $this->view, $usuariosData);
			$this->grid->addColumn(UsuarioPeer::NOME, "Nome");
			$this->grid->addColumn(UsuarioPeer::APELIDO, "Apelido");
			$this->grid->addColumn(UsuarioPeer::EMAIL, "E-Mail");
			$link = array("/usuarios/detalhe?idUsuario=[1]"=>array(UsuarioPeer::OM_CLASS=>UsuarioPeer::ID));
			$this->grid->addLink("Nome", $link, null, false);
		}
		
		$criterio = array(array("<img alt='editar' onclick='javascript:" . $crudModal->getEditFunction() . "(this);' src='/default/images/icone-editar.png' style='display: block; width:20px; margin-left: auto;margin-right: auto;' >", false));
		$this->grid->addFlagColumn("Editar",$criterio);
		$criterio = array(array("<img alt='delete' onclick='javascript:" . $crudModal->getDeleteFunction() . "(this);return false;' src='/default/images/icone-delete.png' style=' width:20px; display: block; margin-left: auto;margin-right: auto;' >", false));
		$this->grid->addFlagColumn("Excluir",$criterio);
		
		$link = array("#?[1]"=>array(UsuarioPeer::OM_CLASS=>UsuarioPeer::ID));
		$this->grid->addLink("Editar", $link, null, false);
		$link = array("/usuarios/excluir?id=[1]"=>array(UsuarioPeer::OM_CLASS=>UsuarioPeer::ID));
		$this->grid->addLink("Excluir", $link, null, false);
		
		$this->view->modal[] = $crudModal;
		$this->view->crudModalAddAction = $crudModal->getAddAction();
	}
	
	public function detalheAction(){
		$idUsuario = $this->getRequest()->getParam("idUsuario");
		$usuario = UsuarioQuery::create()->findPk($idUsuario);
		$this->view->nome = $usuario->getNome();
		$this->view->apelido = $usuario->getApelido();
		$this->view->email = $usuario->getEmail();
		$this->view->telefone = $usuario->getTelefone();
		$this->view->aniversario = $usuario->getAniversario();
		
		if($usuario->getBandaRelatedByIdBanda() != null){
			$this->view->banda = $usuario->getBandaRelatedByIdBanda()->getNome();
		}
		$this->view->celular = $usuario->getCelular();
		
		$this->view->endereco = $usuario->getEndereco();
		
		$funcoesUsuario = UsuarioFuncaoQuery::create()
			->filterByIdUsuario($idUsuario)
			->joinFuncao()
			->select(array('Id', 'Funcao.Nome'))
			->orderBy('Funcao.Nome')
			->find()
			->toArray();
		
		$this->view->gridFuncao = new Internals_View_Helper_Grid(UsuarioFuncaoPeer::OM_CLASS, $this->view, $funcoesUsuario);
		$this->view->gridFuncao->addColumn(FuncaoPeer::NOME, "Nome da Função", FuncaoPeer::OM_CLASS);
		$this->view->gridFuncao->setNoDataMessage("Nenhuma função cadastrada.");

		$criterio = array(array("<img alt='delete' src='/default/images/icone-delete.png' style=' width:20px; display: block; margin-left: auto;margin-right: auto;' >", false));
		$this->view->gridFuncao->addFlagColumn("Excluir",$criterio);
		$link = array("/usuarios/excluirFuncaoUsuario?id=[1]&idUsuario=".$idUsuario=>array(UsuarioFuncaoPeer::OM_CLASS=>UsuarioFuncaoPeer::ID));
		$this->view->gridFuncao->addLink("Excluir", $link, null, false);
		
		$ministeriosUsuario = UsuarioMinisterioQuery::create()
			->filterByIdUsuario($idUsuario)
			->joinMinisterio()
			->select(array('Id','Ministerio.Nome'))
			->find()
			->toArray();
		
		$this->view->gridMinisterio = new Internals_View_Helper_Grid(UsuarioMinisterioPeer::OM_CLASS, $this->view, $ministeriosUsuario);
		$this->view->gridMinisterio->addColumn(MinisterioPeer::NOME, "Área", MinisterioPeer::OM_CLASS);
		$this->view->gridMinisterio->setNoDataMessage("Nenhuma área cadastrada.");
		
		$criterio = array(array("<img alt='delete' src='/default/images/icone-delete.png' style=' width:20px; display: block; margin-left: auto;margin-right: auto;' >", false));
		$this->view->gridMinisterio->addFlagColumn("Excluir",$criterio);
		$link = array("/usuarios/excluirMinisterioUsuario?id=[1]&idUsuario=".$idUsuario=>array(UsuarioMinisterioPeer::OM_CLASS=>UsuarioMinisterioPeer::ID));
		$this->view->gridMinisterio->addLink("Excluir", $link, null, false);
		
		$optionsAddFuncaoModal = '';
		$funcoes = FuncaoQuery::create()->orderByNome()->find();
		foreach ($funcoes as $funcao){
			$optionsAddFuncaoModal .= "<option value='" . $funcao->getId() . "'>" . $funcao->getNome() . "</option>";
		}

		$formAddFuncao = "	<form action='addFuncaoUsuario?idUsuario=" . $idUsuario . "' method='post' class='form-horizontal'>
								<div class=\"control-group\">
									<label class=\"control-label\" for=\"funcoes\">Função: </label>
									<div class=\"controls\">
										<select id=\"funcao\" name=\"funcao\">
											<option selected=\"selected\"></option>
											" . $optionsAddFuncaoModal . "
										</select>
									</div>
								</div>
							</form>";
		$modalAddFuncao = new Internals_Modal($formAddFuncao, "Adicionar função para " . $usuario->getNome(), $this->view);
		$modalAddFuncao->putSaveButton();
		$modalAddFuncao->generateOpenAction();
		
		$optionsAddMinisterioModal = '';
		$ministerios = MinisterioQuery::create()->orderByNome()->find();
		foreach ($ministerios as $ministerio){
			$optionsAddMinisterioModal .= "<option value='" . $ministerio->getId() . "'>" . $ministerio->getNome() . "</option>";
		}
		
		$formAddMinisterio = "	<form action='addMinisterioUsuario?idUsuario=" . $idUsuario . "' method='post' class='form-horizontal'>
								<div class=\"control-group\">
									<label class=\"control-label\" for=\"funcoes\">Área: </label>
									<div class=\"controls\">
										<select id=\"ministerio\" name=\"ministerio\">
											<option selected=\"selected\"></option>
											" . $optionsAddMinisterioModal . "
										</select>
									</div>
								</div>
							</form>";
		$modalAddMinisterio = new Internals_Modal($formAddMinisterio, "Adicionar área para " . $usuario->getNome(), $this->view);
		$modalAddMinisterio->putSaveButton();
		$modalAddMinisterio->generateOpenAction();
		
		$this->view->gridDisponibilidade = new Internals_View_Helper_Grid(null, $this->view);
		$this->view->gridDisponibilidade->addColumn("periodo"	, "Período", null, null);
		$this->view->gridDisponibilidade->addColumn("domingo"	, "Domingo", null, null);
		$this->view->gridDisponibilidade->addColumn("segunda"	, "Segunda", null, null);
		$this->view->gridDisponibilidade->addColumn("terca"		, "Terça", null, null);
		$this->view->gridDisponibilidade->addColumn("quarta"	, "Quarta", null, null);
		$this->view->gridDisponibilidade->addColumn("quinta"	, "Quinta", null, null);
		$this->view->gridDisponibilidade->addColumn("sexta"		, "Sexta", null, null);
		$this->view->gridDisponibilidade->addColumn("sabado"	, "Sábado", null, null);
		
		$this->view->gridDisponibilidade->setNoDataMessage("O usuário ainda não preencheu ao questionário.");
		$this->view->gridDisponibilidade->setPaginate(false);
		$this->view->gridDisponibilidade->setFilter(false);
		$this->view->gridDisponibilidade->setSort(false);
		$this->view->gridDisponibilidade->setInfo(false);
		
		$this->addDados($this->view->gridDisponibilidade, $idUsuario);
		
		$this->view->modal = array();
		$this->view->modal[] = $modalAddFuncao;		
		$this->view->modal[] = $modalAddMinisterio;
		$this->view->openFuncaoFunction = $modalAddFuncao->getOpenFunction();
		$this->view->openMinisterioFunction = $modalAddMinisterio->getOpenFunction();
	}
	
	public function addfuncaousuarioAction(){
		$this->_helper->layout()->disableLayout();
		$this->_helper->viewRenderer->setNoRender(true);
		$idUsuario = $this->getRequest()->getParam("idUsuario");
		$idFuncao = $this->getRequest()->getPost('funcao', null);
		if($idFuncao != null){
			$funcao = UsuarioFuncaoQuery::create()->filterByIdUsuario($idUsuario)->filterByIdFuncao($idFuncao)->findOne();
			if($funcao == null){
				$funcao = new UsuarioFuncao();
				$funcao->setIdUsuario($idUsuario);
				$funcao->setIdFuncao($idFuncao);
				$funcao->save();
				Internals_Message::success("Função adicionada com sucesso ao usuário.");
				$this->_redirect("/usuarios/detalhe?idUsuario=".$idUsuario);
			} else {
				Internals_Message::info("Este usuário já tem esta função.");
				$this->_redirect("/usuarios/detalhe?idUsuario=".$idUsuario);
			}
		}
		else{
			$this->_redirect("/usuarios/detalhe?idUsuario=".$idUsuario);
		}
	}
	
	public function addministeriousuarioAction(){
		$this->_helper->layout()->disableLayout();
		$this->_helper->viewRenderer->setNoRender(true);
		$idUsuario = $this->getRequest()->getParam("idUsuario");
		$idMinisterio = $this->getRequest()->getPost('ministerio', null);

		if($idMinisterio != null){
			$ministerio = UsuarioMinisterioQuery::create()
				->filterByIdUsuario($idUsuario)
				->filterByIdMinisterio($idMinisterio)
				->findOne();
			if($ministerio == null){
				$ministerio = new UsuarioMinisterio();
				$ministerio->setIdUsuario($idUsuario);
				$ministerio->setIdMinisterio($idMinisterio);
				$ministerio->save();
				Internals_Message::success("Ministério adicionado com sucesso ao usuário.");
				$this->_redirect("/usuarios/detalhe?idUsuario=".$idUsuario);
			} else {
				Internals_Message::info("Este usuário já faz parte deste ministério.");
				$this->_redirect("/usuarios/detalhe?idUsuario=".$idUsuario);
			}
		}
		else{
			$this->_redirect("/usuarios/detalhe?idUsuario=".$idUsuario);
		}
	}
	
	public function excluirfuncaousuarioAction(){
		$this->_helper->layout()->disableLayout();
		$this->_helper->viewRenderer->setNoRender(true);
		$idUsuario = $this->getRequest()->getParam("idUsuario");
		$idFuncao = $this->getRequest()->getParam("id");
		if($idFuncao !=  null){
			UsuarioFuncaoQuery::create()->findPk($idFuncao)->delete();
			Internals_Message::success("Função removida com sucesso.");
		}
		$this->_redirect("/usuarios/detalhe?idUsuario=".$idUsuario);
	}	
	
	public function excluirministeriousuarioAction(){
		$this->_helper->layout()->disableLayout();
		$this->_helper->viewRenderer->setNoRender(true);
		$idUsuario = $this->getRequest()->getParam("idUsuario");
		$idMinisterio = $this->getRequest()->getParam("id");
		if($idMinisterio != null){
			UsuarioMinisterioQuery::create()->findPk($idMinisterio)->delete();
			Internals_Message::success("Este usuário já não faz parte deste ministério.");
		}
		$this->_redirect("/usuarios/detalhe?idUsuario=".$idUsuario);
	}
	
	public function salvarAction(){
		$this->_helper->layout()->disableLayout();
		$this->_helper->viewRenderer->setNoRender(true);
		$nome = $this->getRequest()->getPost('nome', null);
		$apelido = $this->getRequest()->getPost('apelido', null);
		$email = $this->getRequest()->getPost('email', null);
		$banda = $this->getRequest()->getPost('banda', null);
		$usuario = new Usuario();
		$usuario->setNome($nome);
		$usuario->setEmail($email);
		if($banda){
			$usuario->setIdBanda($banda);
		}
		$usuario->setApelido($apelido);
		$senha = Internals_Util::randString(8);
		$usuario->setSenha(md5($senha));
		try{
			new Internals_NovoUsuarioMail($nome, $email, $senha);
			$usuario->save();
		}
		catch (Exception $ex){
			throw $ex;
		}
	}
	
	public function excluirAction(){
		$this->_helper->layout()->disableLayout();
		$this->_helper->viewRenderer->setNoRender(true);
		$idUsuario = $this->getRequest()->getParam("id");
		$usuario = UsuarioQuery::create()->findPk($idUsuario);
		$usuario->setDesabilitado(1);
		$usuario->save();
		Internals_Message::success("Usuario desabilitado com sucesso!");
		$this->_redirect("/usuarios");
	}
	
	public function editarAction(){
		$this->_helper->layout()->disableLayout();
		$this->_helper->viewRenderer->setNoRender(true);
		$id = $this->getRequest()->getPost('id', null);
		$nome = $this->getRequest()->getPost('nome', null);
		$apelido = $this->getRequest()->getPost('apelido', null);
		$email = $this->getRequest()->getPost('email', null);
		$banda = $this->getRequest()->getPost('banda', null);
		$usuario = UsuarioQuery::create()->findPk($id);
		if($banda != 0){
			$usuario->setIdBanda($banda);
		} else {
			$usuario->setIdBanda(null);
		}
		if($nome != null && $email != null){
			$usuario->setNome($nome);
			$usuario->setEmail($email);
			$usuario->setApelido($apelido);
			$usuario->save();
		} else {
			throw new Exception();
		}
	}
	
	public function getformeditAction(){
		$this->_helper->layout()->disableLayout();
		$this->_helper->viewRenderer->setNoRender(true);
		$idUsuario = $this->getRequest()->getPost('id', null);
		$usuario = UsuarioQuery::create()
			->findPk($idUsuario);
		echo "id:".$usuario->getId().",".
			 "nome:".$usuario->getNome().",".
 	 		 "email:".$usuario->getEmail().",".
		 	 "apelido:".$usuario->getApelido().",".
			 "banda:".$usuario->getIdBanda();
	}
	
	private function addDados($grid, $idUsuario){
		$usuario = DadosQuery::create()
			->filterByIdUsuario($idUsuario)
			->find()
			->getFirst();
		if($usuario != null){
			$manha = array
					(
						"periodo"=>	"Manhã", 
						"domingo"=>	"<center>".(ord($usuario->getManhadomingo()) == 1 ? "X" :"")."</center>",  
						"segunda"=>	"<center>".(ord($usuario->getManhasegunda()) == 1 ? "X" :"")."</center>",
						"terca"=>	"<center>".(ord($usuario->getManhaterca()) == 1 ? "X" :"")."</center>",
						"quarta"=>	"<center>".(ord($usuario->getManhaquarta()) == 1 ? "X" :"")."</center>",
						"quinta"=>	"<center>".(ord($usuario->getManhaquinta()) == 1 ? "X" :"")."</center>",
						"sexta"=>	"<center>".(ord($usuario->getManhasexta()) == 1 ? "X" :"")."</center>",
						"sabado"=>	"<center>".(ord($usuario->getManhasabado()) == 1 ? "X" :"")."</center>"
					);
			$tarde = array
			(
					"periodo"=>	"Tarde",
					"domingo"=>	"<center>".(ord($usuario->getTardedomingo()) == 1 ? "X" :"")."</center>",
					"segunda"=>	"<center>".(ord($usuario->getTardesegunda()) == 1 ? "X" :"")."</center>",
					"terca"=>	"<center>".(ord($usuario->getTardeterca()) == 1 ? "X" :"")."</center>",
					"quarta"=>	"<center>".(ord($usuario->getTardequarta()) == 1 ? "X" :"")."</center>",
					"quinta"=>	"<center>".(ord($usuario->getTardequinta()) == 1 ? "X" :"")."</center>",
					"sexta"=>	"<center>".(ord($usuario->getTardesexta()) == 1 ? "X" :"")."</center>",
					"sabado"=>	"<center>".(ord($usuario->getTardesabado()) == 1 ? "X" :"")."</center>"
			);
			$noite = array
			(
					"periodo"=>	"Noite",
					"domingo"=>	"<center>".(ord($usuario->getNoitedomingo()) == 1 ? "X" :"")."</center>",
					"segunda"=>	"<center>".(ord($usuario->getNoitesegunda()) == 1 ? "X" :"")."</center>",
					"terca"=>	"<center>".(ord($usuario->getNoiteterca()) == 1 ? "X" :"")."</center>",
					"quarta"=>	"<center>".(ord($usuario->getNoitequarta()) == 1 ? "X" :"")."</center>",
					"quinta"=>	"<center>".(ord($usuario->getNoitequinta()) == 1 ? "X" :"")."</center>",
					"sexta"=>	"<center>".(ord($usuario->getNoitesexta()) == 1 ? "X" :"")."</center>",
					"sabado"=>	"<center>".(ord($usuario->getNoitesabado()) == 1 ? "X" :"")."</center>"
			);
			$grid->addRow($manha);
			$grid->addRow($tarde);
			$grid->addRow($noite);
			
			$this->view->observacao = $usuario->getObservacao();
		}
	}
}
