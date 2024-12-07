<?php

$x = PARSE_URL($_SERVER['REQUEST_URI']);
$id = $x['query'];



$con = new mysqli('localhost', 'root', '', 'newtips');

if (!$con) {
    die(mysqli_error($con));
}

$sql = "DELETE FROM `crud` WHERE id=" . explode('=', $id)[1] . ";";
$result = mysqli_query($con, $sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>newtips</title>
    <link rel="stylesheet" type="text/css" href="add.css">
</head>

<script>
    setTimeout(() => {
        window.location = "/CRUD1/list.php"
    }, 1000)
</script>

<body>
    <h1><u>Deleting</u></h1>

</body>