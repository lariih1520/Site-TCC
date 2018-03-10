<?php
/*
  Objetivo: Crud da história em sobre
  Data: 09/10/2017
  Autor: Paulo Henrique
  Ultima Modificação: 11/10/2017
  Obervações: Pronto
  Arquivos Relacionados: router.php
                         views/adm_sobre_view.php
                        controller/hisoria_controller.php
  */

  class Historia{
    public $id_historia;
    public $ano;
    public $descricao;

    public function __construct(){
      require_once('model/db_class.php');
      $conexao_db = new Mysql_db();
      $conexao_db->conectar();

    }

    //Adicionar
    public function NovaHistoria(){
      $sql =  "insert into tbl_historia (ano, descricao)";
      $sql = $sql."values('".$this->ano."', '".$this->descricao."')";

      if(mysql_query($sql)){
        header('location:adm_sobre.php?sucesso=1');
      }else{
        header('location:adm_sobre.php?sucesso=0');
      }
    }

    //Listar todos
    public function ListarHistorias(){
      $sql = "select * from tbl_historia order by ano desc";
      if(mysql_query($sql)){
        $contador = 0;
        $select = mysql_query($sql);
        while($rs=mysql_fetch_array($select)){
          $historia[] = new Historia();

          $historia[$contador]->id_historia = $rs['id_historia'];
          $historia[$contador]->ano = $rs['ano'];
          $historia[$contador]->descricao = $rs['descricao'];

          $contador +=1 ;
        }
        return $historia;
      }else{
        return false;
      }
    }

    //Listar por ID
    public function ListarHistoriaId(){
      $sql = "select * from tbl_historia where id_historia=".$this->id_historia;
      if($select = mysql_query($sql)){
        $rs = mysql_fetch_array($select);

        $this->id_historia = $rs['id_historia'];
        $this->ano = $rs['ano'];
        $this->descricao = $rs['descricao'];
      }else{
        return false;
      }
    }

    //Excluir
    public function Excluir(){
      $sql = "delete from tbl_historia where id_historia =".$this->id_historia;
      if(mysql_query($sql)){
        header('location:adm_sobre.php?sucesso=1');
      }else{
        header('location:adm_sobre.php?sucesso=0');
      }
    }

    //Editar
    public function Editar(){
      $sql = "update tbl_historia set ano=".$this->ano.", ";
      $sql = $sql."descricao = '".$this->descricao."' ";
      $sql = $sql."where id_historia =".$this->id_historia;

      if(mysql_query($sql)){
        header("location:adm_sobre.php");
      }else{
        return false;
      }
    }

  }
 ?>
