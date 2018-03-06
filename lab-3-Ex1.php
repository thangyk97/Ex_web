<html>
    <head>
        <style>
            table {
                width: 75%;
            }
            td input {
                width: 100%;
            }
            select {
                width: 10%;
            }

        </style>

    </head>
    <body>
        <form action="lab-3-Ex1.php" method="POST">
            <table>
                <tr>
                    <td>Yourname: </td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>Date: </td>
                    <td>
                        <select name="day">
                            <?php
                                foreach (range(1,31) as $day)
                                {
                                    print ("<option value=".$day.">".$day);
                                }
                            ?>
                        </select>

                        <select name="month">
                            <?php
                                foreach (range(1,12) as $month)
                                {
                                    print ("<option value=".$month.">".$month);
                                }
                            ?>
                        </select>

                        <select name="year">
                            <?php
                                foreach (range(1950, 2018) as $year)
                                {
                                    print ("<option value=".$year.">".$year);
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Time: </td>
                    <td>
                        <select name="hour">
                            <?php
                                foreach (range(0, 23) as $hour)
                                {
                                    print ("<option value=".$hour.">".$hour);
                                }
                            ?>
                        </select>
                        <select name="minute">
                            <?php
                                foreach (range(0, 59) as $minute)
                                {
                                    print ("<option value=".$minute.">".$minute);
                                }
                            ?>
                        </select>
                        <select name="second">
                            <?php
                                foreach (range(0, 59) as $second)
                                {
                                    print ("<option value=".$second.">".$second);
                                }
                            ?>
                        </select>
                    </td>
                </tr>
            </table>
        
            <input type="submit" value="submit">
            <input type="reset" value="reset">
        </form>
        <?php
            if (!empty($_POST["name"]))
            {
                print("Hi ".$_POST["name"]."!");
                print("<br>You have choose to have an appointment on ");
                print($_POST["hour"].":".$_POST["minute"].":".$_POST["second"].", ".$_POST["day"]."/".$_POST["month"].$_POST["year"]);
                print("<br><br>More information");
                print("<br><br>In 12 hours, the time and date is ");
                if ($_POST["hour"] >= 12)
                {
                    $hour = $_POST["hour"] - 12;
                } else {
                    $hour = $_POST["hour"];
                }
                print($hour.":".$_POST["minute"].":".$_POST["second"]." PM, ".$_POST["day"]."/".$_POST["month"].$_POST["year"]);
                
                if ($_POST["year"] % 100 == 0)
                {
                    if ($_POST["year"] % 400)
                    {
                        $is_nhuan = TRUE;
                    } else 
                    {
                        $is_nhuan = FALSE;
                    }
                } else if ($_POST["year"] % 4 == 0)
                {
                    $is_nhuan = TRUE;
                } else 
                {
                    $is_nhuan = FALSE;
                }

                $has31 = array([1,3,5,7,8,10,12]);
                if (in_array($_POST["month"], $has31))
                {
                    $num = 31;
                } else if ($_POST["month"] == 2) 
                {
                    if ($is_nhuan)
                    {
                        $num = 28;
                    } else {
                        $num = 29;
                    }
                } else 
                {
                    $num = 30;
                }
                print("<br><br>This month has ".$num." days!");
            }
        ?>
    </body>
</html>