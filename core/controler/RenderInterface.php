<?php

namespace core;

interface RenderInterface {
	
	public $template;
	public $layout;
	
	public function getTemplate( $name );
	
	public function getLayout( $name );
	
}