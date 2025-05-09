<?php

require 'config3.php';


$name = $_POST["name"];


$sql = "DELETE FROM profile WHERE name = '$name'";

    if($con->query($sql)){

        echo "deleted";
    }
    else
{
    echo "not deleted";
}



?>