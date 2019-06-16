<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="skel.css">
  <link rel="stylesheet" href="all.css">
  <link rel="stylesheet" href="all2.css">
  <title>器材借用登入系統</title>
</head>
<body>
  <div class="wrap">
    <div class="nav">
      <a href="index.php">回首頁</a>
    </div>
    <div class="header">
    </div>
    <div class="content">
      <div class="login">
        <div class="name">
          <img src="https://upload.wikimedia.org/wikipedia/zh/thumb/1/1a/National_University_of_Kaohsiung_logo.svg/1200px-National_University_of_Kaohsiung_logo.svg.png" alt="">
          <h2>器材借用登入</h2>
          <h3>Login</h3>
          <div class="clear"></div>
          <hr>
        </div>
        
		<?php
			$id1=$_GET["myID"];
			$pass=$_GET["myPass"];
			session_start();
			$link=mysqli_connect('localhost','a1063306','qezc0766','phpproject');
			$sql="SELECT * FROM user WHERE ID='$id1' and PASS='$pass'";
			if($result=mysqli_query($link,$sql)){
				$row=mysqli_fetch_assoc($result);
				if($id1==$row["ID"] && $pass==$row["PASS"] && $row["st"]=='S'){
					$_SESSION["login"]=$id1;
					$_SESSION["pass"]=$pass;
					header("Location:pro.php?myID=".$_SESSION[login]);
				}
				if($id1==$row["ID"] && $pass==$row["PASS"] && $row["st"]=='T'){
					$_SESSION["login"]=$id1;
					$_SESSION["pass"]=$pass;
					header("Location:prort.php?myID=".$_SESSION[login]);
				}
				else{
					echo "密碼錯誤或錯誤的登入方法";
					echo "<br>";
					echo "將回到登入頁面";
					unset($_SESSION['login']);
					unset($_SESSION['pass']);
					header("Refresh:2;URL=prolog.php");
					#$SQLCREATE="INSERT into week13(NO,ID,Name) VALUES('$NO','$ID','$Name')";
	
				}
			}
?>
          
        
      </div>
    </div>
  </div>
</body>
</html>
<?php
$id1=$_GET["myID"];
$pass=$_GET["myPass"];
session_start();
$link=mysqli_connect('localhost','a1063306','qezc0766','phpproject');
$sql="SELECT * FROM user WHERE ID='$id1' and PASS='$pass'";
if($result=mysqli_query($link,$sql)){
	$row=mysqli_fetch_assoc($result);
	if($id1==$row["ID"] && $pass==$row["PASS"] && $row["st"]=='S'){
	$_SESSION["login"]=$id1;
	$_SESSION["pass"]=$pass;
	header("Location:pro.php?myID=".$_SESSION[login]);
}
	if($id1==$row["ID"] && $pass==$row["PASS"] && $row["st"]=='T'){
	$_SESSION["login"]=$id1;
	$_SESSION["pass"]=$pass;
	header("Location:prort.php?myID=".$_SESSION[login]);
}
else{
	echo "密碼錯誤或錯誤的登入方法";
	echo "<br>";
	echo "將回到登入頁面";
	header("Refresh:2;URL=prolog.php");
	#$SQLCREATE="INSERT into week13(NO,ID,Name) VALUES('$NO','$ID','$Name')";
	
}
}
?>