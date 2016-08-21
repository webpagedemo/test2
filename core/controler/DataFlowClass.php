<?php

namespace core ;

class DataFlowClass implements RouterInterface, RenderInterface {
	
	public $template ;
	public $layout ;
	
	private $module ;
	private $action ;
	private $param ;
	
	private $urlParams;
	
	public function __construct()
	{
		// pobieram z konfiga domyślną templatkę
		// jeśli jest ustawiona to nadpisuje to co z konfiga
		
		$urlParams = ToolsClass::parseUrl() ;
		
		echo "<pre>";
		var_dump($urlParams);
		echo "</pre>";
		exit;
		
		$this->getModule( $moduleName ) ;
		$this->getModule( $moduleName ) ;
		
	}
	
	public function getModule( $name )
	{
		
	}
	
	public function getAction( $name )
	{
		
	}
	
	public function getTemplate( $name )
	{
		
	}
	
	public function getLayout( $name )
	{
		
	}
	
}