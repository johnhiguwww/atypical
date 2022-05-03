<?php
  session_start();
  if(!isset($_SESSION['id_terapeuta']))
  {
    header("location: index.php");
    exit;
  }
?>
