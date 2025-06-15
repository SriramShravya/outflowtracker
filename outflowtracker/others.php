<?php
   if(isset($_POST['submit'])){
    include("connect.php");
   // $email=$_POST['email'];
    $date=$_POST['date'];
    $repairs=$_POST['repairs'];
    $others=$_POST['others'];

    session_start();
    $email=$_SESSION['email'];
    $sql="insert into others(email,ymd,repairs,others,o_tot) values('$email','$date','$repairs','$others',o_tot+('$repairs'+'$others'))";
    $result= mysqli_query($conn,$sql);
    if($result){
      echo "success";
      header('location:others.php');
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
    <link href= "others.css" rel="stylesheet"> 
</head>
<body>
  <div style="display: flex;">
    <div class="cat">
        <form method='POST'>
        <h2>OTHERS</h2>
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
        <div class="repair">
        <P>REPAIRS</P>
        <input name="repairs" placeholder="Enter Amount" autocomplete="off">
        </div>
        <div class="others">
            <P>OTHERS</P>
            <input name='others' placeholder="Enter Amount" autocomplete="off">
        </div>
        <div id="btn">
            <button type="submit" name="submit" style="height: 30px;width: 300px;background: #302e2e;margin-left:45px ;font-size: 20px;color:black 1;"><a>Save</a></button>
        </div>
        </form>


   </div>
   <div style="background-image: url(daily.jpg);background-size:cover;background-position:center;height:500px;width:500px;
    margin-left:550px;margin-top:120px">
    <p>others</p>
   </div>
   </div>
    
</body>
</html>