<html>
    <head>
        <title>q16</title>
    </head>
    <body>
        <?php
        
        $num = $_GET["num"];
        
        for($i = 0; $i <= 10; $i ++){
            $resp = $num * $i;
	        echo "$num x $i= $resp <br>";
        }

        ?>
    </body>
</html>