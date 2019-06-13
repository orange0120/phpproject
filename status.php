<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="skel.css">
  <link rel="stylesheet" href="all.css">
  <link rel="stylesheet" href="all2.css">
  <title>統計資料</title>
</head>
<body>
  <div class="wrap">
    <div class="nav">
      <a href="index.php">回首頁</a>
    </div>
    <div class="header">
    </div>
    <div class="stcontent">
      <div class="stall">
        <div class="name">
          <img src="https://upload.wikimedia.org/wikipedia/zh/thumb/1/1a/National_University_of_Kaohsiung_logo.svg/1200px-National_University_of_Kaohsiung_logo.svg.png" alt="">
          <h2>統計資料</h2>
          <h3>Statistics</h3>
		  <a class="back" href="prort.php">回管理頁面</a>
          <div class="clear"></div>
          <hr>
        </div>
        <div class="stfd">
		  <h4>場地借用統計</h4>
		  <?php include("fieldstatus.php"); ?>
		</div>
		<div class="steq">
	      <h4>器材借用統計</h4>
          <?php include("equipmentstatus.php"); ?>
		</div> 
		<div class="stno">
	      <h4>公告瀏覽統計</h4>
		  <?php include("noticestatus.php"); ?>
		</div>
		
        
      </div>
    </div>
  </div>
</body>
</html>