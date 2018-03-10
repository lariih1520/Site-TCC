<?php

/**
 *
 */
class Categoria
{

  public $id_tipo_prato;
  public $nome;
  public $imagem;



  function __construct(){
    require_once('model/db_class.php');

    $conexao = new Mysql_db();
    $conexao->conectar();

  }


    public function CadastrarCategoria(){

      $sql = "insert into tbl_tipo_prato(nome, imagem)";
      $sql = $sql."values('".$this->nome."','".$this->imagem."')";

      echo($sql);

      if(mysql_query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function ListarCategoria(){

      $sql = "select * from tbl_tipo_prato";

      if(mysql_query($sql)){
        $select = mysql_query($sql);

        $contador = 0;
        $lista = "";

        while($rs = mysql_fetch_array($select)){

          $lista[] = new Categoria();

          $lista[$contador]->id_tipo_prato = $rs['id_tipo_prato'];
          $lista[$contador]->nome = $rs['nome'];
          $lista[$contador]->imagem = $rs['imagem'];

          $contador += 1;

        }

        if($lista == 0){
    ?>
        <p class="nenhuma_cadastrada">Nenhuma Categoria Cadastrada</p>
    <?php
        }else{
          return $lista;
        }
      }else{
        return false;
      }



    }

    public function ListarCategoriaID(){

      $sql = "select * from tbl_tipo_prato where id_tipo_prato=".$this->id_tipo_prato;

      $select = mysql_query($sql);

      if($rs = mysql_fetch_array($select)){

        $lista = new Categoria();

        $lista->id_tipo_prato = $rs['id_tipo_prato'];
        $lista->nome = $rs['nome'];
        $lista->imagem = $rs['imagem'];


        return $lista;
      }else{
        return false;
      }



    }


    public function ExcluirCategoria(){

      $sql = "delete from tbl_tipo_prato where id_tipo_prato =".$this->id_tipo_prato;


      if(mysql_query($sql)){
        return true;
      }else{
        return false;
      }



    }

    public function EditarCategoria(){
      $sql = "update tbl_tipo_prato set nome='".$this->nome."', imagem = '".$this->imagem."' where id_tipo_prato=".$this->id_tipo_prato;

      if(mysql_query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function EditarCategoriaSemFoto(){

      $sql = "update tbl_tipo_prato set nome='".$this->nome."' where id_tipo_prato =".$this->id_tipo_prato;

      if(mysql_query($sql)){
        return true;
      }else{
        return false;
      }


    }

  }









 ?>
