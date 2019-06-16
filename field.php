<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="skel.css">
  <link rel="stylesheet" href="all.css">
  <link rel="stylesheet" href="all2.css">
  <title>借用結果</title>
</head>
<body>
  <div class="wrap">
    <div class="nav">
      <a href="index.php">回首頁</a>
    </div>
    <div class="header"></div>
    <div class="content">
      <div class="result">
        <div class="name">
          <img src="https://upload.wikimedia.org/wikipedia/zh/thumb/1/1a/National_University_of_Kaohsiung_logo.svg/1200px-National_University_of_Kaohsiung_logo.svg.png" alt="">
          <?php
session_start();
$link=@mysqli_connect('localhost','A1063309','n126084866','phpproject');

$name=$_GET['fielddd'];

$SQLCON="select borrow from place where place='$name'";
$res=mysqli_query($link,$SQLCON);
$confirm=mysqli_fetch_assoc($res);
if($confirm["borrow"]==1){

$SQL="SELECT Name,place FROM place where place='$name'";

if($name!=null){
echo "<h2>已租借</h2>"."</br>";?>
          <h3>Result</h3>
          <div class="clear"></div>
          <hr>
        </div>
        <table>
          <?php 
		  echo "<tr>"."<td>"."球類"."</td>"."<td>"."場地"."</td>"."</tr>";
		  if ($result=mysqli_query($link,$SQL)) {
	while($row=mysqli_fetch_assoc($result)){
		echo "<tr>";
		echo "<td>".$row["Name"]."</td>";
		echo "<td>".$row["place"]."</td>";
		echo "</tr>";
	}
}
$SQLDelete="UPDATE place SET borrow = '0' WHERE place='$name'";
mysqli_query($link,$SQLDelete);
$SQLhot="select borrownumber from place where place='$name'";
$hot=mysqli_query($link,$SQLhot);
$hotfield=mysqli_fetch_assoc($hot);
$hotf=$hotfield["borrownumber"];
$hotf++;
$SQLUpdate="UPDATE place SET borrownumber = '$hotf' WHERE place='$name'";
mysqli_query($link,$SQLUpdate);
?>
        </table>
        <?php echo "<a href='fieldborrow.php'>繼續租借</a>";
echo "<a href='logout.php'>Logout</a>";
@$sqlborrow="insert into fieldborrowed(ID,Name,place) values('$_SESSION[login]','$_SESSION[namename]','$name')";
$result=mysqli_query($link,$sqlborrow);
mysqli_close($link); }
}
else{
	echo "<h2>場地已借出</h2>"."</br>";
	echo "<a href='fieldborrow.php'>繼續租借</a>";
	echo "<a href='loginfield.php'>Logout</a>";
}
?>
      </div>
    </div>
  </div>
</body>
</html>
