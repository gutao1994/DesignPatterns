<?php

namespace DesignPatterns\Creational\Builder\Tests;

use PHPUnit\Framework\TestCase;
use DesignPatterns\Creational\Builder\Src\Director\Director;
use DesignPatterns\Creational\Builder\Src\Builder\BuilderInterface;
use DesignPatterns\Creational\Builder\Src\Builder\CarBuilder;
use DesignPatterns\Creational\Builder\Src\Builder\BikeBuilder;
use DesignPatterns\Creational\Builder\Src\Parts\Vehicle;


class DirectorTest extends TestCase
{
	
	protected $director;
	
	protected function setUp()
	{
		$this->director = new Director();
	}
	
	public function getBuilder()
	{
		return [
			[new CarBuilder()],
			[new BikeBuilder()],
		];
	}
	
	
	/**
	* @dataProvider getBuilder
	*/
	public function testBuild(BuilderInterface $builder)
	{
		$vehicle = $this->director->build($builder);
		
		$this->assertInstanceOf(Vehicle::class, $vehicle);
	}
	
	
	
}









