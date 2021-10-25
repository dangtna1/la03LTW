<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Phan 1 bai 2</title>
        <meta charset="utf-8">
    </head>
    <body>
        <p>
            <?php
                function greeting($number) {
                    switch($number%5) {
                        case 0:
                            echo "Hello";
                            break;
                        case 1:
                            echo "How are you?";
                            break;
                        case 2:
                            echo "I'm doing well, thank you";
                            break;
                        case 3:
                            echo "See you later";
                            break;
                        case 4:
                            echo "Good-bye";
                            break;
                    }
                }
                greeting(17);
            ?>
        </p>
    </body>
</html>