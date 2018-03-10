<?php
/**
    Data: 18/10/2017
**/

class ControllerPrato{
    
    public function CadastrarPrato(){
        require_once('model/prato_class.php');
        $prato_class = new Pratos();
        $result = $prato_class->InsertPrato();
        
        return $result;
    } 
    
    public function EditarPrato(){
        require_once('model/prato_class.php');
        $prato_class = new Pratos();
        $result = $prato_class->UpdatePrato();
        
        return $result;
    } 
    
    public function ExcluirPrato(){
        require_once('model/prato_class.php');
        $prato_class = new Pratos();
        $result = $prato_class->DeletePrato();
        
        return $result;
    }
    
    public function BuscarPrato($id){
        require_once('model/prato_class.php');
        $prato_class = new Pratos();
        $result = $prato_class->SelectPratoById($id);
        
        return $result;
    }
    
    public function ListarPratos(){
        require_once('model/prato_class.php');
        $prato_class = new Pratos();
        $result = $prato_class->SelectPratos();
        
        return $result;
    }
    
    public function ListarTipoPrato(){
        require_once('model/prato_class.php');
        $prato_class = new Pratos();
        $result = $prato_class->SelectTipo();
        
        return $result;
    }
    
    public function ListarCategorias(){
        require_once('model/prato_class.php');
        $prato_class = new Pratos();
        $result = $prato_class->SelectCategorias();
        
        return $result;
    }
    
    public function ListarIngredientes(){
        require_once('model/prato_class.php');
        $prato_class = new Pratos();
        $result = $prato_class->SelectIngredientes();
        
        return $result;
    } 
    
    public function ListarFiliais(){
        require_once('model/prato_class.php');
        $prato_class = new Pratos();
        $result = $prato_class->SelectFiliais();
        
        return $result;
    } 
    
    /* Para editar o prato */
    public function CategoriaPrato($id){
        require_once('model/prato_class.php');
        $prato_class = new Pratos();
        $result = $prato_class->SelectCategoriaPrato($id);
        
        return $result;
    }
    
    public function IngredientePrato($id){
        require_once('model/prato_class.php');
        $prato_class = new Pratos();
        $result = $prato_class->SelectIngredientePrato($id);
        
        return $result;
    } 
    
    public function FilialPrato($id){
        require_once('model/prato_class.php');
        $prato_class = new Pratos();
        $result = $prato_class->SelectPratoFiliais($id);
        
        return $result;
    } 
    
    
}

?>