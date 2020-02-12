<html>
    <head>
        <title>q10</title>
    </head>
    <body>
        <?php

        $tentativas = 0;
        $soma = 0;
        
        while(true){
	        $aleatorio = rand(0, 100);
	        $tentativas++;
            $soma += $aleatorio;
            
            echo "Número ".$soma."<br />";
	        
            if($soma > 1000){
		        echo "Passou de 1.000 com $tentativas tentativas.";
		        break;
	        }

        }

        ?>
    </body>
</html>