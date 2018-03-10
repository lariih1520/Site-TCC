<?php

  require_once('controller/cabecalho_controller.php');

  $cabecalho = new ControllerCabecalho();

  $rs = $cabecalho->MostrarCabecalhoCms();
  $contador = 0;

  $foto = "";
  $texto = "";
  $usuario = "";

  while($contador < count($rs)){

      $foto = $rs[$contador]->foto;
      $texto = $rs[$contador]->texto_boas_vindas;
      $usuario = $rs[$contador]->foto_usuario;

      $contador += 1;
  }


?>

<div class="conteudo_cabecalho">
  <form  action="router.php?controller=cabecalho&modo=logo" method="post"  enctype="multipart/form-data">
    <div class="trocar_logo">

      <p class="nome_logo"> Logotipo </p>

        <div class="logo">

            <img src="../fotos/<?php echo($foto); ?>" alt="logotipo">

        </div>

        <div class="input_imagem">

            <input class="botao_imagem" required type="file" name="filefotos" size="20">

        </div>

        <div class="botao_alterar_logo">

          <button class="btn_alterar_logo" type="submit" name="btn_alterar" > Alterar logo </button>

        </div>


    </div>
  </form>

  <form  action="router.php?controller=cabecalho&modo=boas-vindas" method="post" enctype="multipart/form-data">
    <div class="trocar_cadastro">

      <p class="nome_cadastro"> Bos vindas e Imagem Padrão </p>

      <div class="campo_texto_cadastro">

        <input name="txtBoasVindas" class="login_senha" type="text" maxlength="50" value="<?php echo($texto); ?>" placeholder="Texto de Boas Vindas" required/>
        <span class="bar"> </span>

      </div>

      <div class="campo_troca_de_imagem">

        <div class="campo_imagem">

          <img src="../fotos/<?php echo($usuario); ?>" alt="usuário">

        </div>

        <div class="campo_input">

          <input class="campo_input_alterar" required type="file" name="filefotosusuario" size="20">

        </div>

      </div>

      <div class="campo_botao">

        <button class="btn_alterar_imagem" type="submit" name="btn_alterar" > Salvar </button>

      </div>

    </div>
  </form>


</div>
