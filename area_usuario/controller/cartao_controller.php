<?php



/**
 *
 */
class ControllerCartao{


  public function InserirCartao(){

    require_once('model/cartao_class.php');

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

      $nome = $_POST['txtTitular'];
      $codigo = $_POST['txtCodigo'];
      $numero = $_POST['txtNumero'];
      $data = $_POST['txtData'];

      $controller_cartao = new Cartao();

      $controller_cartao->nome = $nome;
      $controller_cartao->numero = $numero;
      $controller_cartao->vencimento = $data;
      $controller_cartao->codigo = $codigo;

      if($controller_cartao->InserirCartao()){
        header('location:cartao.php?sucesso=1');
      }else{
        header('location:cartao.php?sucesso=0');

      }

    }


  }


  public function ListarCartaoID(){

    $controller_cartao = new Cartao();
    $controller_cartao->id_cartao = $_GET['id'];

    $cartao = new Cartao();
    $cartao = $controller_cartao->ListarCartaoID();

    require_once('cartao.php');

  }


  public function ListarCartao(){

    require_once("model/cartao_class.php");
    $cartao = new Cartao();

    return $cartao->ListarCartao();



  }


  public function ExcluirCartao(){

    require_once('model/cartao_class.php');
    $controller_cartao = new Cartao();
    $controller_cartao->id_cartao = $_GET['id'];

    if($controller_cartao->ExcluirCartao()){
      header('location:cartao.php?sucessoExcluir=1');
    }else{
      header('location:cartao.php?sucessoExcluir=0');
    }
  }

  public function AlterarCartao(){

    require_once('model/cartao_class.php');
    $controller_cartao = new Cartao();
    $id = $_GET['id'];

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $nome = $_POST['txtTitular'];
        $numero = $_POST['txtNumero'];
        $codigo = $_POST['txtCodigo'];
        $data = $_POST['txtData'];


        $cartao_controller = new Cartao();
        $cartao_controller->id_cartao = $id;
        $cartao_controller->nome = $nome;
        $cartao_controller->numero = $numero;
        $cartao_controller->vencimento = $data;
        $cartao_controller->codigo = $codigo;

        if($cartao_controller->AlterarCartao()){
          header('location:cartao.php?erroAlterar=0');
        }else{
          header('location:cartao.php?erroAlterar=1');
        }
    }



  }



}










 ?>
