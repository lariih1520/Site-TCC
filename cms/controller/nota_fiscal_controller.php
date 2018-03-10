<?php


/**
 *
 */
class ControllerNotaFiscal{
  public function getBrinde(){
    require_once('model/nota_fiscal_class.php');
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $nota_class = new NotaFiscal();
      $nota_class->numero = $_POST['txtNota'];
      if($nota_class->getBrinde()){
        require_once("adm_nota_brinde.php");
      }else{
        header("location: adm_nota_brinde.php?erro=1");
      }
    }
  }
  public function validarBrinde(){
    require_Once('model/nota_fiscal_class.php');
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $nota_class = new NotaFiscal();
      $nota_class->id_nota=$_GET['id'];
      if($nota_class->validacaoBrinde()){
        header("location: adm_nota_brinde.php");
      }
    }
  }

  public function cadastrarNota(){
    require_once('model/nota_fiscal_class.php');
    require_once('model/brinde_class.php');
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $nota_class = new NotaFiscal();
      $brinde_class = new Brinde();
      $nota_class->numero = $_POST['txtNotaFiscal'];
      echo($_POST['txtNotaFiscal']);
      if($nota_class->getNota()){
        if($nota_class->brinde==null){
          $brinde = $nota_class->gerarBrinde();
          require_once("nota_fiscal.php");
        }else{
          $brinde_class->id_brinde = $nota_class->brinde;
          echo($brinde_class->id_brinde);
          $brinde = $brinde_class->ListarBrindeID();
          return $brinde;
          require_once("nota_fiscal.php");
        }
      }else {
        header("location:nota_fiscal.php?erro=1");
      }
    }
  }
}
















 ?>
