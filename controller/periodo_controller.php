<?php
  /**
   *
   */
  class ControllerPeriodo{
    public function selectPeriodos(){
      require_Once("model/periodo_class.php");
      $periodo_class = new Periodo();
      return $periodo_class->selectPeriodos();
    }
  }
 ?>
