<?php
/*
  Objetivo: Criação da página de avaliação dos produtos
  Data: 14/10/2017
  Feito por: Larissa
  Arquivos Relacionados: 
    router.php
    views/avaliacao_produtos_view.php
    model/avaliacao_produtos_class.php
*/

class ControllerAvaliacaoProdutos{
    
    public function ListarAvaliacoes(){
        require_once('model/avaliacao_produtos_class.php');
        $avaliacoes_class = new AvaliacaoProdutos();
        $lista = $avaliacoes_class->SelectAvaliacoes();
        
        return $lista;
    }
    
    public function ListarAvaliacoesFiltro($filtro){
        require_once('model/avaliacao_produtos_class.php');
        $avaliacoes_class = new AvaliacaoProdutos();
        $lista = $avaliacoes_class->SelectAvaliacoesFiltro($filtro);
        
        return $lista;
    }
    
    
}



?>