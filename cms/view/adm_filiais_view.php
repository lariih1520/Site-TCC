<?php


  $action = "cadastrar";
  $id_filial = "";
  $nome = "";
  $cep = "";
  $telefone = "";
  $numero = "";
  $tipo_filial = "";
  $cnpj = "";
  $foto = "fcbad07af16362f7cf520c9b564d55dd.png";

  if(isset($_GET['sucesso'])){
    $sucesso = $_GET['sucesso'];

    if($sucesso == 1){
      ?>
        <script type="text/javascript">
          window.alert("Filial cadastrada com suceso");
        </script>
      <?php
    }else{
      ?>
        <script type="text/javascript">
          window.alert("Ops! teve um errinho no cadastro, verifique as informações");
        </script>
      <?php
    }
  }

  if(isset($_GET['modo'])){
    if($_GET['modo'] == 'buscar'){
      $id_filial = $filial->id_restaurante;
      $nome = $filial->nome;
      $cep = $filial->cep;
      $telefone = $filial->telefone;
      $cnpj = $filial->cnpj;
      $foto = $filial->foto;
      $numero = $filial->numero;
      $tipo_filial = $filial->tipo_restaurante;

      $action = "alterar&id=".$id_filial;
    }

  }

  if(isset($_GET['erroAlterar'])){

    if($_GET['erroAlterar'] == 0){
      ?>
        <script type="text/javascript">
          window.alert("Alterado com sucesso!");
        </script>
      <?php
    }else if($_GET['erroAlterar'] == 1){
      ?>
        <script type="text/javascript">
          window.alert("Erro ao alterar, por favor, verifique as informações");
        </script>
      <?php
    }

  }

 ?>

<div class="conteudo_adm_filiais">

  <div class="cadastro_nova_filial">
    <div class="imagem_banco">

      <img src="../fotos/<?php echo($foto); ?>" alt="">

    </div>

    <div class="formulario_filiais">

      <form name="frmFilial" action="router.php?controller=filial&modo=<?php echo($action); ?>" method="post" enctype="multipart/form-data">

        <div class="nome">
            <input placeholder="Nome:" name="txtNomeFilial" class="login_senha" type="text" maxlength="50" value="<?php echo($nome); ?>" required/>
            <span class="bar_nome"> </span>
        </div>

        <div class="cnpj">
            <input placeholder="Cnpj:" name="txtcnpj" class="login_senha4" type="text" maxlength="50" value="<?php echo($cnpj); ?>" required/>
            <span class="bar_cnpj"> </span>
        </div>

        <div class="CEP">
            <input placeholder="CEP:" name="txtCEPFilial" class="login_senha2" type="text" maxlength="8" value="<?php echo($cep); ?>" required/>
            <span class="bar_cep"> </span>
        </div>

        <div class="numero">
            <input placeholder="N°:" name="txtNumeroFilial" class="login_senha3" type="text" maxlength="10" value="<?php echo($numero); ?>" required/>
            <span class="bar_numero"> </span>
        </div>

        <div class="telefone">
            <input placeholder="Telefone:" name="txtTelefoneFilial" class="login_senha5" type="text" maxlength="" value="<?php echo($telefone); ?>" required/>
            <span class="bar_telefone"> </span>
        </div>

        <div class="imagem">

          <input class="input_imagem"  type="file" name="filefotos" size="20">

        </div>

        <div class="tipo_filial">
            <label class="titulo_cep"> Tipo: </label>
            <select class="" name="tipo_filial">
              <option value="0">Escolha uma opção</option>
              <?php

                require_once('controller/tipoFilial_controller.php');

                $lista = new TipoFilialController();

                $rs = $lista->ListarTipoFilial();
                $contador = 0;

                while ($contador < count($rs)) {

                  if($rs[$contador]->id_tipo_restaurante == $tipo_filial){
                    $select = "selected";
                  }else{
                    $select = "";
                  }

                  ?>
                  <option value="<?php echo($rs[$contador]->id_tipo_restaurante); ?>" <?php echo($select); ?>>
                    <?php echo($rs[$contador]->nome); ?>
                  </option>
                  <?php
                  $contador += 1;
                }

              ?>
            </select>
            <span class="bar_cep"> </span>
        </div>

        <div class="entrar">
            <button class="btn_entrar" type="submit" name="btn_entrar" > Salvar </button>
        </div>

      </form>



    </div>
  </div>


  <div class="filiais_cadastradas">

    <p class="titulo_filiais_cadastradas">Filiais Cadastradas </p>


    <?php

       require_once('controller/filial_controller.php');

        $listaFiliais = new ControllerFilial();

        $rs = $listaFiliais->MostrarFiliais();

        $contador = 0;


        while($contador < count($rs)){

            $id = $rs[$contador]->id_restaurante;
            $nome = $rs[$contador]->nome;
            $tipo_restaurante = $rs[$contador]->tipo_restaurante;
            $telefone = $rs[$contador]->telefone;
            $cep = $rs[$contador]->cep;
            $numero = $rs[$contador]->numero;

            ?>
            <a href="router.php?controller=filial&modo=buscar&id=<?php echo($id); ?>">
              <div class="campo_filiais_cadastradas">

                <table class="table_filiais_cadastradas">

                  <tr>
                    <td class="filiais_cadastrada1"> Nome :</td>
                    <td class="filiais_cadastrada1_banco"> <?php echo($nome); ?></td>
                  </tr>
                  <tr>
                    <td class="filiais_cadastrada1"> CEP :</td>
                    <td class="filiais_cadastrada1_banco"> <?php echo($cep); ?></td>
                  </tr>
                  <tr>
                    <td class="filiais_cadastrada1"> N° :</td>
                    <td class="filiais_cadastrada1_banco"> <?php echo($numero); ?>
                      <a href="router.php?controller=filial&modo=excluir&id=<?php echo($id); ?>">
                        <img src="imagens/close-icon.png" alt="" />
                      </a>
                    </td>

                  </tr>

                </table>

              </div>
            </a>
            <?php


            $contador += 1;
        }

     ?>



  </div>



</div>
