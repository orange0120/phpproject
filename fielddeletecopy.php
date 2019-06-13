<?php
echo "<meta charset='utf-8'>";
$link=@mysqli_connect('localhost','A1063309','n126084866','phpproject');

$place=$_GET['place'];
$SQLDelete="UPDATE place SET borrow = '1' WHERE place='$place'";
$result=@mysqli_query($link,$SQLDelete);
$SQL="SELECT distinct * FROM fieldborrowed f left outer join place p on f.place=p.place where p.borrow='0'";
echo "場地借用狀況"."</br>";
if ($result=mysqli_query($link,$SQL)) {
	echo "<table border='1'>";
	echo "<tr>";
	echo "<td>"."借用人ID"."</td>";
	echo "<td>"."類別"."</td>";
	echo "<td>"."場地名稱"."</td>";
	echo "<td>"."狀態"."</td>";
	echo "<td>"." "."</td>";
	echo "</tr>";
	while($row=mysqli_fetch_assoc($result)){
		echo "<tr>";
		echo "<td>".$row["ID"]."</td>";
		echo "<td>".$row["Name"]."</td>";
		echo "<td>".$row["place"]."</td>";
		echo "<td>".$row["borrow"]."</td>";
		//echo "<td>"."已歸還"."</td>";
		echo "<td>"."<a href='fielddelete.php?place=".$row["place"]."'>歸還</a>"."</td>";
		echo "</tr>";
	}echo "</table></br>";
}

mysqli_close($link);



//echo "</br></br></br></br></br></br></br></br></br></br>(備註0為已借出,1為未借出)"."</br>";
echo "<a href='loginfield.php'>Logout</a>";
?>