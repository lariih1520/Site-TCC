<?php
/*
  Objetivo: Alterar as fotos do jeito the ribs, na página sobre;
  Data: 13/09/2017
  Autor: Paulo Henrique
  Ultima Modificação: 13/10/2017
  Obervações: ...
  Arquivos Relacionados: cms/controller/jeito_controller.php
                         cms/views/sobre_view.php
*/

class Jeito{
  public $id_img;
  public $url;

  public function __construct(){
    require_once('model/db_class.php');
    $conexao_db = new Mysql_db();
    $conexao_db->conectar();
  }

  public function Editar(){
    $sql = "update tbl_jeito set img_".$this->id_img." = '".$this->url."'";
    if(mysql_query($sql)){
      return true;
    }else{
      return false;
    }
  }
  public function Listar(){
    $sql = "select img_".$this->id_img." from tbl_jeito";
    $select = mysql_query($sql);
    $rs=mysql_fetch_array($select);
    $this->url = $rs['img_'.$this->id_img];
  }
}
 ?>
