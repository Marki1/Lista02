<html>
    <head>
        <title>q15</title>
    </head>
    <body>
        <?php
        //.php?linhas=x&colunas=x

        echo "<table border=1>";
        
        for($i = 1; $i <= $_GET["linhas"]; $i++){
	        echo "<tr>";
	        for($j = 1; $j <= $_GET["colunas"]; $j++){
		        echo "<td>Linha $i - Coluna $j</td>";
	        }
	        echo "</tr>";
        }
        echo "</table>";


        ?>
    </body>
</html>