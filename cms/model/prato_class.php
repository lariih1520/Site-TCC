<?php
/**
    Data: 18/10/2017
**/

class Pratos{
   
    public $idTipo;
    public $tipo;
    public $idCategoria;
    public $categoria;
    public $idIngrediente;
    public $ingrediente;
    public $idFilial;
    public $filial;
    public $idPrato;
    public $prato;
    public $imagem;
    
    
    function __construct(){
        require_once('model/db_class.php');
        
        $conexao_db = new Mysql_db();
        $conexao_db->conectar();
    }
    
    public function InsertPrato(){
        $titulo = $_POST['txtTitulo'];
        $preco = $_POST['txtPreco'];
        $descricao = $_POST['txtDescricao'];
        $idCategoria = $_POST['slct_categoria'];
        $idTipoPrato = $_POST['slct_tipo'];
       
        /* Salvar produto */
        $sql = "insert into tbl_produto(nome, preco, descricao, tipo_produto) 
        values('".$titulo."', ".$preco.", '".$descricao."', ".$idTipoPrato.");";
        mysql_query($sql);
        
        echo $sql.'<br>';
        
        $sql = "select * from tbl_produto order by id_produto desc limit 1";
        if($select = mysql_query($sql)){
            if($rs = mysql_fetch_array($select)){
                $idProduto = $rs['id_produto'];
            }
        }
        
        echo 'id Produto: '.$idProduto.'<br>';
        
        /* Salvar Categoria */
        $sql = "insert into tbl_produto_tipo_prato(id_produto, id_tipo_prato) 
        values(".$idProduto.", ".$idCategoria.");";
        mysql_query($sql);
        
        echo $sql.'<br>';
        
        /* Salvar imagem */
        $imagem = new Pratos();
        $idImg = $imagem->CadastrarImagem();
       
        echo 'imagem:'.$idImg.'<br>';
        
        /* Relacionar imagem com produto */
        $sql = 'insert into tbl_produto_img(id_produto, id_img)
        values('.$idProduto.', '.$idImg.')';
        echo $sql.'<br>';
        
        if(mysql_query($sql)){
            
            /* 
                Pegar a quantidade de filiais e ingredientes já cadastrados 
            */
            session_start();

            /* Relacionar ingredientes com produto */
            $cI = $_SESSION['contIngredientes'];
            $cont = 0;
            while($cont < $cI){
                if(!empty($_POST['ingrediente_'.$cont])){
                    $qtd = $_POST['qtdIngd_'.$cont];
                    $idIngrediente = $_POST['ingrediente_'.$cont];
                    $sql = "insert into tbl_produto_ingrediente(id_ingrediente, id_produto, qtde) values(".$idIngrediente.",".$idProduto.", ".$qtd.")";
                    mysql_query($sql);
                    echo $sql.'<br>';
                    echo $qtd.'<br>';
                }

                $cont++;
            }
            
            if(mysql_affected_rows() > 0){
                
            
                /* Relacionar filiais com produto */
                $cF = $_SESSION['contFiliais'];
                $cont = 0;
                while($cont < $cF){

                    if(!empty($_POST['filial_'.$cont])){

                        $idFilial =$_POST['filial_'.$cont];
                        $sql = "insert into tbl_produto_restaurante(id_restaurante, id_produto) values(".$idFilial.",".$idProduto.")";
                        mysql_query($sql);
                        echo $sql.'<br>';
                    }

                    $cont++;
                }
                
                if(mysql_affected_rows() > 0){
                    header('location: adm_prato.php');

                }else{
                    echo $sql;
                }
            }else{
                echo 'mysql ERROOOO';
            }
            
            
        }
        
            
    }
    
