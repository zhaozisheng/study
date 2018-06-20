<?php

namespace Controller\Admin;

use Controller\Controller;
use Model\DB;

class Pinglun extends Controller
{
	public function feedback_list()
	{
		$this->display('Pinglun/feedback_list');
	}
}