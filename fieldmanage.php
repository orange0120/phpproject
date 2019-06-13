<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="skel.css">
  <link rel="stylesheet" href="all.css">
  <link rel="stylesheet" href="all2.css">
  <title>場地借用情形</title>
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
          <h2>場地借用情形</h2>
          <h3>Status</h3>
  		  <a class="back" href="prort.php">回管理頁面</a>
          <div class="clear"></div>
          <hr>
        </div>
        
		<?php
		$link=@mysqli_connect('localhost','A1063309','n126084866','phpproject');
		$SQL="SELECT distinct * FROM fieldborrowed f left outer join place p on f.place=p.place where p.borrow='0'";
		if ($result=mysqli_query($link,$SQL)) {
			echo "<table>";
			echo "<tr>";
			echo "<td>"."借用人ID"."</td>";
			echo "<td>"."類別"."</td>";
			echo "<td>"."場地名稱"."</td>";
			echo "<td>"."狀態"."</td>";
			echo "</tr>";
			while($row=mysqli_fetch_assoc($result)){
				echo "<tr>";
				echo "<td>".$row["ID"]."</td>";
				echo "<td>".$row["Name"]."</td>";
				echo "<td>".$row["place"]."</td>";
				echo "<td>".$row["borrow"]."</td>";
				echo "<td>"."<a class='rb' href='fielddelete.php?place=".$row["place"]."'>歸還</a>"."</td>";
				echo "</tr>";
			}
			echo "</table></br>";
		}
		mysqli_close($link);
		?>
          
        
      </div>
    </div>
  </div>
</body>
</html>

