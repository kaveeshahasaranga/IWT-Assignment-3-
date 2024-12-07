<html>
<head>
</head>

<body>

<style>
    body {
    font-family: Arial, sans-serif;
    background-image:url("https://previews.123rf.com/images/romastudio/romastudio1603/romastudio160300203/54088672-healthy-food-background-studio-photo-of-different-fruits-and-vegetables-on-white-wooden-table-high.jpg");
    background-size:cover;
    margin: 0;
    padding: 0;
}

form {
    width: 300px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
    margin-top: 0;
    color: #333;
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
    width: 100%;
    background-color: #e74c3c;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
}

input[type="submit"]:hover {
    background-color: #c0392b;
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

<div class="topic">
    <p>Delete Recipes</p>
</div>
        <form method="post" action="delete.php">
            <p>Enter Recipe ID : </p>
            <input type="text" name="id"><br>
            <input type="submit" value="DELETE">
        </form>



</body>
</html>