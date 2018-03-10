<?php
/*
Objetivo: Criação do CRUD do cabeçalho do site
Data: 28/09/2017
Autor: Marcelo Bruno
Ultima Modificação: Hoje
Obervações: Nada ainda
Arquivos Relacionados: router.php e
                       cms/views/adm_cabecalho_view.php
                      cms/controller/cabecalho_controller.php
*/



  class Cabecalho
  {

    public $id_cabecalho;
    public $foto;
    public $texto_boas_vindas;
    public $foto_usuario;

    function __construct(){
      require_once('model/db_class.php');

      $conexao = new Mysql_db();
      $conexao->conectar();

    }

    public function MostrarCabecalho(){
      $sql = "select * from tbl_cabecalho";

      if(mysql_query($sql)){

        $select = mysql_query($sql);
        $contador = 0;

        while($rs = mysql_fetch_array($select)){

          $cabecalho[] = new Cabecalho();

          $cabecalho[$contador]->id_cabecalho = $rs['id_cabecalho'];
          $cabecalho[$contador]->foto = $rs['foto'];
          $cabecalho[$contador]->texto_boas_vindas = $rs['texto_boas_vindas'];
          $cabecalho[$contador]->foto_usuario = $rs['foto_usuario'];

          $contador += 1;
        }

        return $cabecalho;
      }else{
        return false;
      }

    }

    public function AlterarLogo($cabecalho){

      $sql = "update tbl_cabecalho set foto = '".$cabecalho->foto."' where id_cabecalho = 1";

      if(mysql_query($sql)){
        return true;
      }else{
        return false;
      }

    }

    public function AlterarBoasVinda($cabecalho){

      $sql = "update tbl_cabecalho set texto_boas_vindas = '".$cabecalho->texto_boas_vindas."', foto_usuario = '".$cabecalho->foto_usuario."' where id_cabecalho = 1";

      if(mysql_query($sql)){
        return true;
      }else{
        return false;
      }

    }

    public function AlterarTexto($cabecalho){
      $sql = "update tbl_cabecalho set texto_boas_vindas = '".$cabecalho->texto_boas_vindas."' where id_cabecalho = 1";

      if(mysql_query($sql)){
        return true;
      }else{
        return false;
      }
    }
  }

 ?>
