<?php



/**
 * Skeleton subclass for representing a row from the 'alteracao_informacao_usuario' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.centraldeadoradores
 */
class AlteracaoInformacaoUsuario extends BaseAlteracaoInformacaoUsuario
{
	public function setIdTipoInformacaoId($v){
		parent::setIdTipoInformacaoId($v);
		if($this->isNew()){
			$tipo = TipoInformacaoQuery::create()->findPk($v);
			if($tipo!= null && $tipo->getRequerConfirmacao() == 1){
				$token = new Token();
				$token->fill();
				$this->setToken($token);
			}
		}
	}
	
	public function setTipoInformacao(TipoInformacao $v = null){
		parent::setTipoInformacao($v);
		if($this->isNew() && $v->getRequerConfirmacao() == 1){
			$token = new Token();
			$token->fill();
			$this->setToken($token);
		}
	}
}
