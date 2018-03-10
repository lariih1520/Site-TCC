
  <?php


      $nome = "";
      $sobre = "";

      require_once("controller/eventos_controller.php");
      $eventos_controller = new ControllerEventos();
      if(isset($_SESSION['filial'])){
        $eventos = $eventos_controller->SelectEventosId($_SESSION['filial']);
      }else {
        $eventos = $eventos_controller->SelectEventos();
      }
      if($eventos) {
        $contador = 0;
        while($contador<count($eventos)){
   ?>

        <div class="evento">
          <div class="eventos">
            <div class="texto_eventos">
              <div class="textos">
                  <p class="titulo">
                      <?php echo($eventos[$contador]->nome); ?>
                  </p>

                  <p class="conteudo_texto">
                      <?php echo(date('d/m/Y', strtotime($eventos[$contador]->data))); ?>
                  </p>

              </div>
              <form class="" action="reservas.php" method="post">
                <div class="botao_cadastrar">
                  <button class="btn_reservar" type="submit" name="btn_entrar" > Faça sua Reserva </button>
                </div>

              </form>

            </div>

            <div class="imagem_grande_evento">
              <img src="<?php echo(substr($eventos[$contador]->imagem[0], 3)) ?>" alt="teste">
            </div>
          </div>

          <div class="eventos_fotos_comentarios">
            <div class="imagens_comentarios">
              <div class="imagem_grande">
                <img src="<?php echo(substr($eventos[$contador]->imagem[1], 3)) ?>" alt="">
              </div>
              <div class="imagem_evento1">
                <img src="<?php echo(substr($eventos[$contador]->imagem[2], 3)) ?>" alt="teste">
              </div>
              <div class="imagem_evento2">
                <img src="<?php echo(substr($eventos[$contador]->imagem[3], 3)) ?>" alt="teste">
              </div>
              <div class="imagem_evento3">
                <img src="<?php echo(substr($eventos[$contador]->imagem[4], 3)) ?>" alt="teste">
              </div>
              <div class="imagem_evento4">
                <img src="<?php echo(substr($eventos[$contador]->imagem[5], 3)) ?>" alt="teste">
              </div>
            </div>

            <div class="avaliacao">
              <div class="comentario">
                <p class="texto_avaliacao">
                 <?php echo($eventos[$contador]->sobre) ?>
                </p>
                <div class="estrelas"></div>
              </div>
            </div>
          </div>
        </div>
<?php
      $contador ++;
    }
  }else {
    echo("<h1>Nenhum evento cadastrado</h1>");
  }
?>
