<?php
/*
  Objetivo: Orientar a manipulação de imagem
  Data: 11/09/2017
  Autor: Paulo Henrique
  Ultima Modificação: 13/10/2017
  Obervações: ...
  Arquivos Relacionados: cms/views/redes_sociais_view.php
                         cms/views/sobre_view.php
*/

  class Imagem{
    public $id_imagem;
    public $url;

    public function __construct(){

      require_once('model/db_class.php');

      $conexao_db = new Mysql_db();
      $conexao_db->conectar();

    }

    public function GetUrl($nome_arquivo){
      $error = array();
      // Verifica se o arquivo é uma imagem
      if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $nome_arquivo["type"])){
         $error[1] = "Isso não é uma imagem.";
      }

      // Se não houver nenhum erro
      if (count($error) == 0) {

        // Pega extensão da imagem
        preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $nome_arquivo["name"], $ext);

        // Gera um nome único para a imagem
        $nome_imagem = md5(uniqid(time())) . "." . $ext[1];

        // Caminho de onde ficará a imagem
        $this->url = "../fotos/" . $nome_imagem;

        // Faz o upload da imagem para seu respectivo caminho
        move_uploaded_file($nome_arquivo["tmp_name"], $this->url);
      }else{
        echo("<script> window.alert('Erro no upload de imagem:'); </script>");
      }
    }

    public function novaImagem(){

      $sql="insert into tbl_imagem(url) values('".$this->url."')";
      if(mysql_query($sql)){
        $sql="select id_imagem from tbl_imagem where url='".$this->url."'";
        if($select=mysql_query($sql)){
          $rs=mysql_fetch_array($select);
          $this->id_imagem=$rs['id_imagem'];
        }else{
          return false;
        }
      }else{
        return false;
      }

    }
    public function listarImagem(){
      $sql = "select * from tbl_imagem where id_imagem=".$this->id_imagem;
      if($select = mysql_query($sql)){
        $rs = mysql_fetch_array($select);
        $this->url = $rs['url'];
      }else{
        echo("Erro ao listar Imagem");
        return false;
      }
    }
    public function updateImagem(){
      $sql = "update tbl_imagem set url='".$this->url."' where id_imagem =".$this->id_imagem;
      #echo($sql);

      if(mysql_query($sql)){
        return true;
      }else{
        return false;
      }
    }
}
 ?>
