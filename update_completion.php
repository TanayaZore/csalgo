<?php
session_start();

if (isset($_POST['done'])) {
    // Mark the user as completed
    $_SESSION['courses_completed'] = true;
    header('Location: profile.php'); // Redirect to the profile page
    exit();
} else {
    header('Location: profile.php'); // Redirect to the profile page
    exit();
}
?>