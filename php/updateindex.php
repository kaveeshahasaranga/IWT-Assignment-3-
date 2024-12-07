
<?php


require 'conection.php';


//get the all data of recipes table where id is id passed in get

$id=$_GET["updateid"];

$sql="SELECT * FROM finalcrudtable WHERE id='$id'";

$result=$con->query($sql);

$row=$result->fetch_assoc();

$name=$row["name"];

$category=$row["category"];

$time=$row["ptime"];

$ingredient=$row["ingredients"];

$introduction=$row["introduction"];

$email=$row["email"];


?>



<html>
<head>
</head>
<body>

    <style>

body {
    font-family: Arial, sans-serif;
    background-image:url("https://wallpapers.com/images/hd/best-food-background-80te4csqmg0rbemv.jpg");
    margin: 0;
    padding: 0;
    background-size: cover;
}


form {
    max-width: 400px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 1px 1px 2px rgba(35,34,34,0.4);
    background-image:url("https://images.unsplash.com/photo-1615799998603-7c6270a45196?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8Z3JleSUyMHRleHR1cmV8ZW58MHx8MHx8fDA%3D");
}

h2 {
    text-align: center;
    margin-top: 0;
    color: #333;
}

label {
    display: block;
    margin-bottom: 5px;
    color: #555;
}

input[type="text"] {
    width: calc(100% - 20px);
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type="submit"] {
    background-color: #4caf50;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

.topic p
{
    font-size: 60px;
    font-weight: bold;
    text-align: center;
    color: #333;
}

.topic
{
    background-color:white;
    width: 500px;
    height: 80px;
    margin: 120px auto;
    border-radius:10px;
}

    </style>

<div class="topic">
    <p>Update Recipes</p>

</div>

    <form method="post" action="update.php">
        Enter Recipe ID : <input type="text" name="id" hidden
        value="<?php echo $id;?>"><br><br>
        Change Name : <input type="text" name="rname"
        value="<?php echo $name;?>"
        ><br>
        Change Category : <input type="text" name="category"
        value="<?php echo $category;?>"
        ><br>
        Set New Time : <input type="text" name="ptime"
        value="<?php echo $time;?>"
        ><br>
        Change Ingredients : <input style="height: 80px;" type="text" name="ingredients"
        value="<?php echo $ingredient;?>"
        ><br>
        Add Introduction : <input style="height: 100px;" type="text" name="intro"
        value="<?php echo $introduction;?>"
        ><br>
        Change Email : <input type="text" name="email"
        value="<?php echo $email;?>"
        ><br>
        <center><input type="submit" name="UPDATE" value="UPDATE"></center>
    </form>
</body>
</html>
