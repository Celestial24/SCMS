<?php
require './connection/connection.php';
if (isset($_POST["submit"])) {

    $usernameemail = $_POST['usernameemail'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username ='$usernameemail'or email ='$usernameemail'");
    $row = mysqli_fetch_assoc($result);

    if (mysqli_num_rows($result) > 0) {
        if ($password == $row["password"]) {

            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];

            header("location: ./php/Dashboard.php");
        } else {
            echo
            "<script> alert('Wrong Password')</script>";
        }
    } else {
        echo
        "<script> alert('User not register')</script>";
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="./css/login.css">

</head>

<body>
    <div class="container">
        <div class="left-container">
            <img class="logo" src="./image/Logo.jpeg" alt="">

            <span class="Span">Welcome </span>

            <p class="Write">School Clinic Management System</p>

        </div>
        <div class="login-form">
            <h2>Login</h2>
            <form id="loginForm" action="" method="post" action="">


                <div class="input-group">
                    <label for="usernameemail">Username</label>
                    <input type="text" name="usernameemail" placeholder="Username" id="username" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" placeholder="Password" id="password" required>
                </div>
                <button type="submit" name="submit">Login</button>

                <a class="register" href="./register.php">Register Here</a>
                <a class="Forget" href="">Forget Password?</a>
            </form>
            <p id="message"></p>
        </div>
    </div>

</body>

</html>