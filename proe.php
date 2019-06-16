<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="skel.css">
  <link rel="stylesheet" href="all.css">
  <link rel="stylesheet" href="all2.css">
  <title>器材借用系統</title>
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
          <h2>器材借用狀態</h2>
          <h3>Status</h3>
          <div class="clear"></div>
          <hr>
        </div>
        
		<?php
		session_start();
		$link=mysqli_connect('localhost','a1063306','qezc0766','phpproject');
		$sql="SELECT cl,num from br where ID='$_SESSION[login]' and YN='Y'";
		if($result=mysqli_query($link,$sql)){
			echo "<table>";
			echo "<tr>";
			echo "<td>類別</td>";
			echo "<td>數量</td>";
			echo "</tr>";
			while($row=mysqli_fetch_assoc($result)){
				echo "<tr>";
				echo "<td>".$row["cl"]."</td>";
				echo "<td>".$row["num"]."</td>";
				echo "</tr>";
			}
		}
		echo "<a href='pror.php'>歸還器材</a>";
		echo "<a href='logout.php'>登出</a>";
		?>
          
        
      </div>
    </div>
  </div>
</body>
</html>


