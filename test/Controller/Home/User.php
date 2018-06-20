<?php

namespace Controller\Home;

use Controller\Controller;
use Model\DB;

class User extends Controller
{
    public function login()
    {
        // echo "1213213";die;
        // $db = new DB();
         
    
        $this->display('user/user');
    }

    public function doLogin()
    {
        // echo "123";die;
        $pdo = new DB();
        $res=$pdo->selects('good',"username='$username'");
         // print_r($res);die;
         if ($res['username']) {
            if ($res['password']==$password) {
                // setcookie("username",$res['username']);
                
                header('location:index.php?c=message&a=dispy');
                // $db = new DB;
                // var_export($db);die;
            }else{
                echo "<script>alert('密码错误');location.href='user.php';</script>";
            }
            // echo "登陆成功";
         }else{
            echo "<script>alert('用户名不存在');location.href='user.php';</script>";
         }
    }

    public function register()
    {
        echo 'this is register action';
    }
}