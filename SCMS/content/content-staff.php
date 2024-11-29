<?php
require '../connection/connection.php';

if (isset($_POST['Submit'])) {

    $fullname = $_POST['fullname'];
    $Date = $_POST['Datebirth'];
    $gender = $_POST['gender'];
    $Contact = $_POST['contact'];
    $address = $_POST['Address'];
    $cm = $_POST['CM'];
    $al = $_POST['Allergies'];
    $PI = $_POST['PI'];

    $staff = mysqli_query($conn, "SELECT * FROM  `tb_staff` WHERE fullname = '$fullname' or Datebirth='$Date'");

    if (mysqli_num_rows($staff) > 0) {
        echo
        "<script> alert('Email Has Already Taken')</script>";
    } else {
        $query = "INSERT INTO `tb_staff` vALUES('', '$fullname', ' $Date','$gender', '$Contact', '$address', '$cm', '$al', '$PI')";
        mysqli_query($conn, $query);
        echo
        "<script> alert('Registration Successful')</script>";
    }
}





?>
<div class="context-staff">
    <h1>Staff Registration</h1>

    <div class="form-container">
        <form action="" method="post">
            <div class="input-group">
                <label for="">Fullname:</label>
                <input type="text" name="fullname" placeholder="Fullname">
            </div>

            <div class="input-group">
                <label for="">Date of Birth:</label>
                <input type="text" name="Datebirth" placeholder="Date of Birth">
            </div>

            <div class="input-group">
                <label for="">Gender:</label>
                <input type="text" name="gender" placeholder="Gender">
            </div>

            <div class="input-group">
                <label for="">Contact Number:</label>
                <input type="text" name="contact" placeholder="Contact number">
            </div>

            <div class="input-group">
                <label for="">Address:</label>
                <input type="text" name="Address" placeholder="Address">
            </div>

            <div class="input-group">
                <label for="">Current medication:</label>
                <input type="text" name="CM" placeholder="medication">
            </div>

            <div class="input-group">
                <label for="">allergies:</label>
                <input type="text" name="Allergies" placeholder="allergies">
            </div>
            <div class="input-group">
                <label for="">Previous Surgeries or illnesses:</label>
                <input type="text" name="PI" placeholder="Previous Surgeries or illnesses">
            </div>
            <button class="btn-staff" type="Submit" name="Submit" value="">Submit</button>
        </form>

    </div>
</div>