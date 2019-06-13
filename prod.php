<?php
$link=mysqli_connect('localhost','a1063306','qezc0766','phpproject');
$ID=$_GET["ID"];
$SQLDELETE="DELETE FROM br WHERE ID='$ID' and YN='N'";
$result=mysqli_query($link,$SQLDELETE);
header("Location: prot.php");
?>