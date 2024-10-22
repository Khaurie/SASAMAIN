<?php
// Database connection settings
$servername = "localhost";  // Change this if your database is hosted elsewhere
$username = "root";         // Your MySQL username
$password = "";             // Your MySQL password
$dbname = "petshop";        // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Optional: set character set to UTF-8 (to handle special characters correctly)
$conn->set_charset("utf8");

?>
