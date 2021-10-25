<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Phần 1 bài 1</title>
        <meta charset="utf-8">
    </head>
    <body>
        <p>
        <?php
            $x = 10;
            $y = 7;
            $sum = $x + $y;
            $subtract = $x - $y;
            $multi = $x * $y;
            $divide = $x / $y;
            $module = $x % $y;
            echo "$x + $y = $sum<br>";
            echo "$x - $y = $subtract<br>";
            echo "$x * $y = $multi<br>";
            echo "$x / $y = $divide<br>";
            echo "$x % $y = $module<br>";
        ?>
        </p>
    </body>
</html>