<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Página Inicial </title>
    <link rel="stylesheet" type="text/css" href="estilo/estilo.css">
    <link rel="stylesheet" type="text/css" href="estilo/estilo_home.css">
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

    </header>
    <section>
        <?php require_once('view/home_view.php'); ?>
    </section>
    <footer>
      <?php require_once('view/footer.php'); ?>
    </footer>
  </body>
</html>
