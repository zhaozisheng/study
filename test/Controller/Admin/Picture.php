<?php

namespace Controller\Admin;

use Controller\Controller;
use Model\DB;

class Picture extends Controller
{
	public function picture_list()
	{
		$this->display('Picture/picture_list');
	}
}