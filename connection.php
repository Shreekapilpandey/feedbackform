<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "Feedbackform"; // corrected variable name

// Create Connection
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

// Check Connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully"; // You can remove or modify this line as needed
}
?>
