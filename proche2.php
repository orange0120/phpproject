<?php
if($result=mysqli_query($link,$sql)){
		echo "stop4";
		$row=mysqli_fetch_assoc($result);
		if ($num>$row["Num"] or $num==0 or $row["YN"]=='Y' or $ba==$row["cl"]) {
			echo "借用數量有誤";
			echo "<br>";
			echo "將回到借用頁面";
			header("Refresh:2;URL=pro.php");
		}
		else{
			echo "借用成功"."<br>";
			echo "<a href='pro.php'>繼續借用</a>"."<br>";
			echo "<a href='logout.php'>登出</a>"."<br>";
			$login=$_SESSION["login"];
			try{
				$mysql = new PDO("mysql:host=127.0.0.1;dbname=phpproject;charset=utf8","root","`1234qwer");
				$mysql->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	
			}catch(PDOException $e)
			{
				printf("Error1ï¼DatabaseError: %s ", $e->getMessage());
				exit;
			}

			@$SQLCREATE="INSERT into br(ID,cl,num,YN) VALUES('$_SESSION["login"];','$ba','$num','Y')";
			try
			{
				$info = $mysql->query($SQLCREATE);
			}
			catch(PDOException $e)
			{
				printf("Error1ï¼DatabaseError: %s ", $e->getMessage());
				exit;
			}
			$DATA = $info->fetchAll(PDO::FETCH_ASSOC);
			//$result=mysqli_query($link,$SQLCREATE);
			#$SQLUPDATE="UPDATE equipment SET NO='$NO',ID='$ID',Name='$Name' WHERE NO='$NO'";
		}
	}
	
	?>