    public function UpdatePrato(){
        $id = $_GET['idPrato'];
        $titulo = $_POST['txtTitulo'];
        $preco = $_POST['txtPreco'];
        $descricao = $_POST['txtDescricao'];
        $idCategoria = $_POST['slct_categoria'];
        $idTipoPrato = $_POST['slct_tipo'];
        
        /* Salvar produto */
        $sql = "update tbl_produto set nome='".$titulo."', preco='".$preco."', descricao='".$descricao."', tipo_produto=".$idTipoPrato." where id_produto = ".$id ;
        mysql_query($sql);
        
        echo $sql.'<br>';
        
        $arq = basename($_FILES['flPrato']['name']);
        if($arq != null){
            /* Salvar imagem */
            $imagem = new Pratos();
            $idImg = $imagem->CadastrarImagem();
            
             echo $idImg.'<br>';
        
            /* Relacionar imagem com produto */
            $sql = 'update tbl_produto_img set id_img = '.$idImg.' where id_produto = '.$id;
            mysql_query($sql);
            echo $sql.'<br>';
        }
        
        $sql = "update tbl_produto_tipo_prato set id_tipo_prato = ".$idCategoria." where id_produto = ".$id;
        mysql_query($sql);
        
        echo $sql.'<br>';
       
        /* 
            Pegar a quantidade de filiais e ingredientes já cadastrados 
        */
        session_start();
        
        $sql='delete from tbl_produto_ingrediente where id_produto='.$id;
        
        if(mysql_query($sql)){
            /* Relacionar ingredientes com produto */
            $cI = $_SESSION['contIngredientes'];
            $cont = 0;
            while($cont < $cI){
                if(!empty($_POST['ingrediente_'.$cont])){
                    $qtd = $_POST['qtdIngd_'.$cont];
                    $idIngrediente = $_POST['ingrediente_'.$cont];
                    $sql = "insert into tbl_produto_ingrediente(id_ingrediente, id_produto, qtde) values(".$idIngrediente.",".$id.", ".$qtd.")";
                    mysql_query($sql);
                    echo $sql.'<br>';
                }

                $cont++;
            }
            
            if(mysql_affected_rows() > 0){

                /* Relacionar filiais com produto */
                $cF = $_SESSION['contFiliais'];
                $cont = 0;
                while($cont < $cF){

                    if(!empty($_POST['filial_'.$cont])){

                        $idFilial =$_POST['filial_'.$cont];
                        $sql = "insert into tbl_produto_restaurante(id_restaurante, id_produto) values(".$idFilial.",".$id.")";
                        mysql_query($sql);
                        echo $sql.'<br>';
                    }

                    $cont++;
                }
                
                if(mysql_affected_rows() > 0){
                    header('location: adm_prato.php');
                    //echo $sql;
                }else{
                    echo $sql;
                }
            }else{
                echo 'erro mysql';
            }
        }else{
            echo $sql;
        }
            
    }
    
    public function DeletePrato(){
        $id = $_GET['id'];
        
        $sql = "select img.* from tbl_imagem as img
                inner join tbl_produto_img as pi 
                on img.id_imagem = pi.id_img
                inner join tbl_produto as p 
                on pi.id_produto = p.id_produto where p.id_produto =".$id;
        
        if($select = mysql_query($sql)){
            while($rs = mysql_fetch_array($select)){
                $idImg = $rs['id_imagem'];
            }
            
            $sql = "delete from tbl_produto_img where id_img = ".$idImg." and id_produto = ".$id;
            mysql_query($sql);
            
            $sql = "delete from tbl_imagem where id_imagem = ".$idImg;
            if(mysql_query($sql)){
                
                $sql = "delete from tbl_produto_restaurante where id_produto = ".$id;
                if(mysql_query($sql)){
                    
                    $sql = "delete from tbl_produto_ingrediente where id_produto = ".$id;
                    if(mysql_query($sql)){
                        $sql = "delete from tbl_produto_tipo_prato where id_produto = ".$id;
                        
                        if(mysql_query($sql)){
                            
                            $sql = "delete from tbl_produto where id_produto = ".$id;
                            if(mysql_affected_rows() > 0){
                                header('location:adm_prato.php');

                            }else{
                                echo $sql;
                            }

                        }else{
                            echo $sql;
                        }

                    }else{
                        echo $sql;

                    }
                    
                }else{
                    echo $sql;
                    
                }
                
            }else{
                echo $sql;
                    
            }
            
        }
        
        
    }
    
