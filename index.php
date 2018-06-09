<?php


$controller = isset($_GET['c']) ? ucfirst($_GET['c']) : 'User';
$action     = isset($_GET['a']) ? ($_GET['a']) : "login";

include ('./'.$controller.'.php');

$obj = new $controller();

$obj->$action();
