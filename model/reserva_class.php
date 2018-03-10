<?php
  /**
   *
   */
  class Reserva{
    public $id;
    public $cliente;
    public $periodo;
    public $mesa;
    public $data;
    public $validacao;

    function __construct(){
      require_once('model/db_class.php');
      $conexao = new Mysql_db();
      $conexao->conectar();
    }

    public function verificarReservas(){
      $sql = "select * from tbl_reservas where id_cliente=".$this->cliente."
              and data='".$this->data."'
              and id_periodo=".$this->periodo."
              and validacao=1 or validacao is null";
      if($select = mysql_query($sql)){
        if(mysql_num_rows($select)>1){
          return false;
        }else{
          return true;
        }
      }else{
        echo "Erro no select verificarReservas";
      }
    }

    public function novaReserva(){
      $sql = "insert into tbl_reservas(id_cliente, id_periodo, id_mesa, data)";
      $sql = $sql." values(".$this->cliente.", ".$this->periodo.", ".$this->mesa.", '".$this->data."')";
      if(mysql_query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function buscarMesas($id_restaurante){
      require_once("model/mesa_class.php");
      $sql = "select * from tbl_mesa
              where validacao_reserva = 1 and id_restaurante = ".$id_restaurante."
              and id_mesa not in(select r.id_mesa from tbl_reservas as r
              inner join tbl_mesa as m on r.id_mesa = m.id_mesa and m.id_restaurante = ".$id_restaurante."
              where data='".$this->data."' and id_periodo=".$this->periodo." and validacao = 0 or null)";
      if($select = mysql_query($sql)){
        $lst_mesas;
        $contador = 0;
        while($rs=mysql_fetch_array($select)){
          $mesa = new Mesa();
          $mesa->id=$rs['id_mesa'];
          $mesa->numero=$rs['numero'];
          $mesa->lugares=$rs['lugares'];
          $mesa->restaurante=$rs['id_restaurante'];
          $mesa->validacao=$rs['validacao_reserva'];
          $lst_mesas[$contador] = $mesa;
          $contador ++;
        }
        return $lst_mesas;
      }else{
        return false;
      }
    }
  }

 ?>
