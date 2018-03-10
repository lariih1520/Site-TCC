<?php


/**
 *
 */
class Faq{

  public $id_faq;
  public $pergunta;
  public $resposta;



  function __construct(){
    require_once('model/db_class.php');

    $conexao = new Mysql_db();
    $conexao->conectar();

  }

  public function MostrarFaq(){

    $sql = "select * from tbl_faq";

    if(mysql_query($sql)){
      $select = mysql_query($sql);

      $contador = 0;

      while($rs = mysql_fetch_array($select)){

        $lista[] = new Faq();

        $lista[$contador]->id_faq = $rs['id_faq'];
        $lista[$contador]->pergunta = $rs['pergunta'];
        $lista[$contador]->resposta = $rs['resposta'];

        $contador += 1;
      }
      return $lista;


    }else{
      return false;

    }

}

}





 ?>
