<?php

class ControllerMotivos{
    
    public function CadastrarMotivo(){
        require_once('model/login_class.php');
        $motivo_class = new MotivosLogin();

        $motivo_class->InsertMotivo();
        
    }
    
    public function EditarMotivo(){
        require_once('model/login_class.php');
        $motivo_class = new MotivosLogin();

        $motivo_class->UpdateMotivo();
        
    }
    
    public function ListarMotivos(){
        require_once('model/login_class.php');
        $motivo_class = new MotivosLogin();

        $result = $motivo_class->SelectMotivos();
        
        return $result;
    }
    
    public function BuscarMotivo($id){
        require_once('model/login_class.php');
        $motivo_class = new MotivosLogin();

        $result = $motivo_class->SelectById($id);
        
        return $result;
    }
    
    public function ExcluirMotivo(){
        require_once('model/login_class.php');
        $motivo_class = new MotivosLogin();

        $motivo_class->DeleteMotivo();
        
    }
    
    public function MotivoOn(){
        require_once('model/login_class.php');
        $motivo_class = new MotivosLogin();

        $motivo_class->MotivoOn();
        
    }
    
    public function MotivoOff(){
        require_once('model/login_class.php');
        $motivo_class = new MotivosLogin();

        $motivo_class->MotivoOff();
        
    }
    
}

?>