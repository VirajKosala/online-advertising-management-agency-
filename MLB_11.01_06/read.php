<?php

require 'config.php';
$sql="SELECT Full_name,User_name,Email,Contact_no,Password FROM user_details";
$result=$con->query($sql);
if($result->num_rows > 0) {


    while($row = $result->fetch_assoc()) {
        echo $row["Full_name"]." ".$row["User_name"]." ".$row["Email"]." ".$row["Contact_no"]." ".$row["Password"];

        echo"<br>";
    }

}

else {

    echo "No Result";
}

$con->close(); 


?>
