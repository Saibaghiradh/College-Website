<?php 
 session_start();

 if($_SESSION['status']!="Active")
 {
     header("location:login.php");
 }
?>