    public function SelectPratos(){
        $sql = "select p.id_produto, p.nome as titulo, p.tipo_produto as categoria, i.url as imagem 
                from tbl_produto as p
                inner join tbl_produto_img as pi on p.id_produto = pi.id_produto
                inner join tbl_imagem as i on i.id_imagem = pi.id_img 
                order by p.id_produto desc";
        
        if($select = mysql_query($sql)){
            
            $cont = 0;
            while($rs = mysql_fetch_array($select)){
                
                $prato[] = new Pratos();
                
                $prato[$cont]->idPrato = $rs['id_produto'];
                $prato[$cont]->prato = $rs['titulo'];
                $prato[$cont]->categoria = $rs['categoria'];
                $prato[$cont]->imagem = $rs['imagem'];
                $cont++;
            }
                        
            return $prato;
        }else{
            return false;
        }
    }
    
    public function SelectPratoById($id){
        $sql = "select p.id_produto, p.nome as titulo,
                p.descricao, p.preco, i.url as imagem 
                from tbl_produto as p
                inner join tbl_produto_img as pi on p.id_produto = pi.id_produto
                inner join tbl_imagem as i on i.id_imagem = pi.id_img 
                where p.id_produto = ".$id."
                order by p.id_produto desc";
        
        if($select = mysql_query($sql)){
            
            while($rs = mysql_fetch_array($select)){
                
                $prato = new Pratos();
                
                $prato->idPrato = $rs['id_produto'];
                $prato->titulo = $rs['titulo'];
                $prato->preco = $rs['preco'];
                $prato->descricao = $rs['descricao'];
                $prato->imagem = $rs['imagem'];
            }
                        
            return $prato;
        }else{
            return false;
        }
    }
    
    public function SelectCategorias(){
        $sql = "select * from tbl_tipo_prato";
        
        if($select = mysql_query($sql)){
            
            $cont = 0;
            while($rs = mysql_fetch_array($select)){
                
                $categoria[] = new Pratos();
                
                $categoria[$cont]->idCategoria = $rs['id_tipo_prato'];
                $categoria[$cont]->categoria = $rs['nome'];
                
                $cont++;
            }
            
            return $categoria;
            
        }else{
            return false;
        }
        
        
    }
    
    public function SelectIngredientes(){
        $sql = "select id_igrediente, nome as ingrediente from tbl_ingrediente";
        
        if($select = mysql_query($sql)){
            $cont = 0;
            while($rs = mysql_fetch_array($select)){
                $ingrediente[] = new Pratos();
                
                $ingrediente[$cont]->idIngrediente = $rs['id_igrediente'];
                $ingrediente[$cont]->ingrediente = $rs['ingrediente'];
                
                $cont++;
            }
            
            return $ingrediente;
            
        }else{
            return false;
        }
        
        
    }
    
    public function SelectFiliais(){
        $sql = "select id_restaurante as id, nome as filial from tbl_restaurante";
        
        if($select = mysql_query($sql)){
            $cont = 0;
            while($rs = mysql_fetch_array($select)){
                
                $filial[] = new Pratos();
                
                $filial[$cont]->idFilial = $rs['id'];
                $filial[$cont]->filial = $rs['filial'];
                
                $cont++;
            }
            
            return $filial;
            
        }else{
            return false;
        }
        
        
    }
    
    public function SelectCategoriaPrato($id){
        $sql = "select tp.* from tbl_tipo_prato as tp
                inner join tbl_produto_tipo_prato as ptp
                on tp.id_tipo_prato = ptp.id_tipo_prato
                inner join tbl_produto as p
                on p.id_produto = ptp.id_produto
                where p.id_produto = ".$id;
        
        if($select = mysql_query($sql)){
            
            $cont = 0;
            while($rs = mysql_fetch_array($select)){
                
                $categoria[] = new Pratos();
                
                $categoria[$cont]->categoria = $rs['nome'];
                $categoria[$cont]->idCategoria = $rs['id_tipo_prato'];
                $cont++;
            }
            
            return $categoria;
            
        }else{
            return false;
        }
        
    }
    
    public function SelectTipo(){
        $sql = "select * from tbl_tipo_produto";
        
        if($select = mysql_query($sql)){
            
            $cont = 0;
            while($rs = mysql_fetch_array($select)){
                
                $tipo[] = new Pratos();
                
                $tipo[$cont]->tipo = $rs['nome'];
                $tipo[$cont]->idTipo = $rs['id_tipo_produto'];
                $cont++;
            }
            
            return $tipo;
            
        }else{
            return false;
        }
        
    }
    
