<?php

$request=$_POST["ask"];
$recity=$_POST["akcity"];

//print_r ($_POST);
try{
	$mysql= new PDO("mysql:host=127.0.0.1;dbname=weather;charset=utf8","root","`1234qwer");
	$mysql->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
	printf("Error1：DatabaseError: %s ", $e->getMessage());
	exit;
}
$SQL="SELECT * FROM `area` WHERE `area`='$request' AND `city`='$recity'";
try{
	$tmp=$mysql->query($SQL);
}
catch(PDOException $e){
	printf("Error1：DatabaseError: %s ", $e->getMessage());
	exit;
}
$jsonar=$tmp->fetchAll(PDO::FETCH_ASSOC);
//print_r ($jsonar);

$jsonkey=$jsonar[0]['jsonkey'];
$SQL2="SELECT * FROM `information` WHERE `jsonkey`=$jsonkey";
try{
	$sele=$mysql->query($SQL2);
}
catch(PDOException $e){
	printf("Error1：DatabaseError: %s ", $e->getMessage());
	exit;
}
$succ=$sele->fetchAll(PDO::FETCH_ASSOC);
//print_r ($succ);
$nowda=date("Y-m-d");
$SQL3="SELECT * FROM `information` WHERE `jsonkey`=$jsonkey AND `adddate`='$nowda'";
try{
	$tosel=$mysql->query($SQL3);
}
catch(PDOException $e){
	printf("Error1：DatabaseError: %s ", $e->getMessage());
	exit;
}
$today=$tosel->fetchAll(PDO::FETCH_ASSOC);
//print_r ($today);
$imgurl = "https://works.ioa.tw/weather/img/weathers/zeusdesign/".($today[0]['picture']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $recity.$request; ?>觀測結果</title>
	<link rel="stylesheet" href="all.css">
</head>
<body><?php
    echo $recity.$request."今天的天氣觀測如下:<hr>";
echo "天氣:".$today[0]['weather']."<img src='$imgurl' border='0' width='30px'><br>";
echo "氣溫:".$today[0]['temp']."度<br>";
echo "體感溫度:".$today[0]['tempfelt']."度<br>";
echo "相對濕度:".$today[0]['humid']."%<br>";
echo "時雨量:".$today[0]['rain']."<br>";  ?>
</body>
</html>