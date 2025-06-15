<?php
   if(isset($_POST['submit'])){
    include("connect.php");
   // $email=$_POST['email'];
    $date=$_POST['date'];
    $electricity=$_POST['electricity'];
    $rent=$_POST['rent'];
    $salaries=$_POST['sal'];
    $loan=$_POST['loan'];
    $others=$_POST['others'];
    session_start();
    $email=$_SESSION['email'];
    $sql="insert into monthly(email,ymd,electricity,loans,salaries,rents,others,m_tot) values('$email','$date','$electricity','$loan','$salaries','$rent','$others',m_tot+('$electricity'+'$loan'+'$salaries'+'$rent'+'$others'))";
    $result= mysqli_query($conn,$sql);
    if($result){
      echo "success";
      header('location:moithly.php');
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
    <link href="month.css" rel="stylesheet">
</head>
<body>
    <div style="display: flex;">
    <form method="POST">
    <div class="cat">
        <h2>MONTHLY</h2>
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
        <div class="ele">
        <P>ELECTRICITY</P>
        <input name="electricity" placeholder="Enter Amount" autocomplete="off">
        </div>
        <div class="rent">
            <P>RENT</P>
            <input name="rent" placeholder="Enter Amount" autocomplete="off">
        </div>
        <div class="sal">
            <P>SALARIES</P>
            <input name="sal" placeholder="Enter Amount" autocomplete="off">
        </div>
        <div class="loan">
            <P>LOANS</P>
            <input name="loan" placeholder="Enter Amount" autocomplete="off">
        </div>
        <div class="others">
            <P>OTHERS</P>
            <input name="others" placeholder="Enter Amount" autocomplete="off">
        </div>
        <div id="btn">
            <button type="submit" name="submit" style="height: 30px;width: 300px;background: #302e2e;margin-left:45px ;font-size: 20px;"><a>Save</a></button>
        </div>

   </div>
   </form>
   <div style="background-image: url(monthly.jpg);background-size:cover;background-position:center;height:500px;width:500px;
    margin-left:550px;margin-top:120px">
    <p>monthly</p>
   </div>
   </div>
    
</body>
</html>