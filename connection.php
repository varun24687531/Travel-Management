<?php
$servername = "localhost"; // XAMPP server
$username = "root"; // default username
$password = ""; // default password
$database = "aravind"; // name of your database

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
