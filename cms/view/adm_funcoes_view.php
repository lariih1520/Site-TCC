<?php
  $funcao = null;
  $setor_id = null;
  $titulo = "Nova Função";
  $modo = "inserir";
  if(isset($_GET['modo'])){
    if($_GET['modo']='selectid'){
      $titulo="Editar Função";
      $modo = "editar&id=".$funcao_class->id;
      $funcao = $funcao_class->nome;
      $setor_id = $funcao_class->setor;
    }
  }
 ?>
<div id="cima">
  <p><?php echo($titulo); ?></p>
  <form action="router.php?controller=funcoes&modo=<?php echo($modo);?>" method="post">
    <input type="text" name="txtFuncao" placeholder="Função:" value="<?php echo($funcao)?>">
    <select name="slcSetor">
      <option value="">Selecione um setor</option>
      <?php
        require_once('controller/setor_controller.php');
        $setor_controller = new ControllerSetores();
        $setores = $setor_controller->selectSetores();
        $contador = 0;
        while($contador<count($setores)){
          $selected[$contador]=null;
          if($setor_id !=null){
            if($setores[$contador]->id == $setor_id){
              $selected[$contador] = "selected";
            }
          }
      ?>
          <option <?php echo($selected[$contador]);?> value="<?php echo($setores[$contador]->id)?>"><?php echo($setores[$contador]->nome)?></option>
      <?php
          $contador ++;
        }
       ?>
    </select>
    <input type="submit" name="salvar" value="Salvar">
  </form>
</div>
<div id="funcao_idx">
  <div class="texto_idx"><b>Função</b></div>
  <div class="texto_idx"><b>Setor</b></div>
</div>
<div id="baixo">
  <?php
  require_Once("controller/funcoes_controller.php");
  $funcoes_controller = new ControllerFuncoes();
  $lst_funcoes = $funcoes_controller->selectFuncoes();
  $contador = 0;
  while ($contador<count($lst_funcoes)){
  ?>
      <div class="funcao">
        <div class="texto"><?php echo($lst_funcoes[$contador]->nome); ?></div>
        <div class="texto"><?php echo($lst_funcoes[$contador]->setor);?> </div>
        <div class="opt">
          <a href="router.php?controller=funcoes&modo=selectid&id=<?php echo($lst_funcoes[$contador]->id); ?>">
            <img src="imagens/editar.png" title="Editar">
          </a>
          <a href="router.php?controller=funcoes&modo=delete&id=<?php echo($lst_funcoes[$contador]->id); ?>">
            <img src="imagens/delete.png" title="Excluir">
          </a>
        </div>
      </div>
  <?php
     $contador ++;
  }
   ?>
</div>
