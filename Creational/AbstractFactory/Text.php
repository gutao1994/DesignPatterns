<?php

namespace DesignPatterns\Creational\AbstractFactory;

abstract class Text implements MediaInterface
{
	protected $text;
	
	public function __construct($text)
    {
        $this->text = $text;
    }
	
}

