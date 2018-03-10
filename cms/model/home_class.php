<?php
/*
    Feito por: Larissa
    Data: 21/10/2017
*/

class Home{
    
    public $id;
    public $idSlide;
    public $imagem;
    public $idCarrossel;
    public $id_menu;
    public $titulo;
    public $descricao;
    public $area;

    function __construct(){
        require_once('model/db_class.php');
        $conexao = new Mysql_db();
        $conexao->conectar();
    }
    
    public function InsertImagemSlide(){
        $arq = basename($_FILES['flSlide']['name']);
        $imagem =  'imagens/'.$arq;
        $caminho =  '../'.$imagem;
        
        $extArq = strtolower(substr($arq, strlen($arq)-3, 3));
        
        if($extArq == 'jpg' || $extArq == 'png' || $extArq == 'jpeg'){
            if(move_uploaded_file($_FILES['flSlide']['tmp_name'], $caminho)){
                
                $sql = "insert into tbl_home_slide(url) values('".$imagem."')";
                if(mysql_query($sql)){
                    header('location:adm_home.php');

                }else{
                    echo $sql;
                }

            }else{
                echo 'ERROO ao mover';
            }
            
        }else{
            echo "<script> alert('Erro na extensão do arquivo'); </script>";
        }
        
        
    }
    
    public function UpdateImagemSlide(){
        $id = $_GET['id'];
        $arq = basename($_FILES['flSlide']['name']);
        $imagem =  'imagens/'.$arq;
        $caminho =  '../'.$imagem;
        
        $extArq = strtolower(substr($arq, strlen($arq)-3, 3));
        
        if($extArq == 'jpg' || $extArq == 'png' || $extArq == 'jpeg'){
            if(move_uploaded_file($_FILES['flSlide']['tmp_name'], $caminho)){
                
                $sql = "update tbl_home_slide set url = '".$imagem."' where id_home_slide=".$id;
                if(mysql_query($sql)){
                    header('location:adm_home.php');

                }else{
                    echo $sql;
                }

            }else{
                echo 'ERROO ao mover';
            }
            
        }else{
            echo "<script> alert('Erro na extensão do arquivo'); </script>";
        }
        
    }
    
    public function DeleteImagemSlide(){
        $id = $_GET['id'];
        $sql = "delete from tbl_home_slide where id_home_slide = ".$id;
        if(mysql_query($sql)){
            header('location:adm_home.php');

        }else{
            echo $sql;
        }
        
    }
    
    public function SelectImagensSlide(){
        $sql = "select * from tbl_home_slide";
        
        if($select = mysql_query($sql)){
            
            $slide_class = false;
            $cont = 0;
            while($rs = mysql_fetch_array($select)){
                $slide_class[] = new Home();
                
                $slide_class[$cont]->idSlide = $rs['id_home_slide'];
                $slide_class[$cont]->imagem = $rs['url'];
                
                $cont ++;
            }
            
            return $slide_class;
            
        }else{
            return false;
        }
        
        
    }
    
    public function InsertSlideCarrossel(){
        $arq = basename($_FILES['flCarrossel']['name']);
        $imagem =  'imagens/'.$arq;
        $caminho =  '../'.$imagem;
        
        $extArq = strtolower(substr($arq, strlen($arq)-3, 3));
        
        if($extArq == 'jpg' || $extArq == 'png' || $extArq == 'jpeg'){
            if(move_uploaded_file($_FILES['flCarrossel']['tmp_name'], $caminho)){
                
                $sql = "insert into tbl_home_carrossel(url) values('".$imagem."')";
                if(mysql_query($sql)){
                    header('location:adm_home.php?#carrossel');

                }else{
                    echo $sql;
                }

            }else{
                echo 'ERROO ao mover';
            }
            
        }else{
            echo "<script> alert('Erro na extensão do arquivo'); </script>";
        }
        
    }
    
