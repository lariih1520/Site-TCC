<?php

  session_start();

  if(isset($_SESSION['nome'])){

  }else{

  }

 ?>
<!DOCTYPE html>
<html>
  <head>
		<meta http-equiv="Content-Type" charset="UTF-8">
    <title> Página Inicial </title>
    <?php require_once('estilo/estilo.php'); ?>
    <?php require_once('estilo/estilo_home.php'); ?>
    <link rel="icon" type="icone/png" href="imagens/logo.png">
    <link rel="stylesheet" href="estilo/font-awesome.min.css"/>
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
    <script type="text/javascript" src="js/jcarousellite.js"></script>
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


      /*========== script para suavizar a ancora =========*/
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


    /*======= script mini galeria ====*/
    $(function() {
        $("#carrossel"). jCarouselLite({
          btnPrev: '.prev',
          btnNext: '.next',
          visible: 5
        })
      });

    /*======= script para o mapa - quando estiver sem internet ====*/
    function ImagemOver(imagem){
        imagem.src="imagens/mapa_home_over.png";

    }
    function ImagemOut(imagem){
        imagem.src="imagens/mapa_home_out.png";

    }

      /*=============== script de pesquisa de endereço viacep =========================*/

    /*function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.



              document.getElementById('local').setAttribute('value', conteudo.logradouro);

        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }*/



  
  	</script>
  </head>
  <body>
    <header>
        <?php require_once('view/redes-sociais.php'); ?>
        <?php require_once('view/header.php'); ?>
    </header>
    <section>
        <?php require_once('view/home_view.php'); ?>
    </section>
    <footer>
      <?php require_once('view/footer.php'); ?>
    </footer>
  </body>
</html>
