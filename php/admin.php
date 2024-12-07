<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Foodify | Admin Login</title>
        <link rel = "icon" href ="images/iconLogo.png" type = "image/x-icon">
        <link rel="stylesheet" href="css/adminlogin.css">
    </head>
    
    <body>
        
        <div class="wrapper">
            
            <div class="form-box Login">
                <h2> Admin Login</h2>
                <form method="post" action="adminlogin.php">
                    <div class="input-box">
                        <input type="text" required name="username">
                        <label>Admin Username</label>
                    </div>
                    <div class="input-box">
                        <input type="password" required name="password">
                        <label>Password</label>
                    </div>
                    
                    <button type="submit" class="btn" name="login">Login</button>
                    <!--<a href="adminProfile.php" target="_blank"></a>-->
                    
                    
                </form>
            </div>
            
        </div>
        

    </body>
</html>