<?php

require 'conection.php';

$id=$_POST["id"];
$name=$_POST["rname"];
$category=$_POST["category"];
$time=$_POST["ptime"];
$ingredient=$_POST["ingredients"];
$introduction=$_POST["intro"];
$email=$_POST["email"];

if(empty($id)||empty($name)||empty($category)||empty($time)||empty($ingredient)||empty($introduction)||empty($email))
{
    echo "All required";
}

else
{
    $sql="UPDATE finalcrudtable set name='$name',category='$category',ptime='$time',ingredients='$ingredient',introduction='$introduction',email='$email' WHERE id='$id'";

    if($con->query($sql))
    {
        echo "Record updated successfully";

        header("location:reciperead.php");
    }

    else
    {
        echo "Not Updated";
    }

}


?>