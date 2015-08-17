<?php

class EstatisticasController extends Internals_Controller_CloseAction 
{

	public function init()
	{
		$this->permissao = 3;
		parent::init();
		$this->view->action = Zend_Controller_Front::getInstance()->getRequest()->getActionName();
		Internals_SubMenu::AddItem("Estatíscticas", null);
		Internals_SubMenu::AddItem("Home", "estatisticas/index");
		Internals_SubMenu::AddItem("Porcentagem de disponibilidade", "estatisticas/porcentagemdisponibilidade");
		Internals_SubMenu::AddItem("Disponibilidade semanal", "estatisticas/disponibilidadesemanal");
		Internals_SubMenu::AddItem("Disponibilidade detalhada", "estatisticas/disponibilidadedetalhada");
	}
	
	public function indexAction()
	{
		$byCargo = $this->byCargo();
		$this->view->total = $byCargo->todos->find()->count();
		$this->view->membro = $byCargo->membro->find()->count();
		$this->view->lider = $byCargo->lider->find()->count();
		$this->view->coordenador = $byCargo->coordenador->find()->count();
		$this->view->discipulador = $byCargo->discipulador->find()->count();
		$this->view->semCelula = $byCargo->semCelula->find()->count();
	}
	
	public function integrantesAction(){
		$dados = null;
		$query = DadosQuery::create();
		switch ($this->getRequest()->getParam("tipo")){
			case "membro":
				$dados = $query
					->filterByEstaemcelula("1")
					->filterByLider("0")
					->filterByDiscipulador("0")
					->filterByCoordenador("0")
					->find()
					->populateRelation("Usuario")
					->toArray();
				break;
			case "lider":
				$dados = $query  
					->filterByLider("1")
					->filterByDiscipulador("0")
					->filterByCoordenador("0")
					->find()
					->populateRelation("Usuario")
					->toArray();
				break;
			case "discipulador":
				$dados = $query 	
					->filterByDiscipulador("1")
					->filterByCoordenador("0")
					->find()
					->populateRelation("Usuario")
					->toArray();
				break;
			case "coordenador":
				$dados = $query
					->filterByCoordenador("1")
					->find()
					->populateRelation("Usuario")
					->toArray();
				break;
			case "semCelula":
				$dados = $query
					->filterByEstaemcelula("0")
					->filterByLider("0")
					->filterByDiscipulador("0")
					->filterByCoordenador("0")
					->find()
					->populateRelation("Usuario")
					->toArray();
				break;
		}
		
		$this->view->grid = new Internals_View_Helper_Grid(UsuarioPeer::OM_CLASS, $this->view, $dados);
		$this->view->grid->addColumn(UsuarioPeer::NOME, "Nome");
		$this->view->grid->addColumn(UsuarioPeer::APELIDO, "Apelido");
		$this->view->grid->addColumn(UsuarioPeer::EMAIL, "E-Mail");
		$link = array("/usuarios/detalhe?idUsuario=[1]"=>array(UsuarioPeer::OM_CLASS=>UsuarioPeer::ID));
		$this->view->grid->addLink("Nome", $link, null, false);
		
		$this->render("listaIntegrantes");
	}
	
	public function porcentagemdisponibilidadeAction(){ 
		$byCargo = $this->byCargo();
		
		$this->view->valorPeriodo = round((100/21),2);
		
		new Internals_Grafico("Tempo disponível Todos", "PieChart", $this->getFreeTimeDataGraphics($this->getFreeTimePercent($byCargo->todos->find(), $byCargo->todos->find()->count())), "{
            title: 'Tempo médio disponível de todos os integrantes do ministério'
          }", $this->view);
		new Internals_Grafico("Tempo disponível de membros de célula", "PieChart", $this->getFreeTimeDataGraphics($this->getFreeTimePercent($byCargo->membro->find(), $byCargo->membro->find()->count())), "{
				title: 'Tempo disponível dos membros de célula'
		}", $this->view);
		new Internals_Grafico("Tempo disponível de líderes", "PieChart", $this->getFreeTimeDataGraphics($this->getFreeTimePercent($byCargo->lider->find(), $byCargo->lider->find()->count())), "{
				title: 'Tempo disponível dos líderes de célula '
		}", $this->view);
		new Internals_Grafico("Tempo disponível de discipuladores", "PieChart", $this->getFreeTimeDataGraphics($this->getFreeTimePercent($byCargo->discipulador->find(), $byCargo->discipulador->find()->count())), "{
				title: 'Tempo disponível dos discipuladores'
		}", $this->view);
		
		new Internals_Grafico("Tempo disponível de coordenadores", "PieChart", $this->getFreeTimeDataGraphics($this->getFreeTimePercent($byCargo->coordenador->find(), $byCargo->coordenador->find()->count())), "{
				title: 'Tempo disponível dos coordenadores'
		}", $this->view);
		$this->render("grafico");
	}
	
