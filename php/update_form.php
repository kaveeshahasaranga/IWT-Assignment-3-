<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Record</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 600px;
        margin: 20px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
        color: #333;
        text-align: center;
    }

    form {
        margin-top: 20px;
    }

    label {
        font-weight: bold;
    }

    input[type="text"],
    input[type="email"],
    textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        font-size: 16px;
    }

    textarea {
        height: 150px;
    }

    button[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }

    button[type="submit"]:hover {
        background-color: #45a049;
    }
    </style>
</head>

<body>

    <div class="container">
        <h2>Update Record</h2>
        <?php
    // Fetch data from the database based on the ID passed in the URL
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

    // Check if the 'id' parameter is set in the URL
    if(isset($_GET['id'])) {
        // Get the ID from the URL
        $id = $_GET['id'];

        // Fetch data based on the ID
        $sql = "SELECT * FROM inquiry WHERE inquiryID=$id";

        // Execute the query
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of the selected record
            $row = $result->fetch_assoc();
            ?>
        <form method="post" action="../php/contactTable.php">
            <input type="hidden" name="id" value="<?php echo $row['inquiryID']; ?>">
            <label for="fullName">Full Name:</label>
            <input type="text" id="fullName" name="fullName" value="<?php echo $row['fullName']; ?>"><br>
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" value="<?php echo $row['address']; ?>"><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $row['email']; ?>"><br>
            <label for="telNo">Telephone:</label>
            <input type="text" id="telNo" name="telNo" value="<?php echo $row['telNo']; ?>"><br>
            <label for="message">Message:</label>
            <textarea id="message" name="message"><?php echo $row['message']; ?></textarea><br>
            <button type="submit" name="submit">Update Record</button>
        </form>
        <?php
        } else {
            echo "Record not found";
        }
    } else {
        echo "No ID specified";
    }
    $conn->close();
    ?>
    </div>

</body>

</html>