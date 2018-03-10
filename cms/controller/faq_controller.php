<?php


/**
 *
 */
class ControllerFaq{


  public function InserirFaq(){
      require_once('model/faq_class.php');

      if($_SERVER['REQUEST_METHOD'] == 'POST'){

          $pergunta = $_POST['txtPergunta'];
          $resposta = $_POST['textResposta'];

          $faq_controller = new Faq();

          $faq_controller->pergunta = $pergunta;
          $faq_controller->resposta = $resposta;

          if($faq_controller->InserirFaq()){

            header('location:adm_faq.php?sucesso=1');
          }else{
            header('location:adm_faq.php?sucesso=0');

          }
        }

  }


  public function MostrarFaq(){
    require_once('model/faq_class.php');
    $faq = new Faq();
    return $faq->MostrarFaq();

  }

  public function ExcluirFaq(){

    require_once('model/faq_class.php');
    $controller_faq = new Faq();
    $controller_faq->id_faq = $_GET['id'];

    if($controller_faq->ExcluirFaq()){

      header('location:adm_faq.php?sucessoExcluir=1');
    }else{
      header('location:adm_faq.php?sucessoExcluir=0');
    }

  }


  public function MostrarFaqID(){

    $controlle_faq = new Faq();
    $controlle_faq->id_faq = $_GET['id'];

    $faq = new Faq();
    $faq = $controlle_faq->MostrarFaqID();

    require_once('adm_faq.php');


  }

  public function AlterarFaq(){
    require_once('model/categoria_class.php');
    $controller_faq = new Faq();
    $id = $_GET['id'];

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $pergunta = $_POST['txtPergunta'];
        $resposta = $_POST['textResposta'];

        $faq_controller = new Faq();
        $faq_controller->id_faq = $id;
        $faq_controller->pergunta = $pergunta;
        $faq_controller->resposta = $resposta;

        if($faq_controller->AlterarFaq()){
          header('location:adm_faq.php?erroAlterar=0');
        }else{
          echo($faq_controller->AlterarFaq());
          header('location:adm_faq.php?erroAlterar=1');
        }
    }

    }
}







 ?>
