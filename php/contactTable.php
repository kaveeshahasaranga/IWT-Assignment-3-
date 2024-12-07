<?php
// Fetch data from the database and populate the table
// Modify this section to connect to your database and fetch data
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "foodify";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to delete a record
if(isset($_POST['delete'])){
    $id = $_POST['delete'];
    $sql = "DELETE FROM inquiry WHERE inquiryID=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

// Function to update a record
if(isset($_POST['update'])){
    $id = $_POST['update'];
    // Redirect to the update form with inquiry ID
    header("Location: update_form.php?id=$id");
    exit;
}

// Update query
if(isset($_POST['submit'])) {
    $id = $_POST['id'];
    $fullName = $_POST['fullName'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $telNo = $_POST['telNo'];
    $message = $_POST['message'];
    
    $sql = "UPDATE inquiry SET fullName='$fullName', address='$address', email='$email', telNo='$telNo', message='$message' WHERE inquiryID=$id";
    
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$sql = "SELECT inquiryID, fullName, address, email, telNo, message FROM inquiry";
$result = $conn->query($sql);

// Include CSS styles directly in the PHP file
echo "
<style>
/* CSS for styling the table */
.styled-table {
  width: 100%;
  border-collapse: collapse;
  margin: 25px 0;
  font-size: 0.9em;
  font-family: sans-serif;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.styled-table thead tr {
  background-color: #009879;
  color: #ffffff;
  text-align: left;
}

.styled-table th,
.styled-table td {
  padding: 10px; /* Reduced padding for smaller buttons */
}

.styled-table tbody tr {
  border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
  background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
  border-bottom: 2px solid #009879;
}

/* CSS for styling the buttons */
.update-btn {
  background-color: #4CAF50;
  color: white;
  border: none;
  padding: 4px 8px; /* Smaller padding for smaller buttons */
  cursor: pointer;
  border-radius: 4px;
}

.delete-btn {
  background-color: #f44336;
  color: white;
  border: none;
  padding: 4px 8px; /* Smaller padding for smaller buttons */
  cursor: pointer;
  border-radius: 4px;
}

.return-btn {
  display: block;
  width: 150px;
  margin: 20px auto; /* Center the button */
  padding: 10px 20px; /* Add padding */
  background-color: #007bff; /* Blue background color */
  color: white; /* White text color */
  border: none; /* No border */
  border-radius: 5px; /* Rounded corners */
  text-decoration: none; /* Remove underline */
  font-size: 16px; /* Font size */
  cursor: pointer; /* Cursor on hover */
  transition: background-color 0.3s; /* Smooth color transition on hover */
}

.return-btn:hover {
  background-color: #0056b3; /* Darker blue on hover */
}
</style>";

if ($result->num_rows > 0) {
    // Output data of each row
    echo "<table class='styled-table'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Name</th>";
    echo "<th>Address</th>";
    echo "<th>Email</th>";
    echo "<th>Telephone</th>";
    echo "<th>Message</th>";
    echo "<th>Actions</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["inquiryID"]."</td>";
        echo "<td>".$row["fullName"]."</td>";
        echo "<td>".$row["address"]."</td>";
        echo "<td>".$row["email"]."</td>";
        echo "<td>".$row["telNo"]."</td>";
        echo "<td>".$row["message"]."</td>";
        echo "<td>
            <form method='post' action=''>
                <input type='hidden' name='id' value='".$row["inquiryID"]."'><br>
                <button type='submit' name='update' class='update-btn' value='".$row["inquiryID"]."'>Update</button>
                <button type='submit' name='delete' class='delete-btn' value='".$row["inquiryID"]."'>Delete</button>
            </form>
        </td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";

    // Return button to contact.html page
    echo "<a href='../contact.html' class='return-btn'>Return to Contact Page</a>";

} else {
    echo "No messages found";
}
$conn->close();
?>