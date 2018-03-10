<?php
  session_start();
  $_SESSION['filial']=$_GET['id'];
  echo($_SESSION['filial']);
  header('location: index.php');
 ?>
