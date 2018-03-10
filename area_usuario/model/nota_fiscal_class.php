<?php

/**
 *
 */
class NotaFiscal{

  public $id;
  public $numero;
  public $pedido;
  public $brinde;

  function __construct(){
    require_once('model/db_class.php');
    $conexao = new Mysql_db();
    $conexao->conectar();
  }

  public function getNota(){
    $sql = "select * from tbl_nota_fiscal where numero=".$this->numero;
    if($select = mysql_query($sql)) {
      $rs = mysql_fetch_array($select);
      $this->id = $rs['id_nota_fiscal'];
      $this->pedido=$rs['id_pedido'];
      $select = mysql_query("select * from tbl_nota_brinde where id_nota=".$this->id);
      $rs = mysql_fetch_array($select);
      if(mysql_num_rows($rs)>0){
        $this->brinde=$rs['id_brinde'];
      }
      return true;
    }else{
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
      $sql="insert into tbl_nota_brinde(id_nota_fiscal, id_brinde, retirado) values(".$this->id.", ".$rs['id_brinde'].", 0)";
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
