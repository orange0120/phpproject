<?php
try{
	$mysql = new PDO("mysql:host=127.0.0.1;dbname=phpproject;charset=utf8","root","`1234qwer");
	$mysql->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	
}catch(PDOException $e)
{
	printf("Error1：DatabaseError: %s ", $e->getMessage());
	exit;
}
$SQL="SELECT `browsenumber` FROM `notice` WHERE 1";
try
{
	$info = $mysql->query($SQL);
}
catch(PDOException $e)
{
	printf("Error1：DatabaseError: %s ", $e->getMessage());
	exit;
}
$idd = $info->fetchAll(PDO::FETCH_ASSOC);
//print_r($idd);
for($i=0;$i<count($idd);$i++){
	$num=rand(1000,20000);
	$idi=$i+1;
	$SQLU="UPDATE `notice` SET `num`=$num WHERE `browsenumber`=$idi";
	try
	{
		$update = $mysql->exec($SQLU);
	}
	catch(PDOException $e)
	{
		printf("Error1：DatabaseError: %s ", $e->getMessage());
		exit;
	}
	
}
?>