<?php
   include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
   <header>
    <div class="head">
        <a id="logo">OUTFLOW TRACKER</a>
        <a href="home.html">About</a>
        <a href="contact.html">Contact</a>
        <a href="contact.html">Help</a>
        
    </div>
    </header>
    <div class="main">
        <div id="content">
        <p>hey there!</p>
        <h2>Track</h2>
        <h2 id="color">Expenses</h2>
        <h2>Smoothly</h2>
        </div>
        <div class="form">
            <form  name="form" action="login.php" method="POST">
            <h2>Login Here</h2>
            <input type="email" name="email" placeholder="Enter Email">
            <br>
            
            <input type="password" name="pass" placeholder="Enter Password">
            <br>
            <br>        
            <button type="submit" name="submit"><a>Login</a></button>
            <br>
            <a href="fopass.php" class="pass">Forgot Password?</a>
            <p>Dont have an account?</p>
            <a href="supage.php" class="sign">Sign Up</a>
        </form>
        </div>
    </div>


   
</body>
</html>