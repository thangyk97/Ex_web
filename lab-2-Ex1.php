<html>
    <head><title>Receiving Input</title></head>
    <body>
        <?php
            if ($_POST['sex'] == 'Male')
                print ("Hello, Mr. ".$_POST['name']);
            else
                print ("Hello, Ms. ".$_POST['name']);
            print ("<br>You are studying at ".$_POST['class'].", ".$_POST['university']);
            print ("<br>Your hobby is:");
            print ("<ul>");
            foreach ($_POST['hobby'] as $hobby)
            {
                print ("<li>".$hobby."</li>");
            }
            print ("</ul>");

        ?>
    </body>
</html>