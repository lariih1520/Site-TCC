<?php
  class ControllerAutentica{
    public function Login(){
      require_Once("model/cliente_class.php");
      require_Once("model/funcionario_class.php");
      if($_SERVER['REQUEST_METHOD'] == 'POST'){

          $cpf = $_POST['txtCpf'];
          $senha = $_POST['txtSenha'];

          $cliente = new Cliente();
          $funcionario = new Funcionario();

          $cliente_controller = new Cliente();
          $funcionario_controller = new Funcionario();

          $cliente_controller->cpf = $cpf;
          $cliente_controller->senha = $senha;

          $funcionario_controller->id_funcionario = $cpf;
          $funcionario_controller->senha = $senha;

          if($cliente_controller->Login()){
            $_SESSION['id'] = $cliente_controller->id_cliente;
            $_SESSION['nome'] = $cliente_controller->nome;
            header('location:index.php');
          }elseif($funcionario_controller->Logar()){
            $_SESSION['id'] = $funcionario_controller->id_funcionario;
            $_SESSION['nome'] = $funcionario_controller->nome;
            $_SESSION['celular'] = $funcionario_controller->celular;
            $_SESSION['email'] = $funcionario_controller->email;
            $_SESSION['id_funcao'] = $funcionario_controller->id_funcao;
            $_SESSION['id_restaurante'] = $funcionario_controller->id_restaurante;
            header('location:cms/index.php');
          }else{
            header('location:login.php?modo=logar&status=0');
          }
      }
    }


  }
 ?>
