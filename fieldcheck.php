<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="skel.css">
  <link rel="stylesheet" href="all.css">
  <link rel="stylesheet" href="all2.css">
  <title>場地借用登入系統</title>
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
        <?php
session_start();
@$id=$_GET["ID"];
@$passwd=$_GET["Pass"];
if ($id=="x948787" && $passwd=="xx9527") {
	$_SESSION['login']=$id;
	$_SESSION['pass']=$passwd;
	header("location:fieldborrow.php");
}
if ($id=="x1234" && $passwd=="x12345"){
	$_SESSION['login']=$id;
	$_SESSION['pass']=$passwd;
	header("location:prort.php");

}
else{
	//$_SESSION["loginfail"]="fail";
	echo "<h3>登入失敗</h3>";
	#unset($_SESSION['login']);
	#unset($_SESSION['pass']);
	header("Refresh:2;loginfield.php");
}
?>
         
        </div>
      </div>
    </div>
  </div>
</body>
</html>
