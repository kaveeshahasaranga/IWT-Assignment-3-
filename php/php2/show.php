<?php
require 'config.php';

$sql = "SELECT username, email, number, password FROM register3";

$result = $con->query($sql);

if ($result->num_rows) {
    echo "<style>";
    echo "
    .styled-table {
        width: 100%;
        border-collapse: collapse;
        margin: 25px 0;
        font-size: 0.9em;
        font-family: sans-serif;
    }

    .styled-table thead tr {
        background-color: #009879;
        color: #ffffff;
        text-align: left;
    }
    @media (max-width: 768px) {
        table {
            font-size: 14px;
        }
    }

    .styled-table th,
    .styled-table td {
        padding: 12px 15px;
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
    ";
    echo "</style>";

    echo "<table class='styled-table'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Username</th>";
    echo "<th>Email</th>";
    echo "<th>Number</th>";
    echo "<th>Password</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["username"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["number"] . "</td>";
        echo "<td>" . $row["password"] . "</td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
} else {
    echo "No result";
}

$con->close();
?>
