<?php
    require_once('controller/cardapio_controller.php');

    if(isset($_GET['erro'])){
      if($_GET['erro']=='login'){
        echo("Erro no login!");
      }
    }


?>

<div id="principal">
    <h2 class="tag_h2">teste</h2>
    <div id="content_pesquisar">
        <form action="cardapio.php?pesquisar#slide_categoria-pratos" method="post" class="buscar_prato">
            Pesquisar
            <input type="text" name="pesquisa" placeholder="Você pode pesquisar por pratos e categorias...">
            <button name="btn_pesquisar" onClick="this.form.submit();"><img src="imagens/pesquisa.png"></button>
        </form>
    </div>
    <div id="content_prato_categoria">

		<!-- Exibir através do slide um prato de cada categoria -->
		<div id="slide_categoria-pratos">

				<!-- Começo dos Slides-->
            <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">
                <img src="imagens/seta1.png" alt="" />
            </button>
            <div class="w3-content w3-display-container">
            <?php
            
            if(isset($_POST['btn_pesquisar'])){
                
                $pesquisar = $_POST['pesquisa'];
                
                $controller = new ControllerCardapio();
                $rs = $controller->Pequisar();

                if($rs != null){
                    
                    $cont = 0;
                    while($cont < count($rs)){
                        $categoria = $rs[$cont]->categoria;
                        $id_prato = $rs[$cont]->id_prato;
                        $prato = $rs[$cont]->prato;
                        $descricao = $rs[$cont]->descricao;
                        $imagem = $rs[$cont]->imagem;


            ?>
				<div class="mySlides">
                    <div class="titulo_categoria_prato">
                        <?php echo $categoria ?>
                    </div>
                    <div class="w3_content_imagem">
                        <img src="<?php echo $imagem ?>" alt="" />
                    </div>
                    <div class="w3_titulo">
                        <span style="background-color:skyblue"><?php echo $prato ?></span>

                    </div>
                    <div class="w3_content_detalhes">
                        <div class="w3_descricao_prato">
                            <?php echo $descricao ?>
                        </div>
                        <div class="w3_ingredientes">
                            <p>Ingredientes:</p>
                        <?php

                            $controller = new ControllerCardapio();
                            $res = $controller->IngredientesPrato($id_prato);

                            if($res != null){

                                $contadr = 0;
                                while($contadr < count($res)){

                                    $ingrediente = $res[$contadr]->ingrediente;

                                    echo '<p> - '.$ingrediente.'</p>';

                                    $contadr++;
                                }

                            }

                        ?>
                        </div>
                        <div class="w3_avaliacao">
                            <p> Avalie este prato!</p>
                            <form class="" action="router.php?tela=cardapiocontroller&modo=enviar" method="post">
                              <div class="estrelas">

                                <input type="radio" id="vazio" name="estrela" value="" checked>

                                <label for="estrela_um"><i class="fa fa-star fa-2x"></i></label>
                                <input type="radio" id="estrela_um" name="estrela" value="1">

                                <label for="estrela_dois"><i class="fa fa-star fa-2x"></i></label>
                                <input type="radio" id="estrela_dois" name="estrela" value="2">

                                <label for="estrela_tres"><i class="fa fa-star fa-2x"></i></label>
                                <input type="radio" id="estrela_tres" name="estrela" value="3">

                                <label for="estrela_quatro"><i class="fa fa-star fa-2x"></i></label>
                                <input type="radio" id="estrela_quatro" name="estrela" value="4">

                                <label for="estrela_cinco"><i class="fa fa-star fa-2x"></i></label>
                                <input type="radio" id="estrela_cinco" name="estrela" value="5"><br><br>

                                <button class="btn_entrar" type="submit" name="btn_entrar" > Avalie </button>



                              </div>
                            </form>

                        </div>
                    </div>

                </div>

            <?php               
                        $cont++;
                    }

                }else{
            ?>
                <div class="mySlides">

                    <div id="alerta">
                        Não há pratos com o título <?php echo $pesquisar ?>
                        <p class="botao_ok">
                            <a href="cardapio.php#slide_categoria-pratos">
                                OK
                            </a>
                        </p>
                    </div>

                </div>
            <?php
                }
            }
                
            if(isset($_GET['selecionar'])){
                $categoia = $_GET['categoria'];
                $prato = $_GET['prato'];
                
                $controller = new ControllerCardapio();
                $rs = $controller->BuscarCategoria($categoia);

                if($rs != null){
                    
                    $cont = 0;
                    while($cont < count($rs)){
                        $id = $rs[$cont]->idCategoria;
                        $categoria = $rs[$cont]->categoria;

                        $controller = new ControllerCardapio();
                        $result = $controller->BuscarPrato($prato);

                        if($result != null){
                            $contador = 0;
                            while($contador < count($result)){
                                $id_prato = $result[$contador]->id_prato;
                                $prato = $result[$contador]->prato;
                                $descricao = $result[$contador]->descricao;
                                $imagem = $result[$contador]->imagem;


            ?>
				<div class="mySlides">
                    <div class="titulo_categoria_prato">
                        <?php echo $categoria ?>
                    </div>
                    <div class="w3_content_imagem">
                        <img src="<?php echo $imagem ?>" alt="" />
                    </div>
                    <div class="w3_titulo">
                        <?php echo $prato ?>

                    </div>
                    <div class="w3_content_detalhes">
                        <div class="w3_descricao_prato">
                            <?php echo $descricao ?>
                        </div>
                        <div class="w3_ingredientes">
                            <p>Ingredientes:</p>
                        <?php

                            $controller = new ControllerCardapio();
                            $res = $controller->IngredientesPrato($id_prato);

                            if($res != null){

                                $contadr = 0;
                                while($contadr < count($res)){

                                    $ingrediente = $res[$contadr]->ingrediente;

                                    echo '<p> - '.$ingrediente.'</p>';

                                    $contadr++;
                                }

                            }

                        ?>
                        </div>
                        <div class="w3_avaliacao">
                            <p> Avalie este prato!</p>
                            <form class="" action="router.php?tela=cardapiocontroller&modo=enviar" method="post">
                              <div class="estrelas">

                                <input type="radio" id="vazio" name="estrela" value="" checked>

                                <label for="estrela_um"><i class="fa fa-star fa-2x"></i></label>
                                <input type="radio" id="estrela_um" name="estrela" value="1">

                                <label for="estrela_dois"><i class="fa fa-star fa-2x"></i></label>
                                <input type="radio" id="estrela_dois" name="estrela" value="2">

                                <label for="estrela_tres"><i class="fa fa-star fa-2x"></i></label>
                                <input type="radio" id="estrela_tres" name="estrela" value="3">

                                <label for="estrela_quatro"><i class="fa fa-star fa-2x"></i></label>
                                <input type="radio" id="estrela_quatro" name="estrela" value="4">

                                <label for="estrela_cinco"><i class="fa fa-star fa-2x"></i></label>
                                <input type="radio" id="estrela_cinco" name="estrela" value="5"><br><br>

                                <button class="btn_entrar" type="submit" name="btn_entrar" > Avalie </button>



                              </div>
                            </form>

                        </div>
                    </div>

                </div>

            <?php               $contador++;
                            }
                        }

                        $cont++;
                    }

                }
            }
                
            $controller = new ControllerCardapio();
            $rs = $controller->ListarCategorias();

            if($rs != null){

                $cont = 0;
                while($cont < count($rs)){
                    $id = $rs[$cont]->idCategoria;
                    $categoria = $rs[$cont]->categoria;

                    $controller = new ControllerCardapio();
                    $result = $controller->ListarPratosCategoria($id);

                    if($result != null){
                        $contador = 0;
                        while($contador < count($result)){
                            $id_prato = $result[$contador]->id_prato;
                            $prato = $result[$contador]->prato;
                            $descricao = $result[$contador]->descricao;
                            $imagem = $result[$contador]->imagem;


            ?>
				<div class="mySlides">
                    <div class="titulo_categoria_prato">
                        <?php echo $categoria ?>
                    </div>
                    <div class="w3_content_imagem">
                        <img src="<?php echo $imagem ?>" alt="" />
                    </div>
                    <div class="w3_titulo">
                        <?php echo $prato ?>

                    </div>
                    <div class="w3_content_detalhes">
                        <div class="w3_descricao_prato">
                            <?php echo $descricao ?>
                        </div>
                        <div class="w3_ingredientes">
                            <p>Ingredientes:</p>
                        <?php

                            $controller = new ControllerCardapio();
                            $res = $controller->IngredientesPrato($id_prato);

                            if($res != null){

                                $contadr = 0;
                                while($contadr < count($res)){

                                    $ingrediente = $res[$contadr]->ingrediente;

                                    echo '<p> - '.$ingrediente.'</p>';

                                    $contadr++;
                                }

                            }

                        ?>
                        </div>
                        <div class="w3_avaliacao">
                            <p> Avalie este prato!</p>
                            <form class="" action="router.php?tela=cardapiocontroller&modo=enviar" method="post">
                              <div class="estrelas">

                                <input type="radio" id="vazio" name="estrela" value="" checked>

                                <label for="estrela_um"><i class="fa fa-star fa-2x"></i></label>
                                <input type="radio" id="estrela_um" name="estrela" value="1">

                                <label for="estrela_dois"><i class="fa fa-star fa-2x"></i></label>
                                <input type="radio" id="estrela_dois" name="estrela" value="2">

                                <label for="estrela_tres"><i class="fa fa-star fa-2x"></i></label>
                                <input type="radio" id="estrela_tres" name="estrela" value="3">

                                <label for="estrela_quatro"><i class="fa fa-star fa-2x"></i></label>
                                <input type="radio" id="estrela_quatro" name="estrela" value="4">

                                <label for="estrela_cinco"><i class="fa fa-star fa-2x"></i></label>
                                <input type="radio" id="estrela_cinco" name="estrela" value="5"><br><br>

                                <button class="btn_entrar" type="submit" name="btn_entrar" > Avalie </button>



                              </div>
                            </form>

                        </div>
                    </div>

                </div>

            <?php               $contador++;
                            }
                        }

                        $cont++;
                    }

                }

            ?>

            </div>
            <button class="w3-button w3-black w3-display-right" style="margin-left:-55px;" onclick="plusDivs(1)">
                <img alt="" src="imagens/seta2.png"/>
            </button>
            <script>/* Slide manual */
				var slideIndex = 1;
				showDivs(slideIndex);

				function plusDivs(n) {
				    showDivs(slideIndex += n);
				}

				function showDivs(n) {
				var i;
				var x = document.getElementsByClassName("mySlides");
				if (n > x.length) {slideIndex = 1}
				if (n < 1) {slideIndex = x.length}
                    for (i = 0; i < x.length; i++) {
                        x[i].style.display = "none";
                    }
				    x[slideIndex-1].style.display = "block";
				}
            </script>

		</div>
    </div>
    <div id="content_categorias">

        <!--_____________________________-->
        <!--_______*´'  slide '`*_______ -->

        <?php

            $controller = new ControllerCardapio();
            $rs = $controller->ListarCategorias();

            if($rs != null){
                $cont = 0;
                while($cont < count($rs)){
                    $id = $rs[$cont]->idCategoria;
        ?>
                <div class="titulo_categorias">
                    <?php echo $rs[$cont]->categoria ?>
                </div>
                <?php
                    $controller = new ControllerCardapio();
                    $result = $controller->ListarPratosCategoria($id);
                    $nmrcont = count($result);

                    if($nmrcont > 3){

                ?>
                        <div class="content">
                            <div class="menu-carrossel">
                                <a href="#" class="prev" id="prev<?php echo $cont ?>" title="Anterior">
                                    <img alt="" src="imagens/seta1.png" />
                                </a>
                            </div>
                            <div class="carrossel" id="carrossel<?php echo $cont ?>">
                                <ul>
                                <?php

                                    if($result != null){
                                        $contad = 0;
                                        while($contad < count($result)){
                                ?>
                                    <li>
                                        <a href="cardapio.php?selecionar=selecinado&categoria=<?php echo $id ?>&prato=<?php echo $result[$contad]->id_prato ?>#slide_categoria-pratos">
                                            <img alt="" src="<?php echo $result[$contad]->imagem ?>"/>
                                            <div class="detalhes_prato_carrossel">
                                                <?php echo $result[$contad]->titulo ?>
                                            </div>
                                        </a>
                                    </li>
                                <?php
                                        $contad++;
                                        }
                                    }
                                ?>
                                </ul>
                            </div>
                            <div class="menu-carrossel">
                                <a href="#" class="next" id="next<?php echo $cont ?>" title="Próximo">
                                    <img src="imagens/seta2.png" alt="" />
                                </a>
                            </div>
                        </div>
                        <script src="js/jquery.min.js"></script>
                        <script type="text/javascript" src="js/jcarousellite.js"></script>
                        <script>
                            $(function() {
                                $("#carrossel<?php echo $cont ?>"). jCarouselLite({
                                    btnPrev: '#prev<?php echo $cont ?>',
                                    btnNext: '#next<?php echo $cont ?>',
                                    visible: 5
                                })
                            })
                        </script>
        <?php
                    }else{
        ?>
                    <div class="pratos_carrossel">
                        <ul>
                            <?php
                                if($result != null){
                                    $contad = 0;
                                    while($contad < count($result)){
                            ?>
                                <li>
                                    <a href="cardapio.php?selecionar=selecinado&categoria=<?php echo $id ?>&prato=<?php echo $result[$contad]->id_prato ?>#slide_categoria-pratos">
                                        <img alt="" src="<?php echo $result[$contad]->imagem ?>"/>
                                        <div class="detalhes_prato_carrossel">
                                            <?php echo $result[$contad]->titulo ?>
                                        </div>
                                    </a>
                                </li>
                            <?php
                                        $contad++;
                                    }
                                }
                            ?>
                        </ul>
                    </div>
        <?php
                    }
                    $cont++;
                }
            }

        ?>
    </div>

</div>
