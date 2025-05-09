<?php

   $con=new mysqli("localhost","root","","agency");

if($con->connect_error )
{

    die("Connection failed".$con->connect_error);
}

else
{

echo"Succesfull'<br>'";

}



?>