<?php
/*
  Objetivo: Criação da página de avaliação dos restaurantes
  Data: 14/10/2017
  Feito por: Larissa
  Arquivos Relacionados: 
    router.php
    views/avaliacao_restaurantes_view.php
    model/avaliacao_restaurantes_class.php
*/

class ControllerAvaliacaoRestaurantes{
    
    public function ListarAvaliacoes(){
        require_once('model/avaliacao_restaurantes_class.php');
        $avaliacoes_class = new AvaliacaoRestaurantes();
        $lista = $avaliacoes_class->SelectAvaliacoes();
        
        return $lista;
        
    }
    
    public function ListarAvaliacoesFiltro($filtro){
        require_once('model/avaliacao_restaurantes_class.php');
        $avaliacoes_class = new AvaliacaoRestaurantes();
        $lista = $avaliacoes_class->SelectAvaliacoesFiltro($filtro);
        
        return $lista;
    }
    
    
}


?>