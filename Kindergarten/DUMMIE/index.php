<!DOCTYPE html>
<?php
include 'dbconn.php';
?>
<html lang="en">
<head>
  <title>Login V18</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">
  
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">

        <form class="login100-form validate-form" method="POST">
          <span class="login100-form-title p-b-43">
            Admin Login
          </span>          
          <div class="wrap-input100 validate-input">
          <input class="input100" type="text"  name="username" value="Username" onBlur="if(this.value == '') this.value = 'Username'" onFocus="if(this.value == 'Username') this.value = ''" required></p> 
          </div>
          
          <div class="wrap-input100 validate-input" data-validate="Password is required">
            <input class="input100" type="password" name="password"  value="Password" onBlur="if(this.value == '') this.value = 'Password'" onFocus="if(this.value == 'Password') this.value = ''" required></p>
          </div>
          <div class="container-login100-form-btn">
            <input class="login100-form-btn" type="submit" name="sub"  value="Login"></p>
          </div>
        </form>

        <div class="login100-more" style="background-image: url('images/bg-01.jpg');">
        </div>
      </div>
    </div>
  </div>
  

</body>
</html>

<?php
  
  if($_SERVER["REQUEST_METHOD"] == "POST")
  { 
    $username = $_POST['username'];
    $password= $_POST['password'];
    $sql="SELECT *
        FROM STAFF
        WHERE STAFF_ID = '$username'
        AND STAFF_PASSWORD = '$password'";
        
    $stmt = oci_parse($dbconn,$sql);
    oci_execute($stmt);
    
    $staff= oci_fetch_array($stmt);
    $count = oci_num_rows($stmt);
    
    if($count>0)
    {
		$info = $STAFF;   
           $_SESSION['STAFF_ID']=$info['STAFF_ID'];
		
      header("Location:home.php");
    } 
    else
    {
      echo '<script>alert("Incorrect password")</script>';
    }
    
    
  }
?>