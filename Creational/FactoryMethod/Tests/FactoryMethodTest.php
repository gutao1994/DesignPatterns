<?php

namespace DesignPatterns\Creational\FactoryMethod\Tests;

use PHPUnit\Framework\TestCase;
use DesignPatterns\Creational\FactoryMethod\FactoryMethod;
use DesignPatterns\Creational\FactoryMethod\GermanFactory;
use DesignPatterns\Creational\FactoryMethod\ItalianFactory;
use DesignPatterns\Creational\FactoryMethod\VehicleInterface;


class FactoryMethodTest extends TestCase
{
	
	protected $type = array(
        FactoryMethod::CHEAP,
        FactoryMethod::FAST
    );
	
	public function getShop()
    {
        return array(
            array(new GermanFactory()),
            array(new ItalianFactory())
        );
    }
	
	/**
     * @dataProvider getShop
     */
    public function testCreation(FactoryMethod $shop)
    {
        // �÷������ݿͻ��˽�ɫ�����ǲ�����ʲô����������ֻ֪�����Կ����������쳵
        foreach ($this->type as $oneType) {
            $vehicle = $shop->create($oneType);
            $this->assertInstanceOf(VehicleInterface::class, $vehicle);
        }
    }
	
	/**
	* @dataProvider getShop
	* @expectedException \InvalidArgumentException
	* @expectedExceptionMessage xxx is not a valid vehicle
	*/
	public function testUnknownType(FactoryMethod $shop)
	{
		$shop->create('xxx');
	}
	
	
	
	
	
	
}













