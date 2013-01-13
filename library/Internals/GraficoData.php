<?php

class Internals_GraficoData {
	
	private $cols = array();
	private $rows = array();
	
	function __construct() {
		// Repensar toda a classe!!!
	}
	
	public function addCol($colName, $type = 'string'){
		array_push($this->cols, array($colName=>$type));
	}
	
	public function addRow($row){
		foreach ($row as $key=>$valor){
			if(is_string($valor))
				$row[$key] = "%&".$valor."%&";
		}
		array_push($this->rows, $row);
	}

	public function getData(){
		//pensar nisso melhor!!!
		$retorno = "{cols:[";
		foreach ($this->cols as $col){
			$retorno .= "{id: '" . Internals_Util::cleanString(key($col)) ." ', label: '" . key($col) . "', type: '" . $col[key($col)] . "'},";
		}
		$retorno = substr_replace($retorno ,"",-1);
		$retorno .= "],";
		$retorno .= "rows:[";
		foreach ($this->rows as $row) {
			$retorno .= '{c:[';
			foreach ($row as $data){
				$retorno .= "{v: " . $data . "},";
			}
			$retorno = substr_replace($retorno ,"",-1);
			$retorno .= "]},";
		}
		$retorno = substr_replace($retorno ,"",-1);
		$retorno .= "]}";
		return str_replace('%&', "'", $retorno);
	}
	
}

?>