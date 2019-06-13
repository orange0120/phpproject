<?php
$link=@mysqli_connect('localhost','A1063309','n126084866','phpproject');
$SQL="select Name,place,borrownumber from place order by borrownumber desc limit 10";
if ($result=mysqli_query($link,$SQL)) {
			echo "<table>";
			echo "<tr>";
			echo "<td>"."類別"."</td>";
			echo "<td>"."場地名稱"."</td>";
			echo "<td>"."借用次數"."</td>";
			echo "</tr>";
			while($row=mysqli_fetch_assoc($result)){
				echo "<tr>";
				echo "<td>".$row["Name"]."</td>";
				echo "<td>".$row["place"]."</td>";
				echo "<td>".$row["borrownumber"]."</td>";
				echo "</tr>";
			}
			echo "</table></br>";
		}
		mysqli_close($link);
?>