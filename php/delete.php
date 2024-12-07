<?php
 
require 'conection.php';

$id=$_POST["id"];

$sql="DELETE FROM finalcrudtable WHERE id='$id'";

if($con->query($sql))
{
    echo "Deleted";
}

else
{
    echo "Not Success";
}



?>