<?php
require 'config.php';

$password = $_POST["password"];
$email = $_POST["semail"];

if (empty($password) || empty($email)) {
    echo "All fields are required";
} else {
    $sql = "UPDATE register3 SET password='$password' WHERE email='$email'";
    if ($con->query($sql)) { 
        header("Location: login.php");
        echo "Updated";
    } else {
        echo "Not Updated";
    }
}
?>
