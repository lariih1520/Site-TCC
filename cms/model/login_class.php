<?php


class MotivosLogin{
    
    public $titulo;
    public $descricao;
    public $imagem;
    public $status;
    
    function __construct(){
        require_once('model/db_class.php');

        $conexao = new Mysql_db();
        $conexao->conectar();
    }
    
    public function InsertMotivo(){
        $titulo = $_POST['txttitulo'];
        $descricao = $_POST['txtDescricao'];
        
        $arq = basename($_FILES['flMotivo']['name']);
        
        $imagem =  'imagens/'.$arq;
        $caminho =  '../'.$imagem;
        
        $extArq = strtolower(substr($arq, strlen($arq)-3, 3));
        
        if($extArq == 'jpg' || $extArq == 'png' || $extArq == 'jpeg'){
            if(move_uploaded_file($_FILES['flMotivo']['tmp_name'], $caminho)){
                $sql = 'select * from tbl_imagem order by id_imagem desc limit 1';
                $select = mysql_query($sql);
                
                if(mysql_affected_rows() > 0){
                    while($rs = mysql_fetch_array($select)){
                        $idimagem = $rs['id_imagem'] + 1;
                    }
                }else{
                    $idimagem = 1;
                }
                
                $sqlImg = 'insert into tbl_imagem(id_imagem, url) values('.$idimagem.', "'.$imagem.'")';

                if(mysql_query($sqlImg)){
                    $sql = 'select * from tbl_motivo_login order by id_motivo desc limit 1';
                    $select = mysql_query($sql);

                    if(mysql_affected_rows() > 0){
                        while($rs = mysql_fetch_array($select)){
                            $idM = $rs['id_motivo'] + 1;
                        }
                    }else{
                        $idM = 1;
                    }
                    
                    $sql = "select * from tbl_motivo_login where status=1";
                    $select = mysql_query($sql);

                    $cont = 0;
                    while($rs = mysql_fetch_array($select)){
                        $cont++;

                    }
                    if($cont >= 3){
                        $status = 0;
                    }else{
                        $status = 1;
                    }
                    
                    $sqlMotv = "insert into tbl_motivo_login(id_motivo, titulo, descricao, id_img, status) VALUES (".$idM.", '".$titulo."', '".$descricao."', '".$idimagem."', '".$status."');"; 

                    if(mysql_query($sqlMotv)){
                        header('location:adm_login.php');

                    }else{
                        echo $sqlImg;
                        echo $sqlMotv;
                    }

                }
            }
        }
        
        
    }
    
    public function SelectMotivos(){
        $motivos = false;
        
        $sql = "select ml.*, img.*
                from tbl_motivo_login as ml
                inner join tbl_imagem as img
                on ml.id_img = img.id_imagem;";
        
        if($select = mysql_query($sql)){
            
            $cont = 0;
            while($rs = mysql_fetch_array($select)){
                
                $motivos[] = new MotivosLogin();
                
                $motivos[$cont]->id = $rs['id_motivo'];
                $motivos[$cont]->titulo = $rs['titulo'];
                $motivos[$cont]->descricao = $rs['descricao'];
                $motivos[$cont]->imagem = $rs['url'];
                $motivos[$cont]->status = $rs['status'];
                
                $cont++;
            }
            return $motivos;
            
        }else{
            return false;
        }
        
    }
    
