<!--Connecting to database-->
<?php
    require 'connect.php';
?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Foodify | Admin Profile</title>
        <link rel = "icon" href ="./images/iconLogo.png" type = "image/x-icon">
        <link rel = "stylesheet" href="css/menustyle.css">
        <style>
            .profile{
                width: 250px; 
                height: 250px; 
                position:absolute; 
                margin-top: 10%; 
                margin-left: 43%; 
                justify-content: center;
                align-items: center;
            }

            .profile img {
                width: 200px; 
                height: 200px; 
                margin-top: 10%; 
                margin-left: 10%;
            }

            .table {
                border : 1;
                width: 60%;
                position: absolute;
                margin-top: 30%; 
                margin-left: 21%;
            }
        </style>
    </head>

    <body style = "background-color: rgb(206, 223, 207)">
    <div class = "navdiv">
            <div class = "logo"><a href = ""><img src = "images/logo.png"></a></div>
            <nav class = "navbar">
                    <ul>
                        <span class="dropdown"><li >
                            <button class="dropbtn">Recipes</button>
                            <div class="dropdown-content">
                            <a href="#">Non-Vegetarian</a>
                            <a href="#">Vegetarian</a>
                            <a href="#">Vegan</a>
                            <a href="#">User Recipes</a>
                            </div>
                        </li></span>
                        <li><a href = "">Home</a></li>
                        <li><a href = "">About</a></li>
                        <li><a href = "">Contact </a></li>
                        <li><a href = "">Cookbooks</a></li>
                        <li><a href = "">Tricks & Tips</a></li>
                        
                        <a href = "Searchpage.html"><img class= "search-icon" src="images/search.png" title="Search"></a>
                        <button class="button"><a href = "">Logout</a></button>
                    </ul>
            </nav>
        </div>

        <div class = "profile">
            <img src = "images/prof.png">
        </div>

        <table class = "table" >
            <tr>
                <th align = "left">Name</th>
                <th align = "left">Username</th>
                <th align = "left">Password</th>
             </tr>


             <tbody>
                <?php
                
                $query = "SELECT * FROM admin ";
                $result = mysqli_query($con, $query);

                if ($result->num_rows > 0){

                    while($row = mysqli_fetch_assoc($result)){
                        $username = $row['username'];
                        echo '<tr>';
                        echo '<td>'. $row ["name"].'</td>';
                        echo '<td>'.$row["username"].'</td>';
                        echo '<td>'. $row["password"].'</td>';
                        echo '<td><button><a href="updateAdmin.php?updateid='.$username.'">Change</a></button></td>';
                        echo '<td><button><a href="deleteAdmin.php?deleteid='.$username.'">Delete</a></button></td>';
                        echo '</tr>';
                    }

                }
  
                ?>

             </tbody>
          
        </table>

        



    </body>



</html>


