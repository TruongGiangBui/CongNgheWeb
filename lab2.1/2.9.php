<html lang="vi">
    <head>
        <title> Receiving Input</title>
    </head>
    <body>
        <font size=5>Thank you: Got Your Input</font>
        <?php
			$name=$_POST['name'];
			$class=$_POST["class"];
			$university=$_POST["university"];
			print("<br>Your name is $name");
			print("<br>Your class is $class");
			print("<br>Your university is $university");
			print("<br>Your hobbies are:");
			if(isset($_POST["hob1"])) {print"<br><li>Photography </li>";}
			if(isset($_POST["hob2"])) print"<br><li>Listening Music </li>";
			if(isset($_POST["hob3"])) print"<br><li>Playing Soccer </li>";
			if(isset($_POST["hob4"])) print"<br><li>Watching Movie </li>";
			if(isset($_POST["hob5"])) print"<br><li>Cooking </li>";
			if(isset($_POST["hob6"])) print"<br><li>Running </li>";
			$other=$_POST["other"];
			if(isset($_POST["other"])) print"<br><li>$other</li>";
        ?>
    </body>
</html>