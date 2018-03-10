<?php


$nome = "";
$data = "";
$codigo = "";
$numero = "";
$action = "inserir";

if(isset($_GET['modo'])){
  if($_GET['modo'] == 'listarID'){

    $id_cartao = $cartao->id_cartao;
    $nome = $cartao->nome;
    $data = $cartao->vencimento;
    $numero = $cartao->numero;
    $codigo = $cartao->codigo;
    $action = "editarCartao&id=".$id_cartao;


  }
}

 ?>


<div class="conteudo">

  <form class="" action="router.php?controller=cartao&modo=<?php echo($action); ?>" method="post">

    <div class="lugar_cartao">

      <div class="nome">
          <input placeholder="Nome do Titular" name="txtTitular" value="<?php echo($nome); ?>" class="login_senha" type="text" maxlength="50" required/>
          <span class="bar_nome"> </span>
      </div>

      <div class="codigo">
          <input placeholder="Cod. Segurança" name="txtCodigo" value="<?php echo($codigo); ?>" class="login_senha2" type="text" maxlength="50" required/>
          <span class="bar_codigo"> </span>
      </div>

      <div class="numero">
          <input placeholder="N°" name="txtNumero" value="<?php echo($numero); ?>" class="login_senha3" type="text" maxlength="50" required/>
          <span class="bar_numero"> </span>
      </div>

      <div class="data">
          <input placeholder="Data" name="txtData" value="<?php echo($data); ?>" class="login_senha4" type="text" maxlength="50" required/>
          <span class="bar_data"> </span>
      </div>

    </div>

    <div class="lugar_botao">

      <button class="btn_cadastrar" type="submit" name="btn_salvar" > Cadastrar Cartão </button>

    </div>
  </form>
    <div class="cartoes_cadastrados">

      <p class="titulo_cartoes_cadstrados" >Cartões Cadastrados</p>

      <?php
        require_once("controller/cartao_controller.php");

        $lista_cartao = new ControllerCartao();
        $result_set = $lista_cartao->ListarCartao();
        $contador = 0;

        while($contador < count($result_set)){

       ?>
       <a href="router.php?controller=cartao&modo=listarID&id=<?php echo($result_set[$contador]->id_cartao); ?>">

          <div class="cartoes_banco">

            <div class="cartao">

                <img src="imagens/cartao.png" alt="">

            </div>

            <div class="labels">

              <a href="router.php?controller=cartao&modo=excluirCartao&id=<?php echo($result_set[$contador]->id_cartao); ?>">
                <div class="delete-rede">
                  <img class="excluir" src="imagens/close-icon.png" alt="deletar" />
                </div>
              </a>

              <label class="nome_cartao">Nome:</label>

              <label class="nome_vem_do_banco"> <?php echo($result_set[$contador]->nome); ?></label>

              <label class="numero_cartao">N°:</label>

              <label class="numero_vem_do_banco"><?php echo($result_set[$contador]->numero); ?></label>

            </div>

          </div>
        </a>
      <?php

        $contador++ ;
        }

       ?>

  </div>



</div>
