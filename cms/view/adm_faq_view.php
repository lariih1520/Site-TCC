<?php

  $id_faq = "";
  $pergunta = "";
  $resposta = "";
  $lista = "";
  $action = "inserir";


  if(isset($_GET['modo'])){
    if($_GET['modo'] == 'listarID'){

      $id_faq = $faq->id_faq;
      $pergunta = $faq->pergunta;
      $resposta = $faq->resposta;
      $action = "alterar&id=".$id_faq;


    }
  }

 ?>


<div class="conteudo">
    <div class="campo_inputs">

      <p class="titulo_nova_pergunta">Nova Pergunta</p>
      <form class="" action="router.php?controller=faq&modo=<?php echo($action); ?>" method="post">

        <div class="pergunta">

          <input name="txtPergunta" class="login_senha" value="<?php echo($pergunta); ?>" type="text" maxlength="50" value="" placeholder="Pergunta" required/>
          <span class="bar"> </span>

        </div>

        <div class="resposta">

            <textarea placeholder="Digite a resposta"  name="textResposta" class="caixa_resposta" rows="8" cols="80"><?php echo($resposta); ?></textarea>

        </div>

        <div class="botao">

          <button class="btn_salvar_pergunta" type="submit" name="btn_alterar" > Salvar </button>

        </div>

      </div>
    </form>




    <div class="perguntas_cadastradas">

      <p class="titulo_perguntas_cadastradas">Perguntas Cadastradas</p>

        <?php
          require_once("controller/faq_controller.php");

          $faq = new ControllerFaq();
          $result_set = $faq->MostrarFaq();

          $contador = 0;

          while($contador < count($result_set)){
         ?>



          <div class="campo_perguntas_cadastradas">

            <a href="router.php?controller=faq&modo=excluir&id=<?php echo($result_set[$contador]->id_faq ); ?>">
              <div class="delete_pergunta">
                <img class="excluir" src="imagens/close-icon.png" alt="deletar" />
              </div>
            </a>
            <a class="perguntaID" href="router.php?controller=faq&modo=listarID&id=<?php echo($result_set[$contador]->id_faq ); ?>">
              <label class="pergunta_banco">Pergunta:</label>
              <label class="pergunta_vem_do_banco" ><?php echo($result_set[$contador]->pergunta); ?></label>
              <br>
              <br>
              <label class="resposta_banco">Resposta :</label>
              <label class="resposta_vem_do_banco"><?php echo($result_set[$contador]->resposta); ?></label>
            </a>

          </div>



        <?php
        $contador++ ;
        }

         ?>

    </div>

</div>
