<?php

namespace DesignPatterns\Creational\Singleton\Tests;

use PHPUnit\Framework\TestCase;
use DesignPatterns\Creational\Singleton\Singleton;
use DesignPatterns\Creational\Singleton\SingletonSon;
use ReflectionClass;


class SingletonTest extends TestCase
{
	
	// public function testUniqueness()
    // {
        // $firstCall = Singleton::getInstance();
        // $this->assertInstanceOf(Singleton::class, $firstCall);
		
        // $secondCall = Singleton::getInstance();
        // $this->assertSame($firstCall, $secondCall);
    // }
	
	
	
	// public function testNoConstructor()
    // {
        // $obj = Singleton::getInstance();

        // $refl = new \ReflectionObject($obj);
        // $meth = $refl->getMethod('__construct');
        
		// $this->assertTrue($meth->isPrivate());
		// $this->assertFalse($meth->isStatic());
    // }
	
	
	public function testSingletonSon()
	{
		$s1 = SingletonSon::getInstance();
		$this->assertInstanceOf(Singleton::class, $s1);
		$this->assertInstanceOf(SingletonSon::class, $s1);
		
		$s2 = SingletonSon::getInstance();
		$this->assertSame($s1, $s2);
		
		
		$ref = new ReflectionClass ($s2);
		$this->assertTrue($ref->hasMethod('say'));
	}
	
	
	
}







