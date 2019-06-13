<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="skel.css">
  <link rel="stylesheet" href="all.css">
  <link rel="stylesheet" href="all2.css">
  <title>意見回饋表單</title>
</head>
<body>
  <div class="wrap">
    <div class="nav">
      <a href="index.php">回首頁</a>
    </div>
    <div class="header">
    </div>
    <div class="content">
      <div class="feedback">
        <?php
			$link=mysqli_connect('localhost','a1063306','qezc0766','phpproject');
			$sql="Insert into feedback(Name,Content,Date) values('$_POST[Name]','$_POST[message]','$_POST[Date]')";
			$result=mysqli_query($link,$sql);
		    $today=getdate();
			if (preg_match("/\幹/i", $_POST["message"])){
				echo "<p>您好".$_POST['Name']."我們已收到您那不雅的字眼，這令我們非常火大，近期您將收到法院傳票</br>喔對了，我們一概不接受任何調解與和解</br></p>";
				echo "<p>回覆日期".$today["year"]."年".$today["mon"]."月".$today["mday"]."日</p>";
			}else{
				echo "<p>已成功收到您的回饋，我們將會參考您的意見，感謝使用</br></p>";
			}
		?>
        

      </div>
    </div>
  </div>
</body>
</html>
