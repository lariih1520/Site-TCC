<?php


  class Cardapio{

    public $idCategoria;
    public $categoria;
    public $id_prato;
    public $prato;
    public $titulo;
    public $preco;
    public $descricao;
    public $imagem;
    public $id_ingrediente;
    public $ingrediente;

    public function __construct(){

        require_once('model/db_class.php');

        $conexao_db = new Mysql_db();
        $conexao_db->conectar();

    }

    public function SelectCategorias(){
      $sql = "
        select tp.* 
        from tbl_tipo_prato as tp
        inner join tbl_produto as p
        on tp.id_tipo_prato = p.tipo_produto
        group by tp.id_tipo_prato";
        
      if($select = mysql_query($sql)){

        $cont = 0;
        while($rs=mysql_fetch_array($select)){
            $categorias[] = new Cardapio();

            $categorias[$cont]->idCategoria = $rs['id_tipo_prato'];
            $categorias[$cont]->categoria = $rs['nome'];

            $cont++;
        }
        return $categorias;

      }else{
        return false;
      }

    }

    public function SelectCategoriaById($id_categoria){
      $sql = "
        select * from tbl_tipo_prato where id_tipo_prato = ".$id_categoria;
        
      if($select = mysql_query($sql)){

        $cont = 0;
        while($rs=mysql_fetch_array($select)){
            $categorias[] = new Cardapio();

            $categorias[$cont]->idCategoria = $rs['id_tipo_prato'];
            $categorias[$cont]->categoria = $rs['nome'];

            $cont++;
        }
        return $categorias;

      }else{
        return false;
      }

    }

    public function SelectPratosCategoria($id){
        $sql = "select prod.*, img.*
                from tbl_produto_tipo_prato as ptp
                inner join tbl_produto as prod
                on prod.id_produto = ptp.id_produto
                inner join tbl_tipo_prato as tp
                on tp.id_tipo_prato = ptp.id_tipo_prato
                inner join tbl_produto_img as pi
                on pi.id_produto = prod.id_produto
                inner join tbl_imagem as img
                on img.id_imagem = pi.id_img
                where tp.id_tipo_prato = ".$id." order by tp.id_tipo_prato";
        
        if($select = mysql_query($sql)){
            $pratos = false;
            $cont = 0;
           
            while($rs = mysql_fetch_array($select)){
                $pratos[] = new Cardapio();
                
                $pratos[$cont]->id_prato = $rs['id_produto'];
                $pratos[$cont]->prato = $rs['nome'];
                $pratos[$cont]->imagem = $rs['url'];
                $pratos[$cont]->preco = $rs['preco'];
                $pratos[$cont]->descricao = $rs['descricao'];

                $cont++;
            }
            return $pratos;

        }else{
            return false;
        }
        
        
    }

    public function SelectPratoById($id){
        $sql = "select p.*, img.url
                from tbl_produto as p
                inner join tbl_produto_tipo_prato as ptp
                on p.id_produto = ptp.id_produto
                inner join tbl_tipo_prato as tp
                on ptp.id_tipo_prato = tp.id_tipo_prato
                inner join tbl_produto_img as pi
                on p.id_produto = pi.id_produto
                inner join tbl_imagem as img
                on pi.id_img = img.id_imagem
                where p.id_produto = ".$id;
        
        if($select = mysql_query($sql)){
            $categorias[] = new Cardapio();
            
            $cont = 0;
            while($rs = mysql_fetch_array($select)){
            
                $categorias[$cont]->id_prato = $rs['id_produto'];
                $categorias[$cont]->prato = $rs['nome'];
                $categorias[$cont]->preco = $rs['preco'];
                $categorias[$cont]->imagem = $rs['url'];
                $categorias[$cont]->descricao = $rs['descricao'];
                
                $cont++;
            }
            
            return $categorias;

        }else{
            return false;
        }
        
    }

    public function SelectIngredientesPrato($id_prato){
        $sql = "select i.* from tbl_ingrediente as i
                inner join tbl_produto_ingrediente as pi
                on i.id_igrediente = pi.id_ingrediente
                inner join tbl_produto as p
                on pi.id_produto = p.id_produto
                where p.id_produto = ".$id_prato;
        
        $select = mysql_query($sql);
        
        if(mysql_affected_rows() > 0){
            $cont = 0;
            while($rs = mysql_fetch_array($select)){
                
                $ingrediente[] = new Cardapio();
                
                $ingrediente[$cont]->id_ingrediente = $rs['id_igrediente'];
                $ingrediente[$cont]->ingrediente = $rs['nome'];
                
                $cont++;
                
            }
            
            return $ingrediente;
        }
        
    }
      
    public function Pequisar(){
        $pesquisar = $_POST['pesquisa'];
        $p = 0;
        
        $sql = "select prod.*, img.*
                from tbl_produto_tipo_prato as ptp
                inner join tbl_produto as prod
                on prod.id_produto = ptp.id_produto
                inner join tbl_tipo_prato as tp
                on tp.id_tipo_prato = ptp.id_tipo_prato
                inner join tbl_produto_img as pi
                on pi.id_produto = prod.id_produto
                inner join tbl_imagem as img
                on img.id_imagem = pi.id_img
                where prod.nome like '%".$pesquisar."%' ";
        
        if($select = mysql_query($sql)){
            
            $cont = 0;
            while($rs = mysql_fetch_array($select)){
                $p = 1;
                
                $pesquisa[] = new Cardapio();
                
                $pesquisa[$cont]->id_prato = $rs['id_produto'];
                $pesquisa[$cont]->prato = $rs['nome'];
                $pesquisa[$cont]->preco = $rs['preco'];
                $pesquisa[$cont]->imagem = $rs['url'];
                $pesquisa[$cont]->descricao = $rs['descricao'];
                
                $selectquery = "select tp.* from tbl_tipo_prato as tp
                inner join tbl_produto_tipo_prato as ptp
                on tp.id_tipo_prato = ptp.id_tipo_prato
                where id_produto = ".$rs['id_produto']." limit 1";
        
                if($slst = mysql_query($selectquery)){

                    while($rslt = mysql_fetch_array($slst)){

                        $pesquisa[$cont]->idCategoria = $rslt['id_tipo_prato'];
                        $pesquisa[$cont]->categoria = $rslt['nome'];

                    }
                }
                
                $cont++;
                
            }
            
            if($p != null){
                return $pesquisa;
                
            }else{
                return null;
            }
        }
        
    }
      
      
  }



?>


