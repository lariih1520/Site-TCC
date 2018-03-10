<?php
  /*
    Objetivo: Criação do flae conosco
    Data: 26/09/2017
    Autor: Marcelo Bruno
    Ultima Modificação: 28/09/2017
    Obervações: Nada ainda
    Arquivos Relacionados: router.php e
                           views/contato.php
                          controller/contato_controller.php
    */


    class ControllerContato{

      public function NovoContato(){

        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $nome = $_POST['txtNome'];
            $email = $_POST['txtEmail'];
            $telefone = $_POST['txtTelefone'];
            $celular = $_POST['txtCelular'];
            $ocorrencia = $_POST['ocorrencia'];
            $descritivo = $_POST['txtMensagem'];
            $unidade = $_POST['filial'];

            $contato_controller = new Contato();

            $contato_controller->nome = $nome;
            $contato_controller->email = $email;
            $contato_controller->telefone = $telefone;
            $contato_controller->celular = $celular;
            $contato_controller->ocorrencia = $ocorrencia;
            $contato_controller->descritivo = $descritivo;
            $contato_controller->unidade = $unidade;

            $contato_controller->NovoContato($contato_controller);

        }

      }

      public function ListarContatos(){
          require_once("model/contato_class.php");
          $contato = new Contato();
          return $contato->ListarContato();

      }


    }

?>
