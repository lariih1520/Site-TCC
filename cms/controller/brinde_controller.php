<?php


/**
 *
 */
class ControllerBrinde{


  public function InserirBrinde(){
    require_once('model/brinde_class.php');
    require_once('model/imagem_class.php');

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

      $foto = $_FILES['filefotos'];
      $nome = $_POST['txtNome'];
      $descricao = $_POST['txtDescricao'];
      $valor = $_POST['slcValor'];

      //Upload de imagem;
      $imagem = new Imagem();
      $imagem->GetUrl($foto);

      $controller_brinde = new Brinde();

      $controller_brinde->id_valor_brinde = $valor;
      $controller_brinde->nome = $nome;
      $controller_brinde->img = $imagem->url;
      $controller_brinde->descricao = $descricao;

      if($controller_brinde->InserirBrinde()){

        header('location:adm_brinde.php?sucesso=1');
      }else{
        header('location:adm_brinde.php?sucesso=0');

      }

    }


  }

  public function ListarValor(){
    require_once("model/brinde_class.php");
    $brinde = new Brinde();

    return $brinde->ListarValor();
  }


  public function ListarBrinde(){
    require_once("model/brinde_class.php");
    $brinde = new Brinde();

    return $brinde->ListarBrinde();
  }

  public function ListarBrindeID(){

    $controller_brinde = new Brinde();
    $controller_brinde->id_brinde = $_GET['id'];

    $brinde = new Brinde();
    $brinde = $controller_brinde->ListarBrindeID($controller_brinde);

    require_once('adm_brinde.php');
  }

  public function ExcluirBrinde(){

    require_once('model/brinde_class.php');
    $controller_brinde = new Brinde();
    $controller_brinde->id_brinde = $_GET['id'];

    if($controller_brinde->ExcluirBrinde()){
      header('location:adm_brinde.php?sucessoExcluir=1');
    }else{
      header('location:adm_brinde.php?sucessoExcluir=0');
    }
  }

  public function AlterarBrinde(){
    require_once('model/imagem_class.php');
    require_once('model/brinde_class.php');
    $controller_brinde = new Brinde();
    $id = $_GET['id'];

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $foto = $_FILES['filefotos'];
        $nome = $_POST['txtNome'];
        $descricao = $_POST['txtDescricao'];
        $valor = $_POST['slcValor'];

        $brinde = new Brinde();
        $brinde->id_brinde = $id;
        $brinde->nome = $nome;
        $brinde->img = $foto;
        $brinde->descricao = $descricao;
        $brinde->id_valor_brinde = $valor;

        if (!empty($foto['name'])){

          $imagem = new Imagem();
          $imagem->GetUrl($foto);
          $brinde->imagem = $imagem->url;
          echo($brinde->img);
          $resultado = $brinde->AlterarBrinde();



          // Se os dados forem inseridos com sucesso
          if ($resultado){
            ?>
              <script> window.alert("Brinde alterado."); </script>
            <?php
            header('location:adm_brinde.php');
          }else {
            ?>
              <script> window.alert("Erro ao cadastrar um brinde, verifique as informações!"); </script>
            <?php
            header('location:adm_brinde.php');
          }
        }else{
          $resultado = $brinde->AlterarBrindeSemFoto($brinde);

          if ($resultado){
            ?>
              <script> window.alert("Brinde alterado."); </script>
            <?php
            header('location:adm_brinde.php');
          }else {
            ?>
              <script> window.alert("Erro ao cadastrar um brinde, verifique as informações!"); </script>
            <?php
          }
        }
    }




  }

}

















 ?>
