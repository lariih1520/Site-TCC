<?php



  $nome = "";
  $img = "";
  $min = "";
  $max = "";
  $id_brinde = "";
  $descricao = "";
  $id_valor_brinde = "";
  $action = "inserir";

  if(isset($_GET['modo'])){
    if($_GET['modo'] == 'ListarBrindeID'){

      $id_brinde = $brinde->id_brinde;
      $nome = $brinde->nome;
      $descricao = $brinde->descricao;
      $imagem = $brinde->img;
      $id_valor_brinde = $brinde->id_valor_brinde;
      $action = "alterarBrinde&id=".$id_brinde;


    }
  }


 ?>


<div class="conteudo_brinde">

  <form class="" action="router.php?controller=brinde&modo=<?php echo($action) ?>" method="post" enctype="multipart/form-data">

    <div class="campo-cadastro_brinde">

      <div class="nome">
          <input name="txtNome" class="login_senha" placeholder="Nome do brinde" value="<?php echo($nome); ?>" type="text" maxlength="50" />
          <span class="bar_nome"> </span>
      </div>
      <div class="input_valor">

        <select class="select" name="slcValor" required>
          <?php
            require_once("controller/brinde_controller.php");

            $lista_brinde = new ControllerBrinde();
            $result_set = $lista_brinde->ListarValor();
            $contador = 0;
            while($contador < count($result_set)){
              if ($result_set[$contador]->id_valor_brinde == $id_valor_brinde){
                ?>
                   <option selected value="<?php echo($result_set[$contador]->id_valor_brinde); ?>"> R$<?php echo($result_set[$contador]->min." até R$".$result_set[$contador]->max)?></option>

               <?php
             }else{

            ?>
              <option value="<?php echo($result_set[$contador]->id_valor_brinde); ?>"> R$<?php echo($result_set[$contador]->min." até R$".$result_set[$contador]->max)?></option>

            <?php
            }
            $contador++ ;
            }
         ?>
         </select>


      </div>


      <textarea placeholder="Digite o texto" class="textarea" name="txtDescricao" rows="8" cols="80"><?php echo($descricao); ?></textarea>

      <div class="campo_imagem">

        <img src="<?php echo($img); ?>" alt="">



        <input class="input_imagem" type="file" name="filefotos" value="<?php echo($img); ?>">
      </div>

      <div class="campo_do_botao">

          <button class="btn_cadastrar" type="submit" name="btn_alterar" > Cadastrar </button>

      </div>

    </div>

  </form>


    <div class="campo_brindes_cadastrados">

      <p class="titulo_brinde_cadastrado">Brindes Cadastrados</p>
      <?php
        require_once("controller/brinde_controller.php");

        $lista_brinde = new ControllerBrinde();
        $result_set = $lista_brinde->ListarBrinde();
        $contador = 0;

        while($contador < count($result_set)){

       ?>
      <div class="brindes_cadastrados">
        <a href="router.php?controller=brinde&modo=excluirBrinde&id=<?php echo($result_set[$contador]->id_brinde); ?>">
          <div class="delete-rede">
            <img class="excluir" src="imagens/close-icon.png" alt="deletar" />
          </div>
        </a>
        <a href="router.php?controller=brinde&modo=ListarBrindeID&id=<?php echo($result_set[$contador]->id_brinde); ?>">
          <label class="nome_banco_brinde"> Nome :</label>

          <label class="nome_vem_do_banco"> <?php echo($result_set[$contador]->nome); ?></label>

          <div class="imagem_vem_do_banco">

            <img src="<?php echo($result_set[$contador]->img); ?>" alt="">

          </div>
        </a>

      </div>

      <?php
        $contador++ ;
        }
     ?>
  </div>
</div>
