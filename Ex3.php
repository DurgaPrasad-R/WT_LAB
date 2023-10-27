<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        .error{
            color: red;
        }
    </style>
</head>
<body>
    <?php
    $name_error = $pass_error =  "";
    $name=$pass = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if (empty($_POST["name"])){
            $name_error = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
        }
        if (empty($_POST["pass"])){
            $pass_error = "Password is required";
        } else {
            $pass = test_input($_POST["pass"]);
        }
    }
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    ?>
    <h2>PHP Form Validation</h2>
    <p>* indicates that the values need to be added for sure!</p>
    <form action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        Enter your username:<br>
        <input type="text" name="name" placeholder="Enter your name:"> *<br>
        <span class="error"><?php echo $name_error ?></span><br>
        Enter your password:<br>
        <input type="password" name="pass" placeholder="Enter your password:"> *<br>
        <span class="error"><?php echo $pass_error ?></span>
        <br>
        <input type="submit" value="Submit">
    </form>
    <h2>Your Input:</h2>
    <?php
    if (empty($pass_error) && empty($name_error)){
        echo "Name:".$name;
        echo "<br>";
        echo "Pass:".$pass;
    }
    ?>
</body>
</html>
