<?php
    $titulo = '';
    $descricao = '';
    $imagem = '';
    $modo = 'inserir';
    $classe = '';
    
    if(isset($_GET['idEditar'])){
        
        require_once('controller/login_controller.php');
        $controller = new ControllerMotivos();
        $idEditar = $_GET['idEditar'];
        
        $modo = 'editar&id='.$idEditar;
        
        $rs = $controller->BuscarMotivo($idEditar);

        $id = $rs->id; 
        $titulo = $rs->titulo; 
        $descricao = $rs->descricao; 
        $imagem = "../".$rs->imagem; 

    }
    
?>
    
    <form action="router.php?controller=paglogin&modo=<?php echo $modo?>" method="post" enctype="multipart/form-data" id="content_motivos_cadastrar">
        <div id="titulo_motivos">
            Motivos para se cadastrar
        </div>
        <div class="cadastrar_motivos">
            
            <p class="margem"> Titulo: </p>
            <p><input type="text" name="txttitulo" value="<?php echo $titulo ?>"></p>
            
            <p class="margem"> Descrição: </p>
            <p><textarea rows="10" cols="90" name="txtDescricao"><?php echo $descricao ?></textarea></p>
            <?php
                if(!empty($_GET['idEditar'])){
            ?>
            
            <div class="excluir">
                <a href="router.php?controller=paglogin&modo=excluir&id=<?php echo $id ?>">
                    <img src="imagens/delete.png" class="icone" alt="excluir" title="Excluir">
                </a>
            </div>
           <?php
                }
            ?>
            
        </div>
        <div class="cadastrar_motivos">
            <div class="cadastrar_imagem">
                <img src="<?php echo $imagem ?>">
            </div>
            <p><input type="file" name="flMotivo"></p>
            <input type="submit" name="btn_salvar" value="Salvar" class="tbnSalvar">
            
        </div>
        
    </form>
    <div id="content_historico_motivos">
        <?php
            require_once('controller/login_controller.php');
            $controller_motivos = new ControllerMotivos();
            $rs = $controller_motivos->ListarMotivos();
        
        
            /* Se tiver menos de 3 imagens o slide não mostra */
            if(count($rs) >= 3){
        ?>
        <div id="content">
            <div id="menu-carrossel">
  				<a href="#" class="prev" title="Anterior">
                    <img src="../imagens/seta1.png" />
                </a>
  			</div>
  			<div id="carrossel">
        <?php
            }
        ?>
  				<ul class="Lista_motivos">
                <?php
                    
                    if($rs != null){
                                
                        $cont = 0;
                        while($cont < count($rs)){
                            $id = $rs[$cont]->id;
                            $img = '../'.$rs[$cont]->imagem;
                            $descricao = $rs[$cont]->descricao;
                            $status = $rs[$cont]->status;
                            
                            if($status == 1){
                                $ckd = 'checked';
                                $motivo = '1, '.$id;
                                
                            }else{
                                $ckd = '';
                                $motivo = '0, '.$id;
                                
                            }
                            
                            if(!empty($_GET['idEditar'])){
                                $idMotivo = $_GET['idEditar'];
                                
                                if($idMotivo == $id){
                                    $classe = 'classe="selecionado"';
                                    
                                }else{
                                    $classe = '';
                                }
                                
                            }
                            
                                        
                ?>
                        <li <?php echo $classe ?>>
                            <input type="checkbox" name="ckd_motivo" <?php echo $ckd ?> onClick="motivos(<?php echo $motivo ?>)" >
                                        
                            <img src="<?php echo $img ?>" />
                            <div class="detalhes_prato_carrossel">
                                <a href="?idEditar=<?php echo $id ?>">
                                    <?php echo $descricao ?>
                                </a>
                            </div>
                        </li>

                    <?php
                                $cont++;
                        }
                    
                    }else{
                        echo 'Não há histórico de motivos';
                    }
                    
                   ?>
  		        </ul>
          
        <?php
            if(count($rs) >= 3){
        ?>
  		    </div>
          
  		    <div id="menu-carrossel">
  		        <a href="#" class="next" title="Próximo">
                    <img src="../imagens/seta2.png" />
                </a>
  		    </div>
        <?php
            }
        ?>
  		</div>
           
    </div>
    
