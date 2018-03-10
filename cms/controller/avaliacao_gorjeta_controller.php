<?php
  /*
  Objetivo: Criação da página de avaliação e controle de gorjeta
  Data: 05/10/2017
  Feito por: Larissa
  Arquivos Relacionados: 
    router.php
    views/gorjeta_avaliacao_view.php
    model/avaliacao_gorjeta_class.php
  */
class ControllerGorjetasAvaliacoes
{
    public function ListarGorjetas(){
        require_once('model/avaliacao_gorjeta_class.php');
        $gorjetas = new GorjetasAvaliacoes();
        
        return $gorjetas->SelectGorjetas();
        
    }
    
    public function ListarGorjetasFiltro($filtro){
        require_once('model/avaliacao_gorjeta_class.php');
        $ListarGorjetas = new GorjetasAvaliacoes();
        
        return $ListarGorjetas->SelectGorjetasFiltro($filtro);
    }
    
    public function ListarAvaliacoes(){
        require_once('model/avaliacao_gorjeta_class.php');
        $avaliacoes = new GorjetasAvaliacoes();
        
        return $avaliacoes->SelectAvaliacoes();
        
    }
    
    public function ListarAvaliacoesFiltro($filtro){
        require_once('model/avaliacao_gorjeta_class.php');
        $ListarAvaliacoes = new GorjetasAvaliacoes();
        
        return $ListarAvaliacoes->SelectAvaliacoesFiltro($filtro);
        
    }
    
    
    /* A função desta classe é mandar as informações para o select do filtro.
    É posivel filtrar por dia, semana, mes e ano, assim as informações do select tambem mudam */
    public function FiltroSelect($filtrar){
        
        switch ($filtrar){
            case 'Funcionário':
                $listaSelect[0] = '---';
                
                break;
                
            case 'Dia':
                $cont = 0;
                while($cont < 30){
                    $listaSelect[$cont] = $cont + 1;
                    $cont++;
                }
                
                break;
                
            case 'Semana':
                $listaSelect = '---';
                break;
                
            case 'Mês':
                $listaSelect[0] = 'Janeiro';
                $listaSelect[1] = 'Fevereiro';
                $listaSelect[2] = 'Março';
                $listaSelect[3] = 'Abril';
                $listaSelect[4] = 'Maio';
                $listaSelect[5] = 'Junho';
                $listaSelect[6] = 'Julho';
                $listaSelect[7] = 'Agosto';
                $listaSelect[8] = 'Setembro';
                $listaSelect[9] = 'Outubro';
                $listaSelect[10] = 'Novembro';
                $listaSelect[11] = 'Dezembro';
                break;
                
            case 'Ano':
                $listaSelect[0] = '2017';
                break;
                
            default:
                $listaSelect = 'ERRO';
                break;
        }
        return $listaSelect;
        
        
    }
    
}





?>