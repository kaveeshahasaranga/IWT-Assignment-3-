<?php include 'conection.php';

?>

<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>All feedback</title>
    <style>

body
{
    background-color: #f8f8f8;
    margin: 0;
    padding: 0; 
}

.btn {
    display: inline-block;
    padding: 10px 20px;
    background-color: #4caf50;
    color: #fff;
    text-decoration: none;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

.btn a{
  text-decoration: none;
  color: white;

}

.btn1{
  display: inline-block;
    padding: 10px 20px;
    background-color: #c3cfc3;
    color: #fff;
    text-decoration: none;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

.btn1 a{
  color:black;
  text-decoration: none;

}
.btn2{
  display: inline-block;
    padding: 10px 20px;
    background-color: #ff3300;
    color: #ff3300;
    text-decoration: none;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}
.btn2 a{
  color:white;
  text-decoration: none;

}

.btn:hover {
    background-color: grey;
}

table {
  margin-top: 20px;
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 8px;
    text-align: left;
}

th {
    background-color: #c3cfc3;
    color: #201a1a;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

button {
    padding: 5px 10px;
    background-color: #f44336;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 14px;
    margin-right: 5px;
}

button:hover {
    background-color: grey;
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
    width: 600px;
    margin: 120px auto;
    border-radius:10px;
}
      
    </style>

  </head>
  <body>

<div class="topic">
    <p>User Uploaded Recipes</p>
</div>

      <table border="1" style="width: 100%;">
        <thead>
          <tr>
          <th>ID</th>
          <th>Recipe name</th>
          <th>Category</th>
          <th>Time(min)</th>
          <th>Ingredients</th>
          <th>Introduction</th>
          <th>Email</th>
          </tr>
        </thead>

        <tbody>
          
          <?php
          
          $sql = "select * from finalcrudtable";
          $result = mysqli_query($con,$sql);

          if($result){

            while($row = mysqli_fetch_assoc($result)){
                $id=$row['id'];
                $name=$row['name'];
                $category=$row['category'];
                $time=$row['ptime'];
                $ingredient=$row['ingredients'];
                $introduction=$row['introduction'];
                $email=$row['email'];

              echo '<tr>
              <th>'.$id.'</th>
              <th>'.$name.'</th>
              <td>'.$category.'</td>
              <td>'.$time.'</td>
              <td>'.$ingredient.'</td>
              <td>'.$introduction.'</td>
              <td>'.$email.'</td>
              <td>
              <button class="btn1"><a href="updateindex.php?updateid='.$id.'">Update</a></button>
              <button class="btn2"><a href="deleteindex.php?deleteid='.$id.'">Delete</a></button>
              </td>
              </tr>';
            }
          }

        ?>

        </tbody>
      </table>
    </div>
  </body>
</html>
