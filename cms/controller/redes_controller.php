<?php

/*
Objetivo: Criação do CRUD de cor
Data: 30/09/2017
Autor: Marcelo Bruno
Ultima Modificação: 13/10/2017
Obervações: Inserção e alteração de imagem orientado a objeto.
Arquivos Relacionados: router.php e
                       cms/views/redes_sociais_view.php
                      cms/model/redes_class.php
*/
  //Imports
  require_once('model/imagem_class.php');
  class ControllerRede{
      public function Cadastrar(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){

          $foto = $_FILES['filerede'];
          $nome = $_POST['txtNome'];
          $link = $_POST['txtLink'];


          //Upload de imagem;
          $imagem = new Imagem();
          $imagem->GetUrl($foto);

          $rede = new RedeSocial();

          $rede->nome_rede = $nome;
          $rede->link = $link;
          if(!empty($foto)){
            $rede->foto = $imagem->url;
          }


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

          $rede = new RedeSocial();
          $rede->id_rede = $id;
          $rede->nome_rede = $nome;
          $rede->link = $link;



          if (!empty($foto['name'])){
            $imagem = new Imagem();
            $imagem->GetUrl($foto);
            $rede->foto = $imagem->url;
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
