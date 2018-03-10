<?php
  $nome = "";
  $email = "";
  $telefone="";
  $celular="";
  $ocorrencia="";
  $descritivo="";
  $unidade="";

  if(isset($_GET['modo'])){
    if($_GET['modo']=='buscar'){
      $id_fale = $_GET['id'];

      //Aplicando valores
      $nome = $contato->nome;
      $email =  $contato->email;
      $telefone = $contato->telefone;
      $celular = $contato->celular;
      $ocorrencia = $contato->ocorrencia;
      $descritivo = $contato->descritivo;
      $unidade = $contato->unidade;
    }

  }
 ?>
<div class="conteudo_contato">

  <form class="" action="router.php?controller=contato&modo=excluir&id=<?php echo($id_fale); ?>" method="post">
    <div class="cadastro_campos">

      <div class="nome">
          <label class="titulo_nome"> Nome: </label>
          <label class="vem_do_banco"> <?php echo($nome); ?></label>
          <span class="bar"> </span>
      </div>

      <div class="email">
          <label class="titulo_email"> E-mail: </label>
          <label class="vem_do_banco2"> <?php echo($email); ?></label>
          <span class="bar"> </span>
      </div>

      <div class="telefone">
          <label class="titulo_telefone"> Telefone: </label>
          <label class="vem_do_banco3"><?php echo($telefone); ?></label>
          <span class="bar"> </span>
      </div>

      <div class="celular">
        <label class="titulo_celular"> Celular: </label>
        <label class="vem_do_banco4"><?php echo($celular); ?></label>
        <span class="bar"> </span>
      </div>

      <div class="campo_filial">
          <label class="titulo_filial"> Filial: </label>
          <label class="vem_do_banco5"><?php echo($unidade);?></label>
          <span class="bar"> </span>
      </div>

      <div class="ocorrencia">
        <label class="titulo_ocorrencia"> Ocorrência: </label>
        <label class="vem_do_banco6"><?php echo($ocorrencia);?></label>
        <span class="bar"> </span>
      </div>

      <div class="text_area">

        <textarea class="area_do_texto" name="" cols="30"  rows="5"> <?php echo($descritivo)?></textarea><br>

      </div>

      <div class="area_dos_botoes">

        <div class="botao_respondido">

          <button class="nao_lida" type="submit" name="btn_respondido" > Respondido </button>

        </div>

        <div class="botao_nao_lida">

            <button class="lida" type="submit" name="btn_nao_lido" > Marcar com não lida </button>

        </div>

      </div>
    </div>
  </form>


  <div class="sede">

    <p class="titulo_sede"> Sedes </p>
    <?php
      require_once("controller/contato_controller.php");
      $lista_contato = new ControllerContato();
      $result_set = $lista_contato->ListarContatos();
      $contador = 0;
      while($contador < count($result_set)){
     ?>
     <a href=<?php echo("router.php?controller=contato&modo=buscar&id=".$result_set[$contador]->id_fale)?>>
      <div class="contato_sede1">
        <table class="table_contatos_sede">
          <tr>
            <td class="contato_nome_sede"> Nome :</td>
            <td class="contato_nome_banco_sede"> <?php echo($result_set[$contador]->nome);?> </td>
          </tr>
          <tr>
            <td class="contato_email_sede"> E-mail :</td>
            <td class="contato_email_banco_sede"> <?php echo($result_set[$contador]->email); ?> </td>
          </tr>
          <tr>
            <td class="contato_telefone_sede"> Telefone :</td>
            <td class="contato_telefone_banco_sede"> <?php echo($result_set[$contador]->telefone); ?></td>
          </tr>
          <tr>
            <td class="contato_ocorrencia_sede"> Ocorrência :</td>
            <td class="contato_ocorrencia_banco_sede"> <?php echo($result_set[$contador]->ocorrencia); ?></td>
          </tr>
        </table>
      </div>
    </a>
    <?php
      $contador++ ;
      }
     ?>

</div>
