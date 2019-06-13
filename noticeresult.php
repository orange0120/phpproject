<?php

$result=$_GET["num"];
try{
	$mysql = new PDO("mysql:host=127.0.0.1;dbname=phpproject;charset=utf8","root","`1234qwer");
	$mysql->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	
}catch(PDOException $e)
{
	printf("Error1：DatabaseError: %s ", $e->getMessage());
	exit;
}
$SQL="SELECT * FROM `notice` WHERE `browsenumber`=$result";
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
$num=$DATA[0]["num"];
$num++;
$SQLU="UPDATE `notice` SET `num`=$num WHERE `browsenumber`=$result";
try
{
	$nplus = $mysql->exec($SQLU);
}
catch(PDOException $e)
{
	printf("Error1：DatabaseError: %s ", $e->getMessage());
	exit;
}
//print_r($DATA);



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="skel.css">
  <link rel="stylesheet" href="all.css">
  <link rel="stylesheet" href="all2.css">
  <title>體育室公告</title>
</head>
<body>
  <div class="wrap">
    <div class="nav">
      <a href="index.php">回首頁</a>
    </div>
    <div class="header">
    </div>
    <div class="content">
      <div class="nt">
        <div class="name">
          <img src="https://upload.wikimedia.org/wikipedia/zh/thumb/1/1a/National_University_of_Kaohsiung_logo.svg/1200px-National_University_of_Kaohsiung_logo.svg.png" alt="">
          <h2><?php echo $DATA[0]["title"]; ?></h2>
		  <h4><?php echo $DATA[0]["date"]; ?> </h4>
          <div class="clear"></div>
          <hr>
        </div>
        <div class="noticec">
		  <p> <?php echo $DATA[0]["content"]; ?>
		  </p>
		</div>
		<div class="person">
		  <h5> <?php echo "瀏覽人數:".$DATA[0]["num"]; ?>  </h5>
		</div>
          
        
      </div>
    </div>
  </div>
</body>
</html>
