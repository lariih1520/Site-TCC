<?php


/**
 *
 */
class ControllerOcorrencia
{

  public function CadastrarOcorrencia(){
    require_once('model/ocorrencia_class.php');

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $ocorrencia = $_POST['txtOcorrencia'];

        $ocorrencia_controller = new Ocorrencia();

        $ocorrencia_controller->ocorrencia = $ocorrencia;

        if($ocorrencia_controller->CadastrarOcorrencia()){

          ?>
          <script type="text/javascript">
            window.alert("Ocorrência cadastrada com sucesso!");
          </script>
          <?php
          header('location:adm_ocorrencia.php');
        }else{
          ?>
          <script type="text/javascript">
            window.alert("Ocorrência não foram cadastrada!");
          </script>
          <?php
          header('location:adm_ocorrencia.php');
        }
      }


  }


  public function MostarOcorrencias(){
      require_once('model/ocorrencia_class.php');
      $ocorrencia = new Ocorrencia();
      return $ocorrencia->MostarOcorrencias();

  }


  public function ExcluirOcorrencia(){

    require_once('model/ocorrencia_class.php');
    $controller_ocorrencia = new Ocorrencia();
    $controller_ocorrencia->id_ocorrencia = $_GET['id'];

    if($controller_ocorrencia->ExcluirOcorrencia()){

      header('location:adm_ocorrencia.php?sucessoExcluir=1');
    }else{
      header('location:adm_ocorrencia.php?sucessoExcluir=0');
    }

  }


  public function ListarOcorrenciaID(){

    $controller_ocorrencia = new Ocorrencia();
    $controller_ocorrencia->id_ocorrencia = $_GET['id'];

    $ocorrencia = new Ocorrencia();
    $ocorrencia = $controller_ocorrencia->ListarOcorrenciaID();

    require_once('adm_ocorrencia.php');



  }


  public function AlterarOcorrencia(){
    require_once('model/ocorrencia_class.php');

    $id = $_GET['id'];

      if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $ocorrencia = new Ocorrencia();

        $ocorrencia->id_ocorrencia = $id;
        $ocorrencia->ocorrencia = $_POST['txtOcorrencia'];


        if($ocorrencia->AlterarOcorrencia()){
          header('location:adm_ocorrencia.php?erroAlterar=0');
        }else{
          echo($controller_ocorrencia->AlterarOcorrencia());
          header('location:adm_ocorrencia.php?erroAlterar=1');
        }
    }



      }



  }

 ?>
