<?php

namespace DesignPatterns\Creational\Builder\Src\Builder;

use DesignPatterns\Creational\Builder\Src\Parts\Bike;
use DesignPatterns\Creational\Builder\Src\Parts\Engine;
use DesignPatterns\Creational\Builder\Src\Parts\Wheel;
use DesignPatterns\Creational\Builder\Src\Parts\Door;


class BikeBuilder implements BuilderInterface
{
	protected $bike;
	
	public function createVehicle()
	{
		$this->bike = new Bike();
	}	
	
	public function addDoors()
	{
		
	}
	
	public function addEngine()
	{
		$this->bike->setPart('engine', new Engine());
	}
	
	public function addWheel()
	{
		$this->bike->setPart('frontWheel', new Wheel());
		$this->bike->setPart('backendWheel', new Wheel());
	}
	
	public function getVehicle()
	{
		return $this->bike;
	}
	
	
	
	
}













