<!DOCTYPE html>
<html>
<head>
    <style>
        .error {color: #FF0001;}
    </style>
</head>
<body>
 
<?php
// Định nghĩa biến 
$nameErr = $emailErr = $mobilenoErr = $genderErr = $websiteErr = $agreeErr = "";
$name = $email = $mobileno = $gender = $website = $agree = "";
 
//Input fields validation
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
//Validate chuỗi 
    if (empty($_POST["name"])) {
        $nameErr = "Name là trường bắt buộc.";
    } else {
        $name = input_data($_POST["name"]);
        // Kiểm tra và chỉ cho phép nhập chữ và khoảng trắng 
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
            $nameErr = "Bạn chỉ được nhập chữ cái và khoảng trắng.";
        }
    }
 
    //Validate email 
    if (empty($_POST["email"])) {
        $emailErr = "Email là trường bắt buộc.";
    } else {
        $email = input_data($_POST["email"]);
        // Kiểm tra email có đúng định dạng hay không 
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Email không đúng định dạng.";
        }
    }
 
    //Validate số 
    if (empty($_POST["mobileno"])) {
        $mobilenoErr = "Số điện thoại là bắt buộc.";
    } else {
        $mobileno = input_data($_POST["mobileno"]);
        // Kiểm tra xem số điện thoại đã đúng định dạng hay chưa 
        if (!preg_match ("/^[0-9]*$/", $mobileno) ) {
            $mobilenoErr = "Bạn chỉ được nhập giá trị số.";
        }
        //Kiểm tra độ dài của số điện thoại 
        if (strlen ($mobileno) != 10) {
            $mobilenoErr = "Số điện thoại phải là 10 ký tự.";
        }
    }
 
    //validate URL 
    if (empty($_POST["website"])) {
        $website = "";
    } else {
        $website = input_data($_POST["website"]);
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
            $websiteErr = "URL không hợp lệ";
        }
    }
 
    // Kiểm tra bắt buộc nhập 
    if (empty ($_POST["gender"])) {
        $genderErr = "Gender là trường bắt buộc.";
    } else {
        $gender = input_data($_POST["gender"]);
    }
 
    // Validate Checkbox
    if (!isset($_POST['agree'])){
        $agreeErr = "Đồng ý với điều khoản của chúng tôi trước khi submit.";
    } else {
        $agree = input_data($_POST["agree"]);
    }
}
function input_data($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
 
<h2>Registration Form</h2>
<span class = "error">* Bắt buộc nhập </span>
<br><br>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >
    Name:
    <input type="text" name="name">
    <span class="error">* <?php echo $nameErr; ?> </span>
    <br><br>
    E-mail:
    <input type="text" name="email">
    <span class="error">* <?php echo $emailErr; ?> </span>
    <br><br>
    Mobile No:
    <input type="text" name="mobileno">
    <span class="error">* <?php echo $mobilenoErr; ?> </span>
    <br><br>
    Website:
    <input type="text" name="website">
    <span class="error"><?php echo $websiteErr; ?> </span>
    <br><br>
    Gender:
    <input type="radio" name="gender" value="male"> Male
    <input type="radio" name="gender" value="female"> Female
    <input type="radio" name="gender" value="other"> Other
    <span class="error">* <?php echo $genderErr; ?> </span>
    <br><br>
    Agree to Terms of Service:
    <input type="checkbox" name="agree">
    <span class="error">* <?php echo $agreeErr; ?> </span>
    <br><br>
    <input type="submit" name="submit" value="Submit">
    <br><br>
</form>
 
<?php
if(isset($_POST['submit'])) {
    if($nameErr == "" && $emailErr == "" && $mobilenoErr == "" && $genderErr == "" && $websiteErr == "" && $agreeErr == "") {
        echo "<h3 color = #FF0001> <b>You have sucessfully registered.</b> </h3>";
        echo "<h2>Your Input:</h2>";
        echo "Name: " .$name;
        echo "<br>";
        echo "Email: " .$email;
        echo "<br>";
        echo "Mobile No: " .$mobileno;
        echo "<br>";
        echo "Website: " .$website;
        echo "<br>";
        echo "Gender: " .$gender;
    } else {
        echo "<h3> <b>Bạn chưa nhập đầy đủ thông tin hoặc chưa hợp lệ.</b> </h3>";
    }
}
?>
 
</body>
</html>