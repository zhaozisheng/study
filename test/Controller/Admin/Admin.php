<?php

namespace Controller\Admin;

use Controller\Controller;
use Model\DB;

class Admin extends Controller
{
	public function admin_role()
	{
		$this->display('Admin/admin_role');
	}

	public function admin_permission()
	{
		$this->display('Admin/admin_permission');
	}

	public function admin_list()
	{
		$this->display('admin/admin_list');
	}
}