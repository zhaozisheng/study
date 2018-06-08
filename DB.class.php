<?php


class db
{
	public function connect_db($basename)
	{
		return new \PDO('mysql:host=127.0.0.1;dbname=' . $basename . ';', 'root', 'root');
	}
}