<?php
$con = new mysqli('localhost', 'root', '', 'newtips');

if (!$con) {
    die(mysqli_error($con));
}

function debug_to_console($data)
{
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if ($check !== false) {
            // echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" && $imageFileType != "webp"
    ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            // echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
            $img_to_upload = base64_encode(file_get_contents('uploads/' . basename($_FILES["fileToUpload"]["name"])));
            $img_str = 'data:image/jpg;base64,' . $img_to_upload;

            // echo $img_str;
            // echo "<img src=" . $img_str . ">";
            // debug_to_console($img_str);
            // Retrieve form data
            $id = $_POST["id"];
            $tip = $_POST["tip"];
            $message = $_POST["message"];

            $sql = "UPDATE into `crud` (Type,Image,Description) values('$tip','$img_str','$message') WHERE id=$id";
            $result = mysqli_query($con, $sql);
            if ($result) {
                echo "Data inserted successfully";
                unlink('uploads/' . basename($_FILES["fileToUpload"]["name"]));
            } else {
                die(mysqli_error($con));
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
} ?>
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
    <h1><u>Creating</u></h1>

</body>