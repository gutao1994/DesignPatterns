<?php

namespace DesignPatterns\Creational\AbstractFactory;

abstract class Picture implements MediaInterface
{
	protected $path;
	
	protected $name;
	
	public function __construct($path, $name='')
	{
		$this->path = $path;
		$this->name = $name;
	}
	
}




