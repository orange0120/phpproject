<?php

try{
	$mysql= new PDO("mysql:host=127.0.0.1;dbname=weather;charset=utf8","root","`1234qwer");
	$mysql->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
	printf("Error1：DatabaseError: %s ", $e->getMessage());
	exit;
}
$nowda=date("Y-m-d");

$SQL= "DELETE FROM `information` WHERE adddate='$nowda'";
try
{
	$tmp=$mysql->exec($SQL);
}	
catch(PDOException $e)
{
	printf("Error1：DatabaseError: %s ", $e->getMessage());
	exit;
}


for($i=1;$i<=368;$i++)
{
	$SQL3= "SELECT * FROM `area` WHERE jsonkey=$i";
	try
	{
		$sele=$mysql->query($SQL3);
	}
	catch(PDOException $e)
	{
		printf("Error1:DatabaseError: %s ",$e->getMessage());
		exit;
	}
	$arname=$sele->fetchAll(PDO::FETCH_ASSOC);
	
	if(count($arname)>0)
	{
		$url="https://works.ioa.tw/weather/api/weathers/".$i.".json";
		set_time_limit(12);
		$ch = curl_init();
		curl_setopt($ch,CURLOPT_URL,$url);
		curl_setopt($ch,CURLOPT_HEADER,false);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
		curl_setopt($ch,CURLOPT_TIMEOUT_MS,12000);
		curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,0);
		curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
		$getDATA=curl_exec($ch);
		curl_close($ch);
		$ArrDATA = json_decode($getDATA,TRUE);
	
		$space=strpos($ArrDATA['at']," ");
		$da=substr($ArrDATA['at'],0,$space);
		$pic=$ArrDATA['img'];
		$wea=$ArrDATA['desc'];
		$tp=$ArrDATA['temperature'];
		$tpf=$ArrDATA['felt_air_temp'];
		$hu=$ArrDATA['humidity'];
		$ra=$ArrDATA['rainfall'];
		$SQL2= "INSERT INTO `information` (adddate,jsonkey,picture,weather,temp,tempfelt,humid,rain) VALUES ('$da',$i,'$pic','$wea',$tp,$tpf,$hu,$ra)";
		//echo $SQL2."<br>";
		try
		{
			$succ=$mysql->exec($SQL2);
		}
		catch(PDOException $e)
		{
			printf("Error1:DatabaseError: %s ",$e->getMessage());
			exit;
		}
		if($succ>0)
		{
			echo $i.".".$arname[0]['city'].$arname[0]['area']."資料寫入成功!!<br>";
		}
		else
		{
			echo $i.".".$arname[0]['city'].$arname[0]['area']."資料寫入失敗!!<br>";
		}
	}
	

	
	
	

}




?>