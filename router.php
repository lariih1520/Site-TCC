<?php

  $controller = $_GET['controller'];
  $modo = $_GET['modo'];


  switch ($controller) {
    case 'logar':
		require_once('controller/autentica_controller.php');
		$autentica_controller = new ControllerAutentica();
		$autentica_controller->Login();
	break;

    default:
      # code...
      break;
  }


?>
