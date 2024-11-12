<?php
 include("connection.php");

 error_reporting(0);
// Registration form submission handling
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $date = $_POST["date"];
    $number=$_POST["number"];
    $message = $_POST["message"];
   
    // Prepare statement
    $stmt = $conn->prepare("INSERT INTO booking (name, number,date, email,message) VALUES (?,?,?,?,?)");
    $stmt->bind_param("sssss", $name, $number, $email, $message, $date);

    // Execute statement
    if ($stmt->execute()) {
        echo "<script>alert('data inserted successfully')
      </script>";
      
   
        
      
    } else {
        echo "Error: " . $conn->error;
    }
    ?>
      
<script>
     window.location.href = "index.php";
    </script>
      <?php
    


    $stmt->close();
}

$conn->close();

?>
