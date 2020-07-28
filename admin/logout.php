<?php
  session_start();
  unset($_SESSION['uid']);
  echo "Session expired";
  header("location:admindash.php");

  // session_destroy();
  // header('location:../login.php')
 ?>
