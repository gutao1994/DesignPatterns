<?php

namespace DesignPatterns\Creational\FactoryMethod;

class GermanFactory extends FactoryMethod
{
	
	protected function createVehicle($type)
	{
		switch ($type) {
			case parent::CHEAP:
				return new Bicycle();
				break;
			case parent::FAST:
				$obj = new Porsche();
				$obj->addTuningAMG();
				
				return $obj;
				break;
			default:
				throw new \InvalidArgumentException($type . ' is not a valid vehicle');
		}
	}
	
	
}


















