<?php

namespace Controller\Admin;

use Controller\Controller;
use Model\DB;

class Member extends Controller
{
	public function member_list()
	{
		$this->display('Member/member_list');
	}

	public function member_del()
	{
		$this->display('Member/member_del');
	}

	public function member_record_browse()
	{
		$this->display('Member/member_record_browse');
	}

	public function member_record_download()
	{
		$this->display('Member/member_record_download');
	}

	public function member_record_share()
	{
		$this->display('Member/member_record_share');
	}
}