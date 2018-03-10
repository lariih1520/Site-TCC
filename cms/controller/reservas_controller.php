<?php
  /**
   *
   */
  class ControllerReservas{

    public function buscarProximasReservas(){
      require_Once("model/reserva_class.php");
      $reserva_class = new Reserva();
      //$reserva_class->cliente = $_SESSION['id'];
      if($proximas_reservas = $reserva_class->buscarProximasReservas()){
        return $proximas_reservas;
      }else{
        return false;
      }
    }

    public function buscarHistoricoReservas(){
      require_Once("model/reserva_class.php");
      $reserva_class = new Reserva();
      //$reserva_class->cliente = $_SESSION['id'];
      if($historico_reservas = $reserva_class->buscarHistoricoReservas()){
        return $historico_reservas;
      }else{
        return false;
      }
    }

    public function listarId(){
      require_Once("model/reserva_class.php");
      $reserva_class = new Reserva();
      $reserva_class->id = $_GET['id'];
      if($reserva_class->listarId()){
        require_Once("adm_reservas.php");
      }else {
        header('location: adm_reservas.php?erro=1');
      }
    }

    public function validarReserva(){
      require_Once("model/reserva_class.php");
      $reserva_class = new Reserva();
      $reserva_class->id = $_GET['id'];
      if(isset($_POST['btn_true'])){
        $reserva_class->validacao = 1;
        if($reserva_class->validacaoReserva()){
          header('location: adm_reservas.php');
        }else {
          header('location: adm_reservas.php?erro=0');
        }
      }elseif(isset($_POST['btn_false'])){
        $reserva_class->validacao = 0;
        if($reserva_class->validacaoReserva()){
          header('location: adm_reservas.php');
        }else {
          header('location: adm_reservas.php?erro=0');
        }
      }elseif(isset($_POST['btn_back'])){
        header('location: adm_reservas.php');
      }
    }
  }

 ?>
