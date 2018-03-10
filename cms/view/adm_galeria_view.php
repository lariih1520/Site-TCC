<?php

$action = "cadastrar";
$id_titulo = "";
$titulo = "";
$descricao = "";

if(isset($_GET['sucesso'])){
  $sucesso = $_GET['sucesso'];

  if($sucesso == 1){
    ?>
      <script type="text/javascript">
        window.alert("Texto cadastrada com suceso");
      </script>
    <?php
  }else{
    ?>
      <script type="text/javascript">
        window.alert("Ops! teve um errinho no cadastro, verifique as informações");
      </script>
    <?php
  }
}

 ?>


<div class="conteudo_galeria">

<form class="adm_galeria" action="router.php?controller=galeria&modo=alterar" method="post">

  <div class="campo_textos_galeria">

    <div class="campo_dos_textos">

      <?php

      require_once('controller/galeria_controller.php');
      $lista_titulo = new ControllerGaleria();
      $result_set = $lista_titulo->listarTitulo();
      $contador = 0;
      while($contador < count($result_set)){

      ?>
      <div class="nome">
          <input name="txtTitulo" class="login_senha" placeholder="titulo" value="<?php echo($result_set[$contador]->titulo);?>" type="text" maxlength="50" />
          <span class="bar_nome"> </span>
      </div>

      <textarea placeholder="Digite o texto" class="textarea" name="txtDescricao" rows="8" cols="80"><?php echo($result_set[$contador]->descricao);?></textarea>
      <?php

          $contador++ ;
          }

       ?>
    </div>

    <div class="campo_do_botao">

      <div class="botao">

          <button class="btn_cadastrar" type="submit" name="btn_alterar" > Cadastrar </button>

          <a href="#abrirModal"> <img  class="imagem_modal" src="imagens/popup.png" alt=""></a>

          <div id="abrirModal" class="modal">
          	<a href="#fechar" title="Fechar" class="fechar">x</a>

              <p class="texto_modal">Para destacar uma palavra coloque-a entre
               <\b> <\/b>
               <br>
                Exemplo <\b> Exemplo <\/b>
             </p>

        </div>

      </div>

    </div>

  </div>

  </form>

  <div class="imagens">

    <form class="" action="router.php?controller=galeria&modo=imagens" method="post" enctype="multipart/form-data">
      <div class="primera_imagens">

        <div class="imagem1">
          <?php
            require_once('controller/galeria_controller.php');
            require_once("model/imagem_class.php");
            $controller = new ControllerGaleria();
            $imagens_1 [] = new Imagem();
            $imagens_1 = $controller->listarGaleria(1);
           ?>
          <div class="imagem_grande1">
            <img src="<?php echo($imagens_1[0]->url);?>">
            <input class="botao_imagem"  type="file" name="filefotos_1" size="20">
          </div>

          <div class="imagem_pequena1">
            <img src="<?php echo($imagens_1[1]->url);?>">
            <input class="botao_imagem_pequena1"  type="file" name="filefotos_2" size="20">
          </div>

          <div class="imagem_pequena2">
            <img src="<?php echo($imagens_1[2]->url);?>">
            <input class="botao_imagem_pequena2"  type="file" name="filefotos_3" size="20">
          </div>
        </div>

        <div class="imagem2">
          <?php
            require_once('controller/galeria_controller.php');
            require_once("model/imagem_class.php");
            $controller = new ControllerGaleria();
            $imagens_2 [] = new Imagem();
            $imagens_2 = $controller->listarGaleria(2);
           ?>
          <div class="imagem_grande1">
            <img src="<?php echo($imagens_2[0]->url);?>">
            <input class="botao_imagem"  type="file" name="filefotos_4" size="20">
          </div>

          <div class="imagem_pequena1">
            <img src="<?php echo($imagens_2[1]->url);?>">
            <input class="botao_imagem_pequena1"  type="file" name="filefotos_5" size="20">
          </div>

          <div class="imagem_muito_pequena1">
            <img src="<?php echo($imagens_2[2]->url);?>">
            <input class="botao_imagem_muito_pequena1"  type="file" name="filefotos_6" size="20">
          </div>

          <div class="imagem_muito_pequena2">
            <img src="<?php echo($imagens_2[3]->url);?>">
            <input class="botao_imagem_muito_pequena2"  type="file" name="filefotos_7" size="20">
          </div>
        </div>

        <div class="imagem3">
          <?php
            require_once('controller/galeria_controller.php');
            require_once("model/imagem_class.php");
            $controller = new ControllerGaleria();
            $imagens_3 [] = new Imagem();
            $imagens_3 = $controller->listarGaleria(3);
           ?>
          <div class="imagem_grande2">
            <img src="<?php echo($imagens_3[0]->url);?>">
            <input class="botao_imagem_grande2"  type="file" name="filefotos_8" size="20">
          </div>

          <div class="imagem_grande3">
            <img src="<?php echo($imagens_3[1]->url);?>">
            <input class="botao_imagem_grande3"  type="file" name="filefotos_9" size="20">
          </div>
        </div>

        <div class="imagem4">
          <?php
            require_once('controller/galeria_controller.php');
            require_once("model/imagem_class.php");
            $controller = new ControllerGaleria();
            $imagens_4 [] = new Imagem();
            $imagens_4 = $controller->listarGaleria(4);
           ?>
          <div class="imagem_grande1">
            <img src="<?php echo($imagens_4[0]->url);?>">
            <input class="botao_imagem"  type="file" name="filefotos_10" size="20">
          </div>

          <div class="imagem_pequena1">
            <img src="<?php echo($imagens_4[1]->url);?>">
            <input class="botao_imagem_pequena1"  type="file" name="filefotos_11" size="20">
          </div>

          <div class="imagem_pequena2">
            <img src="<?php echo($imagens_4[2]->url);?>">
            <input class="botao_imagem_pequena2"  type="file" name="filefotos_12" size="20">
          </div>
        </div>

        <div class="salvar_imagens">
          <div class="botao_salvar">
            <button class="btn_salvar" type="submit" name="btn_respondido" > Salvar </button>
          </div>
        </div>
    </div>
  </form>
