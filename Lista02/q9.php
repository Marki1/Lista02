<html>
    <head>
        <title>q9</title>
    </head>
    <body>
        <?php

        $tentativas = 0;
        
        while(true){
	        $aleatorio = rand(0, 50);
	        $tentativas++;
            
            echo "Número ".$aleatorio."<br />";
            
            if($aleatorio == 37){
		        echo "Número Encontrado em $tentativas tentativas.";
		        break;
	        }

        }

        ?>
    </body>
</html>