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
        
		<form action="" method="get">
			<?php
			session_start();
			if (isset($_SESSION['login'])) {
				echo "<span class='word'>借用身分:</span><select name='identity'>";
				echo "<option value=''>請選擇</option>";
				echo "<option value='a1'>學生個人</option>";
				echo "<option value='a2'>體育課</option>";
				echo "<option value='a3'>校內活動</option>";
				echo "</select>";
			}
			?>
			<input type='submit' value="選擇並送出">
		</form>
		<form action="pro1.php" method="get">
			<?php
			if (isset($_SESSION['login'])) {
				@$id=$_GET["identity"];
				$_SESSION["id"]=$id;
				if($_SESSION['id']==null){
	
				}
				$link=mysqli_connect('localhost','a1063306','qezc0766','phpproject');
				if($_SESSION['id']=='a1'){
					$sql="SELECT distinct category from student";
				}
				if($_SESSION['id']=='a2'){
					$sql="SELECT distinct category from class";
				}
				if($_SESSION['id']=='a3'){
					$sql="SELECT distinct category from activity";
				}
				if($_SESSION['id']!=null){
					if($result=mysqli_query($link,$sql)){
						echo "<span class='word'>器具類別:</span><select name='ca'>";
						while($row=mysqli_fetch_assoc($result)){
							echo "<option>".$row["category"]."</option>";
						}
						echo "</select>";
					}
					$timex=ini_set('date.timezone','Asia/Taipei');
					$time0=date('Y/m/d/h');
					echo "<span class='word'>借用日期:</span><input type='text' value=$time0 readonly='true'>";
					$sql="SELECT * FROM user WHERE ID='$_SESSION[login]'";
					if($result=mysqli_query($link,$sql)){
						while ($row=mysqli_fetch_assoc($result)){
							echo "<span class='word'>借用人:</span><input type='text' value='".$row["Name"]."' readonly='true'>";
							echo "<br>";
							echo "<span class='word'>學號(員工編號):</span><input type='text' value='".$row["ID"]."' readonly='true'><br>";
						}
					}
					
				}
			}
			echo "<a href='proe.php'>查看借用器材</a><br>";
			?>
			<input class="next" type='submit' value="下一步"><br>
			<a href='logout.php'>登出</a>
		</form>
          
        
      </div>
    </div>
  </div>
</body>
</html>
