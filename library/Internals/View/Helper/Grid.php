<?php

class Internals_View_Helper_Grid extends Zend_View_Helper_Abstract {

	private $gridName;
	private $type; 
	private $noDataMessage;
	
	public $target = "_self";
	
	private $header = array ();
	private $footer = false;
	private $content = array ();
	private $link = array ();
	private $flags = array();
	
	private $hasData = false;
	private $paginate = true;
	private $filter = true;
	private $sort = true;
	private $info = true;
	private $showWeekDay = false;
	private $showDayPart = false;
	
	function __construct($type, $view, $data = null) {
		$this->view = $view;
		$this->type = $type;
		if ($data != null && is_array ( $data )) {
			$this->content = $data;
			$this->hasData = true;
		}
		$this->generateGridName();
	}
	
	public function renderGrid() {
		if ($this->hasData) {
			$this->addJavaScript ();
			$header = '<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="'.$this->getGridName().'">';
			$header .= '	<thead>' . PHP_EOL;
			$header .= '		<tr>' . PHP_EOL;
			
			if (count ( $this->header ) == 0)
				$this->putDefaultHeader ();
			foreach ( $this->header as $title ) {
				$header .= '			<th>' . $title . '</th>' . PHP_EOL;
			}
			
			$header .= '		</tr>' . PHP_EOL;
			$header .= '	</thead>' . PHP_EOL;
			$content = '	<tbody>' . PHP_EOL;
			foreach ( $this->content as $row ) {
				$content .= '		<tr>';
				$coluna = 0;
				foreach ( $this->header as $head ) {
					if(array_key_exists($head, $this->flags)){
						foreach($this->flags[$head] as $flags){
							$continue = false;
							if(is_array($flags)){
								foreach ($flags as $flag){
									if(is_array($flag)){
										if ($flag[1]  == "equal") {
											$retorno = '';
											if(array_key_exists(3, $flags[1])){ 
												$retorno = $this->compareEqual($row[BasePeer::translateFieldname ( $flags[1][3], $flags[1][0], BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME )],$flags[1][2],$flags[0]);
											} else {
												$retorno = $this->compareEqual($row[$flags[1][0]],$flags[1][2],$flags[0]);
											}
											if($retorno != false){
												$content .= '<td>';
												if(array_key_exists($head, $this->link)){
													$link = array_keys($this->link[$head]);
													$link = $this->substituiParametros($row, $link[0],$this->link[$head]);
													$content .= "<a target='".$this->target."' class='".$this->getGridName()."Link' href=\"".$link."\">";
												}
												$content .= $retorno;
												if(array_key_exists($head, $this->link)){
													$content .= "</a>";
												}
												$content .= '</td>';
												$continue = true;
												break;
											}
										} else {
											if(array_key_exists(3, $flags[1])){
												$retorno = $this->compareNotEqual($row[BasePeer::translateFieldname ( $flags[1][3], $flags[1][0], BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME )],$flags[1][2],$flags[0]);
											} else {
												$retorno = $this->compareNotEqual($row[$flags[1][0]],$flags[1][2],$flags[0]);
											}
											if($retorno != false){
												$content .= '<td>';
												if(array_key_exists($head, $this->link)){
													$link = array_keys($this->link[$head]);
													$link = $this->substituiParametros($row, $link[0],$this->link[$head]);
													$content .= "<a target='".$this->target."' class='".$this->getGridName()."Link' href=\"".$link."\">";
												}
												$content .= $retorno;
												if(array_key_exists($head, $this->link)){
													$content .= "</a>";
												}
												$content .= '</td>';
												$continue = true;
												break;
											}
										}
									} else {
										if(array_key_exists(1, $flags) && $flags[1] == false){
											$content .= '<td>';
											if(array_key_exists($head, $this->link)){
												$link = array_keys($this->link[$head]);
												$link = $this->substituiParametros($row, $link[0],$this->link[$head]);
												$content .= "<a target='".$this->target."' class='".$this->getGridName()."Link' href=\"".$link."\">";
											}
											$content .= $flags[0];
											if(array_key_exists($head, $this->link)){
												$content .= "</a>";
											}
											$content .= '</td>';
											$continue = true;
											break;
										}
									}
								}
							}
							if($continue == true){
								break;
							}
						}
						continue;
					}
					foreach ( $row as $key => $value ) {
						if (Internals_Util::indexOf ( $key, $this->header ) == $coluna) {
							$content .= '<td>';
							if(array_key_exists($key, $this->link)){
								$link = array_keys($this->link[$key]);
								$link = $this->substituiParametros($row, $link[0],$this->link[$key]);
								$content .= "<a target='".$this->target."' class='".$this->getGridName()."Link' href=\"".$link."\">";
							}
							if(Internals_Util::isValidDateTime($value)){
								$data = new DateTime($value);
								$content .= $data->format('d/m/Y à\s H:i');
								if($this->showDayPart){
									$content .= " - ".Internals_Util::getPartDay($data->format('H:i:s'));
								}
								if($this->showWeekDay){
									$content .= " - ".Internals_Util::getDayOfWeekName($data->format('w'));
								}
							} else {
								$content .= Internals_Util::excerpt($value, 300);
							}
							if(array_key_exists($key, $this->link)){
								$content .= "</a>";
							}
							$content .= '</td>';
						}
					}
					$coluna ++;
				}
				$content .= '		</tr>';
			}
			
			$content .= '	</tbody>' . PHP_EOL;
			
			$footer = '';
			
			if ($this->footer == true) {
				$footer = '	<tfoot>' . PHP_EOL;
				$footer .= '		<tr>' . PHP_EOL;
				foreach ( $this->header as $title ) {
					$footer .= '			<td>' . $title . '</td>' . PHP_EOL;
				}
				$footer .= '		</tr>' . PHP_EOL;
				$footer .= '	</tfoot>' . PHP_EOL;
			}
			
			$footer .= '</table>' . PHP_EOL;
			echo $header . $content . $footer;
		} else{
			echo ($this->noDataMessage == null ? "<h4>Sem Dados</h4>" : "<h4>" . $this->noDataMessage . "</h4>");
		}
	}
	
