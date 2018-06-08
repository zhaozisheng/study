<?php


	header('content-type:text/html;charset=utf8');
	try{  
   	 	$pdo=new PDO("mysql:host=localhost;dbname=11","root","root");  
	}catch (PDOException $e){  
   	 	die("fail to connect mysql".$e->getMessage());  
	} 
	$sql="SELECT * FROM good";  
foreach($pdo->query($sql) as $val){  
    echo $val['id']."------".$val['name']."------".$val['text']."<br/>";  
}