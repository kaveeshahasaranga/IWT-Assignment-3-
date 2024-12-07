<?php

$con=new mysqli("localhost","root","","finalcrud");

if($con->connect_error)
{
    die("connection failed".$con->connect_error);
}

?>