<?php

namespace DesignPatterns\Creational\Builder\Src\Director;

use DesignPatterns\Creational\Builder\Src\Builder\BuilderInterface;


class Director
{
	
	public function build(BuilderInterface $builder)
	{
		$builder->createVehicle();
		$builder->addDoors();
		$builder->addEngine();
		$builder->addWheel();
		
		return $builder->getVehicle();
	}
	
	
	
	
}













