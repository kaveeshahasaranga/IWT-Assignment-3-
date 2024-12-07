<?php
// Step 1: Establish connection to MySQL database
$servername = "localhost"; // Change this if your MySQL server is hosted elsewhere
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$database = "foodify"; // Your MySQL database name


// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    echo "There some problems with the database connection <br>";
}else{
    echo "connection sucess <br>";
}

// Step 2: Retrieve form data
$FullName = $_POST['FullName'];
$Address = $_POST['Address'];
$Email = $_POST['Email'];
$TelNo = $_POST['TelNo'];
$Message = $_POST['Message'];

// Step 3: Sanitize and validate form data (you can add more validation as needed)
$FullName = mysqli_real_escape_string($conn, $FullName);
$Address = mysqli_real_escape_string($conn, $Address);
$Email = mysqli_real_escape_string($conn, $Email);
$TelNo = mysqli_real_escape_string($conn, $TelNo);
$Message = mysqli_real_escape_string($conn, $Message);

// Step 4: Insert data into "inquiry" table
$sql = "INSERT INTO inquiry (`FullName`, `Address`, `Email`, `TelNo`, `Message`) VALUES ('$FullName', '$Address', '$Email', '$TelNo', '$Message')";

$insert = mysqli_query($conn,$sql);

if (!$insert) {
    echo "Error: " . $sql . "<br>" . $conn->error;
} else {
    echo "New record created successfully";
}

// Close connection
$conn->close();

// Redirect back to the HTML page
header("Location: ./contact.html");
exit();
?>