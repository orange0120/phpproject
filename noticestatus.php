<?php
$link=@mysqli_connect('localhost','A1063309','n126084866','phpproject');
$SQL="select title,num from notice order by num desc limit 10";
if ($result=mysqli_query($link,$SQL)) {
			echo "<table>";
			echo "<tr>";
			echo "<td>"."標題"."</td>";
			echo "<td>"."瀏覽次數"."</td>";
			echo "</tr>";
			while($row=mysqli_fetch_assoc($result)){
				echo "<tr>";
				echo "<td>".$row["title"]."</td>";
				echo "<td>".$row["num"]."</td>";
				echo "</tr>";
			}
			echo "</table></br>";
		}
		mysqli_close($link);
?>