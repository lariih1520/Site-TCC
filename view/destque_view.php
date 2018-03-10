<div class="principal">
   <?php 
        require_once('controller/destaque_controller.php');
        $controller = new ControllerDestaques();
        $listaDestaque = $controller->ListarDestaques();
        
        if(!empty($listaDestaque)){
            
            $cont = 0;
            while($cont < count($listaDestaque)){      
                $prato = $listaDestaque[$cont]->prato;      
                $preco = $listaDestaque[$cont]->preco;      
                $imgPrato = $listaDestaque[$cont]->imgPrato;
                $descricao = $listaDestaque[$cont]->descricao;      
                $imgComent = $listaDestaque[$cont]->imgComent; 
                $comentario = $listaDestaque[$cont]->comentario;  
          
    ?>
    <div class="cont1">
     <div class="conteinner-destaque">
       <div class="prato">
         <div class="imagem">
           <img src="<?php echo $imgPrato ?>" alt="<?php echo $prato ?>" />
         </div>
         <div class="sobre_imagem">
             <div class="texto">
                <div class="nome-prato">
                    <?php echo $prato ?>
                </div>
                <div class="descricao-prato">
                      <?php echo $descricao ?>
                </div>
             </div>
             <div class="avaliacao">
                750+ <br><p> Vendidos </p>
             </div>
              <div class="avaliacao">
                4,2 <br> <p> Avaliação</p>
             </div>
             <div class="botao">
               Faça a sua reserva!
             </div>
         </div>
       </div>
       <div class="comentario-conteinner">
         <div class="conteinner-detalhes">
             <div class="content-comentario">
               <div class="foto">
                 <img src ="<?php echo $imgComent ?>" class="formatacao_foto"/>
               </div>
               <div class="comentario">
                    <div class="tiutlo-comentario">
                        Um dos melhores pratos!
                    </div>
                    <div class="detalhes-comentario">
                        <?php echo $comentario ?>
                    </div>
               </div>
             </div>
         </div>
       </div>
     </div>
   </div>

    <?php
                $cont++;
            }
        }else{
            
            echo '<h1><center>Não há produtos em destaque</center></h1>';
            
        }
    ?>
    
</div>
