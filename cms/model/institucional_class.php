<?php
/*
  Objetivo: Crud Missão visão valores e fundadores
  Data: 11/10/2017
  Autor: Paulo Henrique
  Ultima Modificação: 11/10/2017
  Obervações: ...
  Arquivos Relacionados: router.php
                         views/adm_sobre_view.php
                        controller/institucional_controller.php
  */

  class Institucional{
    public $titulo;
    public $descricao;

    public function __construct(){
      require_once('model/db_class.php');
      $conexao_db = new Mysql_db();
      $conexao_db->conectar();
    }

    //buscar
    public function Buscar(){
      $sql = "select ".$this->titulo." from tbl_institucional";
      if($select = mysql_query($sql)){
        $rs = mysql_fetch_array($select);
        $this->descricao = $rs[$this->titulo];
      }else{
        return false;
      }
    }

    //Editar
    public function Editar(){
      $sql = "update tbl_institucional set ".$this->titulo."= '".$this->descricao."'";
      echo($sql);
      if(mysql_query($sql)){
        header("location:adm_sobre.php");
      }else{
        return false;
      }
    }
  }
 ?>
