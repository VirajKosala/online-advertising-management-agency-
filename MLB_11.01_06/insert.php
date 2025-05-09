<?php

require 'config.php';

$Fname=$_POST["Fullname"];
$Uname=$_POST["Username"];
$Uemail=$_POST["email"];
$Ucontact=$_POST["Contact"];
$Upass=$_POST["password"];


$sql="INSERT INTO user_details VALUES ('$Fname','$Uname','$Uemail','$Ucontact','$Upass')";


if($con->query($sql))

{
    echo"Insert succesful";
    
}

else{
    echo"Error".$con->error;
}

$con->close();





?>