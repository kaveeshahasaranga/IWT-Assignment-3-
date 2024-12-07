
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
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$address = $_POST['address'];


// Step 3: Sanitize and validate form data (you can add more validation as needed)
$fullname = mysqli_real_escape_string($conn, $fullname);
$email = mysqli_real_escape_string($conn, $email);
$address = mysqli_real_escape_string($conn, $address);

// Step 4: Insert data into "inquiry" table
$sql = "INSERT INTO payment (fullname, email, address) VALUES ('$fullname', '$email', '$address')";

$insert = mysqli_query($conn,$sql);

if (!$insert) {
    echo "Error: " . $sql . "<br>" . $conn->error;
} else {
    echo "New record created successfully";
}

// Close connection
$conn->close();

?>