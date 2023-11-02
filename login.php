<?php

session_start();

  include("connection.php");
  include("functions.php");

  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    //something  was posted
    $email = $_POST['email'];
    $psw = $_POST['psw'];
    $name = $_POST['name'];

    if(!empty($email) && !empty($psw) && !is_numeric($email))
    {
         //read from database
        $query = "select * from login where email = '$email' limit 1";

        $result = mysqli_query($con, $query);

        if($result)
        {
            if($result && mysqli_num_rows($result) > 0)
        {
            $user_data = mysqli_fetch_assoc($result);
            
            if($user_data['password'] == $psw)
            {
                $_SESSION['email'] = $user_data['email'];
                header("location: home1.php");
                die;
            }
        }
        }
        $error_message = "Wrong username or password!";
    }else
    {
        $error_message = "Wrong username or password!";
    }
  }

?>
<!DOCTYPE html>
<html lang="en">
 <!DOCTYPE html>
<html lang="en">
<head>
  <title>CSALGORITHMS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="styles.css"> 
  <script type="text/javascript">
      function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
  </script>
</head>
<body style="background:rgba(248, 182, 198, 1);">
 <form action="" method="post">
  <div class="container">
    <h1>LOGIN</h1>
    <hr>
    <?php
          if(isset($error_message))
          {
            echo '<div style="color: red;">' . $error_message . '</div>';
          }
        ?>
  <div class="imgcontainer">
    <img src="ii.jpg" alt="Avatar" class="avatar">
  </div>
    <label for="email"><b>Email</b></label>
            <br>
            <input type="text" placeholder="Enter Email" name="email" style="width: 100%;" required>
    <br>
    <br>
   <label for="psw"><b>Password</b></label><br>
            <input type="password" placeholder="Enter Password" name="psw" id="myInput" style="width: 100%;" required><br>
    <input type="checkbox" onclick="myFunction() " >Show Password
            <a href="#"  style="margin-left: 95px;"> Forget password?</a>
    <br>
    <br><button type="submit" style="margin-bottom: 30px; width:50%; height:50px; border-radius: 30px; background-color: rgba(248, 182, 198, 1);margin-left: 100px;">LOGIN</button>
            <p style="margin-left:60px">Don't have a account?<a href="signup.php">SIGNUP</a></p>
            <button style="margin-bottom: 30px; width:50%; height:50px; border-radius: 30px; background-color: rgba(248, 182, 198, 1);margin-left: 100px;"><a href="home.php" style="text-decoration: none; color:black;">Cancel</a></button>
  </div>
</form>
</body>
</html>