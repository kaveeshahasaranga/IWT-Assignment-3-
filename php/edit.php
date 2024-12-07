<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>newtips</title>
    <link rel="stylesheet" type="text/css" href="add.css">
</head>

<script>
    function dropdownAutoSelector(id, valueToSelect) {
        let element = document.getElementById(id);
        element.value = valueToSelect;
    }
</script>

<body>
    <?php

    $x = PARSE_URL($_SERVER['REQUEST_URI']);
    $id = $x['query'];



    $con = new mysqli('localhost', 'root', '', 'newtips');

    if (!$con) {
        die(mysqli_error($con));
    }

    $sql = "SELECT * FROM `crud` WHERE id=" . explode('=', $id)[1] . ";";
    $result = mysqli_query($con, $sql);
    if ($result) {


        ?><form action="tipedit.php" method="post" enctype="multipart/form-data"><?php
        foreach ($result as $index => $value) {

            //echo "<input value='" . $value["id"] . "' id='id' style=display:\"hidden\" > ";
            echo "<p> ID: " . $value["id"] . "</p>";

    ?>
            <script>
                dropdownAutoSelector("tip", "<?php echo $value["Type"] ?>");
            </script>

            <p>
                Tip Type :
                <select id="tip" name="tip" class="custom-select">
                    <option value="Kitchen Tip">Kitchen Tip</option>
                    <option value="Skills">Skills</option>
                    <option value="Food Hacks">Food Hacks</option>
                    <option value="Appliance Cooking">Appliance Cooking</option>
                    <option value="Meal Plans">Meal Plans</option>
                </select>
            </p>
    <?php
            echo "<p> Image : " . "<div><img src=" . $value["Image"] . "> 
            <input type='file' name='fileToUpload' id='fileToUpload'>
            </div></p>";
            echo "<p> Description: <input id='message' value='" . $value["Description"] . "'/></p>";
            echo "<p><button
        type='submit'
        >SAVE</button></p>";
        }
        echo "</form>";
    } else {
        die(mysqli_error($con));
    }
    ?>

</body>