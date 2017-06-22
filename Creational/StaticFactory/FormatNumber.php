<?php

namespace DesignPatterns\Creational\StaticFactory;

class FormatNumber implements FormatterInterface
{
	public function format($val)
	{
		$val = intval($val);
		if ($val > 100) {
			$val = 100;
		}
		return $val;
	}
	
	
	
	
}




