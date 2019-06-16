<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="skel.css">
  <link rel="stylesheet" href="all.css">
  <link rel="stylesheet" href="all2.css">
  <title>器材歸還系統</title>
</head>
<body>
  <div class="wrap">
    <div class="nav">
      <a href="index.php">回首頁</a>
    </div>
    <div class="header">
    </div>
    <div class="content">
      <div class="tb">
        <div class="name">
          <img src="https://upload.wikimedia.org/wikipedia/zh/thumb/1/1a/National_University_of_Kaohsiung_logo.svg/1200px-National_University_of_Kaohsiung_logo.svg.png" alt="">
          <h2>器材歸還結果</h2>
          <h3>Return</h3>
          <div class="clear"></div>
          <hr>
        </div>
        
		<?php
		session_start();
		$link=mysqli_connect('localhost','a1063306','qezc0766','phpproject');
		$sql="SELECT YN from br where ID='$_SESSION[login]'";
		if($result=mysqli_query($link,$sql)){
			while($row=mysqli_fetch_assoc($result));
			if($row["YN"]='Y'){
				$SQLUPDATE="UPDATE br SET YN='N' WHERE ID='$_SESSION[login]'";
				$result1=mysqli_query($link,$SQLUPDATE);
				echo "<span class='word'>器具已歸還</span>";
				echo "<a href='logout.php'>登出</a>";
			}
			else{
				echo "<span class='word'>沒有要歸還的器具</span>";
				header("Refresh:2;URL=pro.php");
			}
		}

?>
          
        
      </div>
    </div>
  </div>
</body>
</html>


