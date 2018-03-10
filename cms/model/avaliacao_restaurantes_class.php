<?php
/*
      Objetivo: Criação da página de avaliação e controle de gorjeta
      Data: 05/10/2017
      Feito por: Larissa
      Arquivos Relacionados: 
        controller/avaliacao_gorjeta_controller.php
*/
    
class AvaliacaoRestaurantes{
    
    public $data;
    public $restaurante;
    public $avaliacao;
    
    function __construct(){
        require_once('model/db_class.php');
        
        $conexao = new Mysql_db();
        $conexao->conectar();
    }
    
    public function SelectAvaliacoes(){
        $sql = "select cast(avg(a.avaliacao) as decimal(2,1)) as avaliacao,
        c.nome as cliente, r.Nome as restaurante, a.data 
        from tbl_avaliacao as a
        inner join tbl_cliente as c 
        on a.id_cliente = c.id_cliente
        inner join tbl_avaliacao_restaurante as ar 
        on ar.id_avaliacao = a.id_avaliacao
        inner join tbl_restaurante as r 
        on r.id_restaurante = ar.id_restaurante
        group by r.Nome";
        
        if($select = mysql_query($sql)){
            
            $cont = 0;
            while($rs = mysql_fetch_array($select)){
                
                $restaurantes[] = new AvaliacaoRestaurantes();
                
                $restaurantes[$cont]->data = $rs['data'];
                $restaurantes[$cont]->avaliacao = $rs['avaliacao'];
                $restaurantes[$cont]->restaurante = $rs['restaurante'];
                
                $cont++;
                
            }
            return $restaurantes;
        }else{
            echo '';
        }
        
    }
    
    public function SelectAvaliacoesFiltro($filtro){
        
        switch ($filtro){
            case 'Dia':
                $sql = "select cast(avg(a.avaliacao) as decimal(2,1)) as avaliacao,
                        c.nome as cliente, r.Nome as restaurante, a.data 
                        from tbl_avaliacao as a
                        inner join tbl_cliente as c 
                        on a.id_cliente = c.id_cliente
                        inner join tbl_avaliacao_restaurante as ar 
                        on ar.id_avaliacao = a.id_avaliacao
                        inner join tbl_restaurante as r 
                        on r.id_restaurante = ar.id_restaurante
                        group by day(a.data)";
                
                break;
            case 'Semana':
                $sql = "select cast(avg(a.avaliacao) as decimal(2,1)) as avaliacao,
                        c.nome as cliente, r.Nome as restaurante, a.data 
                        from tbl_avaliacao as a
                        inner join tbl_cliente as c 
                        on a.id_cliente = c.id_cliente
                        inner join tbl_avaliacao_restaurante as ar 
                        on ar.id_avaliacao = a.id_avaliacao
                        inner join tbl_restaurante as r 
                        on r.id_restaurante = ar.id_restaurante
                        group by week(a.data)";
                
                break;
            case 'Mês':
                $sql = "select cast(avg(a.avaliacao) as decimal(2,1)) as avaliacao,
                        c.nome as cliente, r.Nome as restaurante, a.data 
                        from tbl_avaliacao as a
                        inner join tbl_cliente as c 
                        on a.id_cliente = c.id_cliente
                        inner join tbl_avaliacao_restaurante as ar 
                        on ar.id_avaliacao = a.id_avaliacao
                        inner join tbl_restaurante as r 
                        on r.id_restaurante = ar.id_restaurante
                        group by month(a.data)";
                
                break;
            case 'Ano':
                $sql = "select cast(avg(a.avaliacao) as decimal(2,1)) as avaliacao,
                        c.nome as cliente, r.Nome as restaurante, a.data 
                        from tbl_avaliacao as a
                        inner join tbl_cliente as c 
                        on a.id_cliente = c.id_cliente
                        inner join tbl_avaliacao_restaurante as ar 
                        on ar.id_avaliacao = a.id_avaliacao
                        inner join tbl_restaurante as r 
                        on r.id_restaurante = ar.id_restaurante
                        group by year(a.data)";
                
                break;
            case '':
                echo 'Vazio';
                break;
        }
        
        if($select = mysql_query($sql)){
            
            $cont = 0;
            while($rs = mysql_fetch_array($select)){
                
                $restaurantes[] = new AvaliacaoRestaurantes();
                
                $restaurantes[$cont]->data = $rs['data'];
                $restaurantes[$cont]->avaliacao = $rs['avaliacao'];
                $restaurantes[$cont]->restaurante = $rs['restaurante'];
                
                $cont++;
                
            }
            return $restaurantes;
        }else{
            echo '';
        }
    }
}
?>