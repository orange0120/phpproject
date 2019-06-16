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
          <h2>器材借用結果</h2>
          <h3>Result</h3>
          <div class="clear"></div>
          <hr>
        </div>
        
		<?php
		session_start();

		$num=$_GET["num"];
		$ba=$_GET["ball"];
		$_SESSION["ba"]=$ba;
		$_SESSION["num"]=$num;
		if (isset($_SESSION['login'])==1){
			$link=mysqli_connect('localhost','a1063306','qezc0766','phpproject');
			if($_SESSION['id']=='a1'){
				$sql="SELECT Number FROM student WHERE Name='$ba'";
				$result=mysqli_query($link,$sql);
				$row=mysqli_fetch_assoc($result);
				if ($num>$row["Number"] or $num==0) {
					echo "<span class='word'>借用數量有誤</span>";
					echo "<br>";
					echo "<span class='word'>將回到借用頁面</span>";
					header("Refresh:2;URL=pro.php");
				}
				else{
					echo "<span class='word'>借用成功</span>"."<br>";
					echo "<a href='pro.php'>繼續借用</a>"."<br>";
					echo "<a href='logout.php'>登出</a>"."<br>";
					$SQLCREATE="INSERT into br(ID,cl,num,YN) VALUES('$_SESSION[login]','$ba','$num','Y')";
					$result=mysqli_query($link,$SQLCREATE);
				}
			}
			if($_SESSION['id']=='a2'){
				$sql="SELECT Number FROM class WHERE Name='$ba'";
				$result=mysqli_query($link,$sql);
				$row=mysqli_fetch_assoc($result);
				if ($num>$row["Number"] or $num==0) {
					echo "<span class='word'>借用數量有誤</span>";
					echo "<br>";
					echo "<span class='word'>將回到借用頁面</span>";
					header("Refresh:2;URL=pro.php");
				}
				else{
					echo "<span class='word'>借用成功</span>"."<br>";
					echo "<a href='pro.php'>繼續借用</a>"."<br>";
					echo "<a href='logout.php>登出"."</a>"."<br>";
					$SQLCREATE="INSERT into br(ID,cl,num,YN) VALUES('$_SESSION[login]','$ba','$num','Y')";
					$result=mysqli_query($link,$SQLCREATE);
					#$SQLUPDATE="UPDATE equipment SET NO='$NO',ID='$ID',Name='$Name' WHERE NO='$NO'";

				}
			}
			if($_SESSION['id']=='a3'){
				$sql="SELECT num FROM activity WHERE name='$ba'";
				$result=mysqli_query($link,$sql);
				$row=mysqli_fetch_assoc($result);
				if ($num>$row["num"] or $num==0) {
					echo "<span class='word'>借用數量有誤</span>";
					echo "<br>";
					echo "<span class='word'>將回到借用頁面</span>";
					header("Refresh:2;URL=pro.php");
				}
				else{
					echo "<span class='word'>借用成功</span>"."<br>";
					echo "<a href='pro.php'>繼續借用</a>"."<br>";
					echo "<a href='logout.php'>登出</a>"."<br>";
					$SQLCREATE="INSERT into br(ID,cl,num,YN) VALUES('$_SESSION[login]','$ba','$num','Y')";
					$result=mysqli_query($link,$SQLCREATE);
					#$SQLUPDATE="UPDATE equipment SET NO='$NO',ID='$ID',Name='$Name' WHERE NO='$NO'";
				}
			}
			/*	if($result=mysqli_query($link,$sql)){
					$row=mysqli_fetch_assoc($result);
					if ($num>$row["Num"] or $num==0 or $row["YN"]=='Y' or $ba==$row["cl"]) {
						echo "借用數量有誤";
						echo "<br>";
						echo "將回到借用頁面";
						header("Refresh:2;URL=pro.php");
					}
				else{
					echo "借用成功"."<br>";
					echo "<a href='pro.php'>繼續借用</a>"."<br>";
					echo "<a href='index.php'>登出</a>"."<br>";
					$SQLCREATE="INSERT into br(ID,cl,num,YN) VALUES('$_SESSION[login]','$ba','$num','Y')";
					$result=mysqli_query($link,$SQLCREATE);
					#$SQLUPDATE="UPDATE equipment SET NO='$NO',ID='$ID',Name='$Name' WHERE NO='$NO'";
				}
			}*/
		}
		?>
          
        
      </div>
    </div>
  </div>
</body>
</html>


