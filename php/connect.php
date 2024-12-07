<?php

//connect to the database

$con = new mysqli("localhost","root","","foodify");


//check for connection errors 

if($con->connect_error)
{
    die("Connection failed" .$con->connect_error);
} 
else{
    echo " ";
}


?>

        
