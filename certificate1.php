<?php
session_start();

// Check if the user is not logged in, and redirect them to the login page
if (!isset($_SESSION['email'])) {
    header("location: login.php");
    exit; // Make sure to exit after redirection
}

// Include your database connection code here (e.g., include("connection.php"))
include("connection.php"); // Adjust the path as needed

// Get the user's email from the session
$userEmail = $_SESSION['email'];

// Query the database to retrieve the user's name based on their email
$query = "SELECT name FROM login WHERE email = '$userEmail' LIMIT 1";
$result = mysqli_query($con, $query);

if ($result && mysqli_num_rows($result) > 0) {
    $userData = mysqli_fetch_assoc($result);
    $userName = $userData['name']; // Retrieve the user's name from the query result
} else {
    // Handle the case where the user's data is not found
    $userName = "User Name"; // Default if the user is not found
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
</head>
<body>
	<div class="navbar">
        <a class="algo">
        <img src="./iconn.png" style="width:35px; margin-left:20px" class="rounded-circle" alt="Cinque Terre"> CS ALGORITHMS</a>
        <div class="credentials">
        <a class="login" href="help.php">HELP</a>
         <a class="login" href="profile.php">PROFILE</a>
        <a class="signup" href="logout.php">LOGOUT</a>
        </div>    
    </div>
    
<br/><br/><br/><br/>
    <div style="width:800px; height:600px; padding:20px; text-align:center; border: 10px solid #787878; display: block;
  margin-left: auto;
  margin-right: auto;">
<div style="width:750px; height:550px; padding:5px; text-align:center; border: 5px solid #787878; display: block;
  margin-left: auto;
  margin-right: auto;">
        <img src="./iconn.png" style="width:35px; margin-left:500px" class="rounded-circle" alt="Cinque Terre"> CS ALGORITHMS</a>
        <br/><br/>
       <span style="font-size:50px; font-weight:bold">Certificate Of Achievement</span>
       <br><br><br/><br/>
       <span style="font-size:25px"><i>This is to certify that<br/>
                                        <?php echo $userName; ?> <br/>
                                        has successfully completed the<br/>
                                        <b>SOME BASIC ALGORITHMS</b> course.</i></span><br/>
       <br><br>
</div>
</div>
<br>
<button class="btn-primary" onclick="window.print()">Print this certificate</button>

<br/><br/><br/><br/>
    <footer>
		<div class="footer-container">
        <p class="footer-text">Contact us: learn.algo@gmail.com</p>
        </div>
    </footer>    
</body>
</html>