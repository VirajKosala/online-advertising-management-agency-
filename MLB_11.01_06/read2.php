<?php

require 'connect2.php';
$sql="SELECT country,promotional_code,payment_profile,payment_method,payment_amount FROM payment";
$result=$con->query($sql);
if($result->num_rows > 0) {


    while($row = $result->fetch_assoc()) {
        echo $row["country"]." ".$row["promotional_code"]." ".$row["payment_profile"]." ".$row["payment_method"]." ".$row["payment_amount"];

        echo"<br>";
    }

}

else {

    echo "No Result";
}

$con->close(); 


?>