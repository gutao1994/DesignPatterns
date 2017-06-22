<?php

namespace DesignPatterns\Creational\StaticFactory;

class FormatString implements FormatterInterface
{
	
	public function format($val)
	{
		return substr($val, 0, 5);
	}
}



