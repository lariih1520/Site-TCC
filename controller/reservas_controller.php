<?php
  /**
   *
   */
  class ControllerReservas{

    public function novaReserva(){
      require_Once("model/reserva_class.php");
      $reserva_class = new Reserva();
      $reserva_class->cliente = $_SESSION['id'];
      $reserva_class->data = date('Y-m-d', strtotime($_POST['txtData']));
      $reserva_class->periodo = $_POST['slcHora'];
      if($reserva_class->verificarReservas()){
        $reserva_class->mesa = $_POST['slcMesa'];
        if($reserva_class->novaReserva()){
          header("location:reservas.php?reserva=1");
        }else{
          echo("Erro no insert");
        }
      }else{
        //header("location:reservas.php?reserva=0");
      }
    }

    public function buscarMesas(){
      require_Once("model/reserva_class.php");
      $reserva_class = new Reserva();
      $reserva_class->cliente = $_SESSION['id'];
      $reserva_class->periodo = $_POST['slcHora'];
      $reserva_class->data = date('Y-m-d', strtotime($_POST['txtData']));
      return $reserva_class->buscarMesas($_POST['slcFilial']);
    }
  }

 ?>
