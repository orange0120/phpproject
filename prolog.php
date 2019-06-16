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
        
		<form action="proche.php" method="get">
			<?php
				session_start();
				if(isset($_SESSION['login'])==1){
					header("Location:proche.php?myID=".$_SESSION[login]."&myPass=".$_SESSION[pass]);
				}
				echo"<input type='text' name='myID' required placeholder='帳號'><br/>";
			?>
		    <input type="password" name="myPass" required placeholder="密碼"><br/>
			<input type="submit" value="登入">
			<input type="reset">
		</form>
          
        
      </div>
    </div>
  </div>
</body>
</html>
