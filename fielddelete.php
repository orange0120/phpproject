<?php
$link=@mysqli_connect('localhost','A1063309','n126084866','phpproject');

$place=$_GET['place'];
$SQLDelete="UPDATE place SET borrow = '1' WHERE place='$place'";
$result=@mysqli_query($link,$SQLDelete);
mysqli_close($link);
header("Location: fieldmanage.php");
?>