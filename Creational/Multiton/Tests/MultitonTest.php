<?php

namespace DesignPatterns\Creational\Multiton\Tests;

use PHPUnit\Framework\TestCase;
use DesignPatterns\Creational\Multiton\Multiton;
use DesignPatterns\Creational\Multiton\MultitonSon;


class MultitonTest extends TestCase
{

	public function testMultiton()
	{
		// new Multiton();
		
		// $m1 = Multiton::getInstance('dog');
		// $this->assertInstanceOf(Multiton::class, $m1);
		
		// $m2 = Multiton::getInstance('dog');
		// $this->assertSame($m1, $m2);
		
		############################
		
		// $m3 = Multiton::getInstance('cat');
		// $this->assertInstanceOf(Multiton::class, $m3);
		
		// $m4 = Multiton::getInstance('cat');
		// $this->assertSame($m3, $m4);
		
		############################
		
		$ms1 = MultitonSon::getInstance('dog');
		$this->assertInstanceOf(Multiton::class, $ms1);
		$this->assertInstanceOf(MultitonSon::class, $ms1);
		
		
		$ms2 = MultitonSon::getInstance('dog');
		$this->assertSame($ms1, $ms2);
	}


	
}






