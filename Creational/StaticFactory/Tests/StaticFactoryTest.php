<?php

namespace DesignPatterns\Creational\StaticFactory\Test;

use DesignPatterns\Creational\StaticFactory\StaticFactory;


class StaticFactoryTest extends \PHPUnit_Framework_TestCase
{
		public function getTypeList()
		{
			return [
				['string'],
				['number'],
			];
		}
		
		/**
		* @dataProvider getTypeList
		*/
		public function testCreation($type)
		{
			$obj = StaticFactory::factory($type);
			$this->assertInstanceOf('DesignPatterns\Creational\StaticFactory\FormatterInterface', $obj);
		}
	
	
		/**
		* @expectedException InvalidArgumentException
		*/
		public function testException()
		{
			StaticFactory::factory('xxx');
		}
		
		
		public function testMethod()
		{
			$string = StaticFactory::factory('string');
			
			$res = $string->format('123456');
			
			$this->assertEquals('12345', $res);
		}
		
		
		
}



