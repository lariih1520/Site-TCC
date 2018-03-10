<?php
  /**
   *
   */
  class ControllerSetores{

    public function selectSetores(){
      require_Once("model/setor_class.php");
      $setor_class = new Setor();
      return $setor_class->selectSetores();
    }

  }

 ?>
