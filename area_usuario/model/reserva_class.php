<?php
  /**
   *
   */
  class Reserva{
    public $id;
    public $cliente;
    public $periodo;
    public $mesa;
    public $restaurante;
    public $data;
    public $validacao;

    function __construct(){
      require_once('model/db_class.php');
      $conexao = new Mysql_db();
      $conexao->conectar();
    }

    public function buscarProximasReservas(){
      $sql = "select * from vw_reservas where id_cliente=".$this->cliente."
      and data > now() ";
      if($select = mysql_query($sql)){
        $lst_reservas;
        $contador = 0;
        if(mysql_num_rows($select)){
          while ($rs = mysql_fetch_array($select)) {
            $reserva = new Reserva();
            $reserva->id = $rs['id_reserva'];
            $reserva->periodo = $rs['periodo'];
            $reserva->mesa = $rs['mesa'];
            $reserva->data = $rs['data'];
            $reserva->restaurante = $rs['restaurante'];
            $reserva->validacao = $rs['validacao'];
            $lst_reservas[$contador] = $reserva;
            $contador ++;
          }
          return $lst_reservas;
        }else {
          return false;
        }
      }else {
        return false;
      }
    }

    public function buscarHistoricoReservas(){
      $sql = "select * from vw_reservas where id_cliente=".$this->cliente."
      and data < now()";
      if($select = mysql_query($sql)){
        $lst_reservas;
        $contador = 0;
        if(mysql_num_rows($select)){
          while ($rs = mysql_fetch_array($select)) {
            $reserva = new Reserva();
            $reserva->id = $rs['id_reserva'];
            $reserva->periodo = $rs['periodo'];
            $reserva->mesa = $rs['mesa'];
            $reserva->data = $rs['data'];
            $reserva->restaurante = $rs['restaurante'];
            $reserva->validacao = $rs['validacao'];
            $lst_reservas[$contador] = $reserva;
            $contador ++;
          }
          return $lst_reservas;
        }else {
          return false;
        }
      }else {
        return false;
      }
    }



  }

 ?>
