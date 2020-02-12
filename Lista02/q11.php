<html>
    <head>
        <title>q11</title>
    </head>
    <body>
        <?php

        echo "<table border=1>";
        
        for($i = 1; $i <= 10; $i++){
	        echo "<tr>";
	        for($j = 1; $j <= 5; $j++){
		        echo "<td>Linha $i - Coluna $j</td>";
	        }
	        echo "</tr>";
        }
        echo "</table>";

        ?>
    </body>
</html>