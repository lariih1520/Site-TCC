<?php
  require_once('controller/jeito_controller.php');
  $controller_jeito = new ControllerJeito();
  $imagens = $controller_jeito->Listar();
 ?>
<div id="conteinner-diferencial">

        <div id="formatacao_mobile">
            <div class="setas">
                <img src="imagens/seta-sobre-1.png" alt="">
            </div>
            <div class="setas-2">
                <img src="imagens/seta-sobre-2.png" alt="">
            </div>
            <div class="setas-3">
                <img src="imagens/seta-sobre-3.png" alt="">
            </div>
            <div class="setas-4">
                <img src="imagens/seta-sobre-4.png" alt="">
            </div>
            <div class="setas-5">
                <img src="imagens/seta-sobre-5.png" alt="">
            </div>
            <div class="setas-6">
              <img src="imagens/seta-sobre-5.png" alt="">
            </div>

            <table  id="table-diferencial">
                <tr>
                    <td>
                        <table class="columns">
                            <tr>
                                <td class="text-maneira">

                                    O Jeito Antigo
                                </td>
                                <td>
                                    <img class="avatar-fila" src="<?php echo(substr($imagens[1]->url, 3))?>" alt="" />
                                </td>
                                <td>
                                </td>
                                <td>


                                </td>
                                <td class="text-maneira">
                                    O Jeito THE RIB'S

                                </td>
                            </tr>

                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table class="columns">
                            <tr>
                                <td>
                                    <img class="avatar" src="<?php echo(substr($imagens[2]->url, 3))?>" alt=""/>
                                </td>
                                <td>
                                    <img class="avatar" src="<?php echo(substr($imagens[3]->url, 3))?>" alt="" />
                                </td>
                                <td>
                                    <img class="avatar" src="<?php echo(substr($imagens[4]->url, 3))?>" alt=""  />
                                </td>
                                <td>
                                    <img class="avatar" src="<?php echo(substr($imagens[5]->url, 3))?>" alt=""  />
                                </td>
                                <td>
                                    <img class="avatar" src="<?php echo(substr($imagens[6]->url, 3))?>" alt=""  />
                                </td>
                            </tr>

                        </table>

                    </td>
                </tr>
                <tr>
                    <td>
                        <table class="columns">
                            <tr>
                                <td class="td-alinhar">


                                </td>
                                <td>

                                    <img class="avatar" src="<?php echo(substr($imagens[7]->url, 3))?>" alt="" />
                                </td>
                                <td>


                                </td>
                                <td>


                                </td>
                                <td>


                                </td>
                            </tr>

                        </table>

                    </td>
                </tr>
            </table>
        </div>
    
        </div>
        <div id="conteinner-dados">
            <div id="conteudo-dados">
                <div class="dados">
                    <div class="dado-numero">
                        450.000+
                    </div>
                    <div class="dado-texto">
                        Refeições Vendidas
                    </div>
                </div>
                <div class="dados">
                    <div class="dado-numero">
                        3
                    </div>
                    <div class="dado-texto">
                        Filias por São Paulo
                    </div>
                </div>
                <div class="dados">
                    <div class="dado-numero">
                        4,7
                    </div>
                    <div class="dado-texto">
                        Nota dada pelos clientes!
                    </div>
                </div>
            </div>
        </div>
        <div id="conteinner-historia">
            <div id="coisas-historia">
                <div id="historia">
                    <?php
                        require_once("controller/historia_controller.php");
                        $controller_historia = new ControllerHistoria();
                        $historias = $controller_historia->ListarHistorias();
                        $size = 30;

                        $contador=0;
                        while($contador<count($historias)){
                            echo('<p class="text-historia" style="font-size:'.$size.'px;" >'.$historias[$contador]->ano.": ".$historias[$contador]->descricao.'</p> <br> <br> ');

                            $size = $size - 1;
                            $contador++;
                        }

                    ?>
                </div>
                <div id="galeria-historia">

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
                    $slider->id_slider = 2;
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
          </div>

                <div id="valores" >
					<div class="gallery autoplay items-4">
                        <div id="item1" class="controle"></div>
                        <div id="item2" class="controle"></div>
                        <div id="item3" class="controle"></div>
                        <div id="item4" class="controle"></div>

                        <figure class="item">
                            <div class="conteinner-slider-valores">
                              <div class="titulo-slider-valores">
                                  Missão
                              </div>
                              <div class="atributo-slider-valores">
                                <?php
                                  require_once("controller/institucional_controller.php");
                                  $institucional_controller = new ControllerInstitucional();
                                  echo($institucional_controller->Buscar("missao"));
                                 ?>
                              </div>
                            </div>
                        </figure>

                        <figure class="item">
                          <div class="conteinner-slider-valores">
                            <div class="titulo-slider-valores">
                                Visão
                            </div>
                            <div class="atributo-slider-valores">
                              <?php
                                require_once("controller/institucional_controller.php");
                                $institucional_controller = new ControllerInstitucional();
                                echo($institucional_controller->Buscar("visao"));
                               ?>
                             </div>
                          </div>
                        </figure>

                        <figure class="item">
                          <div class="conteinner-slider-valores">
                            <div class="titulo-slider-valores">
                                Valores
                            </div>
                            <div class="atributo-slider-valores">
                              <?php
                                require_once("controller/institucional_controller.php");
                                $institucional_controller = new ControllerInstitucional();
                                echo($institucional_controller->Buscar("valores"));
                               ?>
                            </div>
                          </div>
                        </figure>

                        <figure class="item">
                          <div class="conteinner-slider-valores">
                            <div class="titulo-slider-valores">
                                Fundadores
                            </div>
                            <div class="atributo-slider-valores">
                              <?php
                                require_once("controller/institucional_controller.php");
                                $institucional_controller = new ControllerInstitucional();
                                echo($institucional_controller->Buscar("fundadores"));
                               ?>
                            </div>
                          </div>
                        </figure>
                        <div class="controls">
                            <a href="#item1" class="button">•</a>
                            <a href="#item2" class="button">•</a>
                            <a href="#item3" class="button">•</a>
                            <a href="#item4" class="button">•</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
