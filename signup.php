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
    $phnumber = $_POST['phnumber'];

    if(!empty($email) && !empty($psw) && !empty($name) && !empty($phnumber) && !is_numeric($email))
    {
         //save to database
        $query = "insert into login (email,password,name,phnumber) values ('$email','$psw','$name','$phnumber')";

        mysqli_query($con, $query);

        header("location: login.php");
        die;
    }else
    {
        echo "Please enter some valid information! ";
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
    function Validate() {
        var password = document.getElementById("txtPassword").value;
        var confirmPassword = document.getElementById("txtConfirmPassword").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
</script>
</head>
<body style="background:rgba(248, 182, 198, 1);">
  <form action="" style="border:1px solid #ccc" method="post">
  <div class="container">
    <h1>Sign Up</h1>
    <hr>
    
    <label for="name"><b>Name</b></label>
    <br>
    <input type="text" placeholder="Enter Name" name="name" style="width:100%;" required><br>
    <br>
    <label for="email"><b>Email</b></label>
    <br>
    <input type="text" placeholder="Enter Email" name="email" style="width:100%;" required><br>
    <br>
    <label for="psw"><b>Password</b></label><br>
            <input type="password" placeholder="Enter Password" name="psw" id="txtPassword" style="width:100%;" required><br>
    <br>
    <label for="repsw"><b>Confirm Password</b></label><br>
            <input type="password" placeholder="Repeat Password" name="repsw" id="txtConfirmPassword" style="width:100%;" required>
<br>
<br>
<label for="phnumber"><b>Phnumber</b></label><br>
            <input type="number" placeholder="Enter Phnumber" name="phnumber"  style="width:100%;" required><br>
    <br>
<br>
      <button type="submit" onclick="return Validate()" style="margin-left:100px;margin-bottom: 30px; width:50%; height:50px; border-radius: 30px; background-color: rgba(248, 182, 198, 1);">SIGNUP</button>
            <p style="margin-left:50px;">Already have a account?<a href="login.php">LOGIN</a></p>
            <button style="margin-bottom: 30px; width:50%; height:50px; border-radius: 30px; background-color: rgba(248, 182, 198, 1);margin-left:100px;"><a href="home.php" style="text-decoration: none; color:black;">Cancel</a></button>
  </div>
</form>
</body>
</html>