<?php
/*
  Objetivo: Criação do fale conosco e crud de filiais
  Data: 26/09/2017
  Autor: Marcelo Bruno
  Ultima Modificação: Hoje
  Obervações: Nada ainda
  Arquivos Relacionados: router.php e
                         views/login_view.php
                        models/cliente_class.php
*/


    class Filial{


        public $id_restaurante;
        public $nome;
        public $tipo_restaurante;
        public $telefone;
        public $cep;
        public $numero;


        public function __construct(){

            require_once('model/db_class.php');

            $conexao_db = new Mysql_db();
            $conexao_db->conectar();

        }



        public function MostrarFiliais(){

            $sql = "select * from tbl_restaurante";

            if(mysql_query($sql)){

                $select = mysql_query($sql);

                $contador = 0;

                while($rs = mysql_fetch_array($select)){

                    $listaFiliais[] = new Filial();

                    $listaFiliais[$contador]->id_restaurante = $rs['id_restaurante'];
                    $listaFiliais[$contador]->nome = $rs['Nome'];
                    $listaFiliais[$contador]->tipo_restaurante = $rs['tipo_restaurante'];
                    $listaFiliais[$contador]->telefone = $rs['telefone'];
                    $listaFiliais[$contador]->cep = $rs['cep'];
                    $listaFiliais[$contador]->numero = $rs['numero'];
                    $listaFiliais[$contador]->foto = $rs['foto'];
                    $listaFiliais[$contador]->cnpj = $rs['cnpj'];

                    $contador += 1;
                }

                return $listaFiliais;

            }

        }
    }


?>
