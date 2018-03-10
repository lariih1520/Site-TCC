<?php
  /**
   *
   */
   require_Once("model/cliente_class.php");
  class Reserva extends Cliente{
    public $id;
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
      $sql = "select * from vw_reservas where validacao is null order by data";
      if($select = mysql_query($sql)){
        $lst_reservas;
        $contador = 0;
        if(mysql_num_rows($select)>0){
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
      $sql = "select * from vw_reservas where validacao is not null order by data";
      if($select = mysql_query($sql)){
        $lst_reservas;
        $contador = 0;
        if(mysql_num_rows($select)>0){
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

    public function listarId(){
      $sql="select * from vw_reservas where id_reserva=".$this->id;
      if($select = mysql_query($sql)){
        $rs = mysql_fetch_array($select);
        $this->perido = $rs['periodo'];
        $this->mesa = $rs['mesa'];
        $this->restaurante = $rs['restaurante'];
        $this->periodo = $rs['periodo'];
        $this->data = $rs['data'];
        $this->validacao = $rs['validacao'];
        $this->nome = $rs['nome'];
        $this->telefone = $rs['telefone'];
        $this->celular = $rs['celular'];
        $this->email = $rs['email'];
        $this->cpf = $rs['cpf'];
        return true;
      }else {
        return false;
      }
    }

    public function validacaoReserva(){
      $sql="update tbl_reservas set validacao=".$this->validacao." where id_reserva=".$this->id;
      if(mysql_query($sql)){
        return true;
      }else {
        return false;
      }
    }
  }

 ?>
