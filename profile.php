<?php
session_start();

include("connection.php");

// Check if the user's email is stored in the session
if (!isset($_SESSION['email'])) {
    // Redirect the user to the login page or display an error message
    header("Location: login.php");
    exit();
}

// Get the user's email from the session
$userEmail = $_SESSION['email'];

// Query to retrieve user information from the 'login' table based on the email
$sql = "SELECT name, phnumber, email, password FROM login WHERE email = '$userEmail'";

// Execute the query
$result = mysqli_query($con, $sql);

if (!$result) {
    die("Query failed: " . mysqli_error($con));
}

// Fetch the user data
if ($row = mysqli_fetch_assoc($result)) {
    $name = $row['name'];
    $phnumber = $row['phnumber'];
    $email = $row['email'];
    $password = $row['password'];
} else {
    // User not found in the database
    // You can handle this case as needed
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
     <div class="imgcontainer" style="margin-left: 700px;margin-top: 70px;">
    <img src="ii.jpg" alt="Avatar" class="avatar">
  </div>
  <hr>
  <div style="margin-left:70px;font-size: 30px;font-family: cursive;">
    <p>Name:<?php echo $name; ?></p>
    <br>
    <p>Phnumber:<?php echo $phnumber; ?></p>
    <br>
    <p>email:<?php echo $email; ?></p>
    <br>
    <p>password:<?php echo $password; ?></p>
    <br>
</div>
    <?php

// Initialize a variable to track whether to display the success message and claim certificate button
$showSuccessMessage = false;

// Check if the user has completed all courses successfully
if (isset($_SESSION['courses_completed']) && $_SESSION['courses_completed'] === true) {
    $showSuccessMessage = true;
    // Clear the session variable so the message is not displayed again
    unset($_SESSION['courses_completed']);
}
?>

<!-- The rest of your profile page content here -->

<?php
if ($showSuccessMessage) {
    echo '<div class="success-message" style="font-family: cursive;margin-left: 400px;"><b><h3>Congratulations! You have completed all courses successfully.</h3></b></div>';
    // Display the "Claim Certificate" button only when the success message is shown
    echo '<div class="enroll-buttons">';
    echo '<button class="btn btn-primary enroll-button"><a style="color: black;" href="certificateall.php">Claim Certificate</a></button>';
    echo '</div>';
}
?>

</body></html>