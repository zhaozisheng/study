<?php

class message
{
	public function add($table_name, $params)
	{
		$sql = 'insert into '.$table_name;

		$filed = '(';
		$value = ' values (';
		foreach($params as $key => $val){
			$filed .= $key.',';
			$value .= $val.',';
		}

		$sql .= trim($filed, ',').')'.trim($value, ',').')';

		return $pdo->exec($sql);
	}

	public function select($table)
	{
		$sql = 'select * from' .$table;
		return $pdo->exec($sql);
	}

	public function update()
	{

	}

	public function delete($table,$where)
	{
		$sql = 'delete from'.$table.'where'.$where;
		return $pdo->exec($sql);
	}
}