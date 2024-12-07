<?php

    //database connection
    require 'connection.php';

    // This is a simplified example, you should use proper database queries and security measures
    $keyword = $_POST['keyword'];
    $category = $_POST['category'];
    $timeToMake = $_POST['time'];

    //Search query
    $sql = "SELECT Title, Category, TimeToMake FROM recipes WHERE Title LIKE '%$keyword%' AND Category = '$category' AND TimeToMake = '$timeToMake'";
      
    //executing the search query
    $result =  $con->query($sql);

    if ($result->num_rows > 0)
    {
        echo "<table border = '1' width = '35px' padding = '20px'>";
        while( $row = $result->fetch_assoc() )
        {
            echo '<tr>';
            echo '<td>'. $row ["Title"]."  ".$row["Category"]. "  ". $row["TimeToMake"].'</td>';
            echo '</tr>';
        }
        echo "</table>";
    }
    else{
        echo "Sorry, we couldn't find any recipes matching your search..";
    }

    $con->close();
    ?>

