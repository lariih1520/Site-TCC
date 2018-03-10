<?php
/*
Objetivo: Criação do CRUD de cor
Data: 30/09/2017
Autor: Marcelo Bruno
Ultima Modificação: Hoje
Obervações: Nada ainda
Arquivos Relacionados: router.php e
                       cms/views/adm_filiais_view.php
                      cms/controller/filial_controller.php
*/

  class Filial
  {

    public $id_restaurante;
    public $nome;
    public $tipo_restaurante;
    public $telefone;
    public $cep;
    public $numero;
    public $cnpj;
    public $foto;


    function __construct(){
      require_once('model/db_class.php');

      $conexao_db = new Mysql_db();
      $conexao_db->conectar();

    }

    public function CadastrarFial($filial){

      $sql = "insert into tbl_restaurante(nome, tipo_restaurante, telefone, cep, numero, foto, cnpj)";
      $sql = $sql."values('".$filial->nome."', ".$filial->tipo_restaurante.",";
      $sql = $sql."'".$filial->telefone."', '".$filial->cep."', '".$filial->numero."','".$filial->foto."','".$filial->cnpj."')";


      if(mysql_query($sql)){
        return true;
      }else{
        return false;
      }

    }

    public function ListarFiliais(){
      $sql = "select * from tbl_restaurante";

      if(mysql_query($sql)){
        $select = mysql_query($sql);

        $contador = 0;

        while($rs = mysql_fetch_array($select)){

          $lista[] = new Filial();

          $lista[$contador]->id_restaurante = $rs['id_restaurante'];
          $lista[$contador]->nome = $rs['Nome'];
          $lista[$contador]->tipo_restaurante = $rs['tipo_restaurante'];
          $lista[$contador]->telefone = $rs['telefone'];
          $lista[$contador]->cep = $rs['cep'];
          $lista[$contador]->numero = $rs['numero'];

          $contador += 1;
        }

        return $lista;
      }else{
        return false;
      }

    }

    public function ExcluirFilial($filial){
      $sql = "delete from tbl_restaurante where  id_restaurante = ".$filial->id_restaurante;

      if(mysql_query($sql)){
        return true;
      }else{
        return false;
      }

    }

    public function BuscarFilial($filial){
      $sql = "select * from tbl_restaurante where id_restaurante = ".$filial->id_restaurante;
      $select = mysql_query($sql);

      if($rs = mysql_fetch_array($select)){
        $filial = new Filial();

        $filial->id_restaurante = $rs['id_restaurante'];
        $filial->nome = $rs['Nome'];
        $filial->telefone = $rs['telefone'];
        $filial->cep = $rs['cep'];
        $filial->numero = $rs['numero'];
        $filial->tipo_restaurante = $rs['tipo_restaurante'];
        $filial->cnpj = $rs['cnpj'];
        $filial->foto = $rs['foto'];

        return $filial;

      }else{
        return false;
      }
    }

    public function AlterarFilial($filial){
      $sql = "update tbl_restaurante set nome = \"".$filial->nome."\", tipo_restaurante = ".$filial->tipo_restaurante;
      $sql = $sql.", telefone = '".$filial->telefone."',cnpj = '".$filial->cnpj."',foto = '".$filial->foto."', cep = '".$filial->cep."', numero = '".$filial->numero."'";
      $sql = $sql."where id_restaurante = ".$filial->id_restaurante;

      if(mysql_query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function AlterarSemFoto($filial){
      $sql = "update tbl_restaurante set nome = \"".$filial->nome."\", tipo_restaurante = ".$filial->tipo_restaurante;
      $sql = $sql.", telefone = '".$filial->telefone."',cnpj = '".$filial->cnpj."', cep = '".$filial->cep."', numero = '".$filial->numero."'";
      $sql = $sql."where id_restaurante = ".$filial->id_restaurante;

      if(mysql_query($sql)){
        return true;
      }else{
        return false;
      }
    }

  }
 ?>
