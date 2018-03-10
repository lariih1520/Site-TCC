<?php
  /**
   *
   */
  class Periodo{
    public $id;
    public $nome;
    public $horario;

    function __construct(){
      require_once('model/db_class.php');
      $conexao = new Mysql_db();
      $conexao->conectar();
    }

    public function selectPeriodos(){
      $sql="select * from tbl_periodo";
      if($select=mysql_query($sql)){
        $lst_periodos;
        $contador = 0;
        while ($rs = mysql_fetch_array($select)){
          $periodo = new Periodo();
          $periodo->id = $rs['id_periodo'];
          $periodo->nome = $rs['nome'];
          $periodo->horario = $rs['horario'];
          $lst_periodos[$contador]=$periodo;
          $contador ++;
        }
        return $lst_periodos;
      }else {
        return false;
      }
    }
  }

 ?>
