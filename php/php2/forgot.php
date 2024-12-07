<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title><style>/* Reset CSS */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box; 
  font-family: "Poppins", sans-serif;
}
body{
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  background: url("back1.jpg");
  background-size: cover;
  background-position: center;
}
@media (max-width: 768px) {
            table {
                font-size: 14px;
            }
        }


.wrapper {
  margin: 0 auto; 
  margin-right: 50px;
  position: relative;
  width: 440px;
  height: 490px;
  background: transparent;
  border: 2px solid rgba(255, 255, 255, 0.5);
  border-radius: 20px;
  backdrop-filter: blur(20px);
  box-shadow: 0 0 30px rgba(212, 205, 205, 0.5);
  display: flex;
  justify-content: center;
  align-items: center;
  overflow: hidden;
}

.wrapper .form-box { 
  width: 100%;
  padding: 40px;
}
.wrapper.form-box.login-register{
  position: absolute;
  transform: translateX(400px);
}
.wrapper .icon-close {
  position: absolute;
  top: 0;
  right: 0;
  width: 45px;
  height: 45px;
  background: #162938;
  font-size: 2em;
  color: #802020;
  display: flex;
  justify-content: center;
  align-items: center;
  cursor: pointer; 
  z-index: 10; 
}


.form-box h2 { 
  font-size: 2em;
  color: #162938;
  text-align: center;
}
.input-box {
  position: relative;
  width: 100%;
  height: 50px;
  border-bottom: 2px solid #1c162f;
  margin: 30px 0;
}
.input-box label{
  position: absolute;
  top: 10%;
  left: 5px;
  transform: translateY(-50%);
  font-size: 1em;
  color: #162938;
  font-weight: 500;
  pointer-events: none;
  transition: .5s;
}
.input-box input:focus~label,
.input-box input:valid~label{
  top:-5px;
  font-size: 0.9em;
  color: #162938;
}
.input-box input{
  width: 100%;
  height: 100%;
  background: transparent;
  border: none;
  outline: none;
  font-size: 1em;
  color: #522828;
  font-weight: 600;
  padding: 0 20px 0 1px;
}
.input-box .icon{
  position: absolute;
  right: 8px;
  font-size: 1.2em;
  color: #162938;
  line-height: 57px;
}
.remember-forgot{
  font-size: .9em;
  color: #162938;
  font-weight: 500;
  margin: -15px 0 15px;
  display: flex;
  justify-content: space-between;
}
.remember-forgot label input{
  accent-color: #162938;
  margin-right: 3px;
}
.remember-forgot a{
  color: #162938;
  text-decoration: none;
}
.remember-forgot a:hover{
  text-decoration: underline;
}
.btn {
  width: 100%;
  height: 45px;
  background: #162938;
  border: none;
  outline: none;
  border-radius: 6px;
  cursor: pointer;
  font-size: 1em;
  color: #b13333;
  font-weight: 500;
}
.login-register{
  font-size: .9em;
  color: #162938;
  text-align: center;
  font-weight: 500;
  margin: 25px 0 10px;
}
.login-register p a {
  color: #162938;
  text-decoration: none;
  font-weight: 600;
}
.login-register p a:hover {
  text-decoration: underline;
}

.footer {
  width: 100%;
  height: 250px;
  background-color: rgb(164, 189, 164);
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-top: 30px;
}

.table {
  border: 0;
  padding: 100px;
}

.table td {
  width: 100px;
}

.table img {
  width: 30px;
  height: 30px;
}

</style>
    
   
</head>
<body style="background-image: url(forget2.jpg);">
    
    <div class="wrapper">
        
        
        <div class="form-box login">
            <h2>Forgot Password</h2>
            <form method="post" action="update.php">
            <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" required name="semail">
                    <label>Email</label>
                </div>
                
            <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" required name="password">
                    <label>Password</label>
                </div> 
                
                <div class="input-box">
                    <span class="icon" id="lock-closed" name="confirm"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" required>
                    <label>Confirm Password</label>
                </div>  
                
                <button type="submit" class="btn" valuce="Update">Reset Password</button>
                <div class="login-register">
                    <p>
                        <a href="register.php" class="register-link">Register</a>
                    </p>
                </div>
            </form>
        </div>
        
    </div>
    
</body>
</html>