    public function UpdateSlideCarrossel(){
        $id = $_GET['id'];
        $arq = basename($_FILES['flCarrossel']['name']);
        $imagem =  'imagens/'.$arq;
        $caminho =  '../'.$imagem;
        
        $extArq = strtolower(substr($arq, strlen($arq)-3, 3));
        
        if($extArq == 'jpg' || $extArq == 'png' || $extArq == 'jpeg'){
            if(move_uploaded_file($_FILES['flCarrossel']['tmp_name'], $caminho)){
                
                $sql = "update tbl_home_carrossel set url='".$imagem."' where id_home_carrossel = ".$id;
                if(mysql_query($sql)){
                    header('location:adm_home.php?#carrossel');

                }else{
                    echo $sql;
                }

            }else{
                echo 'ERROO ao mover';
            }
            
        }else{
            echo "<script> alert('Erro na extensão do arquivo'); </script>";
        }
        
    }
    
    public function DeleteSlideCarrossel(){
        $id = $_GET['id'];
        $sql = "delete from tbl_home_carrossel where id_home_carrossel = ".$id;
        if(mysql_query($sql)){
            header('location:adm_home.php?#carrossel');

        }else{
            echo $sql;
        }
        
    }
    
    public function SelectImagensCarrossel(){
        $sql = "select * from tbl_home_carrossel";
        
        if($select = mysql_query($sql)){
            $carrossel_class = false;
            $cont = 0;
            while($rs = mysql_fetch_array($select)){
                $carrossel_class[] = new Home();
                
                $carrossel_class[$cont]->idCarrossel = $rs['id_home_carrossel'];
                $carrossel_class[$cont]->imagem = $rs['url'];
                
                $cont ++;
            }
            
            return $carrossel_class;
            
        }else{
            return false;
        }
        
    }
    
    public function UpdateMenu(){
        $id = $_GET['id'];
        $area = $_GET['area'];
        $titulo = $_POST['txtTitulo'];
        $descricao =$_POST['txtDescricao'];
        
        $arq = basename($_FILES['flMenu']['name']);
        
        if($arq == null){
            $sql = "update tbl_home_menu set titulo= '".$titulo."', descricao ='".$descricao."' where id_menu = ".$id;
            
        }else{
            $imagem = new Home();
            $img = $imagem->CadastrarImagem();
            
            $sql = "update tbl_home_menu set titulo= '".$titulo."', descricao ='".$descricao."', imagem = '".$img."'  where id_menu = ".$id;
            
        }
        
        
        if(mysql_query($sql)){
            header('Location:adm_home.php');
        }else{
            echo $sql;
        }
    }
    
    public function SelectMenu(){
        $menu = false;
        
        $sql = "select * from tbl_home_menu";
        if($select = mysql_query($sql)){
            
            $cont = 0;
            while($rs = mysql_fetch_array($select)){
                
                $menu[] = new Home();
                
                $menu[$cont]->id = $rs['id_menu'];
                $menu[$cont]->imagem = $rs['imagem'];
                $menu[$cont]->titulo = $rs['titulo'];
                $menu[$cont]->descricao = $rs['descricao'];
                $menu[$cont]->area = $rs['area'];
                
                $cont++;
            }
            
            return $menu;
        }else{
            $cont = 0;
            while($cont < 8){
                
                $menu[] = new Home();
                
                $menu[$cont]->id = 0;
                $menu[$cont]->imagem = 'imagens/sem-registro.png';
                $menu[$cont]->titulo = ' Ainda não há registro';
                $menu[$cont]->descricao = '';
                $menu[$cont]->area = $cont;
                
                $cont++;
            }
            
            return $menu;
        }
            
    }
     
    public function CadastrarImagem(){
        $arq = basename($_FILES['flMenu']['name']);
        $imagem =  'imagens/'.$arq;
        $caminho =  '../'.$imagem;
        
        $extArq = strtolower(substr($arq, strlen($arq)-3, 3));
        
        if($extArq == 'jpg' || $extArq == 'png' || $extArq == 'jpeg'){
            if(move_uploaded_file($_FILES['flMenu']['tmp_name'], $caminho)){
                
                return $imagem;
                
            }else{
                return false;
            }
            
        }else{
            echo "<script> alert('Erro na extensão do arquivo'); </script>";
        }
    }
    
    
}


?>