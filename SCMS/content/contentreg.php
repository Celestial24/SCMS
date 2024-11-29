<?php
require '../connection/connection.php';

if (isset($_POST['Submit'])) {

    $fullname = $_POST['fullname'];
    $Email = $_POST['email'];
    $ph = $_POST['phone-number'];
    $gender = $_POST['Gender'];
    $address = $_POST['address'];

    $reg = mysqli_query($conn, "SELECT * FROM  tb_patient WHERE fullname = '$fullname' or email='$Email'");

    if (mysqli_num_rows($reg) > 0) {
        echo
        "<script> alert('Email Has Already Taken')</script>";
    } else {
        $query = "INSERT INTO tb_patient vALUES('', '$fullname','$Email','$ph','$gender','$address')";
        mysqli_query($conn, $query);
        echo
        "<script> alert('Registration Successful')</script>";
    }
}

?>



<div class="form-container">
    <h1>Patient Registration</h1>

    <form action="" method="post">
        <div class="content-forms">


      
            <div class="form-input">
                <label for="">Full Name:</label>
                <input type="text" name="fullname" placeholder="full-name">
            </div>



            <div class="form-input">
                <label for="">Email: </label>
                <input type="text" name="email" placeholder="Email ">
            </div>

            <div class="form-input">
                <label for="">Phone Number:</label>
                <input type="text" name="phone-number" placeholder="phone number">
            </div>

            <div class="form-input">
                <label for="">Gender:</label>
                <input type="text" name="Gender" placeholder="Gender">
            </div>


            <div class="form-input">
                <label for="">Address:</label>
                <input type="text" name="address" placeholder="Address">
            </div>

            <button type="submit" name="Submit"> Registration</button>
        </div>

    </form>

</div>