	public function getFreeTimeDataGraphics($freeTime){
		$freeTime = round($freeTime, 2);
		$data = new Internals_GraficoData();
		$data->addCol("Disponibilidade");
		$data->addCol("Porcentagem", "number");
		
		$data->addRow(array("Disponível",$freeTime));
		$data->addRow(array("Não disponível",100-$freeTime));
		
		return $data->getData();
	}
	
	public function getFreeTimePercent($group, $total){
		$marcado = 0;
		if($total != 0){
			foreach ($group as $dado){
				if(ord($dado->getManhadomingo()) == 1){
					$marcado++;
				}
				if(ord($dado->getTardedomingo()) == 1){
					$marcado++;
				}
				if(ord($dado->getNoitedomingo()) == 1){
					$marcado++;
				}
				if(ord($dado->getManhasegunda()) == 1){
					$marcado++;
				}
				if(ord($dado->getTardesegunda()) == 1){
					$marcado++;
				}
				if(ord($dado->getNoitesegunda()) == 1){
					$marcado++;
				}
				if(ord($dado->getManhaterca()) == 1){
					$marcado++;
				}
				if(ord($dado->getTardeterca()) == 1){
					$marcado++;
				}
				if(ord($dado->getNoiteterca()) == 1){
					$marcado++;
				}
				if(ord($dado->getManhaquarta()) == 1){
					$marcado++;
				}
				if(ord($dado->getTardequarta()) == 1){
					$marcado++;
				}
				if(ord($dado->getNoitequarta()) == 1){
					$marcado++;
				}
				if(ord($dado->getManhaquinta()) == 1){
					$marcado++;
				}
				if(ord($dado->getTardequinta()) == 1){
					$marcado++;
				}
				if(ord($dado->getNoitequinta()) == 1){
					$marcado++;
				}
				if(ord($dado->getManhasexta()) == 1){
					$marcado++;
				}
				if(ord($dado->getTardesexta()) == 1){
					$marcado++;
				}
				if(ord($dado->getNoitesexta()) == 1){
					$marcado++;
				}
				if(ord($dado->getManhasabado()) == 1){
					$marcado++;
				}
				if(ord($dado->getTardesabado()) == 1){
					$marcado++;
				}
				if(ord($dado->getNoitesabado()) == 1){
					$marcado++;
				}
			}
			return ($marcado*100)/(21*$total);
		}
		return 0;
	}
	
	public function disponibilidadesemanalAction(){
		$defaultOptions = $this->getDisponibilidadeOption();
		$defaultOptions->addOption(array("hAxis"=>array("title"=>"Disponibilidade Semanal")));
		$defaultOptions->addOption(array("title"=>"Disponibilidade semanal"));
		$defaultOptions->addOption(array("vAxis"=>array("title"=>"% porcentagem", "maxValue"=>100)));
		new Internals_Grafico("Porcentagem de pessoas livres", "ComboChart", $this->getDataSemanal(), $defaultOptions->getOptions(), $this->view);
		$this->render("grafico");
	}
	
