<div class="content_tbl">
            
        <table>
            <thead>
                <tr>
                    <td> <?php echo $filtro; ?> </td>
                    <td> Avaliação </td>
                </tr>
            </thead>
            <tbody>
                <?php
                    require_once("controller/avaliacao_produto_controller.php");
                    $listaAvaliacoes = new ControllerAvaliacaoProdutos();
                    
                    if($filtro == 'Todos'){
                        $result = $listaAvaliacoes->ListarAvaliacoes(); 
                    
                    }elseif($filtro != ''){
                        $result = $listaAvaliacoes->ListarAvaliacoesFiltro($filtro); 
                    
                    }
                    
                    if($result != null){
                        $cont = 0;
                        $cor = "";
                        while($cont < count($result)){
                            if($filtro == 'Todos'){
                                $filtrado = $result[$cont]->produto;
                            }else{
                                $filtrado = $result[$cont]->data;
                            }
                ?>
                    
                        <tr <?php echo $cor ?> >
                            <td> <?php echo $filtrado ?> </td>
                            <td> <?php echo($result[$cont]->avaliacao) ?></td>
                        </tr>
                <?php 
                            if($cor == ''){ 
                                $cor = 'class="cinza"';
                            }else{
                                $cor = "";
                            }
                            $cont++;
                        }
                    }else{
                ?>
                        <tr><td colspan="5"> Não há registros registrados </td></tr>
                <?php
                        
                    }
                    
                ?>
            </tbody>
        </table>
</div>
    