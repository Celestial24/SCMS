<?php
    require '../connection/connection.php';

    $query = "SELECT * FROM tb_patient ";
    $result = mysqli_query($conn,$query);



?>


<div class="table-patient">

    <h1 class="title">Registered Patient</h1>
    <table class="table-registered">
        <tr>
            <td>full-name</td>
            <td>email</td>
            <td>phone-number</td>
            <td>Gender</td>
            <td>Address</td>
            <td>Action</td>
        </tr>

        <?php 
            if($result->num_rows > 0){
                while($row = $result -> fetch_assoc()){
               
                    echo "<tr class='registered'>";
                    echo "<td>" .$row['fullname']. "</td>";
                    echo "<td>" .$row['email']."</td>";
                    echo "<td>" .$row['phone-number'] . "</td>";
                    echo "<td>" .$row['Gender'] . "</td>";
                    echo "<td>" .$row['address'] . "</td>";
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