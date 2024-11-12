<?php
// Database configuration
$servername = "localhost";    // Server name (localhost for XAMPP)
$username = "root";           // Default XAMPP username for MySQL is 'root'
$password = "";               // No password for MySQL in XAMPP by default
$dbname = "users_system"; // Replace with your actual database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Optionally, set the charset to utf8 for better compatibility
$conn->set_charset("utf8");

?>
