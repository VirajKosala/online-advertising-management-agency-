<?php

require 'connect2.php';


$payment_profile = $_POST["payment_profile"];


$sql = "DELETE FROM payment WHERE payment_profile = '$payment_profile'";

    if($con->query($sql)){

        echo "deleted";
    }
    else
{
    echo "not deleted";
}



?>