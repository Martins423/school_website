<?php 
session_start();
session_destroy();
header("location: student-login.php");
?>