<?php
/**
    Feito por: Larissa
    Data: 13/10/2017
    arquivos relacionados:
       view/destaque_view.php
       model/destaque_class.php
       router.php
**/

class ControllerDestaques{
    
    function ListarDestaques(){
        require_once('model/destaque_class.php');
        $destaque_class = new Destaques();
        $result = $destaque_class->SelectDestaques();

        return $result;
        
    }
    
}

?>