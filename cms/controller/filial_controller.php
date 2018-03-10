<?php

  /*
  Objetivo: Criação do Fale conosco e crud de filiais
  Data: 26/09/2017
  Autor: Marcelo Bruno
  Ultima Modificação: Hoje
  Obervações: Nada ainda
  Arquivos Relacionados: router.php e
                         views/contato.php
                        models/filial_class.php
  */


    class ControllerFilial{

        public function MostrarFiliais(){
            require_once('model/filial_class.php');
            require_once('model/imagem_class.php');
            $listaFilial_controller = new Filial();

            return $listaFilial_controller->ListarFiliais();
        }

        public function CadastrarFilial(){
          if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $nome = $_POST['txtNomeFilial'];
            $telefone = $_POST['txtTelefoneFilial'];
            $cep = $_POST['txtCEPFilial'];
            $numero = $_POST['txtNumeroFilial'];
            $tipo = $_POST['tipo_filial'];
            $foto = $_FILES['filefotos'];
            $cnpj = $_POST['txtcnpj'];



            $controller_filial = new Filial();

            $controller_filial->nome = $nome;
            $controller_filial->cep = $cep;
            $controller_filial->numero = $numero;
            $controller_filial->telefone = $telefone;
            $controller_filial->tipo_restaurante = $tipo;
            $controller_filial->cnpj = $cnpj;
            $controller_filial->foto = $foto;

            if (!empty($foto["name"])) {


              $error = array();

              // Verifica se o arquivo é uma imagem
              if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $foto["type"])){
                 $error[1] = "Isso não é uma imagem.";
              }

              // Se não houver nenhum erro
              if (count($error) == 0) {

                // Pega extensão da imagem
                preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto["name"], $ext);

                // Gera um nome único para a imagem
                $nome_imagem = md5(uniqid(time())) . "." . $ext[1];

                // Caminho de onde ficará a imagem
                $caminho_imagem = "../fotos/" . $nome_imagem;

                // Faz o upload da imagem para seu respectivo caminho
                move_uploaded_file($foto["tmp_name"], $caminho_imagem);

                $controller_filial->foto = $nome_imagem;

                $resultado = $controller_filial->CadastrarFial($controller_filial);

                // Se os dados forem inseridos com sucesso
                if($resultado){
                  header('location:adm_filiais.php?sucesso=1');
                }else{
                  header('location:adm_filiais.php?sucesso=0');
                }
              }
            }
          }
        }

        public function ExcluirFilial(){
          require_once('model/filial_class.php');
          $controller_filial = new Filial();
          $controller_filial->id_restaurante = $_GET['id'];

          if($controller_filial->ExcluirFilial($controller_filial)){
            header('location:adm_filiais.php?sucessoExcluir=1');
          }else{
            header('location:adm_filiais.php?sucessoExcluir=0');
          }


        }

        public function BuscarFilial(){

          $filial_controller = new Filial();

          $filial_controller->id_restaurante = $_GET['id'];

          //$filial = new Filial();
          $filial = $filial_controller->BuscarFilial($filial_controller);

          require_once('adm_filiais.php');
        }

        public function AlterarFilial(){
          $id = $_GET['id'];
          if($_SERVER['REQUEST_METHOD'] == 'POST'){

              $nome = $_POST['txtNomeFilial'];
              $telefone = $_POST['txtTelefoneFilial'];
              $cep = $_POST['txtCEPFilial'];
              $numero = $_POST['txtNumeroFilial'];
              $tipo = $_POST['tipo_filial'];
              $cnpj = $_POST['txtcnpj'];
              $foto = $_FILES['filefotos'];


              $filial_controller = new Filial();

              $filial_controller->nome = $nome;
              $filial_controller->telefone = $telefone;
              $filial_controller->cep = $cep;
              $filial_controller->numero = $numero;
              $filial_controller->tipo_restaurante = $tipo;
              $filial_controller->id_restaurante = $id;
              $filial_controller->cnpj = $cnpj;


              if (!empty($foto["name"])) {

                $filial_controller->foto = $foto;

                $error = array();

                // Verifica se o arquivo é uma imagem
                if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $foto["type"])){
                   $error[1] = "Isso não é uma imagem.";
                }

                // Se não houver nenhum erro
                if (count($error) == 0) {

                  // Pega extensão da imagem
                  preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto["name"], $ext);

                  // Gera um nome único para a imagem
                  $nome_imagem = md5(uniqid(time())) . "." . $ext[1];

                  // Caminho de onde ficará a imagem
                  $caminho_imagem = "../fotos/" . $nome_imagem;

                  // Faz o upload da imagem para seu respectivo caminho
                  move_uploaded_file($foto["tmp_name"], $caminho_imagem);

                  $filial_controller->foto = $nome_imagem;

                  $resultado = $filial_controller->AlterarFilial($filial_controller);

                  // Se os dados forem inseridos com sucesso
                  if($resultado){
                    header('location:adm_filiais.php?erroAlterar=0');
                  }else{
                    header('location:adm_filiais.php?erroAlterar=1');
                  }
                }
              }else{

                $resultado = $filial_controller->AlterarSemFoto($filial_controller);

                // Se os dados forem inseridos com sucesso
                if($resultado){
                  header('location:adm_filiais.php?erroAlterar=0');
                }else{
                  header('location:adm_filiais.php?erroAlterar=1');
                }


              }


          }
        }


    }

?>
