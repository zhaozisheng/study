<?php

class Message
{
	public function add($pdo,$table_name,$arr)
	{
		$sql = "insert into" .$table_name;

		$filed = '(';
		$value = 'values (';
		foreach ($arr as $key => $val) {
			$filed .= $key.',';
			$value .= "'".$val."'".",";
		}
		$sql .= trim($filed,',').')'.trim($value,',').')';

		$res = $pdo->exec($sql);
		return $res;
	}

	public function show($pdo,$table_name,$arr)
	{
		$sql = "select * from" .$table_name;
		$data = $pdo->query($sql)->fetchAll();
		$arr = array();
		foreach ($data as $key => $value) {
			$arr[$key]['username'] = $data[$key]['username'];
		}
		return $arr;
	}
}