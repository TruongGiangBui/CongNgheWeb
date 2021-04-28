<html>
	<head>
		<title>Create Table</title>
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
				$SQLcmd = "CREATE TABLE $table_name(ProductID INT UNSIGNED NOT NULL
				AUTO_INCREMENT PRIMARY KEY,
				Product_desc VARCHAR(50),
				Cost INT, 
				Weight INT, 
				Numb INT)";
				if (mysqli_query($conn, $SQLcmd)){
					print '<font size="4" color="blue">Create Table';
					print "<i>$table_name</i> in database<i>$mydb</i><br></font>";
					print "<br>SQLcmd=$SQLcmd";
				} else {
					die ("Table Create Creation Failed SQLcmd=$SQLcmd");
				}
				mysqli_close($conn);
			}
		?>
	</body>
</html>