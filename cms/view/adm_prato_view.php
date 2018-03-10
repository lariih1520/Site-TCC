<!--
<div id="nav_cima">
    <ul>
        <li> Pratos </li>
        <li>Ingredientes</li>
        <li>Filial</li>
    </ul>
</div> -->

<?php
    @session_start();
    if(isset($_GET['acao'])){
        if($_GET['acao'] == 'editar'){
            $id = $_GET['id'];
            require_once('controller/prato_controller.php');
            $controllerPrato = new ControllerPrato();
            $rs = $controllerPrato->BuscarPrato($id);

            $idPrato = $rs->idPrato;
            $titulo = $rs->titulo;
            $preco = $rs->preco;
            $descricao = $rs->descricao;
            $imagem = $rs->imagem;
            $botao = "Editar";
            $modo="editar&idPrato=".$idPrato;
        }
    }

?>

<form action="router.php?controller=prato&modo=<?php echo $modo ?>" method="post" enctype="multipart/form-data" id="cadastrar_prato">
    <div class="content_cadastrar">

        <p class="titulo_novo">Novo prato</p>
        <div class="lado">
            <p>Nome:</p>
            <input type="text" name="txtTitulo" value="<?php echo $titulo ?>" >
        </div>

        <div class="lado">
            <p>Preço:</p>
            <input type="text" name="txtPreco" value="<?php echo $preco ?>" size="5" placeholder="12.00">
        </div>

        <div class="clear"></div>
        <div class="lado">

          <p>Categoria:</p>
              <select name="slct_categoria">
                      <option value="0"> Selecione </option>
          <?php
              if(!empty($_GET['acao'])){
                  if($_GET['acao'] == 'editar'){
                      $id = $_GET['id'];
                      require_once('controller/prato_controller.php');
                      $controllerPrato = new ControllerPrato();
                      $c = $controllerPrato->CategoriaPrato($id);

                      $cont = 0;
                      while($cont < count($c)){
                          $idCat = $c[$cont]->idCategoria;
                          $cat = $c[$cont]->categoria;
                          $cont++;


                      }
                      echo '<h1>'.$idCat.'</h1>';

                  }
              }else{
                  $idCat = 0;
              }

              require_once('controller/prato_controller.php');
              $controller = new ControllerPrato();
              $rs = $controller->ListarCategorias();

              if($rs != null){
                  $cont = 0;
                  while($cont < count($rs)){
                      $idCategoria = $rs[$cont]->idCategoria;
                      $categoria = $rs[$cont]->categoria;

                      if($idCat == $idCategoria){
                          $slctd = 'selected';
                      }else{
                          $slctd = '';
                      }


          ?>
              <option value="<?php echo $idCategoria ?>" <?php echo $slctd ?>>
                  <?php echo $categoria?>
              </option>
          <?php
                      $cont++;
                  }
              }
          ?>
              </select>
        </div>
        <div class="lado">

          <p>Tipo prato:</p>
              <select name="slct_tipo">
                      <option value="0"> Selecione </option>
          <?php
              if(!empty($_GET['acao'])){
                  if($_GET['acao'] == 'editar'){
                      $id = $_GET['id'];
                      require_once('controller/prato_controller.php');
                      $controllerPrato = new ControllerPrato();
                      $c = $controllerPrato->ListarTipoPrato($id);

                      $cont = 0;
                      while($cont < count($c)){
                          $idT = $c[$cont]->idTipo;
                          $tipo = $c[$cont]->tipo;
                          $cont++;


                      }
                  }

              }else{
                  $idT = 0;

              }

              require_once('controller/prato_controller.php');
              $controller = new ControllerPrato();
              $rs = $controller->ListarTipoPrato();

              if($rs != null){
                  $cont = 0;
                  while($cont < count($rs)){
                      $idTipo = $rs[$cont]->idTipo;
                      $tipo = $rs[$cont]->tipo;

                      if($idTipo == $idT){
                          $slctd = 'selected';
                      }else{
                          $slctd = '';
                      }


          ?>
              <option value="<?php echo $idTipo ?>" <?php echo $slctd ?>>
                  <?php echo $tipo?>
              </option>
          <?php
                      $cont++;
                  }
              }
          ?>
              </select>

            </div><br><br><br>

        <?php
            if(!empty($_GET['acao'])){
        ?>
            <div class="clear"></div>
            <div class="lado">
                <p> Descrição:</p>
                <textarea name="txtDescricao" rows="18" cols="24"><?php echo $descricao ?></textarea>
            </div>
            <div class="lado">
                <p>Foto prato:</p>
                <div class="ver_img_editar">
                    <img src="<?php echo '../'.$imagem ?>" alt="<?php echo $titulo ?>">
                </div>
                <input type="file" name="flPrato">
            </div>
            <div class="clear"></div>
            <p> <input type="submit" name="btnSalvar" value="<?php echo $botao ?>" class="botao">

                <a href="router.php?controller=prato&modo=excluir&id=<?php echo $idPrato ?>"> Excluir</a>
            </p>

        <?php
            }else{
        ?>
            <p> Descrição:</p>
            <textarea name="txtDescricao" rows="10" cols="50"><?php echo $descricao ?></textarea>
            <p>Foto prato:</p>
            <input type="file" name="flPrato">

            <p> <input type="submit" name="btnSalvar" value="<?php echo $botao ?>" class="botao">

            </p>
        <?php
            }
        ?>

    </div>
    <div class="content_cadastrar">
        <p class="titulo_scroll"> Ingredientes do prato: </p>
        <div class="prato_scroll">
        <?php
            $quantidade = '';
            if(!empty($_GET['acao'])){
                if($_GET['acao'] == 'editar'){
                    $id = $_GET['id'];
                    require_once('controller/prato_controller.php');
                    $controllerPrato = new ControllerPrato();
                    $result = $controllerPrato->IngredientePrato($id);

                }
            }else{
                $result = 0;
            }
            require_once('controller/prato_controller.php');
            $controllerPrato = new ControllerPrato();
            $rs = $controllerPrato->ListarIngredientes();

            if($rs != null){

                $cont = 0;
                while($cont < count($rs)){
                    $idIngrediente = $rs[$cont]->idIngrediente;
                    $value_ckd = 'value="'.$idIngrediente.'"';
                    $ingrediente = $rs[$cont]->ingrediente;
                    $quantidade = '';

                    if($result != 0){
                        $c = 0;
                        while($c < count($result)){
                            $idI = $result[$c]->idIngrediente;
                            if($idIngrediente == $idI){
                                $value_ckd = $value_ckd." checked";
                                $quantidade = $result[$c]->quantidade;
                            }
                            $c++;
                        }
                    }
        ?>

            <p>
                <input type="checkbox" name="ingrediente_<?php echo $cont ?>" <?php echo $value_ckd ?> >
                <?php echo $ingrediente ?>
                <input type="text" size="5" value="<?php echo $quantidade ?>" name="qtdIngd_<?php echo $cont ?>" placeholder="Qtd">
            </p>
        <?php
                    $cont++;
                }
                $contIngredientes = count($rs);
                $_SESSION['contIngredientes'] = $contIngredientes;

            }else{
        ?>

            <p>Não há ingredientes</p>

        <?php

            }
        ?>
        </div>
    </div>
    <div class="content_cadastrar">
        <p class="titulo_scroll"> Filiais que possuem o prato: </p>
        <div class="prato_scroll">
        <?php
            if(!empty($_GET['acao'])){
                if($_GET['acao'] == 'editar'){
                    $id = $_GET['id'];
                    require_once('controller/prato_controller.php');
                    $controllerPrato = new ControllerPrato();
                    $result = $controllerPrato->FilialPrato($id);
                }
            }else{
                $result = 0;
            }

            require_once('controller/prato_controller.php');
            $controllerPrato = new ControllerPrato();
            $rs = $controllerPrato->ListarFiliais();

            if($rs != null){

                $cont = 0;
                while($cont < count($rs)){
                    $idFilial = $rs[$cont]->idFilial;
                    $value_ckd = 'value="'.$idFilial.'"';
                    $filial = $rs[$cont]->filial;

                    if($result != 0){
                        $c = 0;
                        while($c < count($result)){
                            $idF = $result[$c]->idFilial;
                            if($idFilial == $idF){
                                $value_ckd = $value_ckd." checked";
                            }
                            $c++;
                        }
                    }

        ?>
            <p><input type="checkbox" name="filial_<?php echo $cont ?>" <?php echo $value_ckd ?>>
                <?php echo $filial ?>
            </p>
        <?php
                    $cont++;
                }
                $contFiliais = count($rs);
                $_SESSION['contFiliais'] = $contFiliais;
            }else{
        ?>

            <p> Não há filiais cadastradas </p>

        <?php

            }
        ?>
        </div>
    </div>
</form>
<div id="pratos_cadastrados">
    <div class="titulo_pratos"> PRATOS CADASTRADOS: </div>
    <div id="todos_pratos">
    <?php
        require_once('controller/prato_controller.php');
        $prato = new ControllerPrato();

        if(!empty($_GET['acao'])){
            if($_GET['acao'] == 'editar'){
                $rslt = $prato->ListarPratos();

            }else{
                $rslt = $prato->ListarPratos();

            }
        }else{
            $rslt = $prato->ListarPratos();

        }

        if($rslt != null){

            $cont = 0;
            while($cont < count($rslt)){
    ?>
            <div class="pratos">
                <div class="img_prato">
                    <img src="<?php echo "../".$rslt[$cont]->imagem ?>" alt="<?php echo $rslt[$cont]->prato ?>">
                </div>
                <div class="desc_prato">
                    <a href="?acao=editar&id=<?php echo $rslt[$cont]->idPrato ?>">
                        <?php echo $rslt[$cont]->prato ?>
                    </a>
                </div>
            </div>
    <?php
                $cont++;
            }
        }else{
            echo 'Não há pratos cadastrados';

        }
    ?>
    </div>
</div>
