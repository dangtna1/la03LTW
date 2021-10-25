<!DOCTYPE html>
<html>
    <head>
        <title>Register Form</title>
        <meta charset="utf-8">
        <style>
            .error {
                color: red;
            }
        </style>
    </head>
    <body>
        <?php
            
            function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }




            $firstnameErr = $lastnameErr = $emailErr = $passwordErr = $aboutErr = "";
            $firstname = $lastname = $email = $password = $about = "";
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                //validate first name
                if (empty($_POST["firstname"])) {
                    $firstnameErr = "First name is required";
                } else {
                    $firstname = test_input($_POST["firstname"]);
                    if (!preg_match("/^[a-zA-Z-' ]*$/", $firstname)) {
                        $firstnameErr = "Only letters and white space allowed";
                    }
                    if (strlen($firstname)<2 || strlen($firstname)>30) {
                        $firstnameErr = "Please input 2-30 characters!";
                    }
                }
                //validate last name
                if (empty($_POST["lastname"])) {
                    $lastnameErr = "Last name is required";
                } else {
                    $lastname = test_input($_POST["lastname"]);
                    if (!preg_match("/^[a-zA-Z-' ]*$/", $lastname)) {
                        $lastnameErr = "Only letters and white space allowed";
                    }
                    if (strlen($firstname)<2 || strlen($firstname)>30) {
                        $lastnameErr = "Please input 2-30 characters!";
                    }
                }
                //validate email
                if (empty($_POST["email"])) {
                    $emailErr = "Email is required";
                } else {
                    $email = test_input($_POST["email"]);
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $emailErr = "Invalid email";
                    }
                }
                //validate password
                if (empty($_POST["password"])) {
                    $passwordErr = "Password is required";
                } else {
                    $password = $_POST["password"];
                    if (strlen($password)<2 || strlen($password)>30) {
                        $passwordErr = "Please input 2-30 characters!";
                    }
                }
            }
        ?>
       


        <h2>PHP form validation</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            First name:
            <input type="text" name="firstname" value="<?php echo $firstname;?>">
            <span class="error">* <?php echo $firstnameErr;?></span>
            <br><br>
            Last name:
            <input type="text" name="lastname" value="<?php echo $lastname;?>">
            <span class="error">* <?php echo $lastnameErr;?></span>
            <br><br>
            Email:
            <input type="text" name="email" value="<?php echo $email;?>">
            <span class="error">* <?php echo $emailErr;?></span>
            <br><br>
            Password:
            <input type="password" name="password" value="<?php echo $password;?>">
            <span class="error">* <?php echo $passwordErr;?></span>
            <br><br>
            Birthday:
            <select name="day" id="day">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
            </select>
            <select name="month" id="month">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
            </select>
            <select name="year" id="year">
                <option value="1995">1995</option>
                <option value="1996">1996</option>
                <option value="1997">1997</option>
                <option value="1998">1998</option>
                <option value="1999">1999</option>
                <option value="2000">2000</option>
                <option value="2001">2001</option>
                <option value="2002">2002</option>
                <option value="2003">2003</option>
                <option value="Other">Other</option>
            </select>
            <br><br>
            <fieldset>
                <legend>Gender:</legend>
                <label for="nam">Nam</label>
                    <input type="radio" name="Gender" value="nam">
                <label for="nu">Nữ</label>
                    <input type="radio" name="Gender" value="nu">
                <label for="khong_xac_dinh">Không xác định</label>
                    <input type="radio" name="Gender" value="khong_xac_dinh">
            </fieldset>
            <br><br>
            Country:
            <select name="Country" id="Country">
                <option value="Vietnam">Vietnam</option>
                <option value="Astralia">Astralia</option>
                <option value="United States">United States</option>
                <option value="India">India</option>
                <option value="Other">Other</option>
            </select>
            <br><br>
            About:
            <textarea name="About" id="About" cols="20" rows="20"></textarea>
            <span class="error">* <?php echo $aboutErr;?></span>
            <br><br>
            <input type="submit" name="submit" value="Submit">
            <input type="reset" name="reset" value="Reset">
        </form>
    </body>
</html>