	private function substituiParametros($row, $link, $parametros){
		$cont = 1;
		foreach ($parametros as $parametro){
			foreach ($parametro as $teste){
				$tipo = array_keys($parametro);
				if($tipo[$cont-1] == false){
					$link = str_replace("[".$cont."]", $row[$parametro[$cont-1]], $link);
				} else {
				
					$link = str_replace("[".$cont."]", 
							($tipo[$cont-1] == $this->type? 
									$row[BasePeer::translateFieldname ( $tipo[$cont-1], 
									$parametro[$tipo[$cont-1]], 
									BasePeer::TYPE_COLNAME, 
									BasePeer::TYPE_PHPNAME )] :
									 $row[$tipo[$cont-1].".".BasePeer::translateFieldname ( $tipo[$cont-1], 
									$parametro[$tipo[$cont-1]], 
									BasePeer::TYPE_COLNAME, 
									BasePeer::TYPE_PHPNAME )]), 
							$link);
				}
				$cont++;
			}
		}
		return $link;
	}
	
	private function compareEqual($valor, $comp, $result){
		if($valor == $comp){
			return $result;
		}
		return false;
	}
	
	private function compareNotEqual($valor, $comp, $result){
		if($valor != $comp){
			return $result;
		}
		return false;
	}
	
	public function configureDefault() {
	
	}
	/*
	 * Como usar:
	 * $this->view->grid->addColumn(LocalPeer::NOME, "Local", LocalPeer::OM_CLASS);
	 */
	public function addColumn($column, $alias, $type = null, $translate = true) {
		if($type == null){
			$type = $this->type;
		}
		$key = $column;
		if($translate){
			$key = BasePeer::translateFieldname ( $type, $column, BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME );
		}
		if($type == $this->type || !$translate){
			$this->header [$key] = $alias;
		} else{
			$this->header [$type.".".$key] = $alias;
		}
	}
	/*
	 * 	$criterio = array(array("<img src='/default/images/icone-positivo.png' alt='Escalado' style='display: block;margin-left: auto;margin-right: auto;' >", array(EscalaPessoaPeer::DATA, "equal", "2012-08-07 00:00:00", EscalaPessoaPeer::OM_CLASS))
	 *					 ,array("<img src='/default/images/icone-negativo.png' alt='Escala recusada' style='display: block;margin-left: auto;margin-right: auto;' >", array(EscalaPessoaPeer::DATA, "notequal", "2012-08-07 00:00:00", EscalaPessoaPeer::OM_CLASS)));
	 *	$this->view->grid->addFlagColumn("Escalado?",$criterio);
	 */
	public function addFlagColumn($header, $flags) {
		$this->flags [$header]  = $flags;
		if(!array_key_exists($header, $this->header)){
			$this->header [$header] = $header;
		}
	}
	/*
	 * Como usar:
	 * $link = array("/escala/detalhes?teste=[1]&teste2=[2]"=>array(EscalaPessoaPeer::OM_CLASS=>EscalaPessoaPeer::DATA,
	 *																 LocalPeer::OM_CLASS=>LocalPeer::NOME));
	 * $this->view->grid->addLink(LocalPeer::NOME, $link, LocalPeer::OM_CLASS);
	 */
	public function addLink ($column, $link, $type = null, $translate = true) {
		if($type == null){
			$type = $this->type;
		}
		$key = $column;
		if($translate){
			$key = BasePeer::translateFieldname ( $type, $column, BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME );
		}
		if($type == $this->type){
			$this->link [$key] = $link;
		} else{
			$this->link [$type.".".$key] = $link;
		}
	}
	