	public function getDataSemanal(){
		$data = new Internals_GraficoData();
		$data->addCol("Dia");
		$data->addCol("Manhã", "number");
		$data->addCol("Tarde", "number");
		$data->addCol("Noite", "number");
		$total = DadosQuery::create()->find()->count();
		
		$data->addRow(array("Segunda", round(((DadosQuery::create()->filterByManhasegunda("1")->find()->count()*100)/$total),2), round(((DadosQuery::create()->filterByTardesegunda("1")->find()->count()*100)/$total),2), round(((DadosQuery::create()->filterByNoitesegunda("1")->find()->count()*100)/$total),2)));
		$data->addRow(array("Terça", round(((DadosQuery::create()->filterByManhaterca("1")->find()->count()*100)/$total),2), round(((DadosQuery::create()->filterByTardeterca("1")->find()->count()*100)/$total),2), round(((DadosQuery::create()->filterByNoiteterca("1")->find()->count()*100)/$total),2)));
		$data->addRow(array("Quarta", round(((DadosQuery::create()->filterByManhaquarta("1")->find()->count()*100)/$total),2), round(((DadosQuery::create()->filterByTardequarta("1")->find()->count()*100)/$total),2), round(((DadosQuery::create()->filterByNoitequarta("1")->find()->count()*100)/$total),2)));
		$data->addRow(array("Quinta", round(((DadosQuery::create()->filterByManhaquinta("1")->find()->count()*100)/$total),2), round(((DadosQuery::create()->filterByTardequinta("1")->find()->count()*100)/$total),2), round(((DadosQuery::create()->filterByNoitequinta("1")->find()->count()*100)/$total),2)));
		$data->addRow(array("Sexta", round(((DadosQuery::create()->filterByManhasexta("1")->find()->count()*100)/$total),2), round(((DadosQuery::create()->filterByTardesexta("1")->find()->count()*100)/$total),2), round(((DadosQuery::create()->filterByNoitesexta("1")->find()->count()*100)/$total),2)));
		$data->addRow(array("Sabado", round(((DadosQuery::create()->filterByManhasabado("1")->find()->count()*100)/$total),2), round(((DadosQuery::create()->filterByTardesabado("1")->find()->count()*100)/$total),2), round(((DadosQuery::create()->filterByNoitesabado("1")->find()->count()*100)/$total),2)));
		$data->addRow(array("Domingo", round(((DadosQuery::create()->filterByManhadomingo("1")->find()->count()*100)/$total),2), round(((DadosQuery::create()->filterByTardedomingo("1")->find()->count()*100)/$total),2), round(((DadosQuery::create()->filterByNoitedomingo("1")->find()->count()*100)/$total),2)));
		
		return $data->getData();
	}
	
	public function disponibilidadedetalhadaAction(){
		$defaultOptions = $this->getDisponibilidadeOption();
		$defaultOptions->addOption(array("hAxis"=>array("title"=>"Segunda")));
		$defaultOptions->addOption(array("title"=>"Disponibilidade diária"));
		$defaultOptions->addOption(array("vAxis"=>array("title"=>"Quantidade de pessoas livres")));
		new Internals_Grafico("Segunda", "ComboChart", $this->getDataSegunda(), $defaultOptions->getOptions(), $this->view);
		$defaultOptions = $this->getDisponibilidadeOption();
		$defaultOptions->addOption(array("hAxis"=>array("title"=>"Terça")));
		$defaultOptions->addOption(array("title"=>"Disponibilidade diária"));
		$defaultOptions->addOption(array("vAxis"=>array("title"=>"Quantidade de pessoas livres")));
		new Internals_Grafico("Terça", "ComboChart", $this->getDataTerca(), $defaultOptions->getOptions(), $this->view);
		$defaultOptions = $this->getDisponibilidadeOption();
		$defaultOptions->addOption(array("hAxis"=>array("title"=>"Quarta")));
		$defaultOptions->addOption(array("title"=>"Disponibilidade diária"));
		$defaultOptions->addOption(array("vAxis"=>array("title"=>"Quantidade de pessoas livres")));
		new Internals_Grafico("Quarta", "ComboChart", $this->getDataQuarta(), $defaultOptions->getOptions(), $this->view);
		$defaultOptions = $this->getDisponibilidadeOption();
		$defaultOptions->addOption(array("hAxis"=>array("title"=>"Quinta")));
		$defaultOptions->addOption(array("title"=>"Disponibilidade diária"));
		$defaultOptions->addOption(array("vAxis"=>array("title"=>"Quantidade de pessoas livres")));
		new Internals_Grafico("Quinta", "ComboChart", $this->getDataQuinta(), $defaultOptions->getOptions(), $this->view);
		$defaultOptions = $this->getDisponibilidadeOption();
		$defaultOptions->addOption(array("hAxis"=>array("title"=>"Sexta")));
		$defaultOptions->addOption(array("title"=>"Disponibilidade diária"));
		$defaultOptions->addOption(array("vAxis"=>array("title"=>"Quantidade de pessoas livres")));
		new Internals_Grafico("Sexta", "ComboChart", $this->getDataSexta(), $defaultOptions->getOptions(), $this->view);
		$defaultOptions = $this->getDisponibilidadeOption();
		$defaultOptions->addOption(array("hAxis"=>array("title"=>"Sábado")));
		$defaultOptions->addOption(array("title"=>"Disponibilidade diária"));
		$defaultOptions->addOption(array("vAxis"=>array("title"=>"Quantidade de pessoas livres")));
		new Internals_Grafico("Sábado", "ComboChart", $this->getDataSabado(), $defaultOptions->getOptions(), $this->view);
		$defaultOptions = $this->getDisponibilidadeOption();
		$defaultOptions->addOption(array("hAxis"=>array("title"=>"Domingo")));
		$defaultOptions->addOption(array("title"=>"Disponibilidade diária"));
		$defaultOptions->addOption(array("vAxis"=>array("title"=>"Quantidade de pessoas livres")));
		new Internals_Grafico("Domingo", "ComboChart", $this->getDataDomingo(), $defaultOptions->getOptions(), $this->view);
		$this->render("grafico");
	}
	
