<?php


  $titulo = "";
  $descricao = "";





 ?>
<?php  ?>
<div class="login_cadastrar">

  <h2 class="tag_h2">teste</h2>
  <div class="entre">

    <span class="titulo_entre"> Login </span>
    <form  name="frmLogin" action="router.php?controller=logar&modo=logar" method="post">
      <div class="login">
          <input name="txtCpf" class="login_senha" type="text" maxlength="50" required/>
          <label> CPF: </label>
          <span class="bar"> </span>
      </div>

      <div class="senha">
          <input name="txtSenha" class="login_senha" type="password" maxlength="50" required/>
          <label> Senha: </label>
          <span class="bar"> </span>
      </div>

      <div class="entrar">
          <button class="btn_entrar" type="submit" name="btn_entrar" > Entrar </button>
          <span class="esqueci_minha_senha"> esqueci minha senha </span>
      </div>
    </form>

  </div>

  <div class="ou">
    <p class="span_ou"> OU </p>
  </div>

  <div class="cadastre-se">

    <span class="titulo_cadastrar"> Cadastre-se </span>

  <form name="frmCadastrar" action="router.php?controller=clientes&modo=novo" method="post">
    <div class="nome">
        <input name="txtNome" class="login_senha2" type="text" maxlength="50" required/>
        <label> Nome: </label>

    </div>

    <div class="cpf">

        <input name="txtCpf" class="login_senha11" type="text" maxlength="14" required/>
        <label> CPF: </label>

    </div>

    <div class="telefone">
        <input name="txtTelefone" class="login_senha3" type="text" maxlength="14" required/>
        <label> Telefone: </label>

    </div>

    <div class="celular">
        <input name="txtCelular" class="login_senha4" type="text" maxlength="15" required/>
        <label> Celular: </label>

    </div>

    <div class="email">
        <input name="txtEmail" class="login_senha5" type="text" maxlength="50" required/>
        <label> E-mail: </label>

    </div>

    <div class="cep">
        <input name="txtCep" class="login_senha6" type="text" maxlength="8" required/>
        <label> CEP: </label>

    </div>

    <div class="endereco">
        <input name="txtEndereco" class="login_senha7" type="text" maxlength="100" required/>
        <label> Endereço: </label>

    </div>

    <div class="numero">
        <input name="txtNumero" class="login_senha8" type="text" maxlength="5" required/>
        <label> N°: </label>

    </div>

    <div class="senha">

        <input name="txtSenha" class="login_senha9" type="password" maxlength="12" required/>
        <label> Senha: </label>

    </div>

    <div class="confirmar_senha">

        <input name="txtSenha2" class="login_senha10" type="password" maxlength="12" required/>
        <label> Confirme sua senha: </label>

    </div>

    <div class="cadastrar">

        <button class="btn_cadastrar" type="submit" name="btn_entrar" > Cadastrar </button>

    </div>


    <div class="checkbox">

        <input type="checkbox" class="btn_checkbox" name="concordo" value=""/><br>
        <p class="texto_checkbox">Eu li e aceito os termos de politica de acesso</p><br>


    </div>

    <div class="porque_nao">

    <a class="ancora" href="#pq_cadastrar">  <p class="link_porque"> Por que se cadastrar? </p> </a>

    </div>

    </form>
  </div>

</div>

<div id="pq_cadastrar">
    <p class="porque"> Por que se cadastrar? </p>

    <?php
      require_once("controller/login_controller.php");

      $login = new ControllerLogin();
      $result_set = $login->ListarLogin();

      $contador = 0;

      while($contador < count($result_set)){
     ?>

    <div class="reservas">

      <div class="texto_reserva">
        <p class="titulo_reserva"><?php echo($result_set[$contador]->titulo); ?></p>

        <p class="conteudo_reserva">
            <?php echo($result_set[$contador]->descricao); ?>
          </p>


      </div>

      <div class="imagem_reserva">

        <img src="<?php echo($result_set[$contador]->url); ?>" alt="teste">

      </div>

    </div>

  <?php
  $contador++ ;
  }

   ?>

  <div class="botao_perca">

    <button class="btn_perca" type="submit" name="btn_entrar" > cadastre-se </button>

  </div>



</div>
