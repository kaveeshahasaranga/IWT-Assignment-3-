<?php

require'config.php';

$stname=$_POST["name"];
$stemail=$_POST["semail"];
$stnumber=$_POST["number"];
$stpassword=$_POST["password"];

$sql="INSERT INTO register3 VALUES ('$stname','$stemail','$stnumber','$stpassword')";

if($con->query($sql))
{
    header("Location: https://www.youtube.com/");
    echo "Insert Successful";
}
else{
    echo"Error" .$con->error;
}
$con->close();
?>