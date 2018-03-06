<html>
    <head>
    </head>

    <body>
        <h3>Convert radians to degrees</h3>
        <form action="lab-3-Ex2.php" method="POST">
            <input type="radio" name="is_r2d" value="1"> Radians to degrees <br>
            <input type="radio" name="is_r2d" value="0"> Degrees to radians <br> 
            Raw input: 
            <input type="text" name="raw_value"> <br><br>

            <input type="submit" value="submit">
            <input type="reset" value="reset">
        </form>
        <?php
            function convert($is_r2d, $raw_value)
            {
                $is_r2d = (float)$is_r2d;
                $raw_value = (float)$raw_value;

                if ($is_r2d) {
                    return ($raw_value * 180 / 3.141);
                } else {
                    return ($raw_value * 3.141 / 180);
                }
            }

            if (!empty($_POST["raw_value"])) {
                $output = convert($_POST["is_r2d"], $_POST["raw_value"]);

                printf("Result %f", $output);
            }
        ?>
        <br>
        <hr>
        <br>
        Enter 2 name with 2 birthday: <br><br>
        <form action="lab-3-Ex2.php" method="POST">
            <table>
                <tr>
                    <td>name: </td>
                    <td><input type="text" name="name1"></td>
                    <td>birthday: </td>
                    <td><input type="date" name="birthday1"></td>
                </tr>
                <tr><td>&nbsp</td></tr>
                <tr>
                    <td>name: </td>
                    <td><input type="text" name="name2"></td>
                    <td>birthday: </td>
                    <td><input type="date" name="birthday2"></td>
                </tr>
            </table>
            <br>
            <input type="submit" value="submit">
            <input type="reset" value="reset">
        </form>
        <?php
        function is_validate($time)
        {

        }
        function time2letter($time)
        {
            $letter = "blah blah";
            return $letter;
        }
        function diff_in_day($time1, $time2)
        {
            $day1 = (int) substr($time1, -5, -3);
            $day2 = (int) substr($time2, -5, -3);
            $diff = abs($day1 - $day2);

            return $diff;
        }
        function cal_old($time)
        {
            $t = time();
            $now = date("Y-m-d", $t);
            $current_year = (int) substr($now, 0, -6);

            $birth = (int) substr($time, 0, -6);
            
            return abs($current_year - $birth);
        }
        function diff_year($time1, $time2)
        {
            $birth1 = (int) substr($time1, 0, -6);
            $birth2 = (int) substr($time2, 0, -6);
            return abs($birth1 - $birth2);
        }
        if (!empty($_POST["name1"]))
        {
            $name1 = $_POST["name1"];
            $name2 = $_POST["name2"];
            $birthday1 = $_POST["birthday1"];
            $birthday2 = $_POST["birthday2"];
        }    


        if (!empty($name1) &&
        !empty($name2) &&
        !empty($birthday1) &&
        !empty($birthday2)) {
            print (time2letter($birthday1)."<br>");
            print (time2letter($birthday2)."<br>");
            print ("The difference in days between two dates: ");
            print (diff_in_day($birthday1, $birthday2)."<br>");
            print ($name1." : ".cal_old($birthday1)." year old<br>");
            print ($name2." : ".cal_old($birthday2)." year old<br>");
            print ("the difference years between two persons: ");
            print (diff_year($birthday1, $birthday2));

        } else if (empty($name1) && 
        empty($name2) &&
        empty($birthday1) &&
        empty($birthday2)) {

        } else {
            print ("<br>Please enter all !");
        }

        ?>

    </body>
</html>