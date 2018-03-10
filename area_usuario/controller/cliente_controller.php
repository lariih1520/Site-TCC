
<?php
  /*
  Objetivo: Criação do cadastro de cliente e login
  Data: 25/09/2017
  Autor: Marcelo Bruno
  Ultima Modificação: Hoje
  Obervações: Nada ainda
  Arquivos Relacionados: router.php e
                         views/login_view.php
                        models/cliente_class.php
  */


  class ControllerCliente{
    public function getCliente(){
      require_Once("model/cliente_class.php");
      $cliente = new Cliente();
      $cliente->id=$_SESSION['id'];
      $cliente->nome=$_SESSION['nome'];
      return $cliente;
    }
    public function NovoCliente(){

        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $nome = $_POST['txtNome'];
            $telefone = $_POST['txtTelefone'];
            $celular = $_POST['txtCelular'];
            $email = $_POST['txtEmail'];
            $cpf = $_POST['txtCpf'];
            $senha = $_POST['txtSenha'];
            $confirmar_senha = $_POST['txtSenha2'];
            $cep = $_POST['txtCep'];
            $numero_residencia = $_POST['txtNumero'];

            $termos = 0;

            if(isset($_POST['concordo'])){
                $termos = 1;
            }else{
                $termos = 0;
            }

            $cliente_controller = new Cliente();

            $cliente_controller->nome = $nome;
            $cliente_controller->telefone = $telefone;
            $cliente_controller->celular = $celular;
            $cliente_controller->email = $email;
            $cliente_controller->cpf = $cpf;
            $cliente_controller->senha = $senha;
            $cliente_controller->cep = $cep;
            $clientes_controler->numero_residencia = $numero_residencia;

            if($senha == $confirmar_senha){

                if($termos == 1){
                    $cliente_controller->NovoCliente($cliente_controller);
                }else{
                     header('location:login.php?erro=termos');
                }

            }else{
                header('location:login.php?erro=senha');
            }

        }else{
            header('location:login.php');
        }
    }

    public function Login(){
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

          if(!$cliente_controller->Login($cliente_controller)){
            if(!$funcionario_controller->Logar($funcionario_controller)){
              header('location:login.php?modo=logar&status=0');
            }else{
              $funcionario = $funcionario_controller->Logar($funcionario_controller);

              $_SESSION['id'] = $funcionario->id_funcionario;
              $_SESSION['nome'] = $funcionario->nome;
              $_SESSION['celular'] = $funcionario->celular;
              $_SESSION['email'] = $funcionario->email;
              $_SESSION['id_funcao'] = $funcionario->id_funcao;
              $_SESSION['id_restaurante'] = $funcionario->id_restaurante;
              header('location:cms/index.php');
            }
          }else{
            $cliente = $cliente_controller->Login($cliente_controller);
            $_SESSION['id'] = $cliente_controller->id_cliente;
            $_SESSION['nome'] = $cliente_controller->nome;
            header('location:index.php');
          }


      }
    }

  }


?>
