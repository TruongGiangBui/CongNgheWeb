<html>
    <head>
        <title>Date time processing</title>
    </head>
    <body>
        <font size="5"><!-- comment -->
        Enter your name and select date and time for the appointment</font><!-- comment -->
        <br><br>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="GET">

        <table>
            <tr>
                <td>
                    Your name:
                </td>
                <td>
                    <input type="text" size="18" maxlength="15" name="name">
                </td>
            </tr>
            <tr>
                <td>Date:</td><!-- comment -->
                <td>
                    <select name="day">
                        <?php
                            for($i=1; $i<=31; $i++){
                                print("<option>$i</option>");
                            }
                        ?>
                    </select>
                    <select name="month">
                        <?php
                            for($i=1; $i<=12; $i++){
                                print("<option>$i</option>");
                            }
                        ?>
                    </select>
                    <select name="year">
                        <?php
                            for($i=2000; $i<=2100; $i++){
                                print("<option>$i</option>");
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Time:</td><!-- comment -->
                <td>
                    <select name="hour">
                        <?php
                            for($i=0; $i<=23; $i++){
                                print("<option>$i</option>");
                            }
                        ?>
                    </select>
                    <select name="minute">
                        <?php
                            for($i=0; $i<=59; $i++){
                                print("<option>$i</option>");
                            }
                        ?>
                    </select>
                    <select name="second">
                        <?php
                            for($i=0; $i<=60; $i++){
                                print("<option>$i</option>");
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td align="right"><input type="SUBMIT" value="Submit"></td>
                <td align="left"><input type="RESET" value="Reset"></td>
            </tr>
        </table>
        </form>
        <?php
        if(array_key_exists("name", $_GET)){
            $name=$_GET["name"];
            $hour=$_GET["hour"];
            $minute=$_GET["minute"];
            $second=$_GET["second"];
            $day=$_GET["day"];
            $month=$_GET["month"];
            $year=$_GET["year"];
            printf("Hi %s!",$name);
            print("<br>");
            printf("You have choose to have an appointment on %d:%d:%d, %d/%d/%d", $hour, $minute, $second, $day, $month, $year);
            print("<br><br>");
            print("More information");
            print("<br><br>");
            $halfDay="AM";
            if($hour>=12){
                $hour = $hour - 12;
                $halfDay="PM";
            }
            printf("In 12 hours, the time and date is %d:%d:%d %s, %d/%d/%d", $hour, $minute, $second, $halfDay, $day, $month, $year);
            print("<br><br>");
            $leapYear=0;
            if($year%4==0){
                if($year%100==0){
                    if($year%400==0){
                        $leapYear=1;
                        
                    }
                }else{
                    $leapYear=1;
                }
            }
            $month30=array(4, 6, 9, 11);
            $month31=array(1, 3, 5, 7, 8, 10, 12);
            foreach($month30 as $month30){
                if($month30==$month){
                    print("This month has 30 days!");
                    break;
                }
            }
            foreach($month31 as $month31){
                if($month31==$month){
                    print("This month has 31 days!");
                    break;
                }
            }
            if(($month==2)&&($leapYear==0)){
                print("This month has 28 days!");
            }
            if(($month==2)&&($leapYear==1)){
                print("This month has 29 days!");
            }
        }
        ?>
    </body>
</html>


