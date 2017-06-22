<?php

namespace DesignPatterns\Creational\Builder\Src\Builder;

use DesignPatterns\Creational\Builder\Src\Parts\Car;
use DesignPatterns\Creational\Builder\Src\Parts\Engine;
use DesignPatterns\Creational\Builder\Src\Parts\Wheel;
use DesignPatterns\Creational\Builder\Src\Parts\Door;


class CarBuilder implements BuilderInterface
{
	
	protected $car;
	
	public function createVehicle()
	{
		$this->car = new Car();
	}
	
	public function addDoors()
	{
		$this->car->setPart('leftDoor', new Door());
		$this->car->setPart('rightDoor', new Door());
	}
	
	
	public function addEngine()
	{
		$this->car->setPart('engine', new Engine());
	}
	
	public function addWheel()
	{
		$this->car->setPart('LFWheel', new Wheel());
		$this->car->setPart('RFWheel', new Wheel());
		$this->car->setPart('LBWheel', new Wheel());
		$this->car->setPart('RBWheel', new Wheel());
	}
	
	public function getVehicle()
	{
		return $this->car;
	}
}




















