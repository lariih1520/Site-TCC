<?php
  /**
   *
   */
  class ControllerReservas{

    public function buscarProximasReservas(){
      require_Once("model/reserva_class.php");
      $reserva_class = new Reserva();
      $reserva_class->cliente = $_SESSION['id'];
      if($proximas_reservas = $reserva_class->buscarProximasReservas()){
        return $proximas_reservas;
      }else{
        return false;
      }
    }

    public function buscarHistoricoReservas(){
      require_Once("model/reserva_class.php");
      $reserva_class = new Reserva();
      $reserva_class->cliente = $_SESSION['id'];
      if($historico_reservas = $reserva_class->buscarHistoricoReservas()){
        return $historico_reservas;
      }else{
        return false;
      }
    }

  }

 ?>
