<?php

/**
    Feito por: Larissa
    Data: 23/10/2017
**/

class ControllerCardapio{
    
    public function ListarCategorias(){
        require_once('model/cardapio_class.php');
        $cardapio_class = new Cardapio();
        $result = $cardapio_class->SelectCategorias();

        return $result;
        
    }
    
    public function BuscarCategoria($id_categoria){
        require_once('model/cardapio_class.php');
        $cardapio_class = new Cardapio();
        $result = $cardapio_class->SelectCategoriaById($id_categoria);

        return $result;
        
    }
    
    public function ListarPratosCategoria($id){
        require_once('model/cardapio_class.php');
        $cardapio_class = new Cardapio();
        $result = $cardapio_class->SelectPratosCategoria($id);

        return $result;
        
    }
    
    public function BuscarPrato($id_prato){
        require_once('model/cardapio_class.php');
        $cardapio_class = new Cardapio();
        $result = $cardapio_class->SelectPratoById($id_prato);

        return $result;
        
    }
    
    public function IngredientesPrato($id){
        require_once('model/cardapio_class.php');
        $cardapio_class = new Cardapio();
        $result = $cardapio_class->SelectIngredientesPrato($id);

        return $result;
        
    }
    
    public function Pequisar(){
        require_once('model/cardapio_class.php');
        $cardapio_class = new Cardapio();
        $result = $cardapio_class->Pequisar();

        return $result;
        
    }
    
}

?>



