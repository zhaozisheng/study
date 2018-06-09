<?php
header('contenr-type:text/html;charset=utf8');

class User
{
	public function login()
	{
		include ('user/login.php');
	}

	public function doLogin()
	{
		// $username = $_POST['username'];
		// $password = $_POST['password'];
		$sql = 'select * from good where username="'.$username.'" and password ="'.$password.'"';
		$data = $pdo->query($sql)->fetchAll();

		$arr = array();
		foreach ($data as $key => $value) {
			$arr['username'] = $data[$key]['username'];
			$arr['password'] = $data[$value]['password'];
		}

		if ($arr = null) {
			return 0;
		}elseif ($arr['password'] = $password) {
			return 1;
		}else{
			return 2;
		}
	}
}


