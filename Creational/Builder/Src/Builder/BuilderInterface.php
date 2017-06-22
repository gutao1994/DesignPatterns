<?php

namespace DesignPatterns\Creational\Builder\Src\Builder;

interface BuilderInterface
{
	
	public function createVehicle();
	
	public function addDoors();
	
	public function addEngine();
	
	public function addWheel();
	
	public function getVehicle();
	
	
	
}




