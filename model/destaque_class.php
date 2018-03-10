<?php
/**
    Feito por: Larissa
    Data:13/10
    Arquivos relacionados:
        controller/destaque_controller.php
        db_class.php

**/

class Destaques{

    public $prato;
    public $preco;
    public $descricao;
    public $imgPrato;
    public $imgComent;
    public $comentario;

    function __construct(){
        require_once('model/db_class.php');

        $conexao_db = new Mysql_db();
        $conexao_db->conectar();

    }

    function SelectDestaques(){
        $sql = '
        select p.nome as prato, p.descricao, p.preco,
        img.url as imgPrato, des.comentario, imagem.url as imgComent
        from tbl_produto as p
        inner join tbl_destaque as des on p.id_produto = des.id_produto
        inner join tbl_produto_img as pimg on pimg.id_produto = p.id_produto
        inner join tbl_imagem as img on pimg.id_img = img.id_imagem
        inner join tbl_imagem as imagem on des.id_img = imagem.id_imagem;
                ';

        if($select = mysql_query($sql)){

            $cont = 0;
            $lista = "";
            while($rs = mysql_fetch_array($select)){

                $lista[] = new Destaques();

                $lista[$cont]->prato = $rs['prato'];
                $lista[$cont]->preco = $rs['preco'];
                $lista[$cont]->descricao = $rs['descricao'];
                $lista[$cont]->imgPrato = $rs['imgPrato'];
                $lista[$cont]->imgComent = $rs['imgComent'];
                $lista[$cont]->comentario = $rs['comentario'];

                $cont++;

            }

            return $lista;

        }else{
            return false;
        }

    }

}


?>