	public function addRow($row){
		$this->hasData = true;
		$this->content[] = $row;
	}
	
	public function setShowFooter($footer) {
		$this->footer = $footer;
	}
	
	public function getGridName() {
		return $this->gridName;
	}
	
	public function setGridName($gridName) {
		$this->gridName = $gridName;
	}
	
	public function setNoDataMessage($message){
		$this->noDataMessage = $message;
	}
	
	public function setPaginate($bool){
		$this->paginate = $bool;
	}
	
	public function setFilter($bool){
		$this->filter = $bool;
	}
	
	public function setSort($bool){
		$this->sort = $bool;
	}
	
	public function setInfo($bool){
		$this->info = $bool;
	}
	
	public function setShowWeekDay()
	{
		$this->showWeekDay = true;
	}
	
	public function setShowDayPart()
	{
		$this->showDayPart = true;
	}
	
	
	private function putDefaultHeader() {
		foreach ( $this->content [0] as $key => $value ) {
			$this->header [$key] = $key;
		}
	}
	
	private function generateGridName() {
		// /TODO Implementar o método que crie nomes pseudo-aleatórios para os grids
		$this->gridName = "grid".Internals_Util::randString(10);
	}
	
	private function addJavaScript() {
		$baseUrl = Zend_Controller_Front::getInstance ()->getRequest ()->getBaseUrl ();
		$this->view->headLink ()->prependStylesheet ( $baseUrl . "/default/dataTable/css/DT_bootstrap.css" );
		$this->view->headLink ()->prependStylesheet ( $baseUrl . "/default/bootstrap/css/bootstrap.min.css" );
		$this->view->headScript ()->prependFile ( $baseUrl . '/default/dataTable/js/DT_bootstrap.js', 'text/javascript' );
		$this->view->headScript ()->prependFile ( $baseUrl . '/default/dataTable/js/jquery.dataTables.min.js', 'text/javascript' );
		
		$this->view->inlineScript ()->captureStart ();
		echo "$(document).ready(function() {
					$('#".$this->getGridName()."').dataTable({
						\"sPaginationType\": \"bootstrap\",
						\"bPaginate\": ".($this->paginate ? "true" : "false").",
				        \"bFilter\": ".($this->filter ? "true" : "false").", 
        				\"bSort\": ".($this->sort ? "true" : "false").",
        				\"bInfo\": ".($this->info ? "true" : "false").",
						\"oLanguage\": {
						    \"sProcessing\":   \"Processando...\",
						    \"sLengthMenu\":   \"Mostrar _MENU_ registros\",
						    \"sZeroRecords\":  \"Não foram encontrados resultados\",
						    \"sInfo\":         \"Mostrando de _START_ até _END_ de _TOTAL_ registros\",
						    \"sInfoEmpty\":    \"Mostrando de 0 até 0 de 0 registros\",
						    \"sInfoFiltered\": \"(filtrado de _MAX_ registros no total)\",
						    \"sInfoPostFix\":  \"\",
						    \"sSearch\":       \"Buscar:\",
						    \"sUrl\":          \"\",
						    \"oPaginate\": {
						        \"sFirst\":    \"Primeiro\",
						        \"sPrevious\": \"Anterior\",
						        \"sNext\":     \"Seguinte\",
						        \"sLast\":     \"Último\"
						   }
						}
					});
				} );";
		$this->view->inlineScript ()->captureEnd ();
	}
}

?>