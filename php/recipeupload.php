<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe Upload</title>
    <link rel="stylesheet" href="recipeupload.css">
</head>
<body>
    <style>
        .button 
        {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4caf50;
            color: #fff;
            text-decoration: none;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 25px;
            height : 50px;
            width : 30%;
        }

            .button:hover 
        {
            background-color: #45a049;
        }

        body
        {
            background-image: url("https://img.freepik.com/free-photo/overhead-view-blank-spiral-notepad-with-italian-pasta-ingredients-against-black-textured-backdrop_23-2148090997.jpg?w=900&t=st=1714974530~exp=1714975130~hmac=321c35bf800ef27d14e5e67b9114f365b0a3971aab53144ccb70e74a38765905") ;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>

    <?php
        require 'conection.php';

        $name=$_POST['rname'];
        $category=$_POST['category'];
        $time=$_POST['time'];
        $ingredient=$_POST['ingredients'];
        $introduction=$_POST['intro'];
        $email=$_POST['email'];

        $sql="INSERT INTO finalcrudtable VALUES ('','$name','$category','$time','$ingredient','$introduction','$email')";
       
        if($con->query($sql))
        {
            echo "New record created successfully";
        }

        else
        {
            echo "Error: ".$con->error;
        }

        $con->close();

        

    ?>
    

    <div class="trans">
        <div class="form">
            <div class="title">
                <center><p>RECIPE UPLOAD</p></center>
            </div>
            <br>
            <br>

            <div class="fit">
                <form action="" method="post">
                    <input type="text" name="rname" placeholder="Enter recipe name...">
                    <p>Recipe name :</p>
                    <br>
                    <input style="height: 40px;" type="text" name="category" placeholder="Chose your recipe category...">                            
                    <p>Category : </p>
                    <br>
                    <input type="text" name="time" placeholder="Enter time...">
                    <p>Preparing time (minutes) :</p>
                    <br>
                    <input style="height: 80px;" type="text" name="ingredients" placeholder="Enter ingredients...">
                    <p>Ingredients :</p>
                    <br>
                    <input style="height: 100px;" type="text" name="intro" placeholder="Enter introduction...">
                    <p>Introduction :</p>
                    <br>
                    <input type="text" name="email" placeholder="Enter email...">
                    <p>Email :</p>
                    <br>
                    <input type="submit" value="Upload" name="upload_button">
                    <a href="reciperead.php" class="button">View</a>
                    
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>