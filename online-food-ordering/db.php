<?php
// Database configuration - update these values on EC2.
$host = "localhost";
$dbname = "food_ordering";
$username = "fooduser";
$password = "CHANGE_ME";

$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
$conn->set_charset("utf8mb4");
?>
