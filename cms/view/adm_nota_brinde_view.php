
<div id="titulo">
  Validação de Brindes
</div>
<div id="pesquisa_brinde">
  <form class="" action="router.php?controller=notaFiscal&modo=buscar" method="post">
    <input id="txt" type="text" name="txtNota" value="" placeholder="Nota Fiscal:">
    <input id="btn" type="submit" name="" value="Buscar">
  </form>
</div>
<?php
  if(isset($nota_class)){
    if($nota_class->nome!=null){
 ?>
    <div id="brinde">
      <div class="cont_brinde"><b><?php echo($nome = $nota_class->nome); ?></b></div>
      <div class="img_brinde"><img src="<?php echo($nome = $nota_class->img); ?>" alt=""></div>
      <div class="cont_brinde"><?php echo($nome = $nota_class->descricao); ?></div>
      <div class="opt_brinde">
        <form class="" action="router.php?controller=notaFiscal&modo=validar&id=<?php echo($nome = $nota_class->id_nota);?>" method="post">
          <?php
            if($nome = $nota_class->retirado==0){
              $situacao = "Ainda não retirado";
              $situacao_btn = "Definir como retirado";
            }elseif($nome = $nota_class->retirado==1) {
              $situacao = "Já retirado";
              $situacao_btn = "Definir como não retirado";
            }
            echo($situacao);
           ?>

          <input type="submit" name="btn_valida" value="<?php echo($situacao_btn)?>">
        </form>
      </div>
    </div>
<?php
    }else {
?>
  <div id="erro">
    Não foi encontrado nenhum brinde referente a essa nota fiscal.
  </div>
<?php
    }
  }
 ?>
