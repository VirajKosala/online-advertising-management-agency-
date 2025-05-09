<?php

require 'config3.php';


$name = $_POST["name"];
$email = $_POST["em"];
$contno = $_POST["cont"];
$address = $_POST["add"];



if(empty($name)||empty($email)||empty($contno)||empty($address))
{

    echo "All required";
}

else{

    $sql="UPDATE profile set email ='$email', contact_no='$contno', address = '$address' WHERE name ='$name'"; 

    if($con->query($sql)){

        echo "updated";
    }
}


?>