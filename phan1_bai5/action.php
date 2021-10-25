<!DOCTYPE html>
<html>
    <head>
        <title>Basic Calculation</title>
        <meta charset="utf-8">
    </head>
    <body>
    <?php
        $first_num=$_GET['first_num'];
        $second_num=$_GET['second_num'];
        $operator=$_GET['operator'];
        // Code cảnh báo nhập thiếu dữ liệu
        if (empty($first_num) || empty($second_num)) {
            echo 'Canh bao: Ban nhap thieu du lieu !!!';
            exit();
        }
        //Code cảnh báo người dùng phải nhập số
        if (!is_numeric($first_num) || !is_numeric($second_num)) {
            echo 'Canh bao: Ban phai nhap so !!!';
            exit();
        }
        if ($operator == '+') {
            $result=$first_num + $second_num;
        }
        else if ($operator == '-') {
            $result=$first_num - $second_num;
        }
        else if ($operator == '*') {
            $result=$first_num * $second_num;
        }
        else if ($operator == '/') {
            $result=$first_num / $second_num;
        }
        else if ($operator == '^') {
            $result=pow($first_num, $second_num);
        }
        else if ($operator == '^-1') {
            $result=pow($first_num, -1);
        }
        else {
            echo 'Canh bao: Toan tu ban nhap vao khong chinh xac !!!';
            exit();
        }
    ?>
    <form action="#">
        <input type="text" value="<?php echo $first_num ?>" name="first_num" size="10">
        <select name="operator" id="operator" value="<?php echo $operator ?>"></select>
        <input type="text" value="<?php echo $second_num ?>" name="second_num" size="5">
        =
        <input type="text" value="<?php echo $result ?>" name="result" size="10"><br/><br/>
        <a href="index.php">Làm phép tính khác</a>
    </form>
    </body>
</html> 