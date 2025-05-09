<?php

require 'config.php';

$Uname = $_POST["Username"];

$sql = "DELETE FROM user_details WHERE User_name = '$Uname'";

if ($con->query($sql)) {
    echo "Deleted successfully.";
} else {
    echo "Error deleting record: " . $con->error;
}

?>
