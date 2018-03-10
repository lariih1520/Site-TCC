<div class="content_tbl">
            
        <!-- **** Tabela de gorjetas **** -->
        <table>
            <thead>
                <tr>
                    <td> <?php echo $filtro; ?> </td>
                    <td> Gorjeta </td>
                </tr>
            </thead>
            <tbody>
                <?php
                    require_once("controller/avaliacao_gorjeta_controller.php");
                    $listaGorjetas = new  ControllerGorjetasAvaliacoes();
                    
                    if($filtro == 'Todos'){
                        $result = $listaGorjetas->ListarGorjetas(); 
                    
                    }elseif($filtro != ''){
                        $result = $listaGorjetas->ListarGorjetasFiltro($filtro); 
                    
                    }
                    
                    if($result != null){
                        $cont = 0;
                        $cor = "";
                        while($cont < count($result)){
                            if($filtro == 'Todos'){
                                $filtrado = 'Funcionário '.$result[$cont]->funcionario;
                            }else{
                                $filtrado = $result[$cont]->data;
                            }
                ?>
                    
                        <tr <?php echo $cor ?> >
                            <td> <?php echo $filtrado ?> </td>
                            <td> R$ <?php echo($result[$cont]->gorjeta) ?></td>
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
            
        <!-- **** Tabela de avaliações **** -->
        <table>
            <thead>
                <tr>
                    <td> <?php echo $filtro; ?> </td>
                    <td> Avaliação </td>
                </tr>
            </thead>
            <tbody>
                <?php
                    require_once("controller/avaliacao_gorjeta_controller.php");
                    $listaAvaliacoes = new  ControllerGorjetasAvaliacoes();
                    
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
                                $filtrado = 'Funcionário '.$result[$cont]->funcionario;
                            }else{
                                $filtrado = $result[$cont]->data;
                            }
                ?>
                    
                        <tr <?php echo $cor ?> >
                            <td> <?php echo($filtrado) ?> </td>
                            <td> <?php echo($result[$cont]->avaliacao) ?> </td>
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
                        <tr><td colspan="5"> Não há registros </td></tr>
                <?php
                        
                    }
                    
                ?>
            </tbody>
        </table>
      </div>