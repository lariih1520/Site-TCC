<?php

/*
Objetivo: Criação do CRUD de cor
Data: 30/09/2017
Autor: Marcelo Bruno
Ultima Modificação: Hoje
Obervações: Nada ainda
Arquivos Relacionados: router.php e
                       cms/views/redes_sociais_view.php
                      cms/model/redes_class.php
*/

  class ControllerRede
  {
      public function Cadastrar(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){

          $foto = $_FILES['filerede'];
          $nome = $_POST['txtNome'];
          $link = $_POST['txtLink'];
          $cor = $_POST['txtCor'];

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

              $rede = new RedeSocial();

              $rede->nome_rede = $nome;
              $rede->link = $link;
              $rede->foto = $nome_imagem;
              $rede->cor = $cor;

              $resultado = $rede->Cadastrar($rede);

              // Se os dados forem inseridos com sucesso
              if ($resultado){
                ?>
                  <script> window.alert("Rede Social cadastrada."); </script>
                <?php
                header('location:adm_redes_sociais.php');
              }else {
                ?>
                  <script> window.alert("Erro ao cadastrar Rede, verifique as informações!"); </script>
                <?php
              }
            }
          }else{
            ?>
              <script> window.alert("Seleciona também uma foto.");</script>
            <?php
            header('location:adm_redes_sociais.php');
          }
        }

      }

      public function ListarTodo(){
        require_once('model/redes_class.php');

        $rede = new RedeSocial();
        return $rede->ListarTodos();
      }

      public function Excluir(){

        $rede = new RedeSocial();
        $rede->id_rede = $_GET['id'];

        if($rede->Deletar($rede)){
          ?>
            <script type="text/javascript">
              window.alert("Excluido com sucesso");
            </script>
          <?php
          header('location:adm_redes_sociais.php');
        }else{
          ?>
            <script type="text/javascript">
              window.alert("Erro ao excluir");
            </script>
          <?php
        }

      }

      public function Mostrar(){
        require_once('model/redes_class.php');

        $rede_controller = new RedeSocial();

        $rede_controller->id_rede = $_GET['id'];

        $rede = new RedeSocial();

        $rede = $rede_controller->ListarPorId($rede_controller);

        require_once('adm_redes_sociais.php');
      }

      public function Alterar(){
        $id = $_GET['id'];
        if($_SERVER['REQUEST_METHOD'] == 'POST'){

          $foto = $_FILES['filerede'];
          $nome = $_POST['txtNome'];
          $link = $_POST['txtLink'];
          $cor = $_POST['txtCor'];

          $rede = new RedeSocial();
          $rede->id_rede = $id;
          $rede->nome_rede = $nome;
          $rede->link = $link;
          $rede->cor = $cor;

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

              $rede->foto = $nome_imagem;
              $resultado = $rede->Alterar($rede);

              // Se os dados forem inseridos com sucesso
              if ($resultado){
                ?>
                  <script> window.alert("Rede Social alterada."); </script>
                <?php
                header('location:adm_redes_sociais.php');
              }else {
                ?>
                  <script> window.alert("Erro ao cadastrar Rede, verifique as informações!"); </script>
                <?php
                header('location:adm_redes_sociais.php');
              }
            }
          }else{
            $resultado = $rede->AlterarSemFoto($rede);

            if ($resultado){
              ?>
                <script> window.alert("Rede Social alterada."); </script>
              <?php
              header('location:adm_redes_sociais.php');
            }else {
              ?>
                <script> window.alert("Erro ao alterar Rede, verifique as informações!"); </script>
              <?php
            }
          }
        }
      }
  }

 ?>
