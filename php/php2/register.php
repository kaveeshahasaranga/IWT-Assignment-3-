

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="regi.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <?php
    require'config.php';
    ?>
    
    <div class="wrapper">
        
        
        <div class="form-box Register">
            <h2> Register</h2>
            <form method="post" action="insert.php">
                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="text" required name="name">
                    <label>Username</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" required name="semail">
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="number" required name="number">
                    <label>Phone Number</label>
                </div>  
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" required name="password">
                    <label>Password</label>
                </div>  
                
                <button type="submit" class="btn">Register</button>
                <div class="login-register">
                    <p>Already have an account?
                        <a href="login.php" class="login-link">Login</a>
                    </p>
                </div>
            </form>
        </div>
        
    </div>
    

</body>
</html>
