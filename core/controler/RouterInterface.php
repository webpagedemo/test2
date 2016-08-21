<?php

namespace core;

interface RouterInterface {
	
	public function getModule( $name ) ;
	
	public function getAction( $name ) ;
	
}