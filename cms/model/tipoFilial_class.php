<?php

/*
Objetivo: Criação do CRUD de cor
Data: 30/09/2017
Autor: Marcelo Bruno
Ultima Modificação: Hoje
Obervações: Nada ainda
Arquivos Relacionados: router.php e
                       cms/views/adm_filiais_view.php
                      cms/controller/Tipofilial_controller.php
*/

  class TipoFilial
  {

    public $id_tipo_restaurante;
    public $nome;

    function __construct()
    {
      require_once('model/db_class.php');

      $conexao = new Mysql_db();
      $conexao->conectar();
    }

    public function ListarTipoFilial()
    {
      $sql = "select * from tipo_restaurante";
      if(mysql_query($sql)){
        $select = mysql_query($sql);
        $contador = 0;

        while($rs = mysql_fetch_array($select)){
          $lista[] = new TipoFilial();

          $lista[$contador]->id_tipo_restaurante = $rs['id_tipo_restaurante'];
          $lista[$contador]->nome = $rs['nome'];

          $contador += 1;

        }

        return $lista;

      }else{
        echo('erro SQL');
        return false;
      }
    }


  }


 ?>
