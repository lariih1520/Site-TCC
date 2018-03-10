<div id="principal">
    <div id="cabecalho">
        <p id="texto_cabecalho">Sistema de gerenciamento de conteudo - Adm. Paginas - Galeria</p>
    <div class="img_cabecalho">
        
    </div>
    <div class="img_cabecalho">
        
    </div>
        
    </div>
    <div id="menu_lateral">
    
    </div>
    <div id="conteudo">
        
    <div id="cadastro_galeria">
        
       <p id="texto_conteudo">Motivos para se cadastrar</p>
        
        <p id="titulo">Título:</p>
        <input class="input" type="text" name="txtTitulo" placeholder="Título"/>
        
        <textarea name="txtTexto" rows="10" cols="100"></textarea>
    </div>
    <div id="escolha">
        
        <div id="imagem">
        
        </div>
        
        <form action="router.php" id="botao" method="post">
            <div class="botao_escolha">
                <input class="formatacao" type="submit" value="salvar" name="botao1"/>
            </div>
            <div class="botao_escolha">
                 <input class="formatacao" type="submit" value="salvar" name="botao1"/>
            </div>
    
        </form>
    </div>
        
        <div id="slide">
            <div id="content">
						<div id="menu-carrossel">
							<a href="#" class="prev" title="Anterior">
                                 <img src="imagens/seta1.png">
                            </a>
						</div>
						<div id="carrossel">
							<ul>
								<li>
									<img src="imagens/img4.jpg"/>
								</li>
								<li>
									<img src="imagens/img7.jpg"/>
								</li>
								<li>
									<img src="imagens/img3.jpg"/>
								</li>
                                <li>
									<img src="imagens/img4.jpg"/>
								</li>
								<li>
									<img src="imagens/img7.jpg"/>
								</li>
								<li>
									<img src="imagens/img3.jpg"/>
								</li>
								<li>
									<img src="imagens/img1.jpg"/>
								</li>
								<li>
									<img src="imagens/img2.jpg"/>
								</li>
								<li>
									<img src="imagens/img5.jpg"/>
								</li>
							</ul>
						</div>
						<div id="menu-carrossel">
							<a href="#" class="next" title="Próximo">
                               <img src="imagens/seta2.png">
                            </a>
						</div>
					</div>
					<script src="js/jquery.min.js"></script>
					<script type="text/javascript" src="js/jcarousellite.js"></script>
					<script>	
						$(function() {
							$("#carrossel"). jCarouselLite({
								btnPrev: '.prev', 
								btnNext: '.next',
								visible: 5
							})
						})
					</script>

        
        </div>

</div>

