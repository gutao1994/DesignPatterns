<?php

namespace DesignPatterns\Creational\Singleton;


class Singleton
{
	private static $instance = null;
	
	
	final public static function getInstance()
	{
		if (self::$instance == null) {
			self::$instance = new static();
		}
		return self::$instance;
	}
	
	final private function __construct()
	{
	}
	
	final private function __clone()
	{
	}
	
	final private function __wakeup()
	{
	}
}












