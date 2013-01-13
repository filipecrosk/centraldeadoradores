<?php

class Internals_Util {
	
	public static function indexOf($node, $arr) {
		$count = 0;
		foreach ( $arr as $key => $value ) {
			if ($node == $key)
				return $count;
			$count ++;
		}
		return - 1;
	}
	
	public static function excerpt($text, $length){
		if(strlen($text) > $length){
			return substr($text, 0, $length).' ...';
		}
		return $text;
	}
	
	public static function cleanString($palavra){		
		$palavra = ereg_replace("[^a-zA-Z0-9_]", "", strtr($palavra, "áàãâéêíóôõúüçÁÀÃÂÉÊÍÓÔÕÚÜÇ ", "aaaaeeiooouucAAAAEEIOOOUUC_"));
		return $palavra;		
	}
	
	public static function removeSpecial($palavra){
		$palavra = str_replace("ç", "c", $palavra);
		$palavra = str_replace("á", "a", $palavra);
		$palavra = str_replace("à", "a", $palavra);
		$palavra = str_replace("ã", "a", $palavra);
		$palavra = str_replace("â", "a", $palavra);
		$palavra = str_replace("é", "e", $palavra);
		$palavra = str_replace("ê", "e", $palavra);
		$palavra = str_replace("í", "i", $palavra);
		$palavra = str_replace("ó", "o", $palavra);
		$palavra = str_replace("ô", "o", $palavra);
		$palavra = str_replace("õ", "o", $palavra);
		$palavra = str_replace("ú", "u", $palavra);
		$palavra = str_replace("ü", "u", $palavra);
		
		$palavra = str_replace("Ç", "C", $palavra);
		$palavra = str_replace("Á", "A", $palavra);
		$palavra = str_replace("À", "A", $palavra);
		$palavra = str_replace("Ã", "A", $palavra);
		$palavra = str_replace("Â", "A", $palavra);
		$palavra = str_replace("É", "E", $palavra);
		$palavra = str_replace("Ê", "E", $palavra);
		$palavra = str_replace("Í", "I", $palavra);
		$palavra = str_replace("Ó", "O", $palavra);
		$palavra = str_replace("Ô", "O", $palavra);
		$palavra = str_replace("Õ", "O", $palavra);
		$palavra = str_replace("Ú", "U", $palavra);
		$palavra = str_replace("Ü", "U", $palavra);
		
	    return $palavra;
	}
	
	public static function isValidDateTime($dateTime)
	{
		if (preg_match("/^(\\d{4})-(\\d{2})-(\\d{2}) ([01][0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9])$/", $dateTime, $matches)) {
			if (checkdate($matches[2], $matches[3], $matches[1])) {
				return true;
			}
		}
	
		return false;
	}
	
	public static function randString( $length ) {
		$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
		$str ='';
		$size = strlen( $chars );
		for( $i = 0; $i < $length; $i++ ) {
			$str .= $chars[ rand( 0, $size - 1 ) ];
		}
	
		return $str;
	}

}

?>