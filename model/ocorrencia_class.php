<?php

/*
  Objetivo: Criação do flae conosco
  Data: 26/09/2017
  Autor: Marcelo Bruno
  Ultima Modificação: Hoje
  Obervações: Nada ainda
  Arquivos Relacionados: router.php e
                         views/contato.php
                        controller/contato_controller.php
  */


    class Ocorrencia{

        public $id_tipo_ocorrencia;
        public $tipo_ocorrencia;


        public function __construct(){
            //Inclui o arquivo de conexão com o Banco
            require_once('model/db_class.php');

            //Abre a conexão com o banco de dados;
            $conexao_db = new Mysql_db();
            $conexao_db->conectar();

        }


        public function MostarOcorrencias(){

            $sql = "select * from tbl_ocorrencia";

            if(mysql_query($sql)){

                $select = mysql_query($sql);

                $contador = 0;

                while($rs = mysql_fetch_array($select)){

                    $listaOcorrencia[] = new Ocorrencia();

                    $listaOcorrencia[$contador]->id_tipo_ocorrencia = $rs['id_ocorrencia'];
                    $listaOcorrencia[$contador]->tipo_ocorrencia = $rs['ocorrencia'];

                    $contador += 1;

                }

                return $listaOcorrencia;


            }else{
                echo("erro");
            }

        }
    }

?>
