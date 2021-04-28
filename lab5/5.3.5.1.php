<html>
	<head>
		<title>Update Product</title>
	</head>
	<body>
		<?php
			$servername = 'localhost';
			$username = 'root';
			$password = '';
			$mydb = 'mysql';
			$table_name = 'Products';
			$conn = mysqli_connect($servername, $username, $password, $mydb);
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			} else {
				$SQLcmd = "Select * from $table_name";
				$result = mysqli_query($conn, $SQLcmd);	
				if (mysqli_num_rows($result) > 0) {
					echo "<h1 style=color:blue>Select product we just sold:</h1>";
					echo "<form action = '5.3.5.2.php' method = 'POST'>";
					while($row = mysqli_fetch_assoc($result)) {
						$Pro = $row["Product_desc"];
						echo "<input type='radio' name='Pro' value='$Pro'>".$row["Product_desc"]. " ";
						echo "<br>";
					}
					echo "<input type='submit' value='Click to Submit'>";
        			echo "<input type='reset' value='Reset'>";
					echo "</form>";
				}
					
				$sql = "Select * from $table_name";
				$result = mysqli_query($conn, $sql);	
				if (mysqli_num_rows($result) > 0) {
					echo "<table border=1>";
					echo "<tr>";
					echo "<td>Num</td> <td>Product</td> <td>Cost</td> <td>Weight</td> <td>Count</td>";
					echo "</tr>";
					while($row = mysqli_fetch_assoc($result)) {
						echo "<tr>";
						echo "<td>" .$row["ProductID"]. "</td><td>" .$row["Product_desc"]. "</td><td>" .$row["Cost"]. "</td><td>" .$row["Weight"]. "</td><td>" .$row["Numb"]. "</td>";
						echo "</tr>";
					}
					echo "</table>";
				} else {
					echo "0 results";
				}
				mysqli_close($conn);
			}
		?>
	</body>
</html>