    public function DeleteMotivo(){
        $id = $_GET['id'];
       
        $select = mysql_query('select ml.*, img.* 
                    from tbl_motivo_login as ml
                    inner join tbl_imagem as img
                    on ml.id_img = img.id_imagem
                    where ml.id_motivo ='.$id);
        
        while($rs = mysql_fetch_array($select)){
            $id_imagem = $rs['id_imagem'];
        
        }
        
        $sql = "delete from tbl_motivo_login where id_motivo=".$id;
        
        if(mysql_query($sql)){
            $sql = 'delete from tbl_imagem where id_imagem='.$id_imagem;
            
            if(mysql_query($sql)){
                header('location:adm_login.php');
            
            }else{
                echo $sql;

            }
            
        }else{
            echo $sql;
        }
        
        
    }
    
    public function MotivoOn(){
        $id = $_GET['id'];
        
        $sql = "select * from tbl_motivo_login where status=1";
        $select = mysql_query($sql);
        
        $cont = 0;
        while($rs = mysql_fetch_array($select)){
            $cont++;
            
        }
        if($cont >= 3){
    ?>
            <script type="text/javascript">
                rs = alert('Só é possivel mostrar três motivos no site');
                if(rs == 1){
                   window.location="adm_login.php";
                }else{
                    window.location="adm_login.php";
                }
                
            </script>
                
    <?php
            
        }else{
            $sql = 'update tbl_motivo_login set status=1 where id_motivo='.$id;

            if(mysql_query($sql)){
                header('location:adm_login.php');

            }else{
                echo $sql;

            }
            
        }
        
        
    }

    public function MotivoOff(){
        $id = $_GET['id'];
        $sql = 'update tbl_motivo_login set status=0 where id_motivo='.$id;

        if(mysql_query($sql)){
                header('location:adm_login.php');
            
            }else{
                echo $sql;

            }
    }

    public function SelectById($idEditar){
        $sql = "select ml.*, img.*
                from tbl_motivo_login as ml
                inner join tbl_imagem as img
                on ml.id_img = img.id_imagem
                where id_motivo =".$idEditar;
        
        if($select = mysql_query($sql)){
            
            while($rs = mysql_fetch_array($select)){
                
                $motivo = new MotivosLogin();
                
                $motivo->id = $rs['id_motivo'];
                $motivo->titulo = $rs['titulo'];
                $motivo->descricao = $rs['descricao'];
                $motivo->imagem = $rs['url'];
                
            }
            return $motivo;
            
        }else{
            return false;
        }
        
        
    }
    
    public function UpdateMotivo(){
        
        $idEditar = $_GET['id'];
        $titulo = $_POST['txttitulo'];
        $descricao = $_POST['txtDescricao'];
        
        $arq = basename($_FILES['flMotivo']['name']);
        
        if($arq != null){
            $imagem =  'imagens/'.$arq;
            $caminho =  '../'.$imagem;

            $extArq = strtolower(substr($arq, strlen($arq)-3, 3));

            if($extArq == 'jpg' || $extArq == 'png' || $extArq == 'jpeg'){
                if(move_uploaded_file($_FILES['flMotivo']['tmp_name'], $caminho)){
                    $sql = 'select * from tbl_imagem order by id_imagem desc limit 1';
                    $select = mysql_query($sql);

                    if(mysql_affected_rows() > 0){
                        while($rs = mysql_fetch_array($select)){
                            $idimagem = $rs['id_imagem'] + 1;
                        }
                    }else{
                        $idimagem = 1;
                    }

                    $sqlImg = 'insert into tbl_imagem(id_imagem, url) values('.$idimagem.', "'.$imagem.'")';

                    if(mysql_query($sqlImg)){
                       
                        $sql = "update tbl_motivo_login set titulo = '".$titulo."', descricao = '".$descricao."', id_img = '".$idimagem."' where id_motivo = ".$idEditar;
            
                        if(mysql_query($sql)){
                            header('location:adm_login.php');

                        }else{
                            echo $sql;

                        }
                        

                    }
                
                }
            
            }else{
                echo 'Erro na extenção da imagem';
            }
        
        }else{
            $sql = "update tbl_motivo_login set titulo = '".$titulo."', descricao = '".$descricao."' where id_motivo=".$idEditar;
            
            if(mysql_query($sql)){
                header('location:adm_login.php');
                   
            }else{
                echo $sql;
            
            }
            
        }
        
    }

    
    
}

?>