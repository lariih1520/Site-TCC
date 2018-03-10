<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ADM Cor</title>
    <link rel="stylesheet" type="text/css" href="estilo/estilo_adm_ocorrencia.css">
    <link rel="stylesheet" type="text/css" href="estilo/estilo.css">
    <?php require_once('js/js.php'); ?>
  </head>
  <body>

  <header>

    <?php require_once('view/header-cms.php'); ?>

  </header>

  <section id="menu">
      <?php require_once('view/menu-cms.html'); ?>
  </section>
  <section id="conteudo">
      <?php require_once('view/adm_ocorrencia_view.php'); ?>
  </section>
  </body>
</html>
