<?php
   include("connect.php");
   if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $cpass=$_POST['cpass'];
    $sql="select * from login where email='$email'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count=mysqli_num_rows($result);
    if($count==1){
        if($pass==$cpass){
            $sql="update login set password='$pass' where email='$email'";
            $result=mysqli_query($conn,$sql);
            if($result){
                echo "success";
                header('location:index.php');
            }
            else{
                echo "not successfull";
            }

        }
    }
    else{
        echo '<script>
        window.location.href="fopass.php"
        alert("login failed:invalid email or password!!
        </script>';
    }
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="fopass.css" rel="stylesheet">
</head>
<body>
    <div class="fop">
        <form method="POST">
        <input type="email" name="email" placeholder="Enter Email">
        <br>
        <br>
        <input type="password" name="pass" placeholder="Type Password">
        <br>
        <br>
        <input type="password" name="cpass" placeholder="Confirm Password">
        <br>
        <br>
        <button type="submit" name="submit"><a>Login</a></button>
        </form>
</div>

</body>
</html>