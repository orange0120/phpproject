<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="skel.css">
  <link rel="stylesheet" href="all.css"> 
  <link rel="stylesheet" href="all2.css">
  <title>體育室</title>
</head>
<body>
  <div class="wrap">
    <div class="nav">
      <a href="index.php">回首頁</a>
    </div>
    <div class="header">
    </div>
    <div class="content">
      <div class="btn">
        <a class="thing" href="prolog.php">器材借用</a>
        <a class="ground" href="loginfield.php">場地借用</a>
        <a class="board" href="allanounce.php">所有公告</a>
      </div>
      <div class="clear"></div>
      <div class="notice">
        <div class="name">
          <img src="https://upload.wikimedia.org/wikipedia/zh/thumb/1/1a/National_University_of_Kaohsiung_logo.svg/1200px-National_University_of_Kaohsiung_logo.svg.png" alt="">
          <h2>最新公告</h2>
          <h3>BULLETIN</h3>
          <div class="clear"></div>
          <hr>
        </div>
        <div class="bcontent">
		  <?php include("noticepress.php"); ?>
	
		</div>
      </div>
      <div class="link">
        <div class="name">
          <img src="https://upload.wikimedia.org/wikipedia/zh/thumb/1/1a/National_University_of_Kaohsiung_logo.svg/1200px-National_University_of_Kaohsiung_logo.svg.png" alt="">
          <h2>外部連結</h2>
          <h3>External link</h3>
          <div class="clear"></div>
          <hr>
        </div>
        <div class="clear"></div>
        <div class="lname">
          <a href="http://52.69.34.19/weather/search.php">氣象查詢</a>
          <a href="https://www.nuk.edu.tw/bin/home.php">高雄大學首頁</a>
          <a href="https://www.sa.gov.tw/">教育部體育署</a>
          <a href="https://sports.kcg.gov.tw/">高雄市政府運動發展局</a>
        </div>
      </div>
      <div class="clear"></div>
      <div class="return">
        <div class="name">
          <img src="https://upload.wikimedia.org/wikipedia/zh/thumb/1/1a/National_University_of_Kaohsiung_logo.svg/1200px-National_University_of_Kaohsiung_logo.svg.png" alt="">
          <h2>意見回饋</h2>
          <h3>Feedback</h3>
          <a href="feedback.php">意見回饋表單</a>
          <div class="clear"></div>
          <hr>
        </div>
      </div>
      <p>81148高雄市楠梓區高雄大學路700號 聯絡電話:07-5919576；場地租借：07-5919490；泳池專線(上班時間)：07-5919571；泳池櫃檯：07-5919381；傳真：(07)5919057</p>
    </div>
  </div>
</body>
</html> 