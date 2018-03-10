<?php
/*
Objetivo: Criação CRUD de Funcionários
Data: 26/09/2017
Autor: Marcelo Bruno
Ultima Modificação: Hoje
Obervações: Nada ainda
Arquivos Relacionados: router.php e
                       views/contato.php
                      models/filial_class.php
*/

  class ControllerFuncionario
  {

    public function Logar(){
      if($_SERVER['REQUEST_METHOD'] == 'POST'){

          $cpf = $_POST['txtCpf'];
          $senha = $_POST['txtSenha'];

          $funcionario_controller = new Funcionario();

          $funcionario_controller->id_funcionario = $cpf;
          $funcionario_controller->senha = $senha;

          $funcionario_controller->Logar($funcionario_controller);

      }
    }
  }


 ?>
