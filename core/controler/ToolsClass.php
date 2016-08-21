<?php

// zrobiæ ogólny interface z 2 metodami get tools i pomyœleæ czy coœ jeszce

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