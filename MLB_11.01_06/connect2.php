<?php

    $con = new mysqli("localhost","root","","iwt");

    if ($con->connect_error) {
        die("Connect failed". $con->connect_error);
    }

?>