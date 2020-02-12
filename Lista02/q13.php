<html>
    <head>
        <title>q13</title>
    </head>
    <body>
        <?php

        $soma = 0;
        
        for($i = 0; $i < 1000; $i += 7){
	        $soma += $i;
        }
        
        echo "A Soma é: $soma";

        ?>
    </body>
</html>