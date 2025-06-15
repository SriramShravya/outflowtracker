<?php
    if(isset($_POST["submit"])){
        include("connect.php");
        $email=$_POST['email'];
        $password=$_POST['pass'];
    $sql="select * from login where email='$email' and password='$password'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count=mysqli_num_rows($result);
    session_start();
    $_SESSION['email'] = $email;
    if($count==1){
        header("location:home.php");
    }
    else{
        echo '<script>
            window.location.href="home.php"
            alert("login failed:invalid email or password!!
            </script>';
    }
}

   /* if($row){
        if(password_verify($password, $row["password"])){
           header("Location:home.php");
          /* echo '<script>
           window.location.href="home.php";
           </script>';
        }
    }
    else{
        echo '<script>
        window.location.href="index.php";
        alert("login failed:Invalid email or password");
        </script>';
    }*/
?>