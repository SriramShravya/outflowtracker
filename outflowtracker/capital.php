<?php
  if(isset($_POST['submit'])){
    include("connect.php");
    $date=$_POST['date'];
    $furniture=$_POST['furniture'];
    $electronics=$_POST['elec'];
    $infrastructure=$_POST['infra'];
    $others=$_POST['other'];

    session_start();
    $email=$_SESSION['email'];

  $sql="insert into capital(email,ymd,furniture,electronics,infrastructure,others,c_tot) values('$email','$date','$furniture','$electronics','$infrastructure','$others',c_tot+('$furniture'+'$electronics'+'$infrastructure'+'$others'))";
  $result= mysqli_query($conn,$sql);
  if($result){
    echo "success";
    header('location:capital.php');
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
    <link href="cat.css" rel="stylesheet">
</head>
<body>
  <div style="display: flex;">
    <div class="cat" style="margin-left: 50px;">
        <form method="POST">
        <h2>CAPITAL</h2>
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
        <div class="fur">
        <P>FURNITURE</P>
        <input name='furniture' placeholder="Enter Amount" autocomplete="off">
        </div>
        <div class="ele">
            <P>ELECTRONICS</P>
            <input  name='elec' placeholder="Enter Amount" autocomplete="off">
        </div>
        <div class="inf">
            <P>INFRASTRUCTURE</P>
            <input name='infra' placeholder="Enter Amount" autocomplete="off">
        </div>
        <div class="others">
            <P>OTHERS</P>
            <input name='other' placeholder="Enter Amount" autocomplete="off">
        </div>
        <div id="btn">
            <button type="submit" name="submit" style="height: 30px;width: 300px;background: #302e2e;margin-left:45px ;font-size: 20px;"><a>Save</a></button>
        </div>
        </form>
    </div>
    <div style="background-image: url(furniture.jpg);background-size:cover;background-position:center;height:500px;width:500px;
    margin-left:550px;margin-top:120px">
      <P>CAPITAL</P>
    </div>
    </div>
</body>
</html>