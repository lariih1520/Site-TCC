<?php
  /*
  Objetivo: Criação do CRUD do cabeçalho do site
  Data: 28/09/2017
  Autor: Marcelo Bruno
  Ultima Modificação: Hoje
  Obervações: Nada ainda
  Arquivos Relacionados: router.php e
                         cms/views/adm_cabecalho_view.php
                        cms/model/cabecalho_class.php
  */

  class ControllerCabecalho
  {

    public function MostrarCabecalho(){

      require_once('cms/model/cabecalho_class.php');

      $cabecalho = new Cabecalho();

      return $cabecalho->MostrarCabecalho();

    }

    public function MostrarCabecalhoCms(){
      require_once('model/cabecalho_class.php');

      $cabecalho = new Cabecalho();

      return $cabecalho->MostrarCabecalho();
    }

    public function AlterarLogo(){
      if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $foto = $_FILES['filefotos'];

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

            $cabecalho = new Cabecalho();
            $cabecalho->foto = $nome_imagem;

            $resultado = $cabecalho->AlterarLogo($cabecalho);

            // Se os dados forem inseridos com sucesso
            if ($resultado){
              ?>
                <script> window.alert("Cabeçalho alterado.")</script>
              <?php
              header('location:adm_cabecalho.php');
            }else {
              ?>
                <script> window.alert("Erro ao alterar o logo")</script>
              <?php
            }
          }
        }
      }
    }

    public function AlterarBoasVinda(){
      if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $foto = $_FILES['filefotosusuario'];
        $texto = $_POST['txtBoasVindas'];

        $cabecalho = new Cabecalho();
        $cabecalho->texto_boas_vindas = $texto;

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

            $cabecalho->foto_usuario = $nome_imagem;
            //Realiza o UPDATE no BD. (Com a foto)
            $resultado = $cabecalho->AlterarBoasVinda($cabecalho);

            // Se os dados forem inseridos com sucesso
            if ($resultado){
              ?>
                <script> window.alert("Cabeçalho alterado.")</script>
              <?php
              header('location:adm_cabecalho.php');
            }else {
              ?>
                <script> window.alert("Erro ao alterar o logo")</script>
              <?php
            }
          }
        }else{
          //Realiza o UPDATE no BD. (Sem a foto)
          $resultado = $cabecalho->AlterarTexto($cabecalho);

          if ($resultado){
            ?>
              <script> window.alert("Cabeçalho alterado.")</script>
            <?php
            header('location:adm_cabecalho.php');
          }else {
            ?>
              <script> window.alert("Erro ao alterar o logo")</script>
            <?php
          }

        }
      }
    }


  }

 ?>
