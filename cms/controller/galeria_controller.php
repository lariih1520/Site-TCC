<?php
/*
  Objetivo: Alterar os objetos d galeria.
  Data: 11/10/2017
  Autor: Caio amorim
  Ultima Modificação: 16/10/2017
  Obervações: Galeria de cima funcionando
  Arquivos Relacionados: cms/model/jeito_class.php
                         cms/model/imagem_class.php
                         cms/views/sobre_view.php
*/
class ControllerGaleria{

  public function updateTitulo(){
  if($_SERVER['REQUEST_METHOD'] == 'POST'){

      $titulo = $_POST['txtTitulo'];
      $descricao = $_POST['txtDescricao'];

      $galeria_controller = new Galeria();

      $galeria_controller->titulo = $titulo;
      $galeria_controller->descricao = $descricao;

      if($galeria_controller->alterarTitulo()){

        ?>
        <script type="text/javascript">
          window.alert("Titulo e descrição alterados com sucesso!");
        </script>
        <?php
        header('location:adm_galeria.php');
      }else{
        ?>
        <script type="text/javascript">
          window.alert("Titulo e descrição não foram alterados!");
        </script>
        <?php
        header('location:adm_galeria.php');
      }
    }
  }

  public function listarTitulo(){
    require_once("model/galeria_class.php");
    $galeria = new Galeria();
    return $galeria->listarTitulo();
  }

  public function listarGaleria($id_galeria){
    require_once("model/galeria_class.php");
    $galeria = new Galeria;
    $galeria->id_galeria = $id_galeria;
    return $galeria->listarGaleria();
  }

  public function alterarGaleria(){
    require_once('model/imagem_class.php');
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $contador = 1;
      while($contador<=17){
        if(isset($_FILES['filefotos_'.$contador])){
          $foto[$contador] = $_FILES['filefotos_'.$contador];
          if(empty($foto[$contador]['name'])){
            $contador ++;
          }else{
            //Gerando a url e salvando fotos
            $imagem = new Imagem();
            $imagem->GetUrl($foto[$contador]);
            //Inserindo no banco;
            $imagem->id_imagem = $contador;
            if($imagem->updateImagem()){
              header('location:adm_galeria.php');
              $contador ++;
            }else{
              echo("<script> window.alert('Erro na inserção no banco'); </script>");
            }
          }
        }else{
          $contador ++;
        }
      }
    }
  }

}











 ?>
