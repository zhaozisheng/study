<?php


class db
{
	public function pdo()
	{
		$pdo = new pdo('mysql:host=127.0.0.1;dbname='.$db_name.';','root','root');
		return $pdo;
	}
}