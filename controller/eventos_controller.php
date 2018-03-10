<?php
/*
    Feito por:Larissa
    Data:18/10/2017

*/

class ControllerEventos{
    public function SelectEventos(){
      require_Once('model/eventos_class.php');
      $eventos_class = new Evento();
      return $eventos_class->SelectEventos();
    }
    public function SelectEventosId($restaurante){
      require_Once('model/eventos_class.php');
      $eventos_class = new Evento();
      $eventos_class->restaurante = $_SESSION['filial'];
      return $eventos_class->selectEventosRestaurante();
    }
  }
?>
