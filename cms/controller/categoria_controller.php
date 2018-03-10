<?php

  /**
   *
   */
  class ControllerCategoria{

    public function CadastrarCategoria(){
      require_once("model/imagem_class.php");
      if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $foto = $_FILES['filefotos'];
        $nome = $_POST['txtCategoria'];

        //Upload de imagem;
        $imagem = new Imagem();
        $imagem->GetUrl($foto);

        $controller_categoria = new Categoria();

        $controller_categoria->nome = $nome;
        $controller_categoria->imagem = $imagem->url;

        if($controller_categoria->CadastrarCategoria($controller_categoria)){

          header('location:adm_categoria.php?sucesso=1');
        }else{
          header('location:adm_categoria.php?sucesso=0');

        }

      }
    }

    public function ListarCategoria(){
      require_once("model/categoria_class.php");
      $categoria = new Categoria();
      return $categoria->ListarCategoria();


    }

    public function ExcluirCategoria(){

      require_once('model/categoria_class.php');
      $controller_categoria = new Categoria();
      $controller_categoria->id_tipo_prato = $_GET['id'];

      if($controller_categoria->ExcluirCategoria($controller_categoria)){

        header('location:adm_categoria.php?sucessoExcluir=1');
      }else{
        header('location:adm_categoria.php?sucessoExcluir=0');
      }



    }

    public function EditarCategoria(){
      require_once('model/imagem_class.php');
      require_once('model/categoria_class.php');
      $controller_categoria = new Categoria();
      $id = $_GET['id'];

      if($_SERVER['REQUEST_METHOD'] == 'POST'){

          $nome = $_POST['txtCategoria'];
          $foto = $_FILES['filefotos'];

          $categoria = new Categoria();
          $categoria->id_tipo_prato = $id;
          $categoria->nome = $nome;
          $categoria->imagem = $foto;

          if (!empty($foto['name'])){

            $imagem = new Imagem();
            $imagem->GetUrl($foto);
            $categoria->imagem = $imagem->url;
            echo($categoria->imagem);
            $resultado = $categoria->EditarCategoria();



            // Se os dados forem inseridos com sucesso
            if ($resultado){
              ?>
                <script> window.alert("Rede Social alterada."); </script>
              <?php
              header('location:adm_categoria.php');
            }else {
              ?>
                <script> window.alert("Erro ao cadastrar Categoria, verifique as informações!"); </script>
              <?php
              header('location:adm_categoria.php');
            }
          }else{
            $resultado = $categoria->EditarCategoriaSemFoto($categoria);

            if ($resultado){
              ?>
                <script> window.alert("Rede Social alterada."); </script>
              <?php
              header('location:adm_categoria.php');
            }else {
              ?>
                <script> window.alert("Erro ao alterar Categoria, verifique as informações!"); </script>
              <?php
            }
          }
      }

    }

    public function ListarCategoriaID(){

      $controller_categoria = new Categoria();
      $controller_categoria->id_tipo_prato = $_GET['id'];

      $categoria = new Categoria();
      $categoria = $controller_categoria->ListarCategoriaID($controller_categoria);

      require_once('adm_categoria.php');



    }



    }









 ?>
