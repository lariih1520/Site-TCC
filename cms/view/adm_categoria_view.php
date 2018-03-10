<?php

  $id_tipo_prato = "";
  $nome = "";
  $imagem = "";
  $lista = "";
  $action = "inserir";


  if(isset($_GET['modo'])){
    if($_GET['modo'] == 'editarID'){

      $id_tipo_prato = $categoria->id_tipo_prato;
      $nome = $categoria->nome;
      $imagem = $categoria->imagem;
      $action = "alterar&id=".$id_tipo_prato;


    }
  }


 ?>

<div class="conteudo_categoria">

    <div class="cadastro_categoria">

      <p class="titulo_nova_categoria"> Nova Categoria</p>

      <form class="" action="router.php?controller=categoria&modo=<?php echo($action) ?>" method="POST" enctype="multipart/form-data">


        <div class="campo_input">

            <input name="txtCategoria" class="login_senha" type="text" maxlength="50" value="<?php echo($nome); ?>" placeholder="Nome da Categoria" required/>
            <span class="bar"> </span>

            <input class="botao_imagem" type="file" name="filefotos" value="<?php echo($imagem); ?>">

        </div>

        <div class="campo_botoes">

            <button class="btn_alterar_logo" type="submit" name="btn_alterar" > Salvar </button>

            <button class="btn_alterar_logo" type="submit" name="btn_alterar" > Alterar </button>

        </div>

        <div class="preview_imagem">

            <img src="../fotos/<?php echo($imagem); ?>" alt="Imagem Selecionada">

        </div>

      </form>

    </div>

    <div class="mostrar_categorias_cadastradas">


      <p class="titulo_categorias_cadastradas">Categorias Cadastradas</p>


      <?php
        require_once("controller/categoria_controller.php");

        $lista_categoria = new ControllerCategoria();
        $result_set = $lista_categoria->ListarCategoria();

        $contador = 0;

        while($contador < count($result_set)){
       ?>
          <div class="categorias_cadastradas">

            <a href="router.php?controller=categoria&modo=excluir&id=<?php echo($result_set[$contador]->id_tipo_prato ) ?>">
              <div class="delete-rede">
                <img class="excluir" src="imagens/close-icon.png" alt="deletar" />
              </div>
            </a>

              <a href="router.php?controller=categoria&modo=editarID&id=<?php echo($result_set[$contador]->id_tipo_prato ) ?>">

                <label class="banco_nome_categoria"> Categoria :</label>

                <label class="vem_do_banco_nome_categoria" value="<?php echo($nome); ?>"> <?php echo($result_set[$contador]->nome); ?> </label>

                <img class="imagem_do_banco" src="../fotos/<?php echo($result_set[$contador]->imagem); ?>" alt="Imagem Categoria">

              </a>

          </div>


      <?php
        $contador++ ;
        }
       ?>

    </div>




</div>
