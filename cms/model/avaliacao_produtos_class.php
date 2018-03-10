<?php
/*
      Objetivo: Criação da página de avaliação e controle de gorjeta
      Data: 05/10/2017
      Feito por: Larissa
      Arquivos Relacionados: 
        controller/avaliacao_gorjeta_controller.php
*/
    
class AvaliacaoProdutos{
    
    public $data;
    public $produto;
    public $avaliacao;
    
    function __construct(){
        require_once('model/db_class.php');
        
        $conexao = new Mysql_db();
        $conexao->conectar();
    }
    
    public function SelectAvaliacoes(){
        $sql = "select cast(avg(a.avaliacao) as decimal(2,1)) as avaliacao,
        c.nome as cliente, p.nome as produto, a.data 
        from tbl_avaliacao as a
        inner join tbl_cliente as c 
        on a.id_cliente = c.id_cliente
        inner join tbl_avaliacao_produto as ap 
        on ap.id_avaliacao = a.id_avaliacao
        inner join tbl_produto as p 
        on p.id_produto = ap.id_produto
        group by p.nome";
        
        if($select = mysql_query($sql)){
            
            $cont = 0;
            while($rs = mysql_fetch_array($select)){
                
                $produtos[] = new AvaliacaoProdutos();
                
                $produtos[$cont]->data = $rs['data'];
                $produtos[$cont]->produto = $rs['produto'];
                $produtos[$cont]->avaliacao = $rs['avaliacao'];
                
                $cont++;
                
            }
            return $produtos;
        }else{
            echo '';
        }
        
    }
    
    public function SelectAvaliacoesFiltro($filtro){
        
        switch ($filtro){
            case 'Dia':
                $sql = "select cast(avg(a.avaliacao) as decimal(2,1)) as avaliacao,
                        c.nome as cliente, p.nome as produto, a.data 
                        from tbl_avaliacao as a
                        inner join tbl_cliente as c 
                        on a.id_cliente = c.id_cliente
                        inner join tbl_avaliacao_produto as ap 
                        on ap.id_avaliacao = a.id_avaliacao
                        inner join tbl_produto as p 
                        on p.id_produto = ap.id_produto
                        group by a.data";
                
                break;
            case 'Semana':
                $sql = "select cast(avg(a.avaliacao) as decimal(2,1)) as avaliacao,
                        c.nome as cliente, p.nome as produto, a.data 
                        from tbl_avaliacao as a
                        inner join tbl_cliente as c 
                        on a.id_cliente = c.id_cliente
                        inner join tbl_avaliacao_produto as ap 
                        on ap.id_avaliacao = a.id_avaliacao
                        inner join tbl_produto as p 
                        on p.id_produto = ap.id_produto
                        group by week(a.data)";
                
                break;
            case 'Mês':
                $sql = "select cast(avg(a.avaliacao) as decimal(2,1)) as avaliacao,
                        c.nome as cliente, p.nome as produto, a.data 
                        from tbl_avaliacao as a
                        inner join tbl_cliente as c 
                        on a.id_cliente = c.id_cliente
                        inner join tbl_avaliacao_produto as ap 
                        on ap.id_avaliacao = a.id_avaliacao
                        inner join tbl_produto as p 
                        on p.id_produto = ap.id_produto
                        group by month(a.data)";
                
                break;
            case 'Ano':
                $sql = "select cast(avg(a.avaliacao) as decimal(2,1)) as avaliacao,
                        c.nome as cliente, p.nome as produto, a.data 
                        from tbl_avaliacao as a
                        inner join tbl_cliente as c 
                        on a.id_cliente = c.id_cliente
                        inner join tbl_avaliacao_produto as ap 
                        on ap.id_avaliacao = a.id_avaliacao
                        inner join tbl_produto as p 
                        on p.id_produto = ap.id_produto
                        group by year(a.data)";
                
                break;
            case '':
                echo 'Vazio';
                break;
        }
        
        if($select = mysql_query($sql)){
            
            $cont = 0;
            while($rs = mysql_fetch_array($select)){
                
                $produtos[] = new AvaliacaoProdutos();
                
                $produtos[$cont]->data = $rs['data'];
                $produtos[$cont]->avaliacao = $rs['avaliacao'];
                $produtos[$cont]->produto = $rs['produto'];
                
                $cont++;
                
            }
            return $produtos;
            
        }else{
            echo '';
        }
    }

}

?>