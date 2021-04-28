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
				$Product_desc = $_POST["Pro"];
				$SQLcmd = "update $table_name set Numb = Numb - 1 where (Product_desc = '$Product_desc')";
				mysqli_query($conn, $SQLcmd);
				$sql = "Select * from $table_name";
				$result = mysqli_query($conn, $sql);	
				if (mysqli_num_rows($result) > 0) {
					echo "<h1 style=color:blue>Products Data</h1>";
					echo "The query is: $SQLcmd";
					echo "<br></br>";
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
				}
				mysqli_close($conn);
			}
		?>
	</body>
</html>