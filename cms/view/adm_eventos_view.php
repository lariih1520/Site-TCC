<?php
  $titulo=null;
  $data=null;
  $descricao=null;
  $comentario=null;
  $restuarnte_id=null;
  $imagens = null;
  $modo="inserir";
  if(isset($_GET['modo'])){
    if($_GET['modo']=='selectId'){
      $titulo=$eventos_class->nome;
      $data=$eventos_class->data;
      $descricao=$eventos_class->sobre;
      $restaurante_id=$eventos_class->restaurante;
      $imagens = $eventos_class->imagem;
      $modo="editar&id=".$eventos_class->id;
    }
  }
 ?>
    <div class="titulo_historico">
        Cadastro de eventos

    </div>
    <form action="router.php?controller=eventos&modo=<?php echo($modo)?>" method="post" enctype="multipart/form-data" id="cadastrar_evento">
        <div class="margem">
            <div class="nome">
                <input name="txtTitulo" class="login_senha" placeholder="titulo" value="<?php echo($titulo)?>" type="text" />
                <span class="bar_nome"> </span>
            </div>

            <div class="data">
                <input type="text" name="txtData" value="<?php echo($data)?>" class="login_senha_data" placeholder="titulo"/>
                <span class="bar_data"> </span>
            </div>

            <div class="clear">
                <textarea class="textareaClear" placeholder="Descrição" name="txtDescricao" rows="10" cols="60" ><?php echo($descricao)?></textarea>
            </div>
        </div>
        <div class="margem">
            <p class="foto_evento"> Foto do evento: </p>
            <div class="cadastrar_imagem">
                <img src="<?php echo($imagens[0]->url)?>" alt="">
            </div>
            <input type="file" name="flEvento0">
        </div>
        <div class="margem">
          <p>Local</p>
          <select name="slcLocal">
            <option value="">Selecione um restaurante</option>
            <?php
              require_once('controller/filial_controller.php');
              $restaurante_controller = new ControllerFilial();
              $restaurante = $restaurante_controller->MostrarFiliais();
              $contador = 0;
              $selected;
              while($contador<count($restaurante)){
                $selected[$contador]=null;
                if($restaurante_id !=null){
                  if($restaurante[$contador]->id_restaurante == $restaurante_id){
                    $selected[$contador] = "selected";
                  }
                }
             ?>
                <option <?php echo($selected[$contador]);?> value="<?php echo($restaurante[$contador]->id_restaurante);?>">
                  <?php echo($restaurante[$contador]->nome);?>
                </option>
            <?php
                $contador ++;
              }
            ?>
          </select>
        </div>
        <div class="imagens_evento">
            <ul class="lista_imgs_evento">
                <li>
                    <div class="imgEvento"><img src="<?php echo($imagens[1]->url)?>"></div>
                    <p> <input type="file" name="flEvento1"> </p>
                </li>
                <li>
                    <div class="imgEvento"><img src="<?php echo($imagens[2]->url)?>"></div>
                    <p> <input type="file" name="flEvento2"> </p>
                </li>
                <li>
                    <div class="imgEvento"><img src="<?php echo($imagens[3]->url)?>"></div>
                    <p> <input type="file" name="flEvento3"> </p>
                </li>
                <li>
                    <div class="imgEvento"><img src="<?php echo($imagens[4]->url)?>"></div>
                    <p> <input type="file" name="flEvento4"> </p>
                </li>
                <li>
                    <div class="imgEvento"><img src="<?php echo($imagens[5]->url)?>"></div>
                    <p> <input type="file" name="flEvento5"> </p>
                </li>
            </ul>

        </div>
        <button class="btn_cadastrar" type="submit" name="btn_alterar" > Cadastrar </button>
    </form>

    <div class="titulo_historico">
        Histórico de eventos:
    </div>
    <br>
    <br>
    <div id="historico_evento">
    <?php
        require_once('controller/eventos_controller.php');
        $eventos_controller = new ControllerEventos();
        $rs = $eventos_controller->ListarEventos();
        if($rs != null){
            $cont = 0;
            while($cont < count($rs)){
        ?>
              <div class="eventos_todos">
                  <div class="img_evento_todos">
                      <img src="<?php echo($rs[$cont]->imagem) ?>" alt="">
                  </div>
                  <div class="detalhes_evento_todos">
                      <p class="titulo_evento"><?php echo($rs[$cont]->nome) ?></p>
                      <p><b>Data: </b><?php echo(date('d/m/Y', strtotime($rs[$cont]->data))) ?></p>
                      <p><b>Local: </b><?php echo($rs[$cont]->restaurante) ?></p>
                  </div>
                  <div class="opt_eventos">
                    <a href="router.php?controller=eventos&modo=excluir&id=<?php echo($rs[$cont]->id)?>">
                      <img src="imagens/delete.png" title="Excluir">
                    </a>
                    <a href="router.php?controller=eventos&modo=selectId&id=<?php echo($rs[$cont]->id)?>">
                      <img src="imagens/editar.png" title="Editar">
                    </a>
                  </div>
              </div>
        <?php
              $cont++;
            }
        }else{
            echo 'Não há histórico de eventos';
        }
    ?>
    </div>
