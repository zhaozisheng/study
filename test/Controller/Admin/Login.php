<?php

namespace Controller\Admin;

use Controller\Controller;
use Model\DB;

class Login extends Controller
{
	public function login()
	{
		// echo "1231213";die;
		$this->display('Login/login_add');
	}
	public function login_add()
	{
		$this->display('Hero/show');
	}
	
}