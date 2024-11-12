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
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        header("Location: login.php");
        exit();
    } else {
        $error = "Error: " . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
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

    <!-- Login Container -->
    <div class="login-container">
        <div class="login-box">
            <h2>Sign Up</h2>
            <?php if (isset($error)): ?>
                <p class="error"><?php echo $error; ?></p>
            <?php endif; ?>
            <form method="POST" action="signup.php">
                <div class="input-group">
                    <label>Username :</label>
                    <input type="text" name="username" required>
                </div>
                <div class="input-group">
                    <label>Emai :</label>
                    <input type="email" name="email" required>
                </div>
                <div class="input-group">
                    <label>Password :</label>
                    <input type="password" name="password" required>
                </div>
                <button type="submit" class="btn button-63" role="button"><span class="text">Sign Up</span></button>
            </form>
            <p>Already have an account? <a href="login.php" style="color:red;">Login</a></p>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
