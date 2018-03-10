<?php


/**
 *
 */
class Galeria{

  public $id_titulo;
  public $titulo;
  public $descricao;
  public $id_galeria;

  function __construct(){
    require_once('model/db_class.php');

    $conexao_db = new Mysql_db();
    $conexao_db->conectar();

  }

  public function listarTitulo(){

    $sql = "select * from tbl_galeria_titulo";

    if(mysql_query($sql)){

      $contador=0;

      $select = mysql_query($sql);

      while($rs=mysql_fetch_array($select)){

          $galeria[] = new Galeria();

          $galeria[$contador]->titulo = $rs['titulo'];
          $galeria[$contador]->descricao = $rs['descricao'];

          $contador += 1;
      }
      return $galeria;
    }else{
      return false;
    }
  }


  public function listarGaleria(){
    require_once("imagem_class.php");
    $sql = "select * from tbl_galeria_img where id_galeria=".$this->id_galeria;
    if($select = mysql_query($sql)){
      $imagens[] = new Imagem();
      $contador = 0;
      while($rs=mysql_fetch_array($select)){
        $imagem = new Imagem();
        $imagem->id_imagem = $rs['id_img'];
        $imagem->listarImagem();
        $imagem->url;
        $imagens[$contador] = $imagem;
        $contador ++;
      }
      return $imagens;
    }else {
      echo("Erro ao listar Galeria");
    }
  }









}










 ?>
