<?php
/*
  Objetivo: Crud da história em sobre
  Data: 09/10/2017
  Autor: Paulo Henrique
  Ultima Modificação: 11/10/2017
  Obervações: Pronto
  Arquivos Relacionados: router.php
                         views/adm_sobre_view.php
                        controller/hisoria_class.php
  */

  class ControllerHistoria{
    //ADICIONAR HISTÓRIA
    public function NovaHistoria(){
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
          $ano = $_POST['txtAno'];
          $descricao = $_POST['txtDesc'];

          $hist_controller = new Historia();
          $hist_controller->ano = $ano;
          $hist_controller->descricao = $descricao;

          $hist_controller->NovaHistoria();
      }
    }

    //LISTAR TODOS
    public function ListarHistorias(){
      require_once("model/historia_class.php");
      $historia = new Historia();
      return $historia->ListarHistorias();
    }

    //Listar por id
    public function ListarHistoriaId(){
      require_once("model/historia_class.php");
      $hist_controller = new Historia();
      $hist_controller->id_historia = $_GET['id'];
      $hist_controller->ListarHistoriaId();
      require_once("adm_sobre.php");
    }

    //Excluir
    public function Excluir(){
      $id = $_GET['id'];
      $hist_controller = new Historia();
      $hist_controller->id_historia = $id;
      $hist_controller->Excluir();
    }

    //Editar
    public function Editar(){
      $id = $_GET['id'];
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $ano = $_POST['txtAno'];
        $descricao = $_POST['txtDesc'];

        $hist_controller = new Historia();
        $hist_controller->id_historia = $id;
        $hist_controller->ano = $ano;
        $hist_controller->descricao = $descricao;

        $hist_controller->Editar();
      }
    }
  }
 ?>
