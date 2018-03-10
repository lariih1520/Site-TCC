<?php

  if(isset($_GET['sql'])){
    echo($_GET['sql']);
  }
  $action = "nova";
  $id_rede = "";
  $nome_rede = "";
  $link_rede = "";
  $cor_rede = "";
  $foto_rede = "rede-padrap.png";

  if(isset($_GET['modo'])){
    if($_GET['modo'] == 'listarUpdate'){

      $id_rede = $rede->id_rede;
      $nome_rede = $rede->nome_rede;
      $link_rede = $rede->link;
      $foto_rede = $rede->foto;
      $action = "alterar&id=".$id_rede;

    }
  }

?>

<div class="conteudo-adm-redes">
  <div class="formulario-redes">
    <div class="titulo-formulario">
      Redes Sociais
    </div>
    <div class="formulario-nova-rede">
      <div class="frm">
        <form action="router.php?controller=rede&modo=<?php echo($action); ?>" method="post" enctype="multipart/form-data">
          <div class="formulario">
            <div class="grupo-text-pesquisa">
                <input name="txtNome" placeholder="Nome:" class="login_senha2" type="text" maxlength="50" value="<?php echo($nome_rede); ?>" required/>
                <span class="bar"> </span>
            </div>
            <div class="grupo-text-pesquisa">
                <input name="txtLink" placeholder="Link:" class="login_senha2" type="text" maxlength="50" value="<?php echo($link_rede); ?>" required/>
                <span class="bar"> </span>
            </div>

          </div>
          <div class="imagem-rede">
            <div class="foto-rede">
              <img src="../fotos/<?php echo($foto_rede) ?>" alt="">
            </div>
            <div class="input-file">
              <input type="file" name="filerede" value="">
            </div>
          </div>
          <div class="botao">
              <button  name="button"> Cadastrar </button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="redes-cadastradas">
    <div class="titulo-redes-cadastradas">
      Redes sociais cadastradas:
    </div>
    <div class="redes">
        <?php

          require_once('controller/redes_controller.php');

          $listaRedes = new ControllerRede();

          $rs = $listaRedes->ListarTodo();

          $contador = 0;

          while ($contador < count($rs)) {

            $id = $rs[$contador]->id_rede;

            $nome = $rs[$contador]->nome_rede;
            $foto = $rs[$contador]->foto;
            $link = $rs[$contador]->link;

         ?>
         <a href="router.php?controller=rede&modo=listarUpdate&id=<?php echo($id); ?>">
          <div class="rede-sicial">
            <div class="img-rede-social" style="background-color:#000;">
              <img src="../fotos/<?php echo($foto); ?>" alt="" />
            </div>
            <div class="nome-rede-social">
              <?php echo($nome); ?>
            </div>
            <a href="router.php?controller=rede&modo=excluir&id=<?php echo($id); ?>">
              <div class="delete-rede">
                <img src="imagens/close-icon.png" alt="deletar" />
              </div>
            </a>
            <div class="link-redee-social">
              <?php echo($link); ?>
            </div>
          </div>
        </a>
        <?php
            $contador += 1;
          }
         ?>

    </div>
  </div>
</div>
