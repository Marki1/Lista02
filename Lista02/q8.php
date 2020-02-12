<html>
    <head>
        <title>q8</title>
    </head>
    <body>
        <?php

        $max = $_GET["max"];

        $cont = 0;
        $soma = 0;

        while($cont <= $max) {
            $soma += $cont;
            $cont++;
        }
        
        echo "A soma é: $soma";

        ?>
    </body>
</html>