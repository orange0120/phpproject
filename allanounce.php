<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="skel.css">
  <link rel="stylesheet" href="all.css">
  <link rel="stylesheet" href="all2.css">
  <title>意見回饋表單</title>
</head>
<body>
  <div class="wrap">
    <div class="nav">
      <a href="index.php">回首頁</a>
    </div>
    <div class="header">
    </div>
    <div class="acontent">
      <div class="alla">
        <?php
			try{
				$mysql = new PDO("mysql:host=127.0.0.1;dbname=phpproject;charset=utf8","root","`1234qwer");
				$mysql->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	
			}catch(PDOException $e)
			{
				printf("Error1ï¼DatabaseError: %s ", $e->getMessage());
				exit;
			}
			$SQL="SELECT * FROM `notice` WHERE 1";
			try
			{
				$info = $mysql->query($SQL);
			}
			catch(PDOException $e)
			{
				printf("Error1ï¼DatabaseError: %s ", $e->getMessage());
				exit;
			}
			$DATA = $info->fetchAll(PDO::FETCH_ASSOC);
			for($i=0;$i<count($DATA);$i++){
				echo "<div class='announce'>";
				echo "<p>".$DATA[$i]["date"]."</p>";
				echo "<a href='noticeresult.php?num=".$DATA[$i]["browsenumber"]."'>".$DATA[$i]["title"]."</a>";
				echo "</div>";
			}

?>
        

      </div>
    </div>
  </div>
</body>
</html>

