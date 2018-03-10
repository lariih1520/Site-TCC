      <?php


      $titulo = "";
      $descricao = "";


       ?>

      <?php

      require_once('controller/galeria_controller.php');

      $lista_titulo = new ControllerGaleria();
      $result_set = $lista_titulo->listarTitulo();
      $contador = 0;

      while($contador < count($result_set)){

          $titulo = $result_set[$contador]->titulo;
          $descricao = $result_set[$contador]->descricao;


       ?>

			<div class = "conteudo">
				<div id = "texto">
          <br>
          <p><?php echo($titulo);?></p>

					<p>
            <?php echo($descricao);?>
					</p>
				</div>
        <?php

          $contador += 1;
          }

         ?>
         <?php
           require_once('controller/galeria_controller.php');
           require_once("model/imagem_class.php");
           $controller = new ControllerGaleria();
           $imagens_1 [] = new Imagem();
           $imagens_1 = $controller->listarGaleria(1);
          ?>

            <div id="galeria">
            <h2 class="tag_h2">teste</h2>
            <div class="conteudoSuperior">
                  <div class="contImg1">
                    <img alt="" src="<?php echo(substr($imagens_1[0]->url,3));?>">
                  </div>
                  <div class="contImg2">
                      <img alt="" src="<?php echo(substr($imagens_1[1]->url,3));?>">
                  </div>
                  <div class="contImg2">
                      <img alt="" src="<?php echo(substr($imagens_1[2]->url,3));?>">
                  </div>
            </div>
            <div class="conteudoSuperior">
          <?php
            require_once('controller/galeria_controller.php');
            require_once("model/imagem_class.php");
            $controller = new ControllerGaleria();
            $imagens_2 [] = new Imagem();
            $imagens_2 = $controller->listarGaleria(2);
           ?>
					   <div class="contImg1">
                  <img alt="" src="fotos/<?php echo($imagens_2[0]->url);?>">
             </div>
             <div class="contImg02">
                <img alt="" src="<?php echo(substr($imagens_2[1]->url,3));?>">
             </div>

             <div class="contImg3">
                  <img alt="" src="<?php echo(substr($imagens_2[2]->url,3));?>">
             </div>
             <div class="contImg3">
                  <img alt="" src="<?php echo(substr($imagens_2[3]->url,3));?>">
             </div>
					</div>
					<div class="conteudoSuperior">
            <?php
              require_once('controller/galeria_controller.php');
              require_once("model/imagem_class.php");
              $controller = new ControllerGaleria();
              $imagens_3 [] = new Imagem();
              $imagens_3 = $controller->listarGaleria(3);
             ?>

					   <div class="contImg4">
                   <img alt="" src="<?php echo(substr($imagens_3[0]->url,3));?>">
             </div>

              <div class="contImg4">
                    <img alt="" src="<?php echo(substr($imagens_3[1]->url,3));?>">
              </div>

					</div>
					<div class="conteudoSuperior">
          <?php
            require_once('controller/galeria_controller.php');
            require_once("model/imagem_class.php");
            $controller = new ControllerGaleria();
            $imagens_4 [] = new Imagem();
            $imagens_4 = $controller->listarGaleria(4);
           ?>
					    <div class="contImg1">
                 <img alt="" src="<?php echo(substr($imagens_4[0]->url,3));?>">
              </div>

              <div class="contImg2">
                    <img alt="" src="<?php echo(substr($imagens_4[1]->url,3));?>">
              </div>

              <div class="contImg2">
                    <img alt="" src="<?php echo(substr($imagens_4[1]->url,3));?>">
              </div>

					</div>
				</div>
        <div id="content_carrossel">

            <div id="content">

				<div id="menu-carrossel">

  		            <a href="#" class="prev" title="Anterior">
                        <img alt="" src="imagens/seta1.png" />
                    </a>
  		        </div>
  		        <div id="carrossel">
  		            <ul>
                  <?php
                    require_once("model/slider_class.php");
                    $slider = new Slider();
                    $slider->id_slider = 1;
                    $slider->listarSlider();
                    $contador = 0;
                    while($contador<count($slider->imagens)){
                   ?>
                        <li>
                            <img alt="" src="<?php echo(substr($slider->imagens[$contador]->url, 3));?>"/>
                        </li>
                  <?php
                      $contador ++;
                    }
                   ?>
  		            </ul>
  		        </div>

                <div id="menu-carrossel">
                    <a href="#" class="next" title="Próximo">
                      <img alt="" src="imagens/seta2.png" />
                    </a>

                </div>

  		    </div>

          <?php
            require_once('controller/galeria_controller.php');
            require_once("model/imagem_class.php");
            $controller = new ControllerGaleria();
            $imagens_5 [] = new Imagem();
            $imagens_5 = $controller->listarGaleria(5);
           ?>

				</div>
				<div class="contInferior">

            <div class="conteudo1">
                <img src="<?php echo(substr($imagens_5[0]->url,3));?>" alt="">
            </div>
            <div class="conteudo2">
                <img src="<?php echo(substr($imagens_5[1]->url,3));?>" alt="">
            </div>
            <div class="conteudo2">
                <img src="<?php echo(substr($imagens_5[2]->url,3));?>" alt="">
            </div>

				</div>
			<div class="contInferior">
            <div id="contDivisao2">
              <img src="<?php echo(substr($imagens_5[3]->url,3));?>" alt="">
          </div>
          <div id="cont2">
              <img src="<?php echo(substr($imagens_5[4]->url,3));?>" alt="">
          </div>
				</div>
			</div>