	public function byCargo(){
		$dados = null;
		$dados->todos = DadosQuery::create();
		$semCelula = DadosQuery::create();
		$membro = DadosQuery::create();
		$lider = DadosQuery::create();
		$discipulador = DadosQuery::create();
		$coordenador = DadosQuery::create();
		$dados->semCelula = $semCelula->filterByEstaemcelula("0")
			->filterByEstaemcelula("0")
			->filterByLider("0")
			->filterByDiscipulador("0")
			->filterByCoordenador("0");
		$dados->membro = $membro->filterByEstaemcelula("1")
			->filterByLider("0")
			->filterByDiscipulador("0")
			->filterByCoordenador("0");
		$dados->lider = $lider->filterByLider("1")
			->filterByDiscipulador("0")
			->filterByCoordenador("0");
		$dados->discipulador = $discipulador->filterByDiscipulador("1")
			->filterByCoordenador("0");
		$dados->coordenador = $coordenador->filterByCoordenador("1");
	
		return $dados;
	}
	
	public function getDataSegunda(){
		$data = new Internals_GraficoData();
		$data->addCol("Turno");
		$data->addCol("Membro", "number");
		$data->addCol("Líder", "number");
		$data->addCol("Discipulador", "number");
		$data->addCol("Coordenador", "number");
		
		$byCargoManha = $this->byCargo();
		$byCargoTarde = $this->byCargo();
		$byCargoNoite = $this->byCargo();
		
		$data->addRow(array("Manhã", $byCargoManha->membro->filterByManhasegunda("1")->find()->count(), $byCargoManha->lider->filterByManhasegunda("1")->find()->count(), $byCargoManha->discipulador->filterByManhasegunda("1")->find()->count(), $byCargoManha->coordenador->filterByManhasegunda("1")->find()->count()));
		$data->addRow(array("Tarde", $byCargoTarde->membro->filterByTardesegunda("1")->find()->count(), $byCargoTarde->lider->filterByTardesegunda("1")->find()->count(), $byCargoTarde->discipulador->filterByTardesegunda("1")->find()->count(), $byCargoTarde->coordenador->filterByTardesegunda("1")->find()->count()));
		$data->addRow(array("Noite", $byCargoNoite->membro->filterByNoitesegunda("1")->find()->count(), $byCargoNoite->lider->filterByNoitesegunda("1")->find()->count(), $byCargoNoite->discipulador->filterByNoitesegunda("1")->find()->count(), $byCargoNoite->coordenador->filterByNoitesegunda("1")->find()->count()));
		
		return $data->getData();
	}
	
