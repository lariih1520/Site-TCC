<?php
/**
    Feito por: Larissa
    Data: 05/10/2017
    Arquivos Relacionados:
        controller/avaliacaoGorjeta_controller.php
**/

class Destaques{

    public $idDestaque;
    public $idProduto;
    public $comentario;
    public $imagem;

    function __construct(){
        require_once('model/db_class.php');

        $conexao_db = new Mysql_db();
        $conexao_db->conectar();

    }

    public function SelectPratos(){
        $sql = '
        select p.*, pimg.id_img, img.url, des.id_destaque, des.comentario
        from tbl_produto as p
        left join tbl_destaque as des
        on p.id_produto = des.id_produto
        inner join tbl_produto_img as pimg
        on pimg.id_produto = p.id_produto
        inner join tbl_imagem as img
        on pimg.id_img = img.id_imagem
        order by p.id_produto asc';

        if($select = mysql_query($sql)){
            $cont = 0;
            $destaque = "";
            while($rs = mysql_fetch_array($select)){
                $destaque[] = new Destaques();

                if($rs['id_destaque'] != null){
                    $destaque[$cont]->destaque = 1;
                    $destaque[$cont]->comentario_destq = $rs['comentario'];

                }else{
                   $destaque[$cont]->destaque = 0;
                }
                $destaque[$cont]->id_prato = $rs['id_produto'];
                $destaque[$cont]->img_prato = $rs['url'];
                $destaque[$cont]->descricao = $rs['descricao'];
                $destaque[$cont]->prato = $rs['nome'];
                $destaque[$cont]->id_destaque = $rs['id_destaque'];
                $cont++;
            }

            return $destaque;
        }else{
            return false;
        }
    }

    public function InsertDestaque(){
        $idP = $_SESSION['id_add'];
        $comentario = $_POST['txtComentario'];

        $arq = basename($_FILES['ftDestaque']['name']);
        $imagem =  'imagens/'.$arq;
        $caminho =  '../'.$imagem;

        $extArq = strtolower(substr($arq, strlen($arq)-3, 3));

        if($extArq == 'jpg' || $extArq == 'png' || $extArq == 'jpeg'){
            if(move_uploaded_file($_FILES['ftDestaque']['tmp_name'], $caminho)){
                $sql = 'select * from tbl_imagem order by id_imagem desc limit 1';
                $select = mysql_query($sql);

                if(mysql_affected_rows() > 0){
                    while($rs = mysql_fetch_array($select)){
                        $idImg = $rs['id_imagem'] + 1;
                    }
                }else{
                    $idImg = 1;
                }
                echo $idImg;
                mysql_query('insert into tbl_imagem(id_imagem, url) values('.$idImg.', "'.$imagem.'")');

                if(mysql_affected_rows() > 0){
                    $sql =  'select * from tbl_destaque order by id_destaque desc limit 1';
                    $select = mysql_query($sql);

                    if(mysql_affected_rows() > 0){
                        while($rs = mysql_fetch_array($select)){
                            $idDestaque = $rs['id_destaque'] + 1;
                        }
                    }else{
                        $idDestaque = 1;
                    }

                    $sql = 'insert into tbl_destaque(id_destaque, comentario, id_img, id_produto) values ('.$idDestaque.', "'.$comentario.'", '.$idImg.', '.$idP.')';
                    echo($sql);
                    mysql_query($sql);

                    if(mysql_affected_rows() > 0){
                        header('location:adm_destaque.php');
                    }else{
                        echo 'Erro ao fazer insert na tabela destaque';
                    }

                }else{
                    echo 'Erro ao cadastrar imagem';
                }

            }else{
                echo 'ERROO';
            }



        }else{
            echo "<script> alert('Erro na extensão do arquivo'); </script>";
        }

    }

