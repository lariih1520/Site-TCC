<?php

  /*
  Objetivo: Criação do Fale conosco e crud de filiais
  Data: 26/09/2017
  Autor: Marcelo Bruno
  Ultima Modificação: Hoje
  Obervações: Nada ainda
  Arquivos Relacionados: router.php e
                         views/contato.php
                        models/filial_class.php
  */


    class ControllerFilial{

        public function MostrarFiliais(){

            require('model/filial_class.php');

            $listaFilial_controller = new Filial();

            return $listaFilial_controller->MostrarFiliais();
        }


    }



?>
