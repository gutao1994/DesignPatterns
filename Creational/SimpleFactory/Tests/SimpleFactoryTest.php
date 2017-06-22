<?php

namespace DesignPatterns\Creational\SimpleFactory\Tests;

use DesignPatterns\Creational\SimpleFactory\ConcreteFactory;

/**
 * SimpleFactoryTest 用于测试简单工厂模式
 */
class SimpleFactoryTest extends \PHPUnit_Framework_TestCase
{

    protected $factory;

    protected function setUp()
    {
        $this->factory = new ConcreteFactory();
    }

    public function getType()
    {
        return array(
            array('bicycle'),
            array('other')
        );
    }

    /**
     * @dataProvider getType
     */
    public function testCreation($type)
    {
        $obj = $this->factory->createVehicle($type);
        $this->assertInstanceOf('DesignPatterns\Creational\SimpleFactory\VehicleInterface', $obj);
    }

    /**
     * @expectedException \InvalidArgumentException
	 * @group aa
     */
    public function testBadType()
    {
        $this->factory->createVehicle('car');
    }
}