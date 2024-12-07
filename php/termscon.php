<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Terms and Condition</title>
  <style>* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    background-size:auto;
    font-family: "Poppins", sans-serif;
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background:url(termsco.jpg);
    background-size: 100%;
    width: 100%;
    min-height: 100vh;
    background-position: center;
    background-repeat: no-repeat;
}

.wrapper {
    width: 70%; 
    margin: 150px auto; 
    padding: 50px;
    display: flex;
    flex-direction: column; 
    align-items: center;
    background: rgba(255, 255, 255, 0.5); 
    border: 3px solid rgba(201, 35, 35, 0.5);
    border-radius: 50px;
    backdrop-filter: blur(90px);
    box-shadow: 0 0 90px rgb(234, 238, 232);
    overflow: hidden;  
}
.content {
    text-align: center;
}

.content h1 {
    font-size: 3em;
    color: #eef0f1;
}
  .content p{
    font-size: 1.34em;
    color: rgb(14, 13, 13);
    text-align:center;
    margin-left: 30px;
    margin-right: 30px;
    float: left;
    background-color:(255, 255, 255, 0.5);
  }
  
.navdiv{
    width: 100%;
    height: 100px;
    top: 0;
    left: 0;
    position: fixed;
    display:flex;
    align-items: center;
    justify-content: space-between;
    background-color:rgb(240, 255, 240) ;
    z-index: 1000;
}

.logo{
    top: 10%;
}

.logo img{

    width : 245px;
    height : 120px;
    margin-top: 5%;
    margin-left: 10%;
}


.navbar li{
    list-style: none;
    background-color:transparent ;
    padding: 0px;
    margin : 0px;
    overflow: hidden;
    float:left;
}

.navbar a{
    color: black;
    text-decoration: none;
    padding: 15px;
    display: inline-block;
    text-align: center;
}

.navbar li:hover{
    background-color: #548363;
    color:white;
}


.search-icon{
    color: rgb(113, 110, 110);
    width: 25px;
    height: 25px;
}



button {
    background-color: #548363;
    margin-left: 10px;
    border: 0px;
    border-radius: 25px;
    padding: 1px;
    width: 120px;
    transition: box-shadow 0.25s;
}

button a{
    color: white;
    font-family:'Cinzel';
    font-weight: bold;
}

button:hover{
    box-shadow : 0 0 8px rgb(132, 158, 136);
    border-radius: 30px;
    padding: 7px;
    width: 120px;
}


.maindiv{
    width: 100%;
    height: 1000px;
    top: 100px;

}


.footer {
    width: 100%;
    height: 250px;
    background-color: rgb(164, 189, 164); 
    justify-content: space-between;
    align-items: center;
    margin-top: 200px;
}
@media (max-width: 768px) {
            table {
                font-size: 14px;
            }
        }


.table {
    border: 0;
    padding: 50px;
    margin-left: 24%;
    margin-top: 10%;
}

.table td{
    width: 59px;
}

.table img{

    width: 30px;
    height: 30px;
}
</style>

  
</head>
<body>
  <div class = "navdiv">
    <div class = "logo"><a href = ""><img src = "images/logo.png"></a></div>
    <nav class = "navbar">
            <ul>
                <li><a href = "">Home</a></li>
                <li><a href = "about.php">About</a></li>
                <li><a href = "">Recipes</a></li> 
                <li><a href = "">Cookbooks</a></li>
                <li><a href = "">Tricks & Tips</a></li>
                <li><a href = "">Contact </a></li>
                <li><a href="termscon.php">Terms and Conditions</a></li>
                <a href = "Searchpage.html"><img class= "search-icon" src="images/search.png" title="Search"></a>
                
            </ul>
    </nav>

</div>
</header>
<div class = "maindiv"> 
  <div class="wrapper">
    <div class="row">
        <div class="content">
          <h1>Terms and Conditions</h1><br><br><br><br><br>
            
            <p>Welcome to the Food Recipe Management System! These Terms and Conditions govern your use of our platform and outline the rules and guidelines you must follow.
              By accessing or using the Food Recipe Management System,
               you agree to comply with these Terms and Conditions.
                If you do not agree with any part of these terms,
                you may not use the platform.

             Our platform is intended for individuals who are at least 18 years old or the legal age of majority in their jurisdiction. 
             By using the Food Recipe Management System, 
             you represent and warrant that you meet these eligibility criteria.
             
             When creating an account on our platform,
              you agree to provide accurate and complete information and to maintain the security of your account credentials.
               You are responsible for all activities that occur under your account.
             
             You agree to use the Food Recipe Management System only for lawful purposes and to comply with all applicable laws and regulations.
              You may not engage in any activities that violate the rights of others, including intellectual property rights, or that are harmful, offensive, or illegal.
             
             We respect the privacy of our users. Our Privacy Policy governs the collection, use, and disclosure of your personal information.
              By using the platform, you consent to the terms of our Privacy Policy.
             
             While we strive to provide accurate and reliable information,
              we cannot guarantee the accuracy, completeness, or reliability of recipes or other content on the platform. You use the Food Recipe Management System at your own risk.
             </p>
        </div>
    </div>

</div>
  
  
  <footer >
    <div class="footer">
        <div style = "height:250px; width: 460px; float:left;">
            <table class = "table">
                <tr>
                    <td><a href = ""><img src = "images/3.png" title="visit our instagram page"></a></td>
                    <td><a href = ""><img src = "images/1.png" title="visit our facebook page"></a></td>
                    <td><a href = ""><img src = "images/2.png" title="visit our twitter page"></a></td>
                    <td><img src = "images/4.png" title="Contact us through Whatsapp : +94(76) 441 4442"></td>
                </tr>
            </table>

        </div>

        <div style = "height:250px; width: 600px; float:left; align-content: center;">
            <a  href = "home.html"><img src = "images/logo.png" style = "width: 300; height:200px; margin-left: 24%; " ></a>
            <p style = " margin-left: 29%; color: rgb(92, 90, 89);">©2024 Foodify Inc. All Rights Reserved</p>

        </div>

        <div style = "height:250px; width: 460px; float:left;align-content: center; ">

            <ul type = "none">
                <li>✆ +94(76) 441 4442</li>
                <li>✆ +94(76) 369 7342</li>
                <li>☏ +94(11) 551 7723</li>
                <li>✉ info@foodify.com</li>
                <li>🔗<a href = "home.html" style = "text-decoration: none; color: rgb(41, 40, 40);"> www.foodify.com</a></li>
                <br>
                    <li><a href = "feedback.php" style = "text-decoration:underline; color: rgb(20, 48, 26);">Give Us Your Feedback!</a></li>

            </ul>

           
        </div>

    </div>
    </footer>
</body>
</html>
