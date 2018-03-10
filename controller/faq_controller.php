<?php


/**
 *
 */
class ControllerFaq{

  public function MostrarFaq(){

    require_once('model/faq_class.php');
    $faq = new Faq();
    return $faq->MostrarFaq();

  }


}







 ?>
