<?php

$controller = $_GET['controller'];
$modo = $_GET['modo'];

  switch ($controller) {
    case 'notaFiscal':
      require_once ('controller/nota_fiscal_controller.php');
      require_once ('model/nota_fiscal_class.php');
      $controller_nota_fiscal = new ControllerNotaFiscal();

      switch ($modo) {
        case 'inserir':
          $controller_nota_fiscal->InserirNotaFiscal();
          break;

        default:
          # code...
          break;
      }
      break;

    default:
      # code...
      break;


    case 'cartao':
      require_once ('controller/cartao_controller.php');
      require_once ('model/cartao_class.php');

      $controller_cartao = new ControllerCartao();

      switch ($modo) {
        case 'inserir':
            $controller_cartao->InserirCartao();
          break;

        case 'listarID':
            $controller_cartao->ListarCartaoID();
          break;

        case 'excluirCartao':
            $controller_cartao->ExcluirCartao();
          break;

        case 'editarCartao':
            $controller_cartao->AlterarCartao();
          break;

        default:
          # code...
          break;
      }

      break;
  }










 ?>
