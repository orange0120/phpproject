<?php
session_start();
if($_SESSION["login"]!="x1234"){
	header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="skel.css">
  <link rel="stylesheet" href="all.css">
  <link rel="stylesheet" href="all2.css">
  <title>管理者頁面</title>
</head>
<body>
  <div class="wrap">
    <div class="nav">
      <a href="index.php">回首頁</a>
    </div>
    <div class="header">
    </div>
    <div class="content">
      <div class="admin">
        <div class="name">
          <img src="https://upload.wikimedia.org/wikipedia/zh/thumb/1/1a/National_University_of_Kaohsiung_logo.svg/1200px-National_University_of_Kaohsiung_logo.svg.png" alt="">
          <h2>管理</h2>
          <h3>Manage</h3>
          <div class="clear"></div>
          <hr>
        </div>
        <a href='prot.php'>查看器材借用情形</a>
		<a href='fieldmanage.php'>查看場地借用情形</a>
		<a href='addnotice.php'>新增公告</a>
		<a href='status.php'>統計資料</a>
		<a href='allfeed.php'>用戶回饋查看</a>
		<?php
		echo "<a href='logout.php'>登出</a>";
		?>
          
        
      </div>
    </div>
  </div>
</body>
</html>

