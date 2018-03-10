<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Galeria - The Rib's Steakhouse </title>
    <?php require_once('estilo/estilo.php'); ?>
    <?php require_once('estilo/estilo_galeria.php'); ?>
    <link rel="icon" type="icone/png" href="imagens/logo.png">	
  	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/js.js"></script>
    <script type="text/javascript" src="js/jcarousellite.js"></script>
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

      /*====== script slider =======*/
      $(function(){
          	var i = 0;
          	function slide(element, tamanhoP, qtd, i){
          		if(i > qtd){
          			$('#'+element+' ul').animate({marginRight: 0},600);
          			i = 0;
          		}else{
          			$('#'+element+' ul').animate({marginRight:'-='+tamanhoP}, 600);
          		}

          		return i;
          	}
          	function effect(element, time){
          		var tamanhoP = Number($('#'+element).width());
          		$('#'+element+' li').css('width', tamanhoP+'px');
          		$('#'+element+' li .row').css('width', tamanhoP+'px');

          		var qtdLi = $('#'+element+' li').length;
          		var wdtUl = tamanhoP*qtdLi;
          		$('#'+element+' ul').css('width', wdtUl+'px');
          		var qtd= qtdLi-1;

          		$('#prev').on('click', function(e){
          			e.preventDefault();
          			if(i < qtd){
          				$('#'+element+' ul').animate({marginRight:'-='+tamanhoP},600);
          				i++;
          			}else if(i == qtd){
          				$('#'+element+' ul').animate({marginRight:0}, 600);
          				i = 0;
          			}
          			console.log(i);
          		});

          		$('#next').on('click', function(e){
          			e.preventDefault();
          			if(i > 0){
          				$('#'+element+' ul').animate({marginRight:'+='+tamanhoP},600);
          				i--;
          			}else{
          				$('#'+element+' ul').animate({marginRight:'-='+(tamanhoP*qtd)},600);
          				i = qtd;
          			}
          			console.log(i);
          		});

          		var t = setInterval(function(){
          			i++;
          			i = slide(element, tamanhoP, qtd, i);
          		}, time);

          		$('#'+element).on('mouseover', function(){
          			clearInterval(t);
          		});

          		$('#'+element).on('mouseout', function(){
          			t = setInterval(function(){
          				i++;
          				i = slide(element, tamanhoP, qtd, i);
          			}, time);
          		});
          	}

          	effect('slider', 1500);
          });
        
        /****** Slide ******/
        $(function() {
            $("#carrossel"). jCarouselLite({
                btnPrev: '.prev',
                btnNext: '.next',
                visible: 5
            })
        })
        
  	</script>
  </head>
  <body>
    <header>
        <?php require_once('view/redes-sociais.php'); ?>
        <?php require_once('view/header.php'); ?>
    </header>
    <section>
        <?php require_once('view/galeria_view.php'); ?>
    </section>
    <footer>
      <?php require_once('view/footer.php'); ?>
    </footer>
  </body>
</html>
