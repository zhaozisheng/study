<?php


class user
{
	public function login($pdo,$name,$pwd)
	{
		$sql = "select * from user where name = '$name'";
        $data = $pdo->query($sql)->fetchAll();
        $arr = array();
        foreach ($data as $key => $value) {
            $arr['name'] = $data[$key]['name'];
            $arr['password'] = $data[$key]['password'];
        }
        if ($arr == null) {
            return 1;
        }elseif ($arr['password'] == $pwd) {
            return 2;
        }else{
            return 3;
        }
	}
}