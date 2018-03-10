<link rel="stylesheet" type="text/css" href="estilo/estilo_reservas.css">
    <script type="text/javascript">
        /** Baixar jquery **/
		$(document).ready(function(){
            $('.lightbox').click(function(){
				$('.background, .box').css('display', 'block');
				$('.background, .box').animate({'opacity':'.60'}, 100, 'linear');
				$('.box').animate({'opacity':'1.00'}, 0, 'linear');
            });
				
			$('.fechar').click(function(){
				$('.background, .box').css('display', 'none');
			});
				
			var offset = $('#menu').offset().top;
			
			$(document).on('scroll', function(){
				if(offset <= $(window).scrollTop()){
					$('#menu').addClass('fixar');
				}else{
					$('#menu').removeClass('fixar');
				}
			});
				
        });
        
        function abrirImagem(imagem){
            $("#verImg").attr("src", imagem); 
        }
    </script>
<div>
    <div id='slide'>  </div>
        
    <form action="router.php?acao=reservar" method="post" id='campos_reserva'>
        <div class="background"></div>
        <div class="box"> 
		  <div class="fechar">X</div> 
		  <img src=""  alt="imagem selecionada" width="900px;" height="600px;" id="verImg">
        </div>
        <table id="tbl_campos">
            <tr id="tr_menor"> 
                <td> Filial: 
                    <select name="slcFilial">
                        <option> selecione </option>
                        <option value="1"> 1 </option>
                        <option value="2"> 2 </option>
                        <option value="3"> 3 </option>
                        <option value="4"> 4 </option>
                    </select>
                </td>
                <td> Mesa: 
                    <select name="slcMesa">
                        <option> selecione </option>
                        <option> 2 pessoas </option>
                        <option> 4 pessoas </option>
                        <option> 6 pessoas </option>
                        <option> de 6 á 10 pessoas </option>
                        <option> mais de 10 </option>
                    </select>
                    <p>
                        <a href="#outros" class="lightbox" onclick="abrirImagem('imagens/teste.png');">
                            Veja a mesa
                        </a>
                    </p>
                </td> 
            </tr>
            <tr id="tr_maior"> 
                <td> Horário: 
                    <select name="slcHora">
                        <option> selecione </option>
                        <option> Almoço </option>
                        <option> Jantar </option>
                        
                    </select>
                </td>
                <td> <input type="submit" value="Confirmar reserva" class="botao"> </td> 
            </tr>
        </table>
    </form>
</div>