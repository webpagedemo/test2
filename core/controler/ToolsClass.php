<?php

// zrobi� og�lny interface z 2 metodami get tools i pomy�le� czy co� jeszce

namespace core;

class ToolsClass {
	
	public static function stringThreeDots( $str, $length )
	{
		
	}
	
	public static function parseUrl( $url = false,  )
	{
		$urlToParse = $url ;
		
		if( $url == false ) $urlToParse = $_SERVER[ 'REQUEST_URI' ] ; 
		
		$toRemoveFromUrl = str_replace( '/index.php', '', $_SERVER[ 'SCRIPT_NAME' ] ) ;
		
		$paramStr = str_replace( $toRemoveFromUrl, '',  $urlToParse );

		return parse_url($paramStr);
		
	}
	
}





$params = parse_url( $_SERVER[ 'REQUEST_URI' ] );

echo "<pre>";
var_dump($_SERVER);
echo "</pre>";
exit;