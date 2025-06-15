<?php
   if(isset($_POST['submit'])){
    include("connect.php");
    $date=$_POST['date'];
    $home=$_POST['home'];
    $edible=$_POST['edible'];
    $cloth=$_POST['cloth'];
    $body=$_POST['body'];
    $stat=$_POST['stat'];
    $toys=$_POST['toys'];
    $others=$_POST['others'];
  session_start();
  $email=$_SESSION['email'];

  $sql="insert into goods(email,ymd,homeapp,edible,clothing,bodycare,stationery,toys,others,g_tot) values('$email','$date','$home','$edible','$cloth','$body','$stat','$toys','$others',g_tot+('$home'+'$edible'+'$cloth'+'$body'+'$stat'+'$toys'+'$others'))";
  $result= mysqli_query($conn,$sql);
  if($result){
    echo "success";
    header('location:goods.php');
  }
  else{
    echo "not successful";
  }
  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="goods.css" rel="stylesheet">
</head>
<body>
    <div style="display: flex;">
    <div class="cat" style="margin-left: 20px;">
        <form method="POST">
        <h2>GOODS</h2>
        <div style="width: 500px;
        font-size: 20px;
        display: flex;
        justify-content: space-evenly;
        margin: 10px;
        margin-top: 20px;
        margin-bottom: 60px;">
        <p>YYYY-MM-DD</p>
        <input name="date" placeholder="Enter date" autocomplete="off">
        </div>
        <div class="home">
        <P>HOME APPILANCES</P>
        <input name="home" placeholder="Enter Amount" autocomplete="off">
        </div>
        <div class="edible">
            <P>EDIBLES</P>
            <input name="edible" placeholder="Enter Amount" autocomplete="off">
        </div>
        <div class="cloth">
            <P>CLOTHING</P>
            <input name="cloth" placeholder="Enter Amount" autocomplete="off">
        </div>
        <div class="body">
            <P>BODYCARE</P>
            <input name="body" placeholder="Enter Amount" autocomplete="off">
        </div>
        <div class="stat">
            <P>STATIONERY</P>
            <input name="stat" placeholder="Enter Amount" autocomplete="off">
        </div>
        <div class="toys">
            <P>TOYS</P>
            <input name="toys" placeholder="Enter Amount" autocomplete="off">
        </div>
        <div class="others">
            <P>OTHERS</P>
            <input name="others" placeholder="Enter Amount" autocomplete="off">
        </div>
        <div id="btn">
            <button type="submit" name="submit" style="height: 30px;width: 300px;background: #302e2e;margin-left:45px ;font-size: 20px;"><a>Save</a></button>
        </div>

        </form>

   </div>
   <div style="background-image: url(veggies.jpg);background-size:cover;background-position:center;height:550px;width:500px;
    margin-left:550px;margin-top:120px">
    <p>goods</p>
   </div>
   </div>
   
    
</body>
</html>