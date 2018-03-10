<?php
/*
  Objetivo: Crud Missão visão valores e fundadores
  Data: 11/10/2017
  Autor: Paulo Henrique
  Ultima Modificação: 11/10/2017
  Obervações: ...
  Arquivos Relacionados: router.php
                         views/adm_sobre_view.php
                         model/institucional_class.php
  */

  class ControllerInstitucional{
    //BUSCAR
    public function Buscar(){
      require_once('model/institucional_class.php');
      $inst_controller = new Institucional();
      $inst_controller->titulo = $_GET['titulo'];
      $inst_controller->Buscar();
      require_once("adm_sobre.php");
    }

    public function Editar(){
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $inst_controller = new Institucional();
        $inst_controller->titulo = $_POST['txtTitulo'];
        $inst_controller->descricao = $_POST['txtDesc'];
        $inst_controller->Editar();
      }
    }
  }
 ?>
