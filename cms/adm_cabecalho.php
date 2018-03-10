<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CMS|ADM Cor</title>
    <link rel="stylesheet" type="text/css" href="estilo/estilo_adm_cabecalho.css">
    <link rel="stylesheet" type="text/css" href="estilo/estilo.css">
    <script type="text/javascript" src="js/js.js"></script>
  </head>
  <body>
    <header>
      <?php require_once('view/header-cms.php'); ?>
    </header>
    <section id="menu">
        <?php require_once('view/menu-cms.html'); ?>
    </section>
    <section id="conteudo">
        <?php require_once('view/adm_cabecalho_view.php'); ?>
    </section>
  </body>
</html>
