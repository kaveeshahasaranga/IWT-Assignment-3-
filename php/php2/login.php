<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="log.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<div class = "navdiv">
           
    <div class="wrapper">
        
        
        <form action="read.php" method="post">
        <h2>LOGIN</h2>
        <?php if (!empty($error)) { ?>
            <p class="error"><?php echo $error; ?></p>
            
        <?php } ?>
            <div class="input-box">
                <span class="icon"><ion-icon name="mail"></ion-icon></span>
                <input type="email" required name="email" >
                <label>Email</label>
            </div>
            <div class="input-box">
                <span class="icon" id="lock-closed"><ion-icon name="lock-closed"></ion-icon></span>
                <input type="password" required name="password">
                <label>Password</label>
            </div>  
            <div class="remember-forgot">
                <label>
                    <a href="forgot.php">Forgot Password</a>
                </label>
            </div>
            <button type="submit" class="btn" name="login">Login</button>
            <div class="login-register">
                <p>Don't have an account?
                    <a href="register.php" class="register-link">Register</a>
                </p>
            </div>
        </form>
    </div>
    
    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    
</body>
</html>
