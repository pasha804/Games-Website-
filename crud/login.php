<?php
session_start();

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users_system";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $username;
            $_SESSION['loggedin'] = true;

            header("Location: homepage.php");
            exit();
        } else {
            $error = "Incorrect password.";
        }
    } else {
        $error = "No user found with that username.";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
     <!-- Video Background -->
     <div class="video-background">
        <video autoplay muted loop>
            <source src="1.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>

    <div class="login-container">
        <div class="login-box">
            <h2>Login</h2>
            <?php if (isset($error)): ?>
                <p class="error"><?php echo $error; ?></p>
            <?php endif; ?>
            <form method="POST" action="login.php">
                <div class="input-group">
                    <label>Username :</label>
                    <input type="text" name="username" required>
                </div>
                <div class="input-group">
                    <label>Password :</label>
                    <input type="password" name="password" required>
                </div>
                <button type="submit" class="btn button-63" role="button"><span class="text">Login</span></button>
            </form>
            <p>Don't have an account? <a href="signup.php" style="color:red;">Sign Up</a></p>
        </div>
    </div>
</body>
</html>
