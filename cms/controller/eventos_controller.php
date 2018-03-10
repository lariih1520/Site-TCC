<?php
/*
    Feito por:Larissa
    Data:18/10/2017

*/

class ControllerEventos{

    public function CadastrarEvento(){
      //Imports
      require_once('model/eventos_class.php');
      require_once('model/imagem_class.php');
      //Formatando data
      $data = date('Y-m-d', strtotime($_POST['txtData']));
      //Inserindo valores do evento
      $eventos_class = new Evento();
      $eventos_class->nome=$_POST['txtTitulo'];
      $eventos_class->sobre=$_POST['txtDescricao'];
      $eventos_class->data= $data;
      $eventos_class->restaurante=$_POST['slcLocal'];
      $eventos_class->InsertEvento();
      //Inserido imagens
      $contador = 0;
      while($contador<=5){
        $imagem = new Imagem();
        $imagem->GetUrl($_FILES['flEvento'.$contador]);
        $imagem->novaImagem();
        //Relacionando imagens com o evento;
        $eventos_class->InsertEventoImagem($imagem->id_imagem);
        $contador ++;
      }
        header("location:adm_eventos.php");
    }

    public function ExcluirEvento(){
      require_once('model/eventos_class.php');
      $eventos_class = new Evento();
      $eventos_class->id = $_GET['id'];
      if($eventos_class->DeleteEvento()){
        header("Location:adm_eventos.php");
      }
    }

    public function ListarEventos(){
      require_once('model/eventos_class.php');
      $eventos_class = new Evento();
      $result = $eventos_class->SelectEventos();
      return $result;
    }

    public function SelectId(){
      require_Once('model/eventos_class.php');
      $eventos_class = new Evento();
      $eventos_class->id = $_GET['id'];
      $eventos_class->SelectId();
      require_Once("adm_eventos.php");
    }

    public function AlterarEvento(){
      require_once('model/eventos_class.php');
      require_once('model/imagem_class.php');
      //Resgatando valores
      $eventos_class = new Evento();
      $eventos_class->id = $_GET['id'];
      $eventos_class->nome = $_POST['txtTitulo'];
      $eventos_class->sobre=$_POST['txtDescricao'];
      $data = date('Y-m-d', strtotime($_POST['txtData']));
      $eventos_class->data= $data;
      $eventos_class->restaurante=$_POST['slcLocal'];
      //UPDATE IMAGENS
      $contador = 0;
      $id_img=$eventos_class->GetIdImagens();
      while($contador<=5){
        if(empty($_FILES['flEvento'.$contador]['name'])){
          $contador++;
        }else{
          $imagem = new Imagem();
          $imagem->id_imagem=$id_img[$contador];
          $imagem->GetUrl($_FILES['flEvento'.$contador]);
          $imagem->updateImagem();
          $contador ++;
        }
      }
      $eventos_class->UpdateEvento();
    }

    public function BuscarEvento(){
      require_once('model/eventos_class.php');
      $eventos_class = new Evento();
      $result = $eventos_class->SelectEventoById();
      return $result;
    }

  }
?>
