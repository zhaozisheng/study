<?php

namespace Controller\Admin;

use Controller\Controller;
use Model\DB;

class Hero extends Controller
{
	public function show()
	{
		// echo "12313";die;
		$this->display('Hero/show');
	}

	public function desk()
	{
		$this->display('Hero/desk');
	}

	public function article_list()
	{
		$this->display('Hero/article_list');
	}
}