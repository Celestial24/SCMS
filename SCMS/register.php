<?php

require'./connection/connection.php';

if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $Confirmpassword = $_POST["Confirmpassword"];
    $duplicate = mysqli_query($conn,"SELECT * FROM tb_user WHERE username = '$username'or email ='$email'");

    if(mysqli_num_rows($duplicate)>0){
        echo
        "<script> alert('username or Email Has already taken')</script>";
    }else{
        if($password == $Confirmpassword){
            $query =  "INSERT INTO tb_user VALUES('','$name','$username','$email','$password')";
            mysqli_query($conn,$query);

            echo
            "<script> alert('Registration Successful')</script>";
        }else{
            echo
            "<script> alert('Password Doest not Match')</script>";
        }
    }


}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="./css/register.css">
</head>

<body>
    <div class="container" id="container">
        <div class="right-container">
            <img class="logo" src="./image/Logo.jpeg" alt="">
            <span>Create The Register Here</span>

            <p>School Clinic Management System</p>
        </div>

        <div class="register-form">
            <h2>Register form</h2>

            <form action="" method="post">



                <div class="input-group">
                    <label for="Name">Name </label>
                    <input type="text" name="name" placeholder="name" id="name" required>
                </div>



                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" placeholder="Username" id="username" required>
                </div>


                <div class="input-group">
                    <label for="Email">Email </label>
                    <input type="text" name="email" placeholder="Email" id="Email" required>
                </div>

                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" placeholder="Password" id="password" required>
                </div>

                <div class="input-group">
                    <label for="password"> Confirm Password</label>
                    <input type="password" name="Confirmpassword" placeholder="Confirm Password" id="password" required>
                </div>



                <button type="submit" name="submit">Register Here</button>

                <a class="login" href="./login.php">Login in</a>

            </form>
        </div>

    </div>
</body>

</html>