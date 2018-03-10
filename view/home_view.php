<?php
    require_once('controller/home_controller.php');

?>

        <div id="conteinner-home">
            <a href="#conteinner-menu">
                <div id="indicador">
                <img src="imagens/seta_baixo2.gif" alt="indicador" />
            </div>
            </a>

            <div id="slider-show">
                <div id="slider">
                    <a href="#" id="prev">
                        <img src="slides/seta.png" alt="seta" />

                    </a>
                    <a href="#" id="next">
                        <img src="slides/seta.png" alt="seta" />
                    </a>
                    <center>
                      <ul>
                      <?php
                          $controller = new ControllerHome();
                          $rs = $controller->ListarSlide();

                          if($rs != null){

                              $cont = 0;
                              while($cont < count($rs)){
                                  $imgSlide = $rs[$cont]->imagemSlide;
                      ?>
                              <li class="one" style="background-image:url('<?php echo $imgSlide ?>')">
                                  <div class="centralizar">
                                      <div class="row"><h1>Venha garantir seu brinde!</h1></div>
                                      <div class="row"><p>Cadastre sua nota fiscal aqui, e ganhe um super brinde!</p></div>
                                       <form name="frmSlider" action="#">
                                          <button> Saiba como chegar </button>
                                          <button> Reserve Já </button>
                                      </form>
                                  </div>
                              </li>
                      <?php
                                  $cont++;
                              }

                          }else{

                      ?>
                              <li class="one" style="background-image:url('slides/3.jpg')">
                                  <div class="centralizar">
                                      <div class="row"><h1>Venha garantir seu brinde!</h1></div>
                                      <div class="row"><p>Cadastre sua nota fiscal aqui, e ganhe um super brinde!</p></div>
                                       <form name="frmSlider" action="#">
                                          <button> Saiba como chegar </button>
                                          <button> Reserve Já </button>
                                      </form>
                                  </div>
                              </li>
                      <?php
                          }
                      ?>
                    </ul>
                  </center>
              </div>
            </div>

        </div>
        <div id="conteinner-menu">
          <?php

            require_once("controller/filial_controller.php");

              $filial = new ControllerFilial();
              $result_set = $filial->MostrarFiliais();


              $contador = 0;

              while($contador < count($result_set)){


              ?>

              <script type="text/javascript">



                function meu_callback<?php echo($contador); ?>(conteudo) {
                    if (!("erro" in conteudo)) {
                        //Atualiza os campos com os valores.

                          document.getElementById('local<?php echo($contador); ?>').setAttribute('value', conteudo.logradouro);

                    } //end if.
                    else {
                        //CEP não Encontrado.
                        //limpa_formulário_cep();
                        //alert("CEP não encontrado.");
                    }
                }

                function pesquisacep<?php echo($contador);?>(valor) {
                    //Nova variável "cep" somente com dígitos.
                    //alert(valor);
                    var cep = "0" + valor;
                    console.log(cep);

                    //Verifica se campo cep possui valor informado.
                    if (cep != "") {

                      var url = "https://viacep.com.br/ws/" + cep.value + "/json/?meu_callback<?php echo($contador); ?>";
                      console.log(url);
                      //Cria um elemnto javascript.
                      var script = document.createElement('script');

                      //Sincroniza com o callback.
                      script.src = '//viacep.com.br/ws/'+cep+'/json/?callback=meu_callback<?php echo($contador); ?>';

                      //Insere script no documento e carrega o conteúdo.
                      document.body.appendChild(script);
                    } //end if.

                }


                pesquisacep<?php echo($contador); ?>(<?php echo($result_set[$contador]->cep) ?>);



              </script>
              <style>

                #local<?php echo($contador); ?>{
                  background-color: #fff;
                  border-style: none;
                  font-size: 20px;
                  font-family: aller_lightregular;
                  margin-top: 7px;
                }

              </style>
              <?php
                if(isset($_SESSION['filial'])){
                  $selecionado[$contador] = null;
                  if($result_set[$contador]->id_restaurante == $_SESSION['filial']){
                    $selecionado[$contador]="_slc";
                  }
                }
               ?>
              <div class="area_filiais<?php echo($selecionado[$contador])?> area_filiais" >

                <div class="imagem_filial">

                    <img src="fotos/<?php echo($result_set[$contador]->foto); ?>" alt="">

                </div>
                <div class="nome_filial">

                  <label><?php echo($result_set[$contador]->nome); ?></label>

                </div>
                <div class="label_cnpj">
                  <label>CNPJ:</label>
                </div>
                <div class="label_cnpj_banco">
                  <label> <?php echo($result_set[$contador]->cnpj); ?></label>
                </div>
                <div class="label_localidade">
                  <label>Localização:</label>
                </div>
                <div class="label_localidade_banco">
                  <input type="text" id="local<?php echo($contador); ?>" name="" value="" readonly>
                </div>
                <form class="avaliacao" action="router.php?tela=cardapiocontroller&modo=enviar" method="post">
                  <div class="estrelas">

                    <input type="radio" id="vazio" name="estrela" value="" checked>

                    <label for="estrela_um"><i class="fa fa-star fa-2x"></i></label>


                    <label for="estrela_dois"><i class="fa fa-star fa-2x"></i></label>


                    <label for="estrela_tres"><i class="fa fa-star fa-2x"></i></label>


                    <label for="estrela_quatro"><i class="fa fa-star fa-2x"></i></label>


                    <label for="estrela_cinco"><i class="fa fa-star fa-2x"></i></label>

                  </div>
                </form>

                <a href="filtro_restaurante.php?id=<?php echo($result_set[$contador]->id_restaurante)?>">
                  <div class="busca" title="Filtrar">
                      <i class="fa fa-filter fa-3x"></i>
                  </div>
                </a>
              </div>

              <?php
                $contador +=1 ;
                }
               ?>
          </div>
        <div id="conteinner-mapa">
            <!--<img src="imagens/mapa_home_out.png" alt="Mapa temp" onmouseover="ImagemOver(this)" onmouseout="ImagemOut(this)">-->

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.1099290529214!2d-46.90018408452954!3d-23.528548284699124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf0154039cb55b%3A0xadf34a919f156950!2sSENAI+-+Professor+Vicente+Amato!5e0!3m2!1spt-BR!2sbr!4v1505846892409"  frameborder="0" style="border:0" allowfullscreen></iframe>

        </div>
