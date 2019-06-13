<?php

try{
	$mysql = new PDO("mysql:host=127.0.0.1;dbname=phpproject;charset=utf8","root","`1234qwer");
	$mysql->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	
}catch(PDOException $e)
{
	printf("Error1：DatabaseError: %s ", $e->getMessage());
	exit;
}
$SQL="SELECT * FROM `feedback` WHERE 1";
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
  <title>用戶回饋</title>
</head>
<body>
  <div class="wrap">
    <div class="nav">
      <a href="index.php">回首頁</a>
    </div>
    <div class="header">
    </div>
    <div class="content">
      <div class="stall">
        <div class="name">
          <img src="https://upload.wikimedia.org/wikipedia/zh/thumb/1/1a/National_University_of_Kaohsiung_logo.svg/1200px-National_University_of_Kaohsiung_logo.svg.png" alt="">
          <h2>用戶回饋</h2>
          <h3>Feedback</h3>
		  <a class="back" href="prort.php">回管理頁面</a>
          <div class="clear"></div>
          <hr>
        </div>
        <table>
		<tr><td>大名</td><td>內容</td><td>日期</td></tr>
		<?php
		for($i=0;$i<count($DATA);$i++){
			echo "<tr>";
			echo "<td>".$DATA[$i]["Name"]."</td>"."<td>".$DATA[$i]["Content"]."</td>"."<td>".$DATA[$i]["Date"]."</td>";
			echo "</tr>";
		}
		?>
		
        
      </div>
    </div>
  </div>
</body>
</html>