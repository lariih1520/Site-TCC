<?php
  /**
   *
   */
  class ControllerFuncoes {
    public function selectFuncoes(){
      require_Once("model/funcao_class.php");
      $funcao_class = new Funcao();
      return $funcao_class->selectFuncoes();
    }

    public function insertFuncao(){
      require_Once("model/funcao_class.php");
      $funcao_class = new Funcao();
      $funcao_class->nome = $_POST['txtFuncao'];
      $funcao_class->setor = $_POST['slcSetor'];
      if($funcao_class->insertFuncao()){
        header("location:adm_funcoes.php");
      }else{
        echo "Erro no insert";
      }
    }

    public function selectId(){
      require_Once("model/funcao_class.php");
      $funcao_class = new Funcao();
      $funcao_class->id = $_GET['id'];
      $funcao_class->selectId();
      require_Once("adm_funcoes.php");
    }

    public function editarFuncao(){
      require_Once("model/funcao_class.php");
      $funcao_class = new Funcao();
      $funcao_class->id = $_GET['id'];
      $funcao_class->nome = $_POST['txtFuncao'];
      $funcao_class->setor = $_POST['slcSetor'];
      if($funcao_class->editarFuncao()){
        header("location:adm_funcoes.php");
      }else{
        echo "Erro no update";
      }
    }

    public function excluirFuncao(){
      require_Once("model/funcao_class.php");
      $funcao_class = new Funcao();
      $funcao_class->id = $_GET['id'];
      if($funcao_class->excluirFuncao()){
        header("location:adm_funcoes.php");
      }else{
        echo "Erro no Delete";
      }
    }
  }

 ?>
