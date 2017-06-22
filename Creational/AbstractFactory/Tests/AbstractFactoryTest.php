<?php

namespace DesignPatterns\Creational\AbstractFactory\Tests;

use PHPUnit\Framework\TestCase;
use DesignPatterns\Creational\AbstractFactory\AbstractFactory;
use DesignPatterns\Creational\AbstractFactory\JsonFactory;
use DesignPatterns\Creational\AbstractFactory\HtmlFactory;
use DesignPatterns\Creational\AbstractFactory\MediaInterface;


class AbstractFactoryTest extends TestCase
{
	
	public function getFactories()
	{
		return [
			[new JsonFactory()],
			[new HtmlFactory()],
		];
	}
	
	/**
	* @dataProvider getFactories
	*/
	public function testComponentCreation(AbstractFactory $factory)
	{
		$res = [
			$factory->createText('i am text'),
			$factory->createPicture('/img/xx.jpg', 'i am picutre'),
		];
		
		$this->assertContainsOnly(MediaInterface::class, $res);
	}
	
	
	public function testComponentUse()
	{
		$htmlFactory = new HtmlFactory();
		$jsonFactory = new JsonFactory();
		
		
		// $html = $htmlFactory->createText('i am text');
		$picture = $htmlFactory->createPicture('/img/xx.jpg', 'i am picutre');
		echo $picture->render();
		
		// $html = $jsonFactory->createText('i am text');
		// echo $html->render();
		
		// $picture = $jsonFactory->createPicture('/img/xx.jpg', 'i am picutre');
		// echo $picture->render();
	}
	
	
	
	
}




