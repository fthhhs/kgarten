<!DOCTYPE html>
<?php
  session_start();
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
          <input class="input100" type="text"  name="username" value="username" onBlur="if(this.value == '') this.value = 'username'" onFocus="if(this.value == 'username') this.value = ''" required></p> 
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

    if($_SERVER['REQUEST_METHOD']=="POST"){
      $teacher_id = $_POST['teacher_id'];
      $teacher_password = $_POST['teacher_password'];
      $sql = "SELECT * FROM teacher WHERE teacher_id = '$username' AND teacher_password = '$password'";
      $query = mysqli_query($conn, $sql); //run sql

      if(mysqli_num_rows($query) == 0){
        echo "<script>alert('Login failed. Wrong email and password.'); window.location='login.php'</script>";
      }
      else {
        $staff_data = mysqli_fetch_array($query);
        $_SESSION['teacher_id'] = $staff_data[0]; 
        $_SESSION['staff_data'] = $staff_data; 
        echo "<script>alert('Login successfully'); window.location='home.php'</script>";
        die;
      }
    }
	}
?>