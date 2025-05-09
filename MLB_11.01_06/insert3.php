<?php

require 'config3.php';

 
$name = $_POST["name"];
$email = $_POST["em"];
$contno = $_POST["cont"];
$address = $_POST["add"];

//insert details to employeedetails database
$profile = "INSERT INTO profile VALUE('$name','$email','$contno','$address')";



if($con->query($profile)){
    echo "success";
}
else{
    echo "failed";
}

$con->close();

?>