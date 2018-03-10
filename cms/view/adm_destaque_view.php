<?php

$classe = '';
$modo = 'inserir';
$botao = 'Salvar';
$rsPratos = '';

if(!empty($_GET['id'])){
    @session_start();

    $idS = $_GET['id'];
    $_SESSION['id_add'] = $idS;
}

if(!empty($_GET['modo'])){
    if($_GET['modo'] == 'editar'){
        require_once('controller/destaque_controller.php');

        $controller = new ControllerDestaque();
        $editar = $controller->Buscar();
        $modo = 'alterar';
        $botao = 'Editar';

    }else if($_GET['modo'] == 'pesquisar'){
        require_once('controller/destaque_controller.php');

        $controller = new ControllerDestaque();
        $rsPratos = $controller->PesquisarDestaque();

        @$editar->imagem = '';
        @$editar->idDestaque = '';
        @$editar->idProduto = '';
        @$editar->comentario = '';
    }


}else{
    @$editar->imagem = '';
    @$editar->idDestaque = '';
    @$editar->idProduto = '';
    @$editar->comentario = '';
}

?>
    <div id='conteudo_destaque'>
        <div id="content_pratos">
            <p class="titulo_prato"> Escolha um dos pratos para adiciona-lo como destaque: </p>
            <form id="pesquisar" action="?modo=pesquisar" method="post">
                  <span>Pesquisar prato:</span>
                <input type="text" name="txtpesquisa">
                <button type="button" name="btnPesquisar" onClick="this.form.submit();" >
                    <img src="imagens/pesquisa.png" alt="pesquisa" title="pesquisar">
                </button>
                <p><a class="sem_filtro" href='adm_destaque.php'> Sem filtro </a></p>
            </form>
            <form action="router.php?controller=destaque&modo=<?php echo $modo ?>" method="post" enctype="multipart/form-data">
                <div class="slide_slcn_destaque">

                    <?php
                        if($rsPratos == null){
                            require_once('controller/destaque_controller.php');
                            $ControllerDestaque = new ControllerDestaque();
                            $rsPratos = $ControllerDestaque->ListarPratos();
                        }

                    ?>

                    <div id="content">
						<div id="menu-carrossel">
  							<a href="#" class="prev" title="Anterior">
                                <img src="../imagens/seta1.png" />
                            </a>
  						</div>
  						<div id="carrossel">
  							<ul>
                            <?php

                                if($rsPratos != null){

                                    $cont = 0;
                                    while($cont < count($rsPratos)){
                                        $id = $rsPratos[$cont]->id_prato;
                                        $img = '../'.$rsPratos[$cont]->img_prato;
                                        $descricao = $rsPratos[$cont]->descricao;

                                        if($rsPratos[$cont]->destaque == 1){
                                            $destq = 'checked';
                                            $id_dest = $rsPratos[$cont]->id_destaque;
                                            $des = '1, '.$id_dest;
                                            $href = '?modo=editar&id='.$id;

                                        }else{
                                            $des = '0, '.$id;
                                            $destq = '';
                                            $href = '?id='.$id."#conteudo_destaque";
                                        }

                                        if(!empty($_SESSION['id_add'])){
                                            if($_SESSION['id_add'] == $id){
                                                $classe = 'class="selecionado"';
                                            }else{
                                                $classe = '';
                                            }
                                        }

                            ?>
                                    <li <?php echo $classe; ?>>
                                        <input type="checkbox" name="imgDestaque" value="<?php echo $id ?>" <?php echo $destq; ?> onClick="destaque(<?php echo $des ?>)">

                                        <img src="<?php echo $img ?>" />
                                        <div class="detalhes_prato_carrossel">
                                            <a href="<?php echo $href ?>">
                                                <?php echo $descricao ?>
                                            </a>
                                        </div>
                                    </li>

                            <?php
                                        $cont++;
                                    }
                                }else{
                                    echo 'Não há produtos cadastrados';
                                }
                            ?>
  							</ul>
  						</div>
  						<div id="menu-carrossel">
  							<a href="#" class="next" title="Próximo">
                                <img src="../imagens/seta2.png" />
                            </a>
  						</div>
  		            </div>

                </div>

                <div id="content_comentario">
                    <p class="titulo_comentario">
                    <?php
                        if(!empty($_GET['modo'])){
                            if($_GET['modo'] == 'editar'){
                                echo 'Editar destaque: ';

                            }else{
                                echo 'Adicionar um comentário:';
                            }
                        }else{
                            echo 'Adicionar um comentário:';
                        }

                    ?>
                    </p>
                    <div class="div_comentario">
                        <div class="ft_comentario">
                            <div class="content_img">
                                <img src="<?php echo '../'.$editar->imagem ?>">
                            </div>
                            <input type="file" name="ftDestaque">
                        </div>
                        <textarea rows="15" cols="70" maxlength="1000" name="txtComentario" placeholder="Adicione um comentário sobre o prato selecionado como destaque."><?php echo $editar->comentario ?></textarea>
                    </div>

                    <p>
                      <button class="btn_cadastrar" type="submit" value="<?php echo $botao ?>" name="btn_salvar" > Cadastrar </button>
                      <button class="btn_cadastrar" type="submit" value="Cancelar>" name="btn_cancelar" > Cancelar </button>
                    </p>
                </div>
            </form>
         </div>
    </div>
