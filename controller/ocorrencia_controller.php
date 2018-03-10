<?php

  /*
  Objetivo: Criação do CRUD do fale conosco
  Data: 02/08/2017
  Autor: Marcelo Bruno
  Ultima Modificação: Hoje
  Obervações: Nada ainda
  Arquivos Relacionados: router.php e
                         views/contato.php
                        models/ocorrencia_class.php
  */

    class ControllerOcorrencia{

        public function MostrarOcorrencias(){

            require_once('model/ocorrencia_class.php');


            $listaOcorrencia_controller = new Ocorrencia();

            return $listaOcorrencia_controller->MostarOcorrencias();

        }

    }

?>
