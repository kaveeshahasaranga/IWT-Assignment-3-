<?php

require 'connect.php';

$error ="";

if (isset($_POST["login"])) {
    if (isset($_POST["username"]) && isset($_POST["password"])) { 
        $username = mysqli_real_escape_string($con, $_POST['username']); 
        $password = mysqli_real_escape_string($con, $_POST['password']); 

        if (empty($username) || empty($password)) { 
            header("Location: admin.php?error=Please fill in all fields");
            exit();
        } else {
            $sql = "SELECT * FROM admin WHERE username = '$username' AND password ='$password'";
            $result = $con->query($sql);

            if ($result->num_rows > 0) {
                
                header("Location:adminProfile.php "); 
                exit();
            } else {
                
                header("Location: admin.php?error=Invalid email or password"); 
                exit();
            }
        }
    }
}


?>