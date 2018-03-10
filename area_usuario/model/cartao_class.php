<?php

/**
 *
 */
class Cartao{
  public $id;
  public $numero;
  public $nome;
  public $codigo;
  public $data;
  public $cliente;

  public function __construct(){
    require_once('model/db_class.php');
    $conexao = new Mysql_db();
    $conexao->conectar();

  }

  public function InserirCartao(){

    $sql ="insert into tbl_cartao(nome, numero, codigo, vencimento, id_cliente)";
    $sql = $sql."values('".$this->nome."','".$this->numero."','".$this->codigo."','".$this->vencimento."', 1)";

    if(mysql_query($sql)){
      return true;
    }else{
      return false;
    }


  }

  public function ListarCartaoID(){

      $sql = "select * from tbl_cartao where id_cartao=".$this->id_cartao;

      $select = mysql_query($sql);

      if($rs = mysql_fetch_array($select)){

        $lista = new Cartao();

        $lista->id_cartao = $rs['id_cartao'];
        $lista->nome = $rs['nome'];
        $lista->vencimento = $rs['vencimento'];
        $lista->numero = $rs['numero'];
        $lista->codigo = $rs['codigo'];


        return $lista;
      }else{
        return false;
      }



  }

  public function ListarCartao(){

    $sql = "select * from tbl_cartao";

    if(mysql_query($sql)){
      $select = mysql_query($sql);

      $contador = 0;
      $cartao = "";

      while($rs = mysql_fetch_array($select)){

        $cartao[] = new Cartao();

        $cartao[$contador]->id_cartao = $rs['id_cartao'];
        $cartao[$contador]->nome = $rs['nome'];
        $cartao[$contador]->numero = $rs['numero'];

        $contador += 1;

      }

      if($cartao == 0){
  ?>
      <p class="nenhuma_cadastrada">Nenhum cartão cadastrado</p>
  <?php
      }else{
        return $cartao;
      }
    }else{
      return false;
    }



  }

  public function ExcluirCartao(){

    $sql = "delete from tbl_cartao where id_cartao =".$this->id_cartao;

    if(mysql_query($sql)){
      return true;
    }else{
      return false;
    }
  }

  public function AlterarCartao(){

    $sql = "update tbl_cartao set nome='".$this->nome."', vencimento='".$this->vencimento."', codigo = '".$this->codigo."', numero='".$this->numero."' where id_cartao=".$this->id_cartao;

    if(mysql_query($sql)){
      return true;
    }else{
      return false;
    }



  }


}








 ?>
