<?php
  include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="supage.css" rel="stlyesheet">
    
</head>
<body style=" background-image: url(login.jpg);
      background-position: center;
      background-size: cover;
      height:109vh ;">
      <div class="signup" style="
      text-align: center;
      font-size: 60px;
      padding:250px;
      color: #f5eded;
      text-decoration: dashed;
      padding-top: 25px;">
      <div class="sign" >
      <form action="signup.php" method="POST">
      <h2>SIGNUP</h2>
      <input type="email" name="email" placeholder="Enter Email"  style=" height: 45px;
      font-size: 25px;
      background: transparent;
      background-color: rgb(27, 27, 27);
      color: #ffff;" autocomplete="off"  >
      <br>
      <input type="text" name="fname" placeholder="Enter FirstName" style=" height: 45px;
      font-size: 25px;
      background: transparent;
      background-color: rgb(27, 27, 27);
      color: #ffff;"  autocomplete="off">
      <br>
      <input type="text"  name="lname" placeholder="Enter LastName" style=" height: 45px;
      font-size: 25px;
      background: transparent;
      background-color: rgb(27, 27, 27);
      color: #ffff;"  autocomplete="off">
      <br>
      <input type="password" name="pass" placeholder="Enter Password" style=" height: 45px;
      font-size: 25px;
      background: transparent;
      background-color: rgb(27, 27, 27);
      color: #ffff;"  autocomplete="off">
      <br>
      <input type="password" name="cpass" placeholder="Confirm Password" style=" height: 45px;
      font-size: 25px;
      background: transparent;
      background-color: rgb(27, 27, 27);
      color: #ffff;">
      <br>
      <button type="submit" name="submit" style="height: 50px;
      width: 150px;
      background-color: black;"><a style="text-decoration: none;
      color: #f5eded;
      font-size: 30px;">Sign Up</a></button>
        
      </form>
      </div>
    </div>
    <style>
    a:hover{
    color:#3b3737;
    transition-duration: 0.5s;
    transition-timing-function:  ease-in-out;
    }
    </style>    
</body>
</html>