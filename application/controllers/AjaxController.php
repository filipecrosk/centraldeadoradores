<?php

class AjaxController extends Zend_Controller_Action {
	
	public function init(){
		if  (!$this->getRequest()->isXmlHttpRequest()) {
			
		}
		$this->_helper->layout()->disableLayout();
		$this->_helper->viewRenderer->setNoRender();
		$ajaxContext = $this->_helper->getHelper('AjaxContext');
		$ajaxContext
		->addActionContext('getlocais', 'json')
		->initContext();
	}
	
	public function getlocaisAction(){
		$locais = LocalQuery::create()->orderByNome()->find()->toArray();
		$this->_helper->json($locais);
	}
	
	public function getusuariosAction(){
		$locais = UsuarioQuery::create()->orderByNome()->find()->toArray();
		$this->_helper->json($locais);
	}
	
	public function getfuncoesAction(){
		$funcoes = FuncaoQuery::create()->orderByNome()->find()->toArray();
		$this->_helper->json($funcoes);
	}
	
	public function getdestinatariosAction(){
		$typeahead = array(array("Nome"=>"Todos"));
		$ministerios = MinisterioQuery::create()
			->orderByNome()
			->withColumn("Nome", "Nome")
			->find();
		$bandas = BandaQuery::create()
			->orderByNome()
			->withColumn("Nome", "Nome")
			->find();
		$funcoes = FuncaoQuery::create()
			->orderByNome()
			->withColumn("Nome", "Nome")
			->find();
		$usuarios = UsuarioQuery::create()
			->filterByDesabilitado(0)
			->orderByNome()
			->withColumn("Nome", "Nome")
			->find();
		
		foreach ($ministerios as $ministerio){
			$ministerio->setNome("Area:".$ministerio->getNome());
		}
		
		foreach ($bandas as $banda){
			$banda->setNome("Banda:".$banda->getNome());
		}
		
		foreach ($funcoes as $funcao){
			$funcao->setNome("Função:".$funcao->getNome());
		}
		
		foreach ($usuarios as $usuario){
			$usuario->setNome($usuario->getNome()."<br>(".$usuario->getEmail().")");
		}
		
		$typeahead = array_merge($typeahead, $ministerios->toArray());
		$typeahead = array_merge($typeahead, $bandas->toArray());
		$typeahead = array_merge($typeahead, $funcoes->toArray());
		$typeahead = array_merge($typeahead, $usuarios->toArray());
		
		
		$this->_helper->json($typeahead);
	}
	
	public function getfuncaousuarioAction(){
		$nome = $this->getRequest()->getPost('nome', null);
		$idFuncao = UsuarioQuery::create()
			->joinUsuarioFuncao()
			->filterByNome($nome)
			->select("UsuarioFuncao.IdFuncao")
			->findOne();
		if($idFuncao){
			$funcao = FuncaoQuery::create()->findPk($idFuncao);
			if($funcao){
				echo $funcao->getId();
			} else {
				echo "";
			}
		}  else {
			echo "";
		}
	}
	
	public function validarnomeusuarioAction(){
		$nome = $this->getRequest()->getPost('nome', null);
		$usuario = UsuarioQuery::create()->filterByNome($nome)->findOne();
		if($usuario){
			echo "true";
		} else {
			echo "false";
		}
	}
	
	public function validarlocalAction(){
		$nomeLocal = $this->getRequest()->getPost('local', null);
		$local = LocalQuery::create()->filterByNome($nomeLocal)->findOne();
		if($local){
			echo "true";
		} else {
			echo "false";
		}
	}
	
	public function escalarbandaAction(){
		$idBanda = $this->getRequest()->getPost('idBanda', null);
		$integrantes = UsuarioQuery::create()->orderByNome()->filterByIdBanda($idBanda)->find();
		$funcoes = FuncaoQuery::create()->orderByNome()->find();
		$componentes = "";
		
		foreach ($integrantes as $integrante) {
			$name = Internals_Util::randString(10);
			$options = "<option></option>";
			foreach ($funcoes as $funcao){
				if($integrante->getUsuarioFuncaosJoinFuncao()->getFirst() != null){
					$options .= "<option value='".$funcao->getId()."' ".($integrante->getUsuarioFuncaosJoinFuncao()->getFirst()->getIdFuncao() == $funcao->getId()?"selected=\"selected\"":"").">".$funcao->getNome()."</option>";
				} else {
					$options .= "<option value='".$funcao->getId()."'>".$funcao->getNome()."</option>";
				}
			}
			$componentes .= '
			<div id="'.$name.'-componente" class="well form-inline componente">
				<div class="control-group">
					<label class="control-label" for="'.$name.'-nome">Nome : </label>
					<input type="text" class="nomeUsuario" id="'.$name.'-nome" name="'.$name.'-nome" value="'.$integrante->getNome().'" onfocus="bindarUsuarios()" />
					<label class="control-label" style="margin-left:5px;" for="funcao">Função : </label>
					<select class="funcaoUsuario" id="'.$name.'-funcao" name="'.$name.'-funcao">
						'.$options.'
					</select>
					<img id="'.$name.'+plusFunction" src="/default/images/icone-plus.png" onclick="addFuncao(\''.$name.'\');" >
					<button id="'.$name.'-remover" onclick="return false" class="remover btn btn-danger pull-right"><i class="icon-remove icon-white"></i> Remover</button>
					<button autocomplete="off" data-loading-text="Validando..." id="'.$name.'-confirmar" onclick="return false" class="confirmar disabled btn btn-success pull-right" style="margin-right:7px;"><i class="icon-ok icon-white"></i> <b>Confirmar</b></button>
					<div id="'.$name.'" style="margin-top: 10px">
						<span style="float:left;">Funções adicionadas:</span>
						<input type="hidden" name="'.$name.'idsFuncoes" id="'.$name.'-idsFuncoes" value="" />
					</div>
				</div>
				<h5 id="'.$name.'-alert" style="color:#AD0A0A;text-align:center;"></h5>
			</div>';
		}
		
		echo $componentes;
	}
	
