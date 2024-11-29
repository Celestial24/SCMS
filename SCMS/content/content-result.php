<?php
require '../connection/connection.php';

$query = "SELECT * FROM tb_staff ";
$result = mysqli_query($conn, $query);



?>

<div class="container-table">

    <div class="table-staff">

        <h1 class="title">Staff Result</h1>
        <table class="table-registered">
            <tr>
                <td>full-name</td>
                <td>Date of Birth</td>
                <td>Email</td>
                <td>Contact Number</td>
                <td>Address</td>
                <td>Current medications</td>
                <td>allergies</td>
                <td>Previous Surgeries or illnesses:</td>
                <td>Action</td>
            </tr>

            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {

                    echo "<tr class='registered'>";
                    echo "<td>" . $row['fullname'] . "</td>";
                    echo "<td>" . $row['Date-birth'] . "</td>";
                    echo "<td>" . $row['gender'] . "</td>";
                    echo "<td>" . $row['contact'] . "</td>";
                    echo "<td>" . $row['Address'] . "</td>";
                    echo "<td>" . $row['CM'] . "</td>";
                    echo "<td>" . $row['Allergies'] . "</td>";
                    echo "<td>" . $row['PI'] . "</td>";
                    echo "<td> 
                     <div class='btn-group'>
                       <a class='btn btn-secondary1' value=''href=''> Edit</a>
                       <a class='btn btn-secondary2' value=''href=''> Deleted</a>
                     </div>
                     </td>";
                    echo "</tr";
                }
            }

            ?>


        </table>
    </div>
</div>