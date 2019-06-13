<?php
try{
	$mysql = new PDO("mysql:host=127.0.0.1;dbname=phpproject;charset=utf8","root","`1234qwer");
	$mysql->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	
}catch(PDOException $e)
{
	printf("Error1：DatabaseError: %s ", $e->getMessage());
	exit;
}
$SQL="SELECT * FROM `notice` WHERE 1";
try
{
	$info = $mysql->query($SQL);
}
catch(PDOException $e)
{
	printf("Error1：DatabaseError: %s ", $e->getMessage());
	exit;
}
$DATA = $info->fetchAll(PDO::FETCH_ASSOC);

//print_r($DATA);
for($i=(count($DATA)-1);$i>(count($DATA)-6);$i--){
	echo "<div class='announce'>";
	echo "<p>".$DATA[$i]["date"]."</p>";
    echo "<a href='noticeresult.php?num=".$DATA[$i]["browsenumber"]."'>".$DATA[$i]["title"]."</a>";
	echo "</div>";
}
?>