<?php

require 'config3.php';

$sql="SELECT name,email,contact_no, address FROM profile";
$result=$con->query($sql);
if($result->num_rows > 0) {


    while($row = $result->fetch_assoc()) {
        echo $row["name"]." ".$row["email"]." ".$row["contact_no"]." ".$row["address"];

        echo"<br>";
    }

}

else {

    echo "No Result";
}

$con->close();


?>