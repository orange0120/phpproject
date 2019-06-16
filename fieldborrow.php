<meta charset="utf-8">
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="skel.css">
  <link rel="stylesheet" href="all.css">
  <link rel="stylesheet" href="all2.css">
  <title>場地借用</title>
</head>
<body>
  <div class="wrap">
    <div class="nav">
      <a href="index.php">回首頁</a>
    </div>
    <div class="header"></div>
    <div class="content">
      <div class="borrow">
        <div class="name">
          <img src="https://upload.wikimedia.org/wikipedia/zh/thumb/1/1a/National_University_of_Kaohsiung_logo.svg/1200px-National_University_of_Kaohsiung_logo.svg.png" alt="">
          <h2>場地借用表單填寫</h2>
          <h3>Write</h3>
          <div class="clear"></div>
          <hr>
        </div>
		<?php
session_start();
$link=mysqli_connect('localhost','A1063309','n126084866','phpproject');

?>
<form action="#" method='post'>
<select id="Name" name="bName">
	<option>選擇球類</option>
	<?php
	$sql="select distinct Name from place";
	$result1 = mysqli_query($link,$sql) or die("資料選取錯誤！".mysqli_error($link));
	while($row=mysqli_fetch_assoc($result1)){
	?>
	<option value="<?php echo $row['Name'];?>"><?php echo $row['Name'];?></option>
	<?php
    }
    ?>
</select>
<input type="submit">
</form>
<?php
if($_POST!=NULL){
	$field=$_POST["bName"];
	$_SESSION["namename"]=$field;
   if($field!=null){
	?>
	<form action='field.php' method='GET'>
	<h3>請選擇場地：</h3><select name='fielddd'>
	<?php
	$sql2="select distinct place from place where Name='$field'";
        if ( $result = mysqli_query($link, $sql2) ) {
            while( $row = mysqli_fetch_assoc($result) ){
    ?>
                <option value="<?php echo $row['place'];?>"><?php echo $row['place'];?></option><br/>
    <?php
            }
        }
    ?>
    </select>
    <input type="submit">
    </form>
    <?php
    }
}
    ?>
      </div>
    </div>
  </div>
</body>
</html>
