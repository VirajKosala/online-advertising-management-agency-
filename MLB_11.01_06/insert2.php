<?php

require 'connect2.php';




$country = $_POST["country"];
$promotional_code = $_POST["promotional_code"];
$payment_profile = $_POST["payment_profile"];
$payment_method = $_POST["payment_method"];
$payment_amount = $_POST["payment_amount"];



//insert details to employeedetails database
$payment = "INSERT INTO payment VALUE('$country','$promotional_code','$payment_profile','$payment_method','$payment_amount')";



if($con->query($payment)){
    echo "success";
}
else{
    echo "failed";
}

$con->close();

?>