<?php
 
 $con = mysqli_connect("localhost", "root", "", "travel");
 if($con==false)
 {
    die("connection error ".mysqli_connect_error());
 }
?>