	public function novointegranteAction(){
		$funcoes = FuncaoQuery::create()->orderByNome()->find();
		$options = '<option></option>';
		$name = Internals_Util::randString(10);
		foreach ($funcoes as $funcao){
			$options .= "<option value='".$funcao->getId()."'>".$funcao->getNome()."</option>";
		}
		$componente = '
		<div id="'.$name.'-componente" class="well form-inline componente">
			<div class="control-group">
				<label class="control-label" for="'.$name.'-nome">Nome : </label>
				<input type="text" class="nomeUsuario" id="'.$name.'-nome" name="'.$name.'-nome"  onfocus="bindarUsuarios()" />
				<label class="control-label" style="margin-left:5px;" for="funcao">Funções : </label>
				<select class="funcaoUsuario" id="'.$name.'-funcao" name="'.$name.'-funcao">
					'.$options.'
				</select>
				<img id="'.$name.'-plusFunction" src="/default/images/icone-plus.png" onclick="addFuncao(\''.$name.'\')" >
				<button id="'.$name.'-remover" onclick="return false" class="remover btn btn-danger pull-right"><i class="icon-remove icon-white"></i> Remover</button>
				<button autocomplete="off" data-loading-text="Validando..." id="'.$name.'-confirmar" onclick="return false" class="confirmar disabled btn btn-success pull-right" style="margin-right:7px;"><i class="icon-ok icon-white"></i> <b>Confirmar</b></button>
				<div id="'.$name.'" style="margin-top: 10px">
					<span style="float:left;">Funções adicionadas:</span>
					<input type="hidden" name="'.$name.'idsFuncoes" id="'.$name.'-idsFuncoes" value="" />
				</div>
			</div>
			<h5 id="'.$name.'-alert" style="color:#AD0A0A;text-align:center;"></h5>
		</div>';
		echo $componente;
	}
	
	public function novolocalAction(){
		$nomeLocal = $this->getRequest()->getPost('nomeLocal', null);
		$enderecoLocal = $this->getRequest()->getPost('enderecoLocal', null);
		$local = new Local();
		$local->setNome($nomeLocal);
		$local->setEndereco($enderecoLocal);
		$local->save();
	}
	
	public function geterroralertAction(){
		$texto = $this->getRequest()->getPost('texto', null);
		$componente = '	<div class="alert alert-error" style="margin:auto auto;">
							<a class="close" data-dismiss="alert" href="#">×</a>
								'.$texto.'
							</div>';
		echo $componente;
	}
	
	public function getsuccessalertAction(){
		$texto = $this->getRequest()->getPost('texto', null);
		$componente = '	<div class="alert alert-success" style="margin:auto auto;">
							<a class="close" data-dismiss="alert" href="#">×</a>
								'.$texto.'
							</div>';
		echo $componente;
	}
	
	public function getinfoalertAction(){
		$texto = $this->getRequest()->getPost('texto', null);
		$componente = '	<div class="alert alert-info" style="margin:auto auto;">
							<a class="close" data-dismiss="alert" href="#">×</a>
								'.$texto.'
							</div>';
		echo $componente;
	}
	
	public function checkdataforrecusaAction(){
		$param = $this->getRequest()->getPost('param', null);
		$arr = explode("=", $param);
		$idEscala = $arr[1];
		$escala = EscalaPessoaQuery::create()->findPk($idEscala);
		$nextWeek = time() + (7 * 24 * 60 * 60);
		if(date('Y-m-d', $nextWeek) < $escala->getData('Y-m-d')){
			echo "true";
		} else {
			echo "false";
		}
	}
}
