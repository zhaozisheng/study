<?php

namespace Controller;

class Message extends Controller
{
	public function show()
	{
		$pdo = new DB();
		$res = $pdo->select('book');
		return $res;
	}

	public function add($table_name,$pass)
	{
		$sql = 'insert into'.$table_name;
		$field = '(';
		$sield = 'values (';
		foreach ($pass as $key => $val){
			$field .= $key.',';
			$sield .= $val.',';
		}
		$sql = trim($field,',').')'.trim($sield,",").')';
		return $this->pdo->exec($sql);
	}
	
	public function update()
	{
		
	}

	public function delete()
	{
		
	}
}