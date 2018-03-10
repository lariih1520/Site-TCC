<div id="conteinner-redes">
    <div id="redes">
      <?php

        require_once('controller/redes_controller.php');

        $listaRedes = new ControllerRede();

        $rs = $listaRedes->ListarTodo();

        $contador = 0;

        while ($contador < count($rs)) {

          $id = $rs[$contador]->id_rede;

          $nome = $rs[$contador]->nome_rede;
          $foto = $rs[$contador]->foto;
          $link = $rs[$contador]->link;
          $cor = $rs[$contador]->cor;

       ?>
        <a href="<?php echo($link); ?>" target="black">
          <div class="redes" >
            <img src="fotos/<?php echo($foto); ?>" alt="<?php echo($nome); ?>" />
          </div>
        </a>

        <?php
            $contador += 1;
          }
         ?>

        <div id="pesquisa">
          <img src="imagens/lupa.png" alt="lupa" />
        </div>

        <div class="pesquisa-form">
          <div id="close-pesquisa">
            <img src="imagens/close.png" alt="close-form" title="Fechar" />
          </div>
          <div id="form-pesquisa">
            <form>
              <div class="grupo-text-pesquisa">
                  <input class="input" type="text" maxlength="50" required/>
                  <label class="label"> O que você está porcurando? </label>
                  <span class="bar"> </span>
              </div>

            </form>
          </div>
        </div>

    </div>
</div>
