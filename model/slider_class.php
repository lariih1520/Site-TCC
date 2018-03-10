<?php
/*
  Objetivo: Manipulação dos sliders
  Data de criação: 17/10/2017
  Última alteração: -
  Feito por: Paulo Hnerique

  Arquivos Relacionados:
    router.php
    model/slider_controller.php
*/
  require_once("imagem_class.php");
  class Slider{
    public $id_slider;
    public $imagens;


    function __construct(){
      require_once('model/db_class.php');
      $conexao_db = new Mysql_db();
      $conexao_db->conectar();
      $this->imagens = array();
    }

    public function listarSlider(){
      $sql="select * from vw_slider_img where id_slider=".$this->id_slider;
      if($select = mysql_query($sql)){
        while($rs = mysql_fetch_array($select)){
          $imagem = new Imagem();
          $imagem->id_imagem = $rs['id_imagem'];
          $imagem->url = $rs['url'];
          $this->imagens[] = $imagem;
        }
      }
    }

    public function novoSlider(){
      $sql = "insert into tbl_imagem(url) values('novo')";
      if(mysql_query($sql)){
        $id_img = mysql_insert_id();
        $sql = "insert into tbl_slider_img(id_slider, id_img) values(".$this->id_slider.", ".$id_img.")";
        if(mysql_query($sql)){
          header("location:adm_galeria.php");
        }else{
          echo("<script> window.alert('Erro na inserção do comando'); </script>");
        }
      }
    }

    public function excluirSlider(){
      $sql = "delete from tbl_slider_img where id_img=".$_GET['idimg'];
      if(mysql_query($sql)){
        header("location:adm_galeria.php");
      }else{
        echo("<script> window.alert('Erro na inserção do comando'); </script>");
      }
    }

    public function updateSlider(){
      require_once("model/imagem_class.php");
      $sql = "select * from vw_slider_img where id_slider = ".$this->id_slider." order by id_imagem desc";
      if($select = mysql_query($sql)){
        $rs=mysql_fetch_array($select);
        $max_id=$rs['id_imagem'];
        $contador = 1;
        while($contador<=$max_id){
          if(isset($_FILES['sliderfoto_'.$contador])){
            if(empty($_FILES['sliderfoto_'.$contador]['name'])){
              $contador ++;
            }else{
              $imagem = new Imagem();
              $imagem->id_imagem = $contador;
              $imagem->GetUrl($_FILES['sliderfoto_'.$contador]);
              if($imagem->updateImagem()){
                $contador ++;
              }else{
                echo("<script> window.alert('Erro no update da imagem no banco'); </script>");
              }
            }
          }else{
            $contador ++;
          }
        }
        header("location:adm_galeria.php");
      }
    }
  }
 ?>
