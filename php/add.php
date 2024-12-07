<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>newtips</title>
    <link rel="stylesheet" type="text/css" href="/CSS/add.css">
</head>

<body>
    <h1><u>Add New Tips and Tricks</u></h1>

    <fieldset>
    <form action="tipscreate.php" method="post" enctype="multipart/form-data">

        <input type="file" name="fileToUpload" id="fileToUpload">

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="5" cols="30" required></textarea><br><br>

        <label for="tip">Tip:</label>
        <select id="tip" name="tip" class="custom-select">
            <option>Kitchen Tip</option>
            <option>Skills</option>
            <option selected>Food Hacks</option>
            <option>Appliance Cooking</option>
            <option>Meal Plans</option>
        </select>

        <input type="submit" value="Submit">
    </form>
    </fieldset>
    <script src="add.js"></script>
</body>

</html>