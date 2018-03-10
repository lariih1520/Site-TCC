<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Cardápio </title>
    <?php require_once('estilo/estilo.php'); ?>
    <?php require_once('estilo/estilo_cardapio.php'); ?>
    <link rel="stylesheet" href="estilo/font-awesome.min.css"/>
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
  	<script type="text/javascript">

          /*======== script para abrir o formulário de pesqusa*/
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

  	</script>
  </head>
  <body>
    <header>
        <?php
            require_once('view/redes-sociais.php');
            require_once('view/header.php'); ?>

    </header>
    <section>
        <?php
            $pesquisa = 0;
            require_once('view/cardapio.php');

        ?>
    </section>
    <footer>
      <?php require_once('view/footer.php'); ?>
    </footer>
  </body>
</html>
