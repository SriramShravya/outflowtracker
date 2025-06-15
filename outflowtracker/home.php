
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />   
    <link href="style1.css" rel="stylesheet">
</head>
<body>
    <header>
        <div class="head">
        <a id="logo">OUTFLOW TRACKER</a>
        <a href="profile.html" ><i class="fa-regular fa-user" id="profile"></i></a>
        <a href="index.php" >Log Out</a>
    </div>
    </header>
    <div class="total">
        <form method="POST">
        <p style="color: white;">TOTAL EXPENSES</p>
        <button type="submit" name="submit" style="width: 145px;
    height: 30px;
    color:white;
    background-color: black;
    font-size:20px;">TOTAL</button>
    <?php
  
  if(isset($_POST['submit'])){
      include("connect.php"); // Assuming connect.php contains the database connection code
      session_start();
      $email = $_SESSION['email'];
      
      // Query to select the sum of m_tot from the monthly table
      $sql = "SELECT SUM(m_tot) AS m_total FROM monthly WHERE email='$email'";
      $result_monthly = mysqli_query($conn, $sql);
      $row_monthly = mysqli_fetch_assoc($result_monthly);
      $monthly_total = $row_monthly['m_total'];
      
      // Query to select the sum of g_tot from the goods table
      $sql = "SELECT SUM(g_tot) AS g_total FROM goods WHERE email='$email'";
      $result_goods = mysqli_query($conn, $sql);
      $row_goods = mysqli_fetch_assoc($result_goods);
      $goods_total = $row_goods['g_total'];
  
      $sql = "SELECT SUM(c_tot) AS c_total FROM capital WHERE email='$email'";
      $result_monthly = mysqli_query($conn, $sql);
      $row_capital = mysqli_fetch_assoc($result_monthly);
      $capital_total = $row_capital['c_total'];
      
      $sql = "SELECT SUM(o_tot) AS o_total FROM others WHERE email='$email'";
      $result_others = mysqli_query($conn, $sql);
      $row_others = mysqli_fetch_assoc($result_others);
      $others_total = $row_others['o_total'];
      
      
      // Calculate the total amount
      $total_amount = $monthly_total + $goods_total + $capital_total + $others_total;
      //echo $total_amount;
      // Insert the total amount into the total table
      $sql = "INSERT INTO total(email, a_tot) VALUES ('$email', $total_amount)";
      $result = mysqli_query($conn, $sql);
     /* $row_total=mysqli_fetch_array($result);
      $tot_total=$row_total['a_tot'];*/
      
      if($result){
        echo "<p><font color=white>$total_amount</font></p>" ;
      } else {
          echo "Error inserting total amount: " . mysqli_error($conn);
      }
  }   
  ?>

   
    </div>
    <div class="cat">
        <div class="box1 box">
            <p>CAPITAL</p>
            <div class="b1"></div>
            <a href="capital.php">More</a>
        </div>
        <div class="box2 box">
            <p>GOODS</p>
            <div class="b2"></div>
            <a href="goods.php">More</a>
        </div>
        <div class="box3 box">
            <p>MONTHLY</p>
            <div class="b3"></div>
            <a href="moithly.php">More</a>
        </div>
        <div class="box4 box">
            <p>OTHERS</p>
            <div class="b4"></div>
            <a href="others.php">More</a>
        </div>
        </form>
    </div>

</body>
</html>