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
        <div class="name">
          <img src="https://upload.wikimedia.org/wikipedia/zh/thumb/1/1a/National_University_of_Kaohsiung_logo.svg/1200px-National_University_of_Kaohsiung_logo.svg.png" alt="">
          <h2>意見回饋表單</h2>
          <h3>Feedback</h3>
          <div class="clear"></div>
          <hr>
        </div>
		<form action="fbreturn.php" method="post">
			<span class="word">填寫您的大名</span><input type='text' name='Name' ><br/>
			<span class="word">請寫下您的高見</span><textarea name="message" rows="10" cols="50"></textarea></br>
			<span class="word">填寫今天的日期</span><input type="date" name="Date" required=""></br>
			<input type="submit" value="送出"><input type="reset">
		</form>
        

      </div>
    </div>
  </div>
</body>
</html>