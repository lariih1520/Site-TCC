<?php
  /**
   *
   */
  class Avaliacao{

     public $avaliacao;
     public $id;

    function __construct(){
      require_once('model/db_class.php');

      $conexao = new Mysql_db();
      $conexao->conectar();

    }

    public function Avaliar(){

      $sql = "insert into tbl_avaliacao(avaliacao,id_cliente)";
      $sql = $sql."values('".$this->avaliacao."','".$this->id_cliente."')";

      if(mysql_query($sql)){
        return true;
      }else{
        return false;
      }

    }

  }

 ?>