</div>

    <div class="imagens_slide">
      <form action="router.php?controller=slider&modo=update&idslider=1&pg=galeria" method="post" enctype="multipart/form-data">
        <div class="botao_salvar_imagem_slide">
          <p class="texto_galeria">Galeria</p>
          <input class="btn_salvar_img_slide" type="submit" name="btn_respondido" value="Salvar">
          <a href="router.php?controller=slider&modo=novo&idslider=1&pg=galeria" class="btn_adicionar_img_slide"  name="btn_respondido"> Adicionar </a>
          <!--
            ===================================
             ## - MODAL PARA NOVA IMAGEM - ##
            ===================================
            <a href="#abrirModalDialog">
              <button class="btn_adicionar_img_slide" type="submit" name="btn_respondido"> Adicionar </button>
              <div id="abrirModalDialog" class="modalDialog">
                <a href="#fecharModal" title="Fechar" class="fechar">x</a>

                <div class="caixa_modal">
                  <div class="alt">
                      <input name="txtNomeFilial" placeholder="Alt" class="login_senha_modal" type="text" maxlength="50" />
                      <span class="bar_alt"> </span>
                  </div>

                  <input class="adicionar_imagem_modal"  type="file" name="filefotos" size="20">
                  <div class="preview_imagem"></div>

                  <button class="btn_adicionar_img_slide_modal" type="submit" name="btn_respondido" > Salvar </button>
                 </div>
               </div>
             </a>
           -->
          </div>

          <div class="campo_imagens_slide">
              <?php
                require_once("model/slider_class.php");
                $slider = new Slider();
                $slider->id_slider = 1;
                $slider->listarSlider();
                $contador = 0;
                while($contador<count($slider->imagens)){
               ?>
                <div class="imagens_dentro_do_slide1">
                  <img src="<?php echo($slider->imagens[$contador]->url);?>" alt="">
                  <div class="edit_e_delete">
                      <div class="edit">
                        <img src="imagens/editar.png" alt="">
                        <input type="file" name="sliderfoto_<?php echo($slider->imagens[$contador]->id_imagem)?>" class="texto_editar">
                      </div>
                      <div class="delete">
                        <img src="imagens/delete.png" alt="">
                        <a href="router.php?controller=slider&modo=excluir&idslider=1&idimg=<?php echo($slider->imagens[$contador]->id_imagem)?>&pg=galeria">
                          <p class="texto_delete">Excluir</p>
                        </a>
                      </div>
                    </form>
                  </div>
                </div>
              <?php
                $contador ++;
                }
               ?>
          </div>
        </form>
    </div>

    <div class="ultimas_imagens">

      <div class="primeira_das_ultimas_imagens">
        <?php
          require_once('controller/galeria_controller.php');
          require_once("model/imagem_class.php");
          $controller = new ControllerGaleria();
          $imagens_5 [] = new Imagem();
          $imagens_5 = $controller->listarGaleria(5);
         ?>
        <form action="router.php?controller=galeria&modo=imagens" method="post" enctype="multipart/form-data">
          <div class="primeira_das_ultimas_imagens_grande">
            <img src="<?php echo($imagens_5[0]->url);?>" alt="">
            <div class="botao_das_ultimas_imagem_grande">
              <input class="botao_das_ultimas_imagem_grande"  type="file" name="filefotos_13" size="20">
            </div>
          </div>

          <div class="primeira_das_ultimas_imagens_media">
            <img src="<?php echo($imagens_5[1]->url);?>" alt="">
            <div class="botao_das_ultimas_imagem_medias">
              <input class="botao_das_ultimas_imagem_grande"  type="file" name="filefotos_14" size="20">
            </div>
          </div>

          <div class="primeira_das_ultimas_imagens_media">
            <img src="<?php echo($imagens_5[2]->url);?>" alt="">
            <div class="botao_das_ultimas_imagem_medias">
              <input class="botao_das_ultimas_imagem_grande"  type="file" name="filefotos_15" size="20">
            </div>
          </div>

          <div class="primeira_das_ultimas_imagens_comprida">
              <img src="<?php echo($imagens_5[3]->url);?>" alt="">
              <div class="botao_das_ultimas_imagem_comprida">
                <input class="botao_das_ultimas_imagem_grande"  type="file" name="filefotos_16" size="20">
              </div>
          </div>

          <div class="ultima_imagem_media">
            <img src="<?php echo($imagens_5[4]->url);?>" alt="">
            <div class="botao_da_ultima_imagem_media">
              <input class="botao_das_ultimas_imagem_grande" type="file" name="filefotos_17" size="20">
            </div>
          </div>
          <button class="btn_salvar_baixo" type="submit" name="btn_respondido" > Salvar </button>
        <form>
    </div>
  </div>
</div>
