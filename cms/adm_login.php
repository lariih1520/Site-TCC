<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> CMS|ADM. Login </title>
    <link rel="stylesheet" type="text/css" href="estilo/estilo.css">
    <link rel="stylesheet" type="text/css" href="estilo/estilo_adm_login.css">
  	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/js.js"></script>
	<script type="text/javascript" src="js/jcarousellite.js"></script>
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
        
        function motivos(status, id){
            if(status != 0){
                r = confirm('Tem certeza que deseja retirar este texto da pagina do site?');
                if(r == true){
                   window.location="router.php?controller=paglogin&modo=off&id="+id;
                }else{
                    window.location="adm_login.php?";
                }
               
            }else{
               window.location="router.php?controller=paglogin&modo=on&id="+id;
            }
        }
        
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
      <?php require_once('view/adm_login_view.php'); ?>
    </section>
  </body>
</html>
