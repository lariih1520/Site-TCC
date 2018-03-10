<?php


  /**
   *
   */
  class ControllerGaleria{

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


  }









 ?>
