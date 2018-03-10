<?php

  /*
  Objetivo: Criação do CRUD de cor
  Data: 28/09/2017
  Autor: Marcelo Bruno
  Ultima Modificação: Hoje
  Obervações: Nada ainda
  Arquivos Relacionados: router.php e
                         cms/views/adm_pagina_view.php
                        cms/controller/cores_controller.php
  */

  class ControllerCor{

    public function AlterarCor(){

      if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $cor = $_POST['txtCor'];

        $controller_cor = new Cor();

        $controller_cor->cor = $cor;

        if($controller_cor->AlterarCor($controller_cor)){
          header('location:adm_paginas.php?sucesso=1');
        }else{
          header('location:../adm_paginas.php?sucesso=0');
        }


      }

    }

    public function ListarCor(){
      require_once('model/cores_class.php');

      $cores = new Cor();

      return $cores->ListarCor();

    }

    public function VoltarPadrao(){

      $controller_cor = new Cor();

      if($controller_cor->VoltarPadrao()){
        header('location:adm_paginas.php?padrao=1');
      }else{
        header('location:adm_paginas.php?padrao=0');
      }

    }


  }

?>
