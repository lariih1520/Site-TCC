<?php
/**
    Feito por: Larissa
    Data: 23/10/2017
**/

class ControllerHome{
    
    public function ListarSlide(){
        require_once('model/home_class.php');
        $home_class = new Home();
        $result = $home_class->SelectSlide();

        return $result;
        
    }
    
    public function ListarCarrossel(){
        require_once('model/home_class.php');
        $home_class = new Home();
        $result = $home_class->SelectCarrossel();

        return $result;
        
    }
    
    public function ListarMenu(){
        require_once('model/home_class.php');
        $home_class = new Home();
        $result = $home_class->SelectMenu();

        return $result;
        
    }
    
}

?>