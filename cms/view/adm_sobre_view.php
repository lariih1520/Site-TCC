<?php

  //HISTÓRIA
  $ano = null;
  $desc_hist = null;
  $action_hist="novo";
  if(isset($_GET['modo'])){
    if($_GET['controller']=='historia'){
      $id_hist = $_GET['id'];
      //Aplicando valores
      $ano = $hist_controller->ano;
      $desc_hist = $hist_controller->descricao;
      $action_hist="editar&id=".$id_hist;
    }
  }

  //INSTITUCIONAL
  $disabled = "disabled";
  $titulo = null;
  $desc_inst = null;
  if(isset($_GET['modo'])){
    if($_GET['controller']=='institucional'){
      $titulo = $inst_controller->titulo;
      $desc_inst = $inst_controller->descricao;
      $disabled = "";
    }
  }
 ?>
<div id="area_jeito">
    <!-- CONTEÚDO JEITO THE RIB'S -->
    <div id="titulo_jeito">
        Título
    </div>
    <div id="cont_jeito">
        <div class="subs_jeito">
            <p id="txt_jeito_antigo">O jeito antigo</p>
        </div>
        <div class="subs_jeito">
            <p id="txt_jeito_theribs">O jeito The Rib's</p>
        </div>
        <form action="router.php?controller=jeito&modo=editar" method="POST" enctype="multipart/form-data">
          <?php
            require_once('controller/jeito_controller.php');
            require_once('model/jeito_class.php');
            $lst_jeito = new ControllerJeito();
            $imagens[] = new Jeito();
            $imagens = $lst_jeito->Listar();
           ?>
            <div class="linha_jeito">
                <div class="objeto_extremidades">
                    <div class="obj_img"><img src="<?php echo($imagens[1]->url)?>"></div>
                    <input type="file" name="filejeito_1">
                </div>
            </div>
            <div class="linha_jeito">
                <div class="objeto_meio">
                    <div class="obj_img"><img src="<?php echo($imagens[2]->url)?>"></div>
                    <input type="file" name="filejeito_2">
                </div>
                <div class="objeto_meio">
                    <div class="obj_img"><img src="<?php echo($imagens[3]->url)?>"></div>
                    <input type="file" name="filejeito_3">
                </div>
                <div class="objeto_meio">
                    <div class="obj_img"><img src="<?php echo($imagens[4]->url)?>"></div>
                    <input type="file" name="filejeito_4">
                </div>
                <div class="objeto_meio">
                    <div class="obj_img"><img src="<?php echo($imagens[5]->url)?>"></div>
                    <input type="file" name="filejeito_5">
                </div>
                <div class="objeto_meio">
                    <div class="obj_img"><img src="<?php echo($imagens[6]->url)?>"></div>
                    <input type="file"  name="filejeito_6">
                </div>
            </div>
            <div class="linha_jeito">
                <div class="objeto_extremidades">
                    <div class="obj_img"><img src="<?php echo($imagens[7]->url)?>"></div>
                    <input type="file" name="filejeito_7">
                </div>
                <input id="botao_salvar_jeito" type="submit" value="Salvar">
            </div>
        </form>
    </div>


    <!-- CONTEÚDO HISTÓRIA -->
    <div id="cont_hist">
        <div id="anos_hist">
            <div id="titulo_anos_hist">Anos:</div>
            <ul id="list_anos">
              <?php
                require_once("controller/historia_controller.php");
                $lst_historias = new ControllerHistoria();
                $result_set_hist = $lst_historias->ListarHistorias();
                $contador = 0;
                while($contador < count($result_set_hist)){
               ?>
                <li>
                    <?php echo($result_set_hist[$contador]->ano); ?>
                    <a href="router.php?controller=historia&modo=excluir&id=<?php echo($result_set_hist[$contador]->id_historia);?>"><img class="opt_hist" src="imagens/delete.png" title="Excluir"></a>
                    <a href="router.php?controller=historia&modo=buscar&id=<?php echo($result_set_hist[$contador]->id_historia);?>"><img class="opt_hist" src="imagens/editar.png" title="Editar"></a>
                </li>
              <?php
                $contador ++;
                }
              ?>
            </ul>
        </div>
        <div id="edit_hist">
            <form action="router.php?controller=historia&modo=<?php echo($action_hist)?>" method="post">
                <input placeholder="Ano:" id="input_hist" type="text" maxlength="4" name="txtAno" value="<?php echo($ano);?>"><br>
                <textarea placeholder="História:" name="txtDesc"><?php echo($desc_hist);?></textarea><br>
                <input id="botao_salvar_hist" type="submit" value="Salvar">
            </form>
        </div>
    </div>

    <!-- CONTEÚDO SLIDER -->
    <div id="cont_slider">
        <form action="router.php?controller=slider&modo=update&idslider=2&pg=sobre" method="post" enctype="multipart/form-data">
            <div id="titulo_slider">Título</div>
            <a href="router.php?controller=slider&modo=novo&idslider=2&pg=sobre">
              <span class="btn_slider">Novo</span>
            </a>
            <input class="btn_slider" type="submit" value="Salvar">

            <div id="area_imagens_slider">
              <?php
                require_once("model/slider_class.php");
                $slider = new Slider();
                $slider->id_slider = 2;
                $slider->listarSlider();
                $contador = 0;
                while($contador<count($slider->imagens)){
               ?>
                <div class="obj_slider">
                    <img class="img_slider" src="<?php echo($slider->imagens[$contador]->url);?>">
                      <div class="opt_slider">
                          <img class="img_opt_slider" src="imagens/edit.png" alt="">
                          <input type="file" name="sliderfoto_<?php echo($slider->imagens[$contador]->id_imagem);?>">
                      </div>
                    <a href="router.php?controller=slider&modo=excluir&idslider=2&idimg=<?php echo($slider->imagens[$contador]->id_imagem)?>&pg=sobre">
                        <div class="opt_slider">
                            <img class="img_opt_slider" src="imagens/delete.png" alt="">
                            Excluir
                        </div>
                    </a>
                </div>
                <?php
                  $contador ++;
                }
                 ?>
            </div>
        </form>
    </div>

    <!-- CONTEÚDO INSTITUCIONAL(MISSÃO, VISÃO E VALORES) -->
    <div id="cont_inst">
        <ul id="lst_lateral">
            <a href="router.php?controller=institucional&modo=buscar&titulo=missao"><li>Missão</li></a>
            <a href="router.php?controller=institucional&modo=buscar&titulo=visao"><li>Visão</li></a>
            <a href="router.php?controller=institucional&modo=buscar&titulo=valores"><li>Valores</li></a>
            <a href="router.php?controller=institucional&modo=buscar&titulo=fundadores"><li>Fundadores</li></a>
        </ul>
        <form action="router.php?controller=institucional&modo=editar" id="edit_inst" method="post">
            <input id="input_inst" type="text" name="txtTitulo" placeholder="Título:" readonly="true" value="<?php echo($titulo); ?>"><br>
            <textarea placeholder="Descrição:" name="txtDesc" <?php echo($disabled)?>><?php echo($desc_inst);?></textarea>
            <input id="btn_inst" type="submit" value="Salvar" <?php echo($disabled)?>>
            <!--Link para abrir o modal
            <a href="#abrirModal">
                <img  class="imagem_modal" src="imagens/popup.png" alt="">
            </a>

            Modal Aberto:
            <div id="abrirModal" class="modal">
                <a href="#fechar" title="Fechar" class="fechar">x</a>

                <div>
                    <p class="texto_modal">
                    Para destacar uma palavra coloque-a entre <br>
                    Exemplo  Exemplo
                    </p>

                </div>
            </div>
            -->


        </form>




    </div>

</div>
