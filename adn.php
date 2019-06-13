<?php

try{
	$mysql = new PDO("mysql:host=127.0.0.1;dbname=phpproject;charset=utf8","root","`1234qwer");
	$mysql->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	
}catch(PDOException $e)
{
	printf("Error1：DatabaseError: %s ", $e->getMessage());
	exit;
}
$date=$_POST["date"];
$title=$_POST["title"];
$content=$_POST["content"];

$SQL="INSERT INTO `notice`(`date`,`title`,`content`) VALUES ('$date','$title','$content') ";
try
{
	$info = $mysql->exec($SQL);
}
catch(PDOException $e)
{
	printf("Error1：DatabaseError: %s ", $e->getMessage());
	exit;
}
header('Location: prort.php');
?>