<?php
include('config.php');

if ($conn) {
    echo "Database connection successful!";
} else {
    echo "Failed to connect to the database.";
}
?>
