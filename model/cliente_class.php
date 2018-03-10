<?php
  /*
  Objetivo: Criação do cadastro de cliente e login
  Data: 25/09/2017
  Autor: Marcelo Bruno
  Ultima Modificação: Hoje
  Obervações: Nada ainda
  Arquivos Relacionados: router.php e
                         views/login_view.php
                         controller/cliente_controller.php
  */


  class Cliente{

    public $id_cliente;
    public $nome;
    public $telefone;
    public $celular;
    public $email;
    public $cpf;
    public $senha;
    public $cep;
    public $numero_residencia;

    public function __construct(){
      //Inclui arquivo de conexão
      require_once('model/db_class.php');

      //Abre a conexão com o Banco de Dados
      $conexao_db = new Mysql_db();
      $conexao_db->conectar();

    }

    public function NovoCliente($cliente){
      //Query para adicionar um novo clientye
        $sql = "insert into tbl_cliente(nome, telefone, celular, email, cpf, senha, cep, numero)";
        $sql = $sql."values('".$cliente->nome."','".$cliente->telefone."', '".$cliente->celular."','".$cliente->email."','".$cliente->cpf."','".$cliente->senha."','".$cliente->cep."','".$cliente->numero_residencia."')";

        if(mysql_query($sql)){
          header('location:login.php?modo=cadastrar&status=1');
        }else{
          header('location:login.php?modo=cadastrar&status=0');
        }

    }

    public function VerificarCpf($cliente){

      $sql = "select * from tbl_cliente where cpf = ".$cliente->cpf;

      if(mysql_query($sql)){
          return false;
      }else{
        return true;
      }


    }


    public function Login(){
        $sql = "select * from tbl_cliente where cpf = '". $this->cpf ."' and senha = '". $this->senha ."'";
        if($select = mysql_query($sql)){
          $rs = mysql_fetch_array($select);
          if($rs>0){
            $this->id_cliente = $rs['id_cliente'];
            $this->nome = $rs['nome'];
            return true;
          }else{
            return false;
          }
        }else{
          return false;
        }
    }
  }


?>
