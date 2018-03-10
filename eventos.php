<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Login </title>
    <?php require_once('estilo/estilo.php'); ?>
    <?php require_once('estilo/estilo_eventos.php'); ?>
    <link rel="icon" type="icone/png" href="imagens/logo.png">
    <script type="text/javascript" src="js/js.js"></script>
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
    <script type="text/javascript">

        $(document).ready(function(){
          $(".pesquisa-form").hide();
          $("#pesquisa").click(function(){
            $(this).toggleClass("active").next().slideToggle("slow");
            return false;
          });

          $("#close-pesquisa").click(function(){
            $(".pesquisa-form").hide();
          });
        });

        /*===== script para fechar o formulário de pesquisa =======*/
        $(document).ready(function() {
          $('input').blur(function() {
            if ($(this).val())
              $(this).addClass('used');
            else
              $(this).removeClass('used');
          });
        });


        /**========== Suavização da ancora ==================*/
        $(document).ready(function() {
			function filterPath(string) {
					return string
					.replace(/^\//,'')
					.replace(/(index|default).[a-zA-Z]{3,4}$/,'')
					.replace(/\/$/,'');
				}
			$('a[href*=#]').each(function() {
				if ( filterPath(location.pathname) == filterPath(this.pathname)
				&& location.hostname == this.hostname
				&& this.hash.replace(/#/,'') ) {
					var $targetId = $(this.hash), $targetAnchor = $('[name=' + this.hash.slice(1) +']');
					var $target = $targetId.length ? $targetId : $targetAnchor.length ? $targetAnchor : false;
					if ($target) {
						var targetOffset = $target.offset().top;
						$(this).click(function() {
						$('html, body').animate({scrollTop: targetOffset},200);
						return false;
						});
					}
				}
			});
		});

    </script>

  </head>
  <body>
    <header>

      <?php
       require_once('view/redes-sociais.php');
      require_once('view/header.php'); ?>

    </header>
    <div id="section">

      <?php require_once('view/eventos_view.php'); ?>

    </div>
    <footer>

        <?php require_once('view/footer.php');  ?>

    </footer>
  </body>
</html>
