<?php
  /**
   *
   */
  class Mesa{

    public $id;
    public $numero;
    public $lugares;
    public $restaurante;
    public $validacao;

    function __construct(){
      require_once('model/db_class.php');
      $conexao = new Mysql_db();
      $conexao->conectar();
    }

    public function insertMesa(){
      $sql="insert into tbl_mesa(numero, lugares, id_restaurante, validacao_reserva)";
      $sql = $sql."values(".$this->numero.", ".$this->lugares.", ".$this->restaurante.", ".$this->validacao.")";
      if(mysql_query($sql)){
        return true;
      }else {
        return false;
      }
    }

    public function selectMesas(){
      $sql = "select m.id_mesa, m.numero, m.lugares, m.validacao_reserva, r.nome as restaurante from tbl_mesa as m
      inner join tbl_restaurante as r on m.id_restaurante = r.id_restaurante order by restaurante";
      if($select = mysql_query($sql)){
        $lst_mesas;
        $contador = 0;
        while ($rs=mysql_fetch_array($select)){
          $mesa = new Mesa();
          $mesa->id=$rs['id_mesa'];
          $mesa->numero=$rs['numero'];
          $mesa->lugares=$rs['lugares'];
          $mesa->restaurante=$rs['restaurante'];
          $mesa->validacao=$rs['validacao_reserva'];
          $lst_mesas[$contador] = $mesa;
          $contador++;
        }
        return $lst_mesas;
      }else{
        return false;
      }
    }

    public function selectId(){
      $sql = "select * from tbl_mesa where id_mesa=".$this->id;
      if($select = mysql_query($sql)){
        $rs=mysql_fetch_array($select);
        $this->numero=$rs['numero'];
        $this->lugares=$rs['lugares'];
        $this->restaurante=$rs['id_restaurante'];
        $this->validacao=$rs['validacao_reserva'];
      }else{
        return false;
      }
    }

    public function editarMesa(){
      $sql="update tbl_mesa set numero=".$this->numero.", lugares=".$this->lugares.",
        id_restaurante=".$this->restaurante.", validacao_reserva=".$this->validacao."
        where id_mesa=".$this->id;
      if(mysql_query($sql)){
        return true;
      }else {
        return false;
      }

    }

    public function excluirMesa(){
      $sql = "delete from tbl_mesa where id_mesa=".$this->id;
      if(mysql_query($sql)){
        return true;
      }else{
        return false;
      }
    }
  }

 ?>
