<?php
session_start(); // Start the session

// Check if the user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // If not logged in, redirect to login page
    header("Location: login.php");
    exit();
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>

<h1>Welcome to the Homepage</h1>

<?php
if (isset($_SESSION['username'])) {
    echo "<p>Hello, " . $_SESSION['username'] . "! You are now logged in.</p>";
    echo '<a href="logout.php">Logout</a>'; // Link to log out
} else {
    // If not logged in, show login and signup options
    echo '<a href="login.php">Login</a> | <a href="signup.php">Sign Up</a>';
}
?>

</body>
</html>
