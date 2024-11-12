<?php
// Database connection
include("connection.php");
// Login form submission handling

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Prepare statement
    $stmt = $conn->prepare("SELECT id, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $hashed_password);
        $stmt->fetch();
        
        if (password_verify($password, $hashed_password)) {
            echo "Login successful. User ID: " . $id;
        } else {
            echo "Invalid username or password";
        }
    } else {
        echo "Invalid username or password";
    }

    $stmt->close();
}

$conn->close();
error_reporting(0);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST["fullname"];
    $phonenumber = $_POST["phonenumber"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    // Prepare statement
    $stmt = $conn->prepare("INSERT INTO users (fullname, phonenumber, email, password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $fullname, $phonenumber, $email, $password);

    // Execute statement
    if ($stmt->execute()) {
        echo "Registration successful";
    } else {
        echo "Error: " . $conn->error;
    }

    $stmt->close();
}

$conn->close();

?>
