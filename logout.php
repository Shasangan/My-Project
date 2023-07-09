<?php


  session_start(); //call session
  session_unset(); //delete one session
  session_destroy(); // delete all session
  header("location:index.php");
  exit();


?>
