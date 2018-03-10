<?php


/**
 *
 */
class ControllerAvaliacao{


  public function Avaliar(){

    require_once('model/avaliacao_class.php');
    if(isset($_SESSION['id'])){
      if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $id = $_SESSION['id'];
        $qtd = $_POST['estrela'];

        $controller_avaliacao = new Avaliacao();

        $controller_avaliacao->avaliacao = $qtd;
        $controller_avaliacao->id_cliente = $id;


        if ($controller_avaliacao->Avaliar()){
          header('location:cardapio.php?sucesso=1');
        }else{
          header('location:cardapio.php?sucesso=0');
        }
      }


    }else{

      header("location:".$_GET['tela'].".php?erro=login");

    }
  }

}


 ?>
