<?php
/*
      Objetivo: Criação da página de avaliação e controle de gorjeta
      Data: 05/10/2017
      Feito por: Larissa
      Arquivos Relacionados: 
        controller/avaliacao_gorjeta_controller.php
*/
    
class GorjetasAvaliacoes{
    
    function __construct(){
        require_once('model/db_class.php');
        
        $conexao = new Mysql_db();
        $conexao->conectar();
    }
    
    public function SelectGorjetas(){
        $sql = "
        select prod.nome as prato, p.data, p.id_mesa, 
        f.nome as funcionario, c.nome as cliente, sum(prod.preco) as preco
        from tbl_pedido as p
        inner join tbl_cliente as c
        on c.id_cliente = p.id_cliente
        inner join tbl_pedido_produto as pp
        on p.id_pedido = pp.id_pedido
        inner join tbl_produto as prod
        on prod.id_produto = pp.id_produto
        inner join tbl_funcionario as f
        on f.id_funcionario = p.id_funcionario
        group by c.id_cliente;";
        
        if($select = mysql_query($sql)){
            
            $cont = 0;
            while($rs = mysql_fetch_array($select)){
                
                $gorjetas[] = new GorjetasAvaliacoes();
                
                $preco = $rs['preco'];
                $precogorjeta = ($preco * 10)/100;
                $gorjet = explode(".", $precogorjeta);
                if(@$gorjet[1] == ''){
                    $gorjet[1] = '00';
                }
                $gorjeta = $gorjet[0].",".$gorjet[1];
                
                $gorjetas[$cont]->gorjeta = $gorjeta;
                $gorjetas[$cont]->data = $rs['data'];
                $gorjetas[$cont]->cliente = $rs['cliente'];
                $gorjetas[$cont]->funcionario = $rs['funcionario'];
                
                $cont++;
                
            }
            return $gorjetas;
        }else{
            echo '';
        }
        
    }
    
    public function SelectGorjetasFiltro($filtro){
        
        switch ($filtro){
            case 'Dia':
                $sql = "select prod.nome as prato, p.data, p.id_mesa,
                f.nome as funcionario, c.nome as cliente, sum(prod.preco) as preco
                from tbl_pedido as p
                inner join tbl_cliente as c
                on c.id_cliente = p.id_cliente
                inner join tbl_pedido_produto as pp
                on p.id_pedido = pp.id_pedido
                inner join tbl_produto as prod
                on prod.id_produto = pp.id_produto
                inner join tbl_funcionario as f
                on f.id_funcionario = p.id_funcionario
                group by p.data";
                
                break;
            case 'Semana':
                $sql = "select prod.nome as prato, p.data, p.id_mesa,
                f.nome as funcionario, c.nome as cliente, sum(prod.preco) as preco
                from tbl_pedido as p
                inner join tbl_cliente as c
                on c.id_cliente = p.id_cliente
                inner join tbl_pedido_produto as pp
                on p.id_pedido = pp.id_pedido
                inner join tbl_produto as prod
                on prod.id_produto = pp.id_produto
                inner join tbl_funcionario as f
                on f.id_funcionario = p.id_funcionario
                group by week(p.data);";
                
                break;
            case 'Mês':
                $sql = "select prod.nome as prato, p.data, p.id_mesa,
                f.nome as funcionario, c.nome as cliente, sum(prod.preco) as preco
                from tbl_pedido as p
                inner join tbl_cliente as c
                on c.id_cliente = p.id_cliente
                inner join tbl_pedido_produto as pp
                on p.id_pedido = pp.id_pedido
                inner join tbl_produto as prod
                on prod.id_produto = pp.id_produto
                inner join tbl_funcionario as f
                on f.id_funcionario = p.id_funcionario
                group by month(p.data);";
                
                break;
            case 'Ano':
                $sql = "select prod.nome as prato, p.data, p.id_mesa,
                f.nome as funcionario, c.nome as cliente, sum(prod.preco) as preco
                from tbl_pedido as p
                inner join tbl_cliente as c
                on c.id_cliente = p.id_cliente
                inner join tbl_pedido_produto as pp
                on p.id_pedido = pp.id_pedido
                inner join tbl_produto as prod
                on prod.id_produto = pp.id_produto
                inner join tbl_funcionario as f
                on f.id_funcionario = p.id_funcionario
                group by year(p.data);";
                
                break;
            case '':
                echo 'Vazio';
                break;
        }
        
        if($select = mysql_query($sql)){
            
            $cont = 0;
            while($rs = mysql_fetch_array($select)){
                
                $gorjetas[] = new GorjetasAvaliacoes();
                
                $preco = $rs['preco'];
                $precogorjeta = ($preco * 10)/100;
                $gorjet = explode(".", $precogorjeta);
                if(@$gorjet[1] == ''){
                    $gorjet[1] = '00';
                }
                $gorjeta = $gorjet[0].",".$gorjet[1];
                
                $gorjetas[$cont]->gorjeta = $gorjeta;
                $gorjetas[$cont]->data = $rs['data'];
                $gorjetas[$cont]->cliente = $rs['cliente'];
                $gorjetas[$cont]->funcionario = $rs['funcionario'];
                
                $cont++;
                
            }
            return $gorjetas;
        }else{
            echo '';
        }
    }
    
