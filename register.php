<?php
 include("connection.php");

 
// Registration form submission handling
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
