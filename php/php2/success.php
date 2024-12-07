<?php

$servername = "localhost:3308";
$username = "root";
$password = "";
$dbname = "login";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT id, name, email, comment FROM feedbak ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Last Feedback</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        h2 {
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .action-column {
            width: 150px;
        }

        .action-column a {
            display: inline-block;
            padding: 6px 12px;
            margin-right: 5px;
            border: 1px solid #007bff;
            border-radius: 4px;
            color: #007bff;
            background-color: transparent;
            text-decoration: none;
            text-align: center;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .action-column a:hover {
            background-color: #007bff;
            color: #fff;
        }

        .action-column .delete-link {
            border-color: #dc3545;
            color: #dc3545;
        }

        .action-column .delete-link:hover {
            background-color: #dc3545;
            color: #fff;
        }

        @media (max-width: 768px) {
            table {
                font-size: 14px;
            }
        }

        #bac{
            display: inline-block;
            padding: 6px 12px;
            margin-left: 550px;
            border: 1px solid #007bff;
            border-radius: 4px;
            color: #007bff;
            background-color: transparent;
            text-decoration: none;
            text-align: center;
            cursor: pointer;
            transition: background-color 0.3s ease;

        
        }
    </style>
</head>
<body>
    <h2>Feedback</h2>
    <?php if ($result->num_rows > 0): ?>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Comment</th>
                <th class="action-column">Action</th>
            </tr>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["name"]; ?></td>
                    <td><?php echo $row["email"]; ?></td>
                    <td><?php echo $row["comment"]; ?></td>
                    <td class="action-column">
                        <a href='edit_feedback.php?id=<?php echo $row["id"]; ?>'>Edit</a> | 
                        <a href='delete_feedback.php?id=<?php echo $row["id"]; ?>' onclick="return confirm('Are you sure you want to delete this feedback?')">Delete</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
        <br><br>
        <a href='login.php' id="bac">Back</a> 
    <?php else: ?>
        <p>No feedback found</p>
    <?php endif; ?>

    <?php $conn->close(); ?>
</body>
</html>
