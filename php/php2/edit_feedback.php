<?php

$servername = "localhost:3308";
$username = "root";
$password = "";
$dbname = "login";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$id = $name = $email = $comment = "";


if (isset($_GET['id']) && !empty($_GET['id'])) {
    
    $stmt = $conn->prepare("SELECT id, name, email, comment FROM feedbak WHERE id = ?");
    $stmt->bind_param("i", $feedback_id);
    $feedback_id = $_GET['id'];
    $stmt->execute();
    $result = $stmt->get_result();
    
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $id = $row["id"];
        $name = $row["name"];
        $email = $row["email"];
        $comment = $row["comment"];
    } else {
        echo "No feedback found with ID: " . $feedback_id;
    }
    $stmt->close();
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];
    
    
    $stmt = $conn->prepare("UPDATE feedbak SET name=?, email=?, comment=? WHERE id=?");
    $stmt->bind_param("sssi", $name, $email, $comment, $id);
    if ($stmt->execute()) {
        echo "Feedback updated successfully!";
        header("Location: feedback.php");
        exit();
    } else {
        echo "Error updating feedback: " . $stmt->error;
    }
    $stmt->close();
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Feedback</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        h2 {
            margin-bottom: 20px;
        }

        form {
            max-width: 600px;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        textarea {
            resize: none;
        }

        button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h2>Edit Feedback</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $name; ?>" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $email; ?>" required>
        <label for="comment">Comment:</label>
        <textarea id="comment" name="comment" required><?php echo $comment; ?></textarea>
        <button type="submit">Update</button>
    </form>
</body>
</html>
