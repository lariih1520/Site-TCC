<?php

  /**
   *
   */
  class Setor{
    public $id;
    public $nome;

    function __construct(){
      require_once('model/db_class.php');
      $conexao = new Mysql_db();
      $conexao->conectar();
    }

    public function selectSetores(){
      $sql="select * from tbl_setor";
      if($select = mysql_query($sql)){
        $lst_setores;
        $contador = 0;
        while ($rs=mysql_fetch_array($select)){
          $setor = new Setor();
          $setor->id=$rs['id_setor'];
          $setor->nome=$rs['nome'];
          $lst_setores[$contador] = $setor;
          $contador++;
        }
        return $lst_setores;
      }else{
        return false;
      }
    }
  }

 ?>
