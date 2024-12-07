<?php
$servername = "localhost:3308";
$username = "root";
$password = ""; 
$database = "login";


$con = new mysqli($servername, $username, $password, $database);


if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} else {

}
?>
