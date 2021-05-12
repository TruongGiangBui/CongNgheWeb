<html>
	<head>
		<title>Insert Data</title>
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
				$Product_desc = $_POST["ItemDescription"];
				$Cost = (int)$_POST["Cost"];
				$Weight = (int)$_POST["Weight"];
				$Numb = (int)$_POST["NumberAvailable"];
				$SQLcmd = "INSERT INTO $table_name (Product_desc, Cost, Weight, Numb)
				VALUES ('$Product_desc', $Cost, $Weight, $Numb)";
				if (mysqli_query($conn, $SQLcmd)) {
					echo "New record created successfully";
				} else {
					echo "Error: " . $SQLcmd . "<br>" . mysqli_error($conn);
				}
				mysqli_close($conn);
			}
		?>
	</body>
</html>