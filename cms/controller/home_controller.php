<?php
/*
    Feito por: Larissa
    Data: 21/10/2017
*/

class ControllerHome{
    
    public function SalvarImagemSlide(){
        require_once('model/home_class.php');
        $home_class = new Home();
        $home_class->InsertImagemSlide();
    }
    
    public function EditarImagemSlide(){
        require_once('model/home_class.php');
        $home_class = new Home();
        $home_class->UpdateImagemSlide();
    }
    
    public function ExcluirImagemSlide(){
        require_once('model/home_class.php');
        $home_class = new Home();
        $home_class->DeleteImagemSlide();
    }
    
    public function ListarImagensSlide(){
        require_once('model/home_class.php');
        $home_class = new Home();
        $rs = $home_class->SelectImagensSlide();
        
        return $rs;
    }
    
    public function SalvarSlideCarrossel(){
        require_once('model/home_class.php');
        $home_class = new Home();
        $home_class->InsertSlideCarrossel();
    }
    
    public function EditarSlideCarrossel(){
        require_once('model/home_class.php');
        $home_class = new Home();
        $home_class->UpdateSlideCarrossel();
    }
    
    public function ExcluirSlideCarrossel(){
        require_once('model/home_class.php');
        $home_class = new Home();
        $home_class->DeleteSlideCarrossel();
    }
    
    public function ListarImagensCarrossel(){
        require_once('model/home_class.php');
        $home_class = new Home();
        $rs = $home_class->SelectImagensCarrossel();
        
        return $rs;
    }
    
    public function EditarMenu(){
        require_once('model/home_class.php');
        $home_class = new Home();
        $home_class->UpdateMenu();
    }
    
    public function ListarMenu(){
        require_once('model/home_class.php');
        $home_class = new Home();
        $rs = $home_class->SelectMenu();
        
        return $rs;
    }
    
    
}


?>