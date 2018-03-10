<?php

/**
 *
 */
 require_Once('model/brinde_class.php');
class NotaFiscal extends Brinde{

  public $id_nota;
  public $numero;
  public $retirado;
  function __construct(){
    require_once('model/db_class.php');
    $conexao = new Mysql_db();
    $conexao->conectar();
  }

  public function getBrinde(){
    $sql = "select * from vw_nota_brinde where nota_fiscal=".$this->numero;
    if($select = mysql_query($sql)) {
      $rs = mysql_fetch_array($select);
      $this->id_nota = $rs['id_nota_fiscal'];
      $this->nome=$rs['nome_brinde'];
      $this->img=$rs['img'];
      $this->descricao=$rs['descricao'];
      $this->retirado=$rs['retirado'];
      return true;
    }else{
      return false;
    }
  }

  public function validacaoBrinde(){
    $sql="select * from tbl_nota_brinde where id_nota_fiscal=".$this->id_nota;
    if($select = mysql_query($sql)){
      $rs=mysql_fetch_array($select);
      if($rs['retirado']==0){
        $sql="update tbl_nota_brinde set retirado = 1 where id_nota_fiscal=".$this->id_nota;
        mysql_query($sql);
        return true;
      }else{
        $sql="update tbl_nota_brinde set retirado = 0 where id_nota_fiscal=".$this->id_nota;
        mysql_query($sql);
        return true;
      }
    }else {
      return false;
    }
  }


  public function gerarBrinde(){
    require_once('model/brinde_class.php');
    $total = $this->getValorTotal();
    $sql = "select b.id_brinde from tbl_brinde as b
            inner join tbl_valores_brindes as vb
            on b.id_valor_brinde = vb.id_valor_brinde
            where vb.valor_min < ".$total." and vb.valor_max > ".$total."
            order by rand() limit 1";
    if ($select = mysql_query($sql)) {
      $rs=mysql_fetch_array($select);
      $sql="update tbl_nota_fiscal set id_brinde=".$rs['id_brinde']." where id_nota_fiscal=".$this->id;
      $brinde = new Brinde();
      $brinde->id_brinde = $rs['id_brinde'];
      return $brinde->ListarBrindeID();
    }else{
      return false;
    }
  }

  public function getValorTotal(){
    $sql="select sum(pr.preco) as precototal from tbl_pedido as p
          inner join tbl_pedido_produto as pp on p.id_pedido = pp.id_pedido
          inner join tbl_produto as pr on pp.id_produto = pr.id_produto
          where p.id_pedido=".$this->pedido;
    if($select=mysql_query($sql)){
      $rs = mysql_fetch_array($select);
      return $rs['precototal'];
    }else {
      return false;
    }
  }
}

 ?>
