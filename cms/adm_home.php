<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> CMS|ADM. HOME </title>
    <link rel="stylesheet" type="text/css" href="estilo/estilo.css">
    <link rel="stylesheet" type="text/css" href="estilo/estilo_home.css">
  	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/js.js"></script>
	<script type="text/javascript" src="js/jcarousellite.js"></script>
  </head>
  <body>
    <header>
      <?php require_once('view/header-cms.php'); ?>
    </header>
    <section id="menu">
      <?php require_once('view/menu-cms.html'); ?>
    </section>
    <section id="conteudo">
      <?php require_once('view/adm_home_view.php'); ?>
    </section>
  </body>
</html>
