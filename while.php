<!DOCTYPE html>
<html lang="en">
    <head>
        <title>While Loop</title>
        <meta charset="utf-8">
    </head>
    <body>
        <div>
            <?php
                $i=0;
                while($i<=100) {
                    if($i%2==1) {
                        echo "$i ";
                    }
                    $i++;
                } 
            ?>
        </div>
    </body>
</html>