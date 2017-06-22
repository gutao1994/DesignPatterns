<?php

namespace DesignPatterns\Creational\FactoryMethod;

class Porsche implements VehicleInterface
{
	protected $color;
	
	public function setColor($color)
	{
		$this->color = $color;
	}
	
	public function addTuningAMG()
    {
		
    }
	
}