    public function ListarTipoPrato($id){
        $sql = "select * from tbl_tipo_produto";
        
        if($select = mysql_query($sql)){
            
            $cont = 0;
            while($rs = mysql_fetch_array($select)){
                
                $tipo[] = new Pratos();
                
                $tipo[$cont]->tipo = $rs['nome'];
                $tipo[$cont]->idTipo = $rs['id_tipo_produto'];
                $cont++;
            }
            
            return $tipo;
            
        }else{
            return false;
        }
        
    }
    
    public function SelectTipoPrato($id){
        $sql = "select tp.* from tbl_tipo_prato as tp
                inner join tbl_produto_tipo_prato as ptp
                on tp.id_tipo_prato = ptp.id_tipo_prato
                where ptp.id_produto = ".$id;
        
        if($select = mysql_query($sql)){
            
            $cont = 0;
            while($rs = mysql_fetch_array($select)){
                
                $tipo[] = new Pratos();
                
                $tipo[$cont]->tipo = $rs['nome'];
                $tipo[$cont]->idTipo = $rs['id_tipo_prato'];
                $cont++;
            }
            
            return $tipo;
            
        }else{
            return false;
        }
        
    }
    
    public function SelectIngredientePrato($id){
        $sql = "select i.*, ip.qtde from tbl_ingrediente as i
                inner join tbl_produto_ingrediente as ip
                on i.id_igrediente = ip.id_ingrediente
                inner join tbl_produto as p
                on p.id_produto = ip.id_produto where p.id_produto = ".$id;
        
        if($select = mysql_query($sql)){
            $ingrediente = false;
            $cont = 0;
            while($rs = mysql_fetch_array($select)){
                $ingrediente[] = new Pratos();
                
                $ingrediente[$cont]->idIngrediente = $rs['id_igrediente'];
                $ingrediente[$cont]->ingrediente = $rs['nome'];
                $ingrediente[$cont]->quantidade = $rs['qtde'];
                $cont++;
                
            }
            return $ingrediente;
            
        }else{
            return false;
        }
        
    }
    
    public function SelectPratoFiliais($id){
        $sql = "select r.* from tbl_restaurante as r
                inner join tbl_produto_restaurante as pr
                on r.id_restaurante = pr.id_restaurante
                inner join tbl_produto as p
                on p.id_produto = pr.id_produto where p.id_produto = ".$id;
        
        if($select = mysql_query($sql)){
            $cont = 0;
            $filial = false;
            while($rs = mysql_fetch_array($select)){
                
                $filial[] = new Pratos();
                
                $filial[$cont]->idFilial = $rs['id_restaurante'];
                $filial[$cont]->filial = $rs['Nome'];
                
                $cont++;
            }
            
            return $filial;
            
        }else{
            return false;
        }
        
    }
    
    public function CadastrarImagem(){
        $arq = basename($_FILES['flPrato']['name']);
        $imagem =  'imagens/'.$arq;
        $caminho =  '../'.$imagem;
        
        $extArq = strtolower(substr($arq, strlen($arq)-3, 3));
        
        if($extArq == 'jpg' || $extArq == 'png' || $extArq == 'jpeg'){
            if(move_uploaded_file($_FILES['flPrato']['tmp_name'], $caminho)){
                $sql = 'select * from tbl_imagem order by id_imagem desc limit 1';
                $select = mysql_query($sql);
                
                if(mysql_affected_rows() > 0){
                    while($rs = mysql_fetch_array($select)){
                        $idImg = $rs['id_imagem'] + 1;
                    }
                }else{
                    $idImg = 1;
                }
                
                mysql_query('insert into tbl_imagem(id_imagem, url) values('.$idImg.', "'.$imagem.'")');
                
                if(mysql_affected_rows() > 0){
                    return $idImg;
                        
                }else{
                    echo $sql;
                    
                }
                
            }else{
                echo 'ERROO';
            }
            
        }else{
            echo "<script> alert('Erro na extensão do arquivo'); </script>";
        }
    }
    
}

?>