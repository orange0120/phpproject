<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="skel.css">
  <link rel="stylesheet" href="all.css">
  <link rel="stylesheet" href="all2.css">
  <title>新增公告</title>
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
          <h2>新增公告</h2>
          <h3>Add</h3>
		  <a class="back" href="prort.php">回管理頁面</a>
          <div class="clear"></div>
          <hr>
        </div>
        
        <form action="adn.php" method="post">
			<span class="word">日期(例:2019/6/13,週四):</span><input type="text" name="date"><br>
			<span class="word">標題:</span><input type="text" name="title"><br>
			<span class="word">內容:</span><textarea rows="10" cols="40" name="content"></textarea><br>
			<input type="submit" value="送出">
		</form>
        
      </div>
    </div>
  </div>
</body>
</html>