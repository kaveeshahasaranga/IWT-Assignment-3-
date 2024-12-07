<?php
include 'connect.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud</title>
    <link rel="stylesheet" type="text/css" href="meal.css">
</head>
<body>
    <button><a href="add.php">Add</a></button>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Type</th>
                <th scope="col">Image</th>
                <th scope="col">Description</th>
                <th scope="col">Operation</th>
            </tr>
            <tbody>
            <?php
              $sql="Select *from `crud`";
              $result=mysqli_query($con,$sql);
              if($result){
                while($row=mysqli_fetch_assoc($result)){
                    $id=$row['id'];
                    $type=$row['type'];
                    $image=$row['image'];
                    $description=$row['description'];
                    echo '<tr>
                    <th scope="row">'.$id.'</th>
                    <td>'.$type.'</td>
                    <td>'.$image.'</td>
                    <td>'.$description.'</td>
                    <td>
                    <button><a href="update.php">Update</a></button>
                    <button><a href="delete.php?deleteid='.$id.'">Delete</a></button>
                    </td>
                </tr>';
                }
              }
            ?>
             
             </tbody>
        </thead>
    </table>
</body>
<script src="add.js"></script>
</html>