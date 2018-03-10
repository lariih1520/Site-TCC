
<?php

  /*
  Objetivo: Criação do CRUD de cor
  Data: 28/09/2017
  Autor: Marcelo Bruno
  Ultima Modificação: Hoje
  Obervações: Nada ainda
  Arquivos Relacionados: router.php e
                         cms/views/adm_pagina_view.php
                        cms/controller/cores_controller.php
  */

  /**
   *
   */
  class Cor
  {

    public $id_cor;
    public $cor;


    public function __construct(){

      require_once('model/db_class.php');

      $conexao_db = new Mysql_db();
      $conexao_db->conectar();

    }

    public function ListarCor(){

      $sql = "select * from tbl_cor";

      if(mysql_query($sql)){

        $contador = 0;
        $select = mysql_query($sql);

        while($rs =  mysql_fetch_array($select)){

            $cor[] = new Cor();

            $cor[$contador]->id_cor = $rs['id_cor'];
            $cor[$contador]->cor = $rs['rgb'];

            $contador += 1;
        }


        return $cor;
      }else{
        return false;
      }

    }

    public function AlterarCor($cor){

      $sql = "update tbl_cor set rgb = '".$cor->cor."'";

      if(mysql_query($sql)){
        return true;
      }else{
        return false;
      }

    }

    public function VoltarPadrao(){
      $sql = "update tbl_cor set rgb = 'rgb(156,4,4)'";

      if(mysql_query($sql)){
        return true;
      }else{
        return false;
      }
    }


  }


?>
