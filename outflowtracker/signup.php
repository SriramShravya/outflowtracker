<?php
    include("connect.php");
    if(isset($_POST['submit'])){
        $email=$_POST['email']; 
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $pass=$_POST['pass'];
        $cpass=$_POST['cpass'];

        $sql="select * from login where email='$email'";
        $result=mysqli_query($conn,$sql);
        $count_email=mysqli_num_rows($result);

        if($count_email==0){
            if($pass==$cpass){
                //$hash = password_hash($pass,PASSWORD_DEFAULT);
                $sql="INSERT INTO login(email,password,first_name,last_name) VALUES('$email','$pass','$fname','$lname')";
                $result=mysqli_query($conn,$sql);//no.of rows affected
                if($result){
                    header("Location:index.php");//if crct it goes to index.php
                }
            }
            else{
                echo "passwords doesnt match";
            }
        }
        else{
            if($count_email>0){
                echo '<script>
                    window.location.href="supage.php";
                    alert("username already exists!!");
                </script>';
            }
        }

    }
?>