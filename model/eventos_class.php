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

    public function SelectEventos(){
      require_Once('model/imagem_class.php');
      $sql = "select * from tbl_eventos where data > now() order by data";
      if($select=mysql_query($sql)){
        $lst_eventos;
        $contador = 0;
        while ($rs = mysql_fetch_array($select)) {
          $evento = new Evento();
          $evento->id=$rs['id_evento'];
          $evento->nome=$rs['nome'];
          $evento->sobre=$rs['sobre'];
          $evento->data=$rs['data'];
          $evento->restaurante=$rs['id_restaurante'];
          //IMAGENS
          $sql_img="select * from tbl_evento_imagem where id_evento=".$evento->id;
          if($select_img=mysql_query($sql_img)){
            $contador_img=0;
            while($rs_img = mysql_fetch_array($select_img)){
              $imagem = new Imagem();
              $imagem->id_imagem = $rs_img['id_img'];
              $imagem->listarImagem();
              $evento->imagem[$contador_img]=$imagem->url;
              $contador_img ++;
            }
          }
          $lst_eventos[$contador] = $evento;
          $contador ++;
        }
        return $lst_eventos;
      }else{
        return false;
      }
    }

    public function selectEventosRestaurante(){
      require_Once('model/imagem_class.php');
      $sql = "select * from tbl_eventos where data > now() and id_restaurante=".$this->restaurante." order by data";
      if($select=mysql_query($sql)){
        $lst_eventos;
        $contador = 0;
        if(mysql_num_rows($select)>0){
          while($rs = mysql_fetch_array($select)){
            $evento = new Evento();
            $evento->id=$rs['id_evento'];
            $evento->nome=$rs['nome'];
            $evento->sobre=$rs['sobre'];
            $evento->data=$rs['data'];
            $evento->restaurante=$rs['id_restaurante'];
            //IMAGENS
            $sql_img="select * from tbl_evento_imagem where id_evento=".$evento->id;
            if($select_img=mysql_query($sql_img)){
              $contador_img=0;
              while($rs_img = mysql_fetch_array($select_img)){
                $imagem = new Imagem();
                $imagem->id_imagem = $rs_img['id_img'];
                $imagem->listarImagem();
                $evento->imagem[$contador_img]=$imagem->url;
                $contador_img ++;
              }
            }
            $lst_eventos[$contador] = $evento;
            $contador ++;
          }
          return $lst_eventos;
        }else {
          return false;
        }
      }else{
        return false;
      }
    }
}

?>
