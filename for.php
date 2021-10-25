<!DOCTYPE html>
<html lang="en">
    <head>
        <title>For Loop</title>
        <meta charset="utf-8">
    </head>
    <body>
        <div>
            <?php
                for ($i=0; $i<100; $i++){
                    if($i%2==1) {
                        echo "$i\n";
                    }
                }
            ?>
        </div>
    </body>
</html>