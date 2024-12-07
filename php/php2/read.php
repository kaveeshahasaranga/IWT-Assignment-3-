<?php
require 'config.php';
$error ="";
if (isset($_POST["login"])) {
    if (isset($_POST["email"]) && isset($_POST["password"])) { 
        $email = mysqli_real_escape_string($con, $_POST['email']); 
        $password = mysqli_real_escape_string($con, $_POST['password']); 

        if (empty($email) || empty($password)) { 
            header("Location: login.php?error=Please fill in all fields");
            exit();
        } else {
            $sql = "SELECT * FROM register3 WHERE email = '$email' AND Password ='$password'";
            $result = $con->query($sql);

            if ($result->num_rows > 0) {
                
                header("Location:https://www.youtube.com/ "); 
                exit();
            } else {
                
                header("Location: login.php?error=Invalid email or password"); 
                exit();
            }
        }
    }
}
?>
