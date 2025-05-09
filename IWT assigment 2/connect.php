<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "advertice";

    $con = new mysqli($server, $username, $password, $dbname);
    if($con->connect_error)
    {
        die("Connection Failed: ". $con->connect_error);
    }?>