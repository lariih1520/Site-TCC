<?php

/*
Objetivo: Criação do CRUD de cor
Data: 30/09/2017
Autor: Marcelo Bruno
Ultima Modificação: Hoje
Obervações: Nada ainda
Arquivos Relacionados: router.php e
                       cms/views/redes_sociais_view.php
                      cms/controller/redes_controller.php
*/


  class RedeSocial
  {

    public $id_rede;
    public $nome_rede;
    public $link;
    public $foto;


    function __construct(){
      require_once('model/db_class.php');

      $conexao_db = new Mysql_db();
      $conexao_db->conectar();
    }

    public function Cadastrar($rede){

      $sql = "insert into tbl_rede(nome_rede, link, foto )";
      $sql = $sql."values('".$rede->nome_rede."', '".$rede->link."', '".$rede->foto."')";

      if(mysql_query($sql)){
        return true;
      }else{
        return false;
      }

    }

    public function ListarTodos(){

      $sql="select * from tbl_rede";

      if(mysql_query($sql)){

        $select = mysql_query($sql);
        $contador = 0;

        while($rs = mysql_fetch_array($select)){

          $lista[] = new RedeSocial();

          $lista[$contador]->id_rede = $rs['id_rede'];
          $lista[$contador]->nome_rede = $rs['nome_rede'];
          $lista[$contador]->link = $rs['link'];
          $lista[$contador]->foto = $rs['foto'];

          $contador +=1;
        }

        return $lista;

      }else{
        return false;
      }
    }

    public function Deletar($rede){
      $sql = "delete from tbl_rede where id_rede = ".$rede->id_rede;

      if(mysql_query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function ListarPorId($rede){

      $sql = "select * from tbl_rede where id_rede = ".$rede->id_rede;

      if(mysql_query($sql)){

        $select = mysql_query($sql);

        if($rs = mysql_fetch_array($select)){

          $rede_listar = new RedeSocial();

          $rede_listar->id_rede = $rs['id_rede'];
          $rede_listar->nome_rede = $rs['nome_rede'];
          $rede_listar->link = $rs['link'];
          $rede_listar->foto = $rs['foto'];

          return $rede_listar;
        }else{
          return false;
        }
      }
    }

    public function Alterar($rede){

      $sql = "update tbl_rede set nome_rede = '".$rede->nome_rede."', ";
      $sql = $sql."link = '".$rede->link."', foto = '".$rede->foto."'";
      $sql = $sql."  where id_rede = ".$rede->id_rede;

      if(mysql_query($sql)){
        return true;
      }else{
        return false;
      }

    }

    public function AlterarSemFoto($rede){
      $sql = "update tbl_rede set nome_rede = '".$rede->nome_rede."', ";
      $sql = $sql."link = '".$rede->link."'";
      $sql = $sql." where id_rede = ".$rede->id_rede;

      if(mysql_query($sql)){
        return true;
      }else{
        return false;
      }
    }

  }


?>
