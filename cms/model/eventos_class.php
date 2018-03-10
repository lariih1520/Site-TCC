<?php
/*
    Feito por:Larissa
    Data:18/10/2017

*/

class Evento{

    public $id;
    public $nome;
    public $sobre;
    public $data;
    public $imagem;
    public $restaurante;

    function __construct(){
        require_once('model/db_class.php');
        $conexao = new Mysql_db();
        $conexao->conectar();
    }

    public function InsertEvento(){
      $sql = "insert into tbl_eventos(nome, sobre, data, id_restaurante) ";
      $sql = $sql."values('".$this->nome."', '".$this->sobre."', '".$this->data."', ".$this->restaurante.")";
      if(mysql_query($sql)){
        $sql = "select id_evento from tbl_eventos where nome='".$this->nome."' and
        sobre='".$this->sobre."' and
        data='".$this->data."' and
        id_restaurante=".$this->restaurante." order by id_evento desc";
        if($select = mysql_query($sql)){
          $rs = mysql_fetch_array($select);
          $this->id=$rs['id_evento'];
        }else{
          echo("<script> alert('Erro: InsertEvento-getid'); </script>");
        }
      }else {
        echo("<script> alert('Erro: InsertEvento'); </script>");
      }
    }

    public function InsertEventoImagem($idImagem){
      $sql="insert into tbl_evento_imagem(id_evento, id_img) values(".$this->id.", ".$idImagem.")";
      if(mysql_query($sql)){
        return true;
      }else {
        echo("<script> alert('Erro: InsertEventoImagem'); </script>");
      }
    }

    public function DeleteEvento(){
      $sql = "delete from tbl_evento_imagem where id_evento=".$this->id;
      if(mysql_query($sql)){
        $sql = "delete from tbl_eventos where id_evento=".$this->id;
        if(mysql_query($sql)){
          return true;
        }else {
          echo("<script> alert('Erro: DeleteEvento'); </script>");
        }
      }else{
        echo("<script> alert('Erro: DeleteEvento'); </script>");
      }
    }

    public function SelectEventos(){
        $sql = "select * from vw_eventos";
        $select = mysql_query($sql);
        $cont = 0;
        $evento;
        while($rs = mysql_fetch_array($select)){
            $evento[$cont] = new Evento();
            $evento[$cont]->id = $rs['id_evento'];
            $evento[$cont]->nome = $rs['nome'];
            $evento[$cont]->sobre = $rs['sobre'];
            $evento[$cont]->data = $rs['data'];
            $evento[$cont]->imagem = $rs['imagem'];
            $evento[$cont]->restaurante = $rs['restaurante'];
            $cont ++;
        }
        return $evento;
    }

    public function SelectId(){
      require_Once('model/imagem_class.php');
      $sql = "select * from tbl_eventos where id_evento=".$this->id;
      if($select=mysql_query($sql)){
        $rs = mysql_fetch_array($select);
        $this->nome=$rs['nome'];
        $this->sobre=$rs['sobre'];
        $this->data=$rs['data'];
        $this->restaurante=$rs['id_restaurante'];
        //imagens
        $sql_img="select * from tbl_evento_imagem where id_evento=".$this->id;
        if($select_img=mysql_query($sql_img)){
          $contador=0;
          while($rs_img = mysql_fetch_array($select_img)){
            $imagem = new Imagem();
            $imagem->id_imagem = $rs_img['id_img'];
            $imagem->listarImagem();
            $this->imagem[$contador]=$imagem;
            $contador ++;
          }
        }
      }else{
        return false;
      }
    }
    public function GetIdImagens(){
      $sql="select id_img from tbl_evento_imagem where id_evento=".$this->id;
      $id_imgs;
      if($select = mysql_query($sql)){
        $contador=0;
        while($rs=mysql_fetch_array($select)){
          $id_imgs[$contador] = $rs['id_img'];
          $contador ++;
        }
        return $id_imgs;
      }
    }
    public function UpdateEvento(){
      $sql = "update tbl_eventos set nome='".$this->nome."', sobre='".$this->sobre."', data='".$this->data."',
      id_restaurante=".$this->restaurante." where id_evento=".$this->id;
      if(mysql_query($sql)){
        header("Location:adm_eventos.php");
      }else{
        echo("<script> alert('Erro: UpdateEvento'); </script>");
      }
    }


}

?>
