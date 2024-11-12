<?php
include_once('disconnection.php');

try {
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $query = mysqli_query($con, "Insert into login (name,password,email,phone) values ('$name', '$password', '$email','$phone')");

        echo "<script>alert('Data inserted successfully')</script>";
    }
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage() . ' Please try again!';
} 
?>