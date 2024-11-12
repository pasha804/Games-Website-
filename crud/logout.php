<?php
session_start(); // Start the session

// Destroy the session
session_destroy();

// Redirect to login page
header("Location: login.php");
exit();
?>
