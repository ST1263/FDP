<?php  
session_start();
unset($_SESSION['LAST_ACTIVE_TIME']);
unset($_SESSION['IS_LOGIN']);
   //session_destroy();
   header("location:login.php");
   die();
  ?>