<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ADM Mesas</title>
    <link rel="stylesheet" type="text/css" href="estilo/estilo.css">
    <link rel="stylesheet" type="text/css" href="estilo/estilo_adm_mesas.css">
    <script type="text/javascript" src="js/js.js"></script>
  </head>
  <body>
    <header>
      <?php require_once("view/header-cms.php");?>
    </header>
    <section id="menu">
      <?php require_once("view/menu-cms.html"); ?>
    </section>
    <section id="conteudo">
      <?php require_once('view/adm_mesas_view.php');?>
    </section>
    <footer></footer>
  </body>
</html>
