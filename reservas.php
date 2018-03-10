<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Página Inicial </title>
    <?php require_once('estilo/estilo.php'); ?>
    <?php require_once('estilo/estilo_reservas.php'); ?>
    <link rel="icon" type="icone/png" href="imagens/logo.png">	
    <script language="Javascript"> 
     
        var resolucao = screen.width;
        
        if(resolucao < 1000){
           
           document.write('<link href="static/style2.css" rel="stylesheet" type="text/css" />');
           document.write('<link href="static/style.css" rel="stylesheet" type="text/css" />');
           document.write('<script src="static/js.js"></'+'script>');
           document.write('<script src="static/js1.js"></'+'script>');
           document.write('<script src="static/script.js"></'+'script>');
        }
    </script>
  	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/js.js"></script>
    <?php require_once('js/javascript.js'); ?>

  </head>
  <body>
    <header>
        <?php require_once('view/redes-sociais.php'); ?>
        <?php require_once('view/header.php'); ?>
    </header>
    <section>
        <?php require_once('view/reservas_view.php'); ?>
    </section>
    <footer>
      <?php require_once('view/footer.php'); ?>
    </footer>
  </body>
</html>