	public function getDataTerca(){
		$data = new Internals_GraficoData();
		$data->addCol("Turno");
		$data->addCol("Membro", "number");
		$data->addCol("Líder", "number");
		$data->addCol("Discipulador", "number");
		$data->addCol("Coordenador", "number");
	
		$byCargoManha = $this->byCargo();
		$byCargoTarde = $this->byCargo();
		$byCargoNoite = $this->byCargo();
	
		$data->addRow(array("Manhã", $byCargoManha->membro->filterByManhaterca("1")->find()->count(), $byCargoManha->lider->filterByManhaterca("1")->find()->count(), $byCargoManha->discipulador->filterByManhaterca("1")->find()->count(), $byCargoManha->coordenador->filterByManhaterca("1")->find()->count()));
		$data->addRow(array("Tarde", $byCargoTarde->membro->filterByTardeterca("1")->find()->count(), $byCargoTarde->lider->filterByTardeterca("1")->find()->count(), $byCargoTarde->discipulador->filterByTardeterca("1")->find()->count(), $byCargoTarde->coordenador->filterByTardeterca("1")->find()->count()));
		$data->addRow(array("Noite", $byCargoNoite->membro->filterByNoiteterca("1")->find()->count(), $byCargoNoite->lider->filterByNoiteterca("1")->find()->count(), $byCargoNoite->discipulador->filterByNoiteterca("1")->find()->count(), $byCargoNoite->coordenador->filterByNoiteterca("1")->find()->count()));
	
		return $data->getData();
	}
	
	public function getDataQuarta(){
		$data = new Internals_GraficoData();
		$data->addCol("Turno");
		$data->addCol("Membro", "number");
		$data->addCol("Líder", "number");
		$data->addCol("Discipulador", "number");
		$data->addCol("Coordenador", "number");
	
		$byCargoManha = $this->byCargo();
		$byCargoTarde = $this->byCargo();
		$byCargoNoite = $this->byCargo();
	
		$data->addRow(array("Manhã", $byCargoManha->membro->filterByManhaquarta("1")->find()->count(), $byCargoManha->lider->filterByManhaquarta("1")->find()->count(), $byCargoManha->discipulador->filterByManhaquarta("1")->find()->count(), $byCargoManha->coordenador->filterByManhaquarta("1")->find()->count()));
		$data->addRow(array("Tarde", $byCargoTarde->membro->filterByTardequarta("1")->find()->count(), $byCargoTarde->lider->filterByTardequarta("1")->find()->count(), $byCargoTarde->discipulador->filterByTardequarta("1")->find()->count(), $byCargoTarde->coordenador->filterByTardequarta("1")->find()->count()));
		$data->addRow(array("Noite", $byCargoNoite->membro->filterByNoitequarta("1")->find()->count(), $byCargoNoite->lider->filterByNoitequarta("1")->find()->count(), $byCargoNoite->discipulador->filterByNoitequarta("1")->find()->count(), $byCargoNoite->coordenador->filterByNoitequarta("1")->find()->count()));
	
		return $data->getData();
	}
	
	public function getDataQuinta(){
		$data = new Internals_GraficoData();
		$data->addCol("Turno");
		$data->addCol("Membro", "number");
		$data->addCol("Líder", "number");
		$data->addCol("Discipulador", "number");
		$data->addCol("Coordenador", "number");
	
		$byCargoManha = $this->byCargo();
		$byCargoTarde = $this->byCargo();
		$byCargoNoite = $this->byCargo();
	
		$data->addRow(array("Manhã", $byCargoManha->membro->filterByManhaquinta("1")->find()->count(), $byCargoManha->lider->filterByManhaquinta("1")->find()->count(), $byCargoManha->discipulador->filterByManhaquinta("1")->find()->count(), $byCargoManha->coordenador->filterByManhaquinta("1")->find()->count()));
		$data->addRow(array("Tarde", $byCargoTarde->membro->filterByTardequinta("1")->find()->count(), $byCargoTarde->lider->filterByTardequinta("1")->find()->count(), $byCargoTarde->discipulador->filterByTardequinta("1")->find()->count(), $byCargoTarde->coordenador->filterByTardequinta("1")->find()->count()));
		$data->addRow(array("Noite", $byCargoNoite->membro->filterByNoitequinta("1")->find()->count(), $byCargoNoite->lider->filterByNoitequinta("1")->find()->count(), $byCargoNoite->discipulador->filterByNoitequinta("1")->find()->count(), $byCargoNoite->coordenador->filterByNoitequinta("1")->find()->count()));
	
		return $data->getData();
	}
	
