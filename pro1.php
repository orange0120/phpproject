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
          <h2>器材借用</h2>
          <h3>Borrow</h3>
          <div class="clear"></div>
          <hr>
        </div>
        
		<form action="proche1.php" method="get">

			<?php
			session_start();
			if (isset($_SESSION['login'])) {
				$link=mysqli_connect('localhost','a1063306','qezc0766','phpproject');
				$ca=$_GET['ca'];
				if($_SESSION['id']=='a1'){
					$sql="SELECT Name FROM student WHERE category='$ca'";
					if($result=mysqli_query($link,$sql)){
						echo "<span class='word'>器具:</span><select name='ball'>";
						while($row=mysqli_fetch_assoc($result)){
							echo "<option>".$row["Name"]."</option>";}
						echo "</select>";
					}
				}
				if($_SESSION['id']=='a2'){
					$sql="SELECT Name FROM class WHERE category='$ca'";
					if($result=mysqli_query($link,$sql)){
						echo "<span class='word'>器具:</span><select name='ball'>";
						while($row=mysqli_fetch_assoc($result)){
							echo "<option>".$row["Name"]."</option>";}
						echo "</select>";
					}
				}
				if($_SESSION['id']=='a3'){
					$sql="SELECT Name FROM activity WHERE category='$ca'";
					if($result=mysqli_query($link,$sql)){
						echo "<span class='word'>器具:</span><select name='ball'>";
						while($row=mysqli_fetch_assoc($result)){
							echo "<option>".$row["Name"]."</option>";}
						echo "</select>";
					}
				}	
				echo "<span class='word'>數量:</span><input type='number' name='num' required>";
			}
			echo "<br>";
			echo "<a href='pror.php'>歸還器材</a><br>";
			?>
			<input class="next" type="submit" value="借用"><br> <a href='logout.php'>登出</a>
		</form>
          
        
      </div>
    </div>
  </div>
</body>
</html>



