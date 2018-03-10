<?php
  $numero = null;
  $lugares = null;
  $restaurante_id = null;
  $titulo = "Nova Mesa";
  $modo = "inserir";
  $validacao = null;
  if(isset($_GET['modo'])){
    if($_GET['modo']='selectid'){
      $titulo="Editar Mesa";
      $modo = "editar&id=".$mesa_class->id;
      $numero = $mesa_class->numero ;
      $lugares = $mesa_class->lugares;
      $restaurante_id = $mesa_class->restaurante;
      if($mesa_class->validacao == 1){
        $validacao = "checked";
      }
    }
  }
 ?>
<div id="cima">
  <p><?php echo($titulo) ?></p>
  <form action="router.php?controller=mesas&modo=<?php echo($modo)?>" method="post">
    <input type="number" name="txtNumero" placeholder="Número da mesa" value="<?php echo($numero)?>">
    <select name="slcLugares">
      <option value="">Quantidade de lugares</option>
      <?php
        $contador_lugares = 2;
        while ($contador_lugares<=8){
          $selected_lugares[$contador_lugares]=null;
          if($lugares!=null){
            if($contador_lugares==$lugares){
              $selected_lugares[$contador_lugares]="Selected";
            }
          }
      ?>
        <option <?php echo($selected_lugares[$contador_lugares])?> value="<?php echo($contador_lugares)?>"><?php echo($contador_lugares)?></option>
      <?php
          $contador_lugares += 2;
        }
       ?>
    </select>
    <select name="slcFiliais">
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
    <div id="chkbox">
      Disponível para reserva:
      <input <?php echo($validacao); ?> type="checkbox" name="chkReserva">
    </div>
    <input type="submit" name="salvar" value="Salvar">
  </form>
</div>
<div id="mesa_idx">
  <div class="numero_idx"><b>Identificação</b></div>
  <div class="numero_idx"><b>Lugares</b></div>
  <div id="restaurante_idx"><b>Filial</b></div>
</div>
<div id="baixo">
  <?php
    require_Once("controller/mesas_controller.php");
    $mesas_controller = new ControllerMesas();
    $lst_mesas = $mesas_controller->selectMesas();
    $contador = 0;
    while ($contador<count($lst_mesas)){
   ?>
      <div class="mesa">
        <div class="numero"><?php echo($lst_mesas[$contador]->numero); ?></div>
        <div class="numero"><?php echo($lst_mesas[$contador]->lugares); ?></div>
        <div class="restaurante"><?php echo($lst_mesas[$contador]->restaurante); ?></div>
        <?php
          //TODO: IMAGEM QUE INFORMA SE A MESA ESTÁ OU NÃO DISPONÍVEL PARA RESERVA
         ?>
        </div>
        <div class="opt">
          <a href="router.php?controller=mesas&modo=selectid&id=<?php echo($lst_mesas[$contador]->id)?>">
            <img src="imagens/editar.png" title="Editar">
          </a>
          <a href="router.php?controller=mesas&modo=delete&id=<?php echo($lst_mesas[$contador]->id)?>">
            <img src="imagens/delete.png" title="Excluir">
          </a>
        </div>
      </div>
  <?php
      $contador ++;
    }
   ?>
</div>