    public function SelectAvaliacoes(){
        $sql = "
        select c.nome as cliente, cast(avg(av.avaliacao) as decimal(5, 1)) as avaliacao,
        f.nome as funcionario, av.data
        from tbl_cliente as c
        inner join tbl_avaliacao as av
        on av.id_cliente = c.id_cliente
        inner join tbl_avaliacao_funcionario as af
        on av.id_avaliacao = af.id_avaliacao
        inner join tbl_funcionario as f
        on f.id_funcionario = af.id_funcionario
        group by f.nome";
        
        if($select = mysql_query($sql)){
            
            $cont = 0;
            while($rs = mysql_fetch_array($select)){
                
                $avaliacoes[] = new GorjetasAvaliacoes();
                
                $avaliacoes[$cont]->avaliacao = $rs['avaliacao'];
                $avaliacoes[$cont]->cliente = $rs['cliente'];
                $avaliacoes[$cont]->funcionario = $rs['funcionario'];
                
                $cont++;
                
            }
            return $avaliacoes;
        }else{
            echo 'Erro ao buscar dados';
        }
        
    }
    
    public function SelectAvaliacoesFiltro($filtro){
        
        switch ($filtro){
            case 'Dia':
                $sql = "select c.nome as cliente, cast(avg(av.avaliacao) as decimal(5, 1)) as avaliacao,
                f.nome as funcionario, av.data
                from tbl_cliente as c
                inner join tbl_avaliacao as av
                on av.id_cliente = c.id_cliente
                inner join tbl_avaliacao_funcionario as af
                on av.id_avaliacao = af.id_avaliacao
                inner join tbl_funcionario as f
                on f.id_funcionario = af.id_funcionario
                group by av.data";
                
                break;
            case 'Semana':
                $sql = "select c.nome as cliente, cast(avg(av.avaliacao) as decimal(5, 1)) as avaliacao,
                f.nome as funcionario, av.data
                from tbl_cliente as c
                inner join tbl_avaliacao as av
                on av.id_cliente = c.id_cliente
                inner join tbl_avaliacao_funcionario as af
                on av.id_avaliacao = af.id_avaliacao
                inner join tbl_funcionario as f
                on f.id_funcionario = af.id_funcionario
                group by week(av.data)";
                
                break;
            case 'Mês':
                $sql = "select c.nome as cliente, cast(avg(av.avaliacao) as decimal(5, 1)) as avaliacao,
                f.nome as funcionario, av.data
                from tbl_cliente as c
                inner join tbl_avaliacao as av
                on av.id_cliente = c.id_cliente
                inner join tbl_avaliacao_funcionario as af
                on av.id_avaliacao = af.id_avaliacao
                inner join tbl_funcionario as f
                on f.id_funcionario = af.id_funcionario
                group by month(av.data)";
                
                break;
            case 'Ano':
                $sql = "select c.nome as cliente, cast(avg(av.avaliacao) as decimal(5, 1)) as avaliacao,
                f.nome as funcionario, av.data
                from tbl_cliente as c
                inner join tbl_avaliacao as av
                on av.id_cliente = c.id_cliente
                inner join tbl_avaliacao_funcionario as af
                on av.id_avaliacao = af.id_avaliacao
                inner join tbl_funcionario as f
                on f.id_funcionario = af.id_funcionario
                group by year(av.data)";
                
                break;
            case '':
                echo 'Vazio';
                break;
        }
        
        if($select = mysql_query($sql)){
            
            $cont = 0;
            while($rs = mysql_fetch_array($select)){
                
                $avaliacoes[] = new GorjetasAvaliacoes();
                
                $avaliacoes[$cont]->data = $rs['data'];
                $avaliacoes[$cont]->avaliacao = $rs['avaliacao'];
                $avaliacoes[$cont]->cliente = $rs['cliente'];
                $avaliacoes[$cont]->funcionario = $rs['funcionario'];
                
                $cont++;
                
            }
            return $avaliacoes;
        }else{
            echo 'Erro ao buscar dados';
        }
        
    }
    
}

    
?>