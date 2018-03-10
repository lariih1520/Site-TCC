<?php


/**
 *
 */
class Brinde{

  public $id_brinde;
  public $nome;
  public $descricao;
  public $img;
  public $min;
  public $max;
  public $id_valor_brinde;

  function __construct(){
    require_once('model/db_class.php');

    $conexao = new Mysql_db();
    $conexao->conectar();

  }

public function InserirBrinde(){

  $sql = "insert into tbl_brinde(descricao,img,nome_brinde,id_valor_brinde)";
  $sql = $sql."values('".$this->descricao."','".$this->img."','".$this->nome."','".$this->id_valor_brinde."')";

  if(mysql_query($sql) or die (mysql_error())){
    return true;
  }else{
    return false;
  }


}


public function ListarValor(){
  $sql = "select * from tbl_valores_brindes";
  if($select=mysql_query($sql)){
    $contador = 0;
    $lista;
    while($rs=mysql_fetch_array($select)){
      $brinde= new Brinde();
      $brinde->id_valor_brinde = $rs['id_valor_brinde'];
      $brinde->min = $rs['valor_min'];
      $brinde->max = $rs['valor_max'];
      $lista[$contador] = $brinde;
      $contador ++;
    }
    return $lista;

  }else{
    return false;
  }


}


public function ListarBrinde(){
  $sql = "select * from tbl_brinde";

  if(mysql_query($sql)){
    $select = mysql_query($sql);

    $contador = 0;
    $brinde = "";

    while($rs = mysql_fetch_array($select)){

      $brinde[] = new Brinde();

      $brinde[$contador]->id_brinde = $rs['id_brinde'];
      $brinde[$contador]->nome = $rs['nome_brinde'];
      $brinde[$contador]->img = $rs['img'];

      $contador += 1;

    }

    if($brinde == 0){
?>
    <p class="nenhuma_cadastrada">Nenhum brinde Cadastrada</p>
<?php
    }else{
      return $brinde;
    }
  }else{
    return false;
  }

}

public function ListarBrindeID(){

  $sql = "select * from tbl_brinde where id_brinde=".$this->id_brinde;

  $select = mysql_query($sql);

  if($rs = mysql_fetch_array($select)){

    $brinde = new Brinde();

    $brinde->id_brinde = $rs['id_brinde'];
    $brinde->nome = $rs['nome_brinde'];
    $brinde->descricao = $rs['descricao'];
    $brinde->img = $rs['img'];
    $brinde->id_valor_brinde = $rs['id_valor_brinde'];

    return $brinde;
  }else{
    return false;
  }




}


public function ExcluirBrinde(){
  $sql = "delete from tbl_brinde where id_brinde =".$this->id_brinde;
  echo($sql);
  if(mysql_query($sql)){
    //return true;
  }else{
    //return false;
  }

}

public function AlterarBrinde(){
  $sql = "update tbl_brinde set nome_brinde='".$this->nome."', descricao='".$this->descricao."', img = '".$this->imagem."', id_valor_brinde='".$this->id_valor_brinde."' where id_brinde=".$this->id_brinde;

  if(mysql_query($sql)){
    return true;
  }else{
    return false;
  }
}

public function AlterarBrindeSemFoto(){
  $sql = "update tbl_brinde set nome_brinde='".$this->nome."', descricao='".$this->descricao."', id_valor_brinde='".$this->id_valor_brinde."' where id_brinde=".$this->id_brinde;

  if(mysql_query($sql)){
    return true;
  }else{
    return false;
  }



}













}














 ?>
