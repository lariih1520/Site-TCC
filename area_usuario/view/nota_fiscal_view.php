<?php
  if (isset($_GET['erro'])) {
    echo("<script>alert('Nota fiscal inexistente.');</script>");
  }
 ?>
<div class="conteudo_nota_fiscal">

  <a href="area_do_usuario.php">
    <div class="botao_voltar">

        <button class="btn_voltar" type="submit" name="btn_alterar" > Voltar </button>
    </div>
  </a>
  <form class="" action="router.php?controller=notaFiscal&modo=inserir" method="post">

    <div class="cadastrar_nota_fiscal">

      <div class="campos_cadastro">

        <div class="campos_cadastro_nota_fiscal">

          <p class="titulo_cadastre">Cadastre sua nota fiscal</p>

          <div class="nome">
              <input placeholder="Digite o número da nota fiscal" name="txtNotaFiscal" class="login_senha" type="text" maxlength="50" required/>
              <span class="bar_nome"> </span>
          </div>

        </div>

        <div class="campo_do_botao_cadastrar_nota_fiscal">

          <button class="btn_cadastrar" type="submit" name="btn_alterar" > Cadastrar Nota Fiscal </button>

        </div>


      </div>
    </div>
  </form>
  <?php
    if(isset($brinde)){



   ?>
  <div id="brinde">
    <h3><?php echo($brinde->nome); ?></h3>
  </div>
  <?php
    }
   ?>

</div>
