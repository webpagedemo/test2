<?php

class ConfigClass {
	private $param = array();		// params array
	private $source = 'db'; 		// possible values db, file
	
	public function getParam( $group, $name )
	{
		return $this->param[ $group ][ $name ] ;
	}
	
	public function setParam( $group, $name, $value )
	{
		$this->param[ $group ][ $name ] = $value;
	}
	
	//////////////////////////////////
	// get param group or all params
	//////////////////////////////////
	
	public function getParams( $group, $all = false )
	{
		$output = array();
		
		if( $all == true )
		{
			foreach( $this->param as $group => $pair )
			{
				$output[ $group ] = $pair;
			}
		}
		else
		{
			foreach( $this->param[ $group ] as $name => $value )
			{
				$output[ $name ] = $value;
			}
		}
		
		return $output;
	}
	
	////////////////////
	// set many params
	////////////////////
	
	public function setParams( $data )
	{
		$this->param = array_merge_recursive( $this->param, $data );
	}
	
}