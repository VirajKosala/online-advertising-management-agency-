<?php

require 'config.php';

$Fname = $_POST["Fullname"];
$Uname = $_POST["Username"];
$Uemail = $_POST["email"];
$Ucontact = $_POST["Contact"];
$Upass = $_POST["password"];

if (empty($Fname) || empty($Uname) || empty($Uemail) || empty($Ucontact) || empty($Upass)) {
    echo "All fields are required.";
} else {
    $sql = "UPDATE user_details SET Full_name ='$Fname', Email = '$Uemail', Contact_no = '$Ucontact' WHERE User_name ='$Uname'";
    
    if ($con->query($sql)) {
        echo "Updated successfully.";
    } else {
        echo "Error updating record: " . $con->error;
    }
}

?>
