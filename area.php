<?php

$url="https://works.ioa.tw/weather/api/all.json";
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


try{
	$mysql= new PDO("mysql:host=127.0.0.1;dbname=weather;charset=utf8","root","`1234qwer");
	$mysql->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
	printf("Error1：DatabaseError: %s ", $e->getMessage());
	exit;
}


//echo '<pre>'.print_r($ArrDATA,true).'</pre>';
//print_r ($ArrDATA[0]);
//echo "<br>";
//print_r ($ArrDATA[0]['name']);城市名字
//print_r ($ArrDATA[0]['towns'][0]['name']);鄉鎮區名字

for($j=0;$j<=30;$j++)
{
	if(isset($ArrDATA[$j]))
	{
		$cityname=$ArrDATA[$j]['name'];
		for($i=0;$i<=30;$i++)
		{
			if(isset($ArrDATA[$j]['towns'][$i]))
			{
				$areaname=$ArrDATA[$j]['towns'][$i]['name'];
				$key=$ArrDATA[$j]['towns'][$i]['id'];
				$SQL= "INSERT INTO `area` (city,area,jsonkey) VALUES ('$cityname','$areaname',$key)";
				//echo $ArrDATA[$j]['name'].$ArrDATA[$j]['towns'][$i]['name']."<br>";
				try
				{
					$tmp=$mysql->exec($SQL);
				}	
				catch(PDOException $e)
				{
					printf("Error1：DatabaseError: %s ", $e->getMessage());
					exit;
				}
			}
	
		}
	}
}




?>