<?php

  /**
   *
   */
  class ControllerLogin{


    public function ListarLogin(){

      require_once("model/login_class.php");
      $login = new Login();
      return $login->ListarLogin();



    }



  }




 ?>
