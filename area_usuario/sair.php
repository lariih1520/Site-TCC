<?php

  $_SESSION['id'] = 0;
  session_destroy();
  header('location:../login.php');

 ?>
