<div class="titulo_solicitacao">

  <p class="titulo">Solicitação de Férias</p>

</div>

<div class="conteudo_solicitacao">

  <div class="area_solicitacao">

    <p class="solicitacao">Solicitação de Férias</p>

    <div class="area_dos_inputs">

      <select class="select_dia_inicial">
        <option value="volvo">Dia Inicial</option>
        <?php

          $x = 1;

          while ($x <= 31) {
            ?>
                <option value="<?php echo($x) ?>"> <?php echo($x) ?></option>
            <?php

            $x += 1;
          }

         ?>

      </select>

      <select class="select_mes_inicial">
        <option value="volvo">Mês</option>
        <option value="saab">Janeiro</option>
        <option value="opel">Fevereiro</option>
        <option value="audi">Março</option>
        <option value="saab">Abril</option>
        <option value="opel">Maio</option>
        <option value="audi">Junho</option>
        <option value="saab">Julho</option>
        <option value="opel">Agosto</option>
        <option value="audi">Setembro</option>
        <option value="saab">Outubro</option>
        <option value="opel">Novembro</option>
        <option value="audi">Dezembro</option>
      </select>

      <select class="select_ano_inicial">
        <option value="volvo">Ano</option>

        <?php

          $a = 2017;

          while ($a <= 2018) {
            ?>
                <option value="<?php echo($a) ?>"> <?php echo($a) ?></option>
            <?php

            $a += 1;
          }

         ?>
      </select>

      <select class="select_dia_final">
        <option value="volvo">Dia Final</option>
        <?php

          $x = 1;

          while ($x <= 31) {
            ?>
                <option value="<?php echo($x) ?>"> <?php echo($x) ?></option>
            <?php

            $x += 1;
          }

         ?>

      </select>

      <select class="select_mes_final">
        <option value="volvo">Mês</option>
        <option value="saab">Janeiro</option>
        <option value="opel">Fevereiro</option>
        <option value="audi">Março</option>
        <option value="saab">Abril</option>
        <option value="opel">Maio</option>
        <option value="audi">Junho</option>
        <option value="saab">Julho</option>
        <option value="opel">Agosto</option>
        <option value="audi">Setembro</option>
        <option value="saab">Outubro</option>
        <option value="opel">Novembro</option>
        <option value="audi">Dezembro</option>
      </select>

      <select class="select_ano_final">
        <option value="volvo">Ano</option>

        <?php

          $a = 2017;

          while ($a <= 2018) {
            ?>
                <option value="<?php echo($a) ?>"> <?php echo($a) ?></option>
            <?php

            $a += 1;
          }

         ?>
      </select>


        <button class="btn_solicitar" type="submit" name="btn_respondido" > Solicitar </button>



    </div>



  </div>


</div>
