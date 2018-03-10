<?php
  session_start();

  if(!isset($_SESSION['id'])){
    session_destroy();
    header('location:../login.php');
  }else{
    if($_SESSION['id'] != 0){
      header('location:adm_paginas.php');
    }

  }
?>
