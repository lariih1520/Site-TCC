<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> CMS|ADM. Eventos </title>
    <link rel="stylesheet" type="text/css" href="estilo/estilo.css">
    <link rel="stylesheet" type="text/css" href="estilo/estilo_adm_eventos.css">
  	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/js.js"></script>
	<script type="text/javascript" src="js/jcarousellite.js"></script>
  	<script type="text/javascript">
		$(document).ready(function() {
			$('input').blur(function() {
				if ($(this).val())
					$(this).addClass('used');
				else
					$(this).removeClass('used');
			});
		});
 
        $(function() {
            $("#carrossel"). jCarouselLite({
              btnPrev: '.prev',
              btnNext: '.next',
              visible: 5
            })
        });
      
        
  	</script>
  </head>
  <body>
    <header>
      <?php require_once('view/header-cms.php'); ?>
    </header>
    <section id="menu">
      <?php require_once('view/menu-cms.html'); ?>
    </section>
    <section id="conteudo">
      <?php require_once('view/adm_eventos_view.php'); ?>
    </section>
  </body>
</html>
