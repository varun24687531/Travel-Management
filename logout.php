<?php
session_start();
echo" Thank you will see you soon";
header("location:index.php");
session_unset();
session_destroy();
?>