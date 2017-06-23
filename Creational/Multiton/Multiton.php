<?php

namespace DesignPatterns\Creational\Multiton;


class Multiton
{
	protected $property;
	
	private static $instances = [];
	
	final public static function getInstance($instanceName)
	{
		if (!array_key_exists($instanceName, self::$instances)) {
			self::$instances[$instanceName] = new static($instanceName);
		}
		return self::$instances[$instanceName];
	}
	
	
	final private function __construct($instanceName){
		$this->property = $instanceName;
	}
	
	final private function __clone(){}

	final private function __wakeup(){}
	
	public function __toString()
	{
		return $this->property;
	}
	
	
}

















