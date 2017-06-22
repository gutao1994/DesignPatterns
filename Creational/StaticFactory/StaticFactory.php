<?php

namespace DesignPatterns\Creational\StaticFactory;
use InvalidArgumentException;

class StaticFactory
{
	public static function factory($type)
	{
		$class = __NAMESPACE__ . '\Format' . ucfirst($type);
		if (!class_exists($class))
			throw new InvalidArgumentException('不存在的类');
		
		return new $class();
	}
	
	
	
}










