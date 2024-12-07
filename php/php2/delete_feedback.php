<?php

$servername = "localhost:3308";
$username = "root";
$password = "";
$dbname = "login";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if (isset($_GET['id']) && !empty($_GET['id'])) {

    $stmt = $conn->prepare("DELETE FROM feedbak WHERE id = ?");
    $stmt->bind_param("i", $id);

  
    $id = $_GET['id'];
    
    if ($stmt->execute()) {
       
        header("Location: feedback.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    
    $stmt->close();
}


$conn->close();
?>
