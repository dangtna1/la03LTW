<!DOCTYPE html>
<html>
    <head>
        <title>Basic Calculation</title>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="action.php">
            <input type="text" name="first_num" size="10">
            <select name="operator" id="operator">
                <option value="+">Cộng</option>
                <option value="-">Trừ</option>
                <option value="*">Nhân</option>
                <option value="/">Chia</option>
                <option value="^">Lũy thừa</option>
                <option value="^-1">Nghịch đảo</option>
            </select>
            <input type="text" name="second_num" size="10">
            =
            <input type="text" name="result" size="10" onFocus="blur();">
            <input type="submit" value="Show">
        </form>
    </body>
</html>