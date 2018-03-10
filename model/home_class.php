<?php
/**
    Feito por: Larissa
    Data:23/10

**/

class Home{

    public $imagemSlide;
    public $imagemCarrossel;
    public $titulo;
    public $descricao;
    public $imagem;

    function __construct(){
        require_once('model/db_class.php');

        $conexao_db = new Mysql_db();
        $conexao_db->conectar();

    }

    function SelectSlide(){
        $sql = 'select * from tbl_home_slide';

        if($select = mysql_query($sql)){

            $cont = 0;
            while($rs = mysql_fetch_array($select)){

                $lista[] = new Home();

                $lista[$cont]->imagemSlide = $rs['url'];

                $cont++;

            }

            return $lista;

        }else{
            return false;
        }

    }

    function SelectCarrossel(){
        $sql = 'select * from tbl_home_carrossel';

        if($select = mysql_query($sql)){

            $cont = 0;
            while($rs = mysql_fetch_array($select)){

                $lista[] = new Home();

                $lista[$cont]->imagemCarrossel = $rs['url'];

                $cont++;

            }

            return $lista;

        }else{
            return false;
        }

    }

    function SelectMenu(){
        $sql = 'select * from tbl_home_menu';

        if($select = mysql_query($sql)){

            $cont = 0;
            while($rs = mysql_fetch_array($select)){

                $lista[] = new Home();

                $lista[$cont]->titulo = $rs['titulo'];
                $lista[$cont]->descricao = $rs['descricao'];
                $lista[$cont]->imagem = $rs['imagem'];

                $cont++;

            }

            return $lista;

        }else{
            return false;
        }

    }



}


?>
