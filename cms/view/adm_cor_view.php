<div class="conteudo_adm_cor">

  <div class="cores_antigas">
    <p class="texto_cores_antigas">
        Cores antigas
    </p>

    <div class="cor_antiga1">

    </div>

    <div class="cor_antiga2">

    </div>

    <div class="cor_antiga3">

    </div>

    <div class="voltar_cor_antiga">

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
          <td id="valRed"></td>
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

      <div class="checkboxs">
        <p class="classificando">
            Agora classifique:
        </p>

        <div class="checkbox1">

          <input type="checkbox" class="cor_primaria" name="concordo" value=""/> <p class="texto_cor_primaria">Cor primária</p><br>

        </div>

        <div class="checkbox2">

          <input type="checkbox" class="cor_secundaria" name="concordo" value=""/> <p class="texto_cor_secundaria">Cor secundária</p><br>

        </div>

        <div class="checkbox3">

          <input type="checkbox" class="cor_terciaria" name="concordo" value=""/> <p class="texto_cor_terciaria">Cor Terciária</p><br>

        </div>




      </div>




      <div class="botao_alterar">

          <button class="btn_alterar_cor" type="submit" name="btn_alterar" > Deseja aterar a cor do site? </button>

      </div>


  </div>














</div>
