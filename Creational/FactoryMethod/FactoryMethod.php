<?php

namespace DesignPatterns\Creational\FactoryMethod;

abstract class FactoryMethod
{
	const CHEAP = 1;
	const FAST = 2;
	
	abstract protected function createVehicle($type);
	
	public function create($type)
	{
		$obj = $this->createVehicle($type);
		$obj->setColor("#foo");
		
		return $obj;
	}
	
}




