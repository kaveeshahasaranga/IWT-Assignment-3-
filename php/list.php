<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>newtips</title>
    <link rel="stylesheet" type="text/css" href="./CSS.add.css">
</head>

<script>
    const deleteHandler = (value) => {
        console.log(`delete : ${value}`);
        document.location = `/CRUD1/delete.php?id=${value}`;
    }
    const editHandler = (value) => {
        console.log(`edit : ${value}`);
        document.location = `/CRUD1/edit.php?id=${value}`;
    }
    const addHandler =()=>{
        document.location = `/CRUD1/add.php`;
    }
</script>

<body>

    <?php

    echo "<td><button onClick='addHandler()'>ADD</button></td>";
    $con = new mysqli('localhost', 'root', '', 'newtips');

    if (!$con) {
        die(mysqli_error($con));
    }
    $sql = "SELECT * FROM `crud` WHERE 1;";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "<table border='1'>";
        echo "<th>ID</th><th>Type</th><th>Image</th><th>Description</th><th></th><th></th>";

        foreach ($result as $index => $value) {
            echo "<tr>";
            echo "<td>" . $value["id"] . "</td>";
            echo "<td>" . $value["Type"] . "</td>";
            // echo "<td>".$value["Image"] . "</td>";
            echo "<td>" . "<img src=" . $value["Image"] . "> </td>";
            echo "<td>" . $value["Description"] . "</td>";
            echo "<td><button
            onClick='editHandler(" . $value["id"] . ")'
            >EDIT</button></td>";
            echo "<td><button
            onClick='deleteHandler(" . $value["id"] . ")'
            >DELETE</button></td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        die(mysqli_error($con));
    }

    ?>

</body>