<?php

namespace core ;

class AutoLoaderClass {
	
	private $path = array() ;
	private $corePath = 'core' ;
	
	public function __construct ()
	{
		spl_autoload_register ( array( $this, 'loader' ) ) ;
		
		$this->addCorePath () ;
	}
	
	private function addCorePath ()
	{
		$this->registerPath ( $this->corePath . '/model' ) ;
		$this->registerPath ( $this->corePath . '/controller' ) ;
	}
	
	//////////////////////////////
	// register path in path list
	//////////////////////////////
	
	public function registerPath ( $path )
	{
		if( ! in_array ( $path, $this->path ) ) $this->path[] = $path ;
	}
	
	///////////////////////////////
	// load class in register path
	///////////////////////////////
	
	private function loader ( $className )
	{
		/////////////////////////
		// search path for class
		/////////////////////////
		echo "<pre>";
		var_dump('aaa');
		echo "</pre>";
		exit;
		foreach ( $this->path as $path )
		{
			$filePath = $path . '/' . $className . '.php' ;
			
			if( file_exists ( $filePath ) ) include_once ( $filePath ) ;
		}
	}
	
}