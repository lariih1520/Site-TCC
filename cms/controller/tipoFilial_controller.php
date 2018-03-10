<?php
  /*
  Objetivo: Criação do CRUD de cor
  Data: 30/09/2017
  Autor: Marcelo Bruno
  Ultima Modificação: Hoje
  Obervações: Nada ainda
  Arquivos Relacionados: router.php e
                         cms/views/adm_filiais_view.php
                        cms/controller/Tipofilial_class.php
  */

  /**
   *
   */
  class TipoFilialController
  {

    public function ListarTipoFilial(){

      require_once('model/tipoFilial_class.php');

      $lista = new TipoFilial();

      return $lista->ListarTipoFilial();

    }
  }
 ?>