    public function UpdateDestaque(){
        $idDestaque = $_SESSION['id_add'];
        $comentario = $_POST['txtComentario'];

        $arq = basename($_FILES['ftDestaque']['name']);

        /* a imagem não estiver vazia */
        if($arq != ''){
            $imagem =  'imagens/'.$arq;
            $caminho =  '../'.$imagem;

            $extArq = strtolower(substr($arq, strlen($arq)-3, 3));

            if($extArq == 'jpg' || $extArq == 'png' || $extArq == 'jpeg'){
                if(move_uploaded_file($_FILES['ftDestaque']['tmp_name'], $caminho)){

                    /* Selecionar o ultimo id para criar o desta imagem */
                    $select = mysql_query('select * from tbl_imagem order by id_imagem desc limit 1');

                    if(mysql_affected_rows() > 0){
                        while($rs = mysql_fetch_array($select)){
                            $idImg = $rs['id_imagem'] + 1;
                        }

                    }else{
                        $idImg = 1;
                    }

                    $sql = "
                            select img.* from tbl_destaque as des
                            inner join tbl_produto as p on des.id_produto = p.id_produto
                            inner join tbl_produto_img as pi on p.id_produto = pi.id_produto
                            inner join tbl_imagem as img on des.id_img = img.id_imagem
                            where des.id_produto = ".$idDestaque;

                    $select = mysql_query($sql);

                    if($rs = mysql_fetch_array($select)){
                            $idI = $rs['id_imagem'];
                    }

                    /* Deletar o registro da imagem antiga */
                    mysql_query('delete from tbl_imagem where id_imagem='.$idI);


                    /* Salvando a imagem no banco */
                    mysql_query('insert into tbl_imagem(id_imagem, url) values('.$idImg.', "'.$imagem.'")');

                    if(mysql_affected_rows() > 0){

                        $sql = 'update tbl_destaque set comentario="'.$comentario.'", id_img='.$idImg.' where id_produto='.$idDestaque;

                        /* Fazendo o update da tbl_destaque */
                        mysql_query($sql);

                        if(mysql_affected_rows() > 0){
                            header('location:adm_destaque.php');
                        }else{
                            echo 'Erro 1 ao fazer insert na tabela destaque';
                        }



                    }else{
                        echo 'Imagem não salva';
                    }

                }else{
                    echo "<script> alert('Erro na extensão do arquivo'); </script>";
                }

            }

        }else{
            $sql = 'update tbl_destaque set comentario="'.$comentario.'" where id_produto='.$idDestaque;

            /* Fazendo o update da tbl_destaque */
            mysql_query($sql);

            if(mysql_affected_rows() > 0){
                 header('location:adm_destaque.php');
            }else{
                 echo 'Erro 2 ao fazer insert na tabela destaque';
            }

        }


    }

    public function SelectById($idBuscar){
        $sql = 'select des.*, img.url from tbl_destaque as des
                inner join tbl_produto as p on des.id_produto = p.id_produto
                inner join tbl_produto_img as pi on p.id_produto = pi.id_produto
                inner join tbl_imagem as img on des.id_img = img.id_imagem
                where des.id_produto = '.$idBuscar;

        $lista = '';
        if($select = mysql_query($sql)){
            while($rs = mysql_fetch_array($select)){

            $lista = new Destaques();

            $lista->imagem = $rs['url'];
            $lista->idDestaque = $rs['id_destaque'];
            $lista->idProduto = $rs['id_produto'];
            $lista->comentario = $rs['comentario'];

            }

            return $lista;

        }else{
            return false;
        }


    }

    public function SelectByDestaque($pesuisa){
        $sql = "select p.*, pimg.id_img, img.url, des.id_destaque, des.comentario
                from tbl_produto as p
                left join tbl_destaque as des
                on p.id_produto = des.id_produto
                inner join tbl_produto_img as pimg
                on pimg.id_produto = p.id_produto
                inner join tbl_imagem as img
                on pimg.id_img = img.id_imagem
                where p.nome like '%".$pesuisa."%' or p.descricao like '%".$pesuisa."%'";

        if($select = mysql_query($sql)){

            $cont = 0;
            while($rs = mysql_fetch_array($select)){
                $destaque[] = new Destaques();

                if($rs['id_destaque'] != null){
                    $destaque[$cont]->destaque = 1;
                    $destaque[$cont]->id_destaque = $rs['id_destaque'];
                    $destaque[$cont]->comentario = $rs['comentario'];

                }else{
                    $destaque[$cont]->destaque = 0;
                    $destaque[$cont]->id_destaque = 0;
                    $destaque[$cont]->comentario = 0;
                }
                $destaque[$cont]->id_prato = $rs['id_produto'];
                $destaque[$cont]->img_prato = $rs['url'];
                $destaque[$cont]->descricao = $rs['descricao'];
                $destaque[$cont]->prato = $rs['nome'];
                $cont++;
            }

            return $destaque;

        }else{
            return false;
        }

    }

    public function DeleteDestaque($idDestaque){
        $sqlImg = 'select id_imagem from tbl_imagem as i inner join tbl_destaque as d on d.id_img = i.id_imagem where id_destaque ='.$idDestaque;

        if($select = mysql_query($sqlImg)){
            while($rs = mysql_fetch_array($select)){
                $idImg = $rs['id_imagem'];
                $sqlDes = 'delete from tbl_destaque where id_destaque='.$idDestaque;

                if(mysql_query($sqlDes)){

                    $sqlDel = 'delete from tbl_imagem where id_imagem='.$idImg;
                    echo $sqlDel;

                    if(mysql_query($sqlDel)){
                        header('location:adm_destaque.php?#conteudo_destaque');

                    }else{
                        echo '<p>ERRO ao deletar imagem</p>';
                    }

                }else{
                    echo '<p>ERRO ao deletar destaque</p>';
                }


            }

        }else{
            echo '<p>ERRO ao selecionar id da imagem</p>';
        }

    }
}


?>