	public function getDataSexta(){
		$data = new Internals_GraficoData();
		$data->addCol("Turno");
		$data->addCol("Membro", "number");
		$data->addCol("Líder", "number");
		$data->addCol("Discipulador", "number");
		$data->addCol("Coordenador", "number");
	
		$byCargoManha = $this->byCargo();
		$byCargoTarde = $this->byCargo();
		$byCargoNoite = $this->byCargo();
	
		$data->addRow(array("Manhã", $byCargoManha->membro->filterByManhasexta("1")->find()->count(), $byCargoManha->lider->filterByManhasexta("1")->find()->count(), $byCargoManha->discipulador->filterByManhasexta("1")->find()->count(), $byCargoManha->coordenador->filterByManhasexta("1")->find()->count()));
		$data->addRow(array("Tarde", $byCargoTarde->membro->filterByTardesexta("1")->find()->count(), $byCargoTarde->lider->filterByTardesexta("1")->find()->count(), $byCargoTarde->discipulador->filterByTardesexta("1")->find()->count(), $byCargoTarde->coordenador->filterByTardesexta("1")->find()->count()));
		$data->addRow(array("Noite", $byCargoNoite->membro->filterByNoitesexta("1")->find()->count(), $byCargoNoite->lider->filterByNoitesexta("1")->find()->count(), $byCargoNoite->discipulador->filterByNoitesexta("1")->find()->count(), $byCargoNoite->coordenador->filterByNoitesexta("1")->find()->count()));
	
		return $data->getData();
	}
	
	public function getDataSabado(){
		$data = new Internals_GraficoData();
		$data->addCol("Turno");
		$data->addCol("Membro", "number");
		$data->addCol("Líder", "number");
		$data->addCol("Discipulador", "number");
		$data->addCol("Coordenador", "number");
	
		$byCargoManha = $this->byCargo();
		$byCargoTarde = $this->byCargo();
		$byCargoNoite = $this->byCargo();
	
		$data->addRow(array("Manhã", $byCargoManha->membro->filterByManhasabado("1")->find()->count(), $byCargoManha->lider->filterByManhasabado("1")->find()->count(), $byCargoManha->discipulador->filterByManhasabado("1")->find()->count(), $byCargoManha->coordenador->filterByManhasabado("1")->find()->count()));
		$data->addRow(array("Tarde", $byCargoTarde->membro->filterByTardesabado("1")->find()->count(), $byCargoTarde->lider->filterByTardesabado("1")->find()->count(), $byCargoTarde->discipulador->filterByTardesabado("1")->find()->count(), $byCargoTarde->coordenador->filterByTardesabado("1")->find()->count()));
		$data->addRow(array("Noite", $byCargoNoite->membro->filterByNoitesabado("1")->find()->count(), $byCargoNoite->lider->filterByNoitesabado("1")->find()->count(), $byCargoNoite->discipulador->filterByNoitesabado("1")->find()->count(), $byCargoNoite->coordenador->filterByNoitesabado("1")->find()->count()));
	
		return $data->getData();
	}
	
	public function getDataDomingo(){
		$data = new Internals_GraficoData();
		$data->addCol("Turno");
		$data->addCol("Membro", "number");
		$data->addCol("Líder", "number");
		$data->addCol("Discipulador", "number");
		$data->addCol("Coordenador", "number");
	
		$byCargoManha = $this->byCargo();
		$byCargoTarde = $this->byCargo();
		$byCargoNoite = $this->byCargo();
	
		$data->addRow(array("Manhã", $byCargoManha->membro->filterByManhadomingo("1")->find()->count(), $byCargoManha->lider->filterByManhadomingo("1")->find()->count(), $byCargoManha->discipulador->filterByManhadomingo("1")->find()->count(), $byCargoManha->coordenador->filterByManhadomingo("1")->find()->count()));
		$data->addRow(array("Tarde", $byCargoTarde->membro->filterByTardedomingo("1")->find()->count(), $byCargoTarde->lider->filterByTardedomingo("1")->find()->count(), $byCargoTarde->discipulador->filterByTardedomingo("1")->find()->count(), $byCargoTarde->coordenador->filterByTardedomingo("1")->find()->count()));
		$data->addRow(array("Noite", $byCargoNoite->membro->filterByNoitedomingo("1")->find()->count(), $byCargoNoite->lider->filterByNoitedomingo("1")->find()->count(), $byCargoNoite->discipulador->filterByNoitedomingo("1")->find()->count(), $byCargoNoite->coordenador->filterByNoitedomingo("1")->find()->count()));
	
		return $data->getData();
	}
	
	public function getDisponibilidadeOption(){
		$option = new Internals_GraficoOption();
		$option->addOption(array("seriesType"=>"bars"));
		return $option;
	}
	
}
