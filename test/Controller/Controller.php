<?php

namespace Controller;

class Controller
{
	public $assign;

	public function display($path)
	{
		if (!empty($this->assign)) {
			extract($this->assign);
		}
		
		include './View/'.$path.'.php';
	}

	public function assign($key,$value)
	{
		$this->assign[$key] = $value;
	}
}
