<?php
// echo phpinfo();
class User
{
	public function login()
	{
		include 'user/user.php';
	}

	public function doLogin()
	{
		print_r($_POST);die;
		include 'user.class.php';
		include 'DB.class.php';
		$username = $_POST['username'];
		$password = $_POST['password'];
		$db = db::GetInstance();
		$pdo = $db->connect_db('good');
		$good = new good();
		$data= $good->login($pdo,$name,$pwd);
		if ($data == 1) {
			echo "<script>alert('用户名或密码错误');location.href='login.php'</script>";
		}elseif ($data == 2) {
			echo "<script>alert('登录成功');location.href='show.php'</script>";
		}else{
			echo "<script>alert('用户名或密码错误');location.href='login.php'</script>";
		}
	}

	public function register()
	{
		echo "this is register action";
	}
}

$act = isset($_GET['atr']) ? $_GET : "login";	

$user = new User;

$user->$act();