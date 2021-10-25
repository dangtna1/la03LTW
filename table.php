<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Table</title>
        <meta charset="utf-8">
        <style>
            table {
		width: 21%;
                background: yellow;
                border-collapse: collapse;
            }
            table, td {
                border: 2px solid black;
            }
	    td {
		width: 3%;
		text-align: center;
	    }
        </style>
    </head>
    <body>
        <?php
            echo "<table>";
            for ($i=1; $i<8; $i++) {
                echo "<tr>";
                for ($j=1; $j<8; $j++) {
                    $multi=$i*$j;
                    echo "<td>$multi</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        ?>
    </body>
</html>