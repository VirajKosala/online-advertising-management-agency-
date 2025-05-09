<?php

require 'connect2.php';


$country = $_POST["country"];
$promotional_code = $_POST["promotional_code"];
$payment_profile = $_POST["payment_profile"];
$payment_method = $_POST["payment_method"];
$payment_amount = $_POST["payment_amount"];


if(empty($country)||empty($promotional_code)||empty($payment_profile)||empty($payment_method)||empty($payment_amount))
{

    echo "All required";
}

else{

    $sql="UPDATE payment set country ='$country', promotional_code='$promotional_code',payment_method = '$payment_method',payment_amount = '$payment_amount' WHERE payment_profile ='$payment_profile'"; 
     
    if($con->query($sql)){

        echo "updated";
    }
}


?>