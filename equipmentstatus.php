<?php
$link=@mysqli_connect('localhost','A1063309','n126084866','phpproject');
$SQL="select category,name,borrownumber from activity order by borrownumber desc limit 10";
echo "<h6>校內活動</h6>";
if ($result=mysqli_query($link,$SQL)) {
			echo "<table>";
			echo "<tr>";
			echo "<td>"."類別"."</td>";
			echo "<td>"."器材"."</td>";
			echo "<td>"."借用次數"."</td>";
			echo "</tr>";
			while($row=mysqli_fetch_assoc($result)){
				echo "<tr>";
				echo "<td>".$row["category"]."</td>";
				echo "<td>".$row["name"]."</td>";
				echo "<td>".$row["borrownumber"]."</td>";
				echo "</tr>";
			}
			echo "</table></br>";
		}
$SQL1="select Category,Name,borrownumber from class order by borrownumber desc limit 10";
echo "<h6>體育課</h6>";
if ($result1=mysqli_query($link,$SQL1)) {
			echo "<table>";
			echo "<tr>";
			echo "<td>"."類別"."</td>";
			echo "<td>"."器材"."</td>";
			echo "<td>"."借用次數"."</td>";
			echo "</tr>";
			while($row=mysqli_fetch_assoc($result1)){
				echo "<tr>";
				echo "<td>".$row["Category"]."</td>";
				echo "<td>".$row["Name"]."</td>";
				echo "<td>".$row["borrownumber"]."</td>";
				echo "</tr>";
			}
			echo "</table></br>";
		}
$SQL2="select Category,Name,borrownumber from student order by borrownumber desc limit 10";
echo "<h6>學生個人</h6>";
if ($result2=mysqli_query($link,$SQL2)) {
			echo "<table>";
			echo "<tr>";
			echo "<td>"."類別"."</td>";
			echo "<td>"."器材"."</td>";
			echo "<td>"."借用次數"."</td>";
			echo "</tr>";
			while($row=mysqli_fetch_assoc($result2)){
				echo "<tr>";
				echo "<td>".$row["Category"]."</td>";
				echo "<td>".$row["Name"]."</td>";
				echo "<td>".$row["borrownumber"]."</td>";
				echo "</tr>";
			}
			echo "</table></br>";
		}
		mysqli_close($link);
?>