<?php

class Internals_Auth {

	public static function Autenticar($email, $senha){
		$usuarioDB = UsuarioQuery::create()
			->filterByEmail($email)
			->filterBySenha(md5($senha))
			->filterByDesabilitado(0)
			->findOne();
		if($usuarioDB == null)
			return false;
		$userCredentials = new Zend_Session_Namespace('UserCredentials');
		$userCredentials->id = $usuarioDB->getId();
		$userCredentials->nome = $usuarioDB->getNome();
		$userCredentials->nivelPermissao = $usuarioDB->getNivelPermissao();
		return true;
	}
	
	public static function Check($permissao = 1){
		$userCredentials = new Zend_Session_Namespace('UserCredentials');
		if($userCredentials->nome != null && $userCredentials->nivelPermissao >= $permissao){
			return true;
		}
		return false;
	}
	
	public static function Logout(){
		$userCredentials = new Zend_Session_Namespace('UserCredentials');
		unset($userCredentials->nome);
	}
	
}

?>