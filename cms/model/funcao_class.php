<?php
  /**
   *
   */
  class Funcao{
    public $id;
    public $nome;
    public $setor;

    function __construct(){
      require_once('model/db_class.php');
      $conexao = new Mysql_db();
      $conexao->conectar();
    }

    public function selectFuncoes(){
      $sql="select f.id_funcao, f.nome, s.nome as setor from tbl_funcao as f
      inner join tbl_setor as s on f.id_setor=s.id_setor";
      if($select = mysql_query($sql)){
        $lst_funcoes;
        $contador = 0;
        while ($rs=mysql_fetch_array($select)){
          $funcao = new Funcao();
          $funcao->id=$rs['id_funcao'];
          $funcao->nome=$rs['nome'];
          $funcao->setor=$rs['setor'];
          $lst_funcoes[$contador] = $funcao;
          $contador++;
        }
        return $lst_funcoes;
      }else{
        return false;
      }
    }

    public function insertFuncao(){
      $sql = "insert into tbl_funcao(nome, id_setor) values('".$this->nome."', ".$this->setor.")";
      if(mysql_query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function selectId(){
      $sql = "select * from tbl_funcao where id_funcao=".$this->id;
      if($select = mysql_query($sql)){
        $rs=mysql_fetch_array($select);
        $this->nome=$rs['nome'];
        $this->setor=$rs['id_setor'];
      }else{
        return false;
      }
    }

    public function editarFuncao(){
      $sql="update tbl_funcao set nome='".$this->nome."', id_setor=".$this->setor." where id_funcao=".$this->id;
      if(mysql_query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function excluirFuncao(){
      $sql = "delete from tbl_funcao where id_funcao=".$this->id;
      if(mysql_query($sql)){
        return true;
      }else{
        return false;
      }
    }
  }

 ?>
