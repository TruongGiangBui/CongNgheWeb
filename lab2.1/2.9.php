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
			$hob1=$_POST["hob1"];
			if($hob1=="yes") {print"<br><li>Photography </li>";}
			$hob2=$_POST["hob2"];
			if($hob2=="yes") print"<br><li>Listening Music </li>";
			$hob3=$_POST["hob3"];
			if($hob3=="yes") print"<br><li>Playing Soccer </li>";
			$hob4=$_POST["hob4"];
			if($hob4=="yes") print"<br><li>Watching Movie </li>";
			$hob5=$_POST["hob5"];
			if($hob5=="yes") print"<br><li>Cooking </li>";
			$hob6=$_POST["hob6"];
			if($hob6=="yes") print"<br><li>Running </li>";
			$other=$_POST["other"];
			if($other!="other") print"<br><li>$other</li>";
        ?>
    </body>
</html>