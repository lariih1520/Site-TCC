

<div class="conteudo_adm_cor">
  <form name="frmCor" action="router.php?controller=cor&modo=alterar" method="post">


  <div class="cores_antigas">
    <p class="texto_cores_antigas">
        Cor Atual
    </p>

    <?php
       require_once('controller/cores_controller.php');

       $lista_cores = new ControllerCor();

       $rs = $lista_cores->ListarCor();

       $contador = 0;
       while($contador < count($rs)){
    ?>
    <div class="cor_antiga1" style="background-color:<?php echo($rs[$contador]->cor); ?>">

    </div>
    <?php
        $contador += 1;
        }
    ?>

    <div class="voltar_cor_antiga">

      <a href="router.php?controller=cor&modo=padrao">

        <img src="imagens/alterar.png" alt="Alterar" title="Voltar a cor padrao">

      </a>

    </div>

  </div>

  <div class="mudar_cores">

      <table class="tabela_cores">
        <tr>
          <th>Vermelho</th>
          <th>Verde</th>
          <th>Azul</th>
        </tr>
        <tr>
          <td id="valRed"> </td>
          <td id="valGreen"></td>
          <td id="valBlue"></td>
        </tr>
        <tr>
          <td id="red"></td>
          <td id="green"></td>
          <td id="blue"></td>
        </tr>
        <tr>
          <td>
          <input oninput="changeRed(this.value)" onchange="changeRed(this.value)"  type="range" id="slideRed" name="slideRed" min="0" max="255">
          </td>
          <td>
          <input oninput="changeGreen(this.value)" onchange="changeGreen(this.value)"  type="range" id="slideGreen" name="slideGreen" min="0" max="255">
          </td>
          <td>
          <input oninput="changeBlue(this.value)" onchange="changeBlue(this.value)"  type="range" id="slideBlue" name="slideBlue" min="0" max="255">
          </td>
        </tr>
      </table>


      <div id="change"></div>

      <div id="fixed" style=""></div>

      <input type="text" name="txtCor" id="corText">

      <div class="botao_alterar">

          <button class="btn_alterar_cor" type="submit" name="btn_alterar" > Alterar </button>

      </div>

  </div>
    </form>
</div>
