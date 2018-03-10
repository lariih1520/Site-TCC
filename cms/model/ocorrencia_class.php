<?php


/**
 *
 */
class Ocorrencia
{
  public $id_ocorrencia;
  public $ocorrencia;


  function __construct(){
    require_once('model/db_class.php');

    $conexao_db = new Mysql_db();
    $conexao_db->conectar();
  }


  public function CadastrarOcorrencia(){

    $sql = "insert into tbl_ocorrencia(ocorrencia)";
    $sql = $sql."values('".$this->ocorrencia."')";

    if(mysql_query($sql)){
      return true;
    }else{
      return false;
    }


  }


  public function MostarOcorrencias(){

      $sql = "select * from tbl_ocorrencia";

      if(mysql_query($sql)){

          $select = mysql_query($sql);

          $contador = 0;
          $lista = "";

          while($rs = mysql_fetch_array($select)){

              $lista[] = new Ocorrencia();

              $lista[$contador]->id_ocorrencia = $rs['id_ocorrencia'];
              $lista[$contador]->ocorrencia = $rs['ocorrencia'];

              $contador += 1;

          }

          if($lista == 0){
?>          <p class="nenhuma">Nenhuma ocorrência cadastrada</p>
<?php
          }else{
            return $lista;

          }
      }else{
          return false;
      }

  }


  public function ExcluirOcorrencia(){

    $sql = "delete from tbl_ocorrencia where id_ocorrencia=".$this->id_ocorrencia;

    echo($sql);

    if(mysql_query($sql)){
      return true;
    }else{
      return false;
    }

  }



  public function ListarOcorrenciaID(){

    $sql = "select * from tbl_ocorrencia where id_ocorrencia=".$this->id_ocorrencia;

    $select = mysql_query($sql);

    if($rs = mysql_fetch_array($select)){

      $lista = new Ocorrencia();

      $lista->id_ocorrencia = $rs['id_ocorrencia'];
      $lista->ocorrencia = $rs['ocorrencia'];


      return $lista;
    }else{
      return false;
    }



  }

  public function AlterarOcorrencia(){

    $sql = "update tbl_ocorrencia set ocorrencia='".$this->ocorrencia."' where id_ocorrencia=".$this->id_ocorrencia;

    echo($sql);
    if(mysql_query($sql)){
      return true;
    }else{
      return false;
    }

  }
}
 ?>
