<?php

namespace DesignPatterns\Creational\AbstractFactory\Json;

use DesignPatterns\Creational\AbstractFactory\Text as BaseText;

class Text extends BaseText
{
	public function render()
	{
		return json_encode([
			'content' => $this->text,
		]);
	}
	
	
	
	
	
}





