<?php

namespace DesignPatterns\Creational\Builder\Src\Parts;


abstract class Vehicle
{
	protected $data;
	
	public function setPart($key, $val)
	{
		$this->data[$key] = $val;
	}
	
	
}








