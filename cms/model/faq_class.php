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

  public function InserirFaq(){

    $sql = "insert into tbl_faq(pergunta,resposta)";
    $sql = $sql."values('".$this->pergunta."','".$this->resposta."')";

    if(mysql_query($sql)){
      return true;
    }else{
      return false;
    }


  }

  public function MostrarFaq(){

    $sql = "select * from tbl_faq";

    if(mysql_query($sql)){
      $select = mysql_query($sql);

      $contador = 0;
      $lista = "";

      while($rs = mysql_fetch_array($select)){

        $lista[] = new Faq();

        $lista[$contador]->id_faq = $rs['id_faq'];
        $lista[$contador]->pergunta = $rs['pergunta'];
        $lista[$contador]->resposta = $rs['resposta'];

        $contador += 1;
      }

      if($lista == 0){
?>
      <p class="nenhuma_cadastrada">Nenhuma Pergunta Cadastrada</p>
<?php
      }else{
        return $lista;
      }

    }else{
      return false;
    }


  }


  public function ExcluirFaq(){

    $sql = "delete from tbl_faq where id_faq=".$this->id_faq;

    if(mysql_query($sql)){
      return true;
    }else{
      return false;
    }

  }

  public function MostrarFaqID(){

    $sql = "select * from tbl_faq where id_faq=".$this->id_faq;

    $select = mysql_query($sql);

    if($rs = mysql_fetch_array($select)){

      $lista = new Faq();

      $lista->id_faq = $rs['id_faq'];
      $lista->pergunta = $rs['pergunta'];
      $lista->resposta = $rs['resposta'];


      return $lista;
    }else{
      return false;
    }



  }

  public function AlterarFaq(){

    $sql = "update tbl_faq set pergunta='".$this->pergunta."', resposta = '".$this->resposta."' where id_faq=".$this->id_faq;

    if(mysql_query($sql)){
      return true;
    }else{
      return false;
    }


  }








}




 ?>
