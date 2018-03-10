
<?php

    $corrgb;

    require_once('controller/cores_controller.php');

    $lista_cores = new ControllerCor();

    $rs = $lista_cores->ListarCor();
    $contador = 0;

    while($contador < count($rs)){

      $corrgb = $rs[$contador]->cor.";";


      $contador += 1;
    }


?>

<style>
    *{
        padding: 0px;
        margin: 0px;
    }

    a{
        color:#000;
        text-decoration: none;
    }


    @font-face {
            font-family: 'allerbold';
            src: url('fonts/Aller/aller_bd-webfont.woff2') format('woff2'),
                 url('fonts/Aller/aller_bd-webfont.woff') format('woff');
            font-weight: normal;
            font-style: normal;

        }

        @font-face {
            font-family: 'allerbold_italic';
            src: url('fonts/Aller/aller_bdit-webfont.woff2') format('woff2'),
                 url('fonts/Aller/aller_bdit-webfont.woff') format('woff');
            font-weight: normal;
            font-style: normal;

        }

        @font-face {
            font-family: 'alleritalic';
            src: url('fonts/Aller/aller_it-webfont.woff2') format('woff2'),
                 url('fonts/Aller/aller_it-webfont.woff') format('woff');
            font-weight: normal;
            font-style: normal;

        }

        @font-face {
            font-family: 'aller_lightregular';
            src: url('fonts/Aller/aller_lt-webfont.woff2') format('woff2'),
                 url('fonts/Aller/aller_lt-webfont.woff') format('woff');
            font-weight: normal;
            font-style: normal;

        }

        @font-face {
            font-family: 'aller_lightitalic';
            src: url('fonts/Aller/aller_ltit-webfont.woff2') format('woff2'),
                 url('fonts/Aller/aller_ltit-webfont.woff') format('woff');
            font-weight: normal;
            font-style: normal;

        }

        @font-face {
            font-family: 'allerregular';
            src: url('fonts/Aller/aller_rg-webfont.woff2') format('woff2'),
                 url('fonts/Aller/aller_rg-webfont.woff') format('woff');
            font-weight: normal;
            font-style: normal;

        }

        @font-face {
            font-family: 'aller_displayregular';
            src: url('fonts/Aller/allerdisplay-webfont.woff2') format('woff2'),
                 url('fonts/Aller/allerdisplay-webfont.woff') format('woff');
            font-weight: normal;
            font-style: normal;
        }

@media screen and (min-device-width: 1405px) and (max-device-width: 3000px){

        /* ================================== CABEÇALHO ===============================*/
        /*
          Feito por: Bruno Farias
          Data: 07-09-2017
          Modificações: Nenhuma

        */
        header{
          width: 100%;
          height: auto;
          border-bottom: 1px solid <?php echo($corrgb); ?>;
            z-index: 1;
        }

        /* FAIXA DE REDES SOCIAIS*/
        #conteinner-redes{
            width: 100%;
            height: 30px;
            background-color: <?php echo($corrgb); ?>;
        }

        #redes{
            width: 450px;
            height: 30px;
            float:right;
        }

        .redes{
          float: left;
          width: 30px;
          height: 30px;
        }

        .redes img{
          width: 30px;
          height: 30px;
        }

        #facebook{
            clear: both;
            float: left;
            width: 30px;
            height: 30px;
        }

        #facebook:hover{
            background-color: #3b5998;
            transition: 0.5s;
        }

        #instagram{
            float: left;
            width: 30px;
            height: 30px;
        }

        #instagram:hover{
            background-color: #4c68d7;
            transition: 0.5s;
        }

        #twitter{
            float: left;
            width: 30px;
            height: 30px;
        }

        #twitter:hover{
            background-color: #00aced;
            transition: 0.5s;
        }

        #pesquisa{
            float: left;
            width: 30px;
            height: 30px;
            cursor:pointer;
        }

        #pesquisa:hover{
            background-color: #7ab800;
            transition: 0.5s;
        }

        .li_em_volta{
          list-style: none;
        }

        /* MENU, LOGO E ÁREA DE ACESSO */
        #conteinner-header{
            width: 1900px;
            height: 90px;
            z-index: 2;
            clear: both;
            margin: auto;
        }

        #img-logo{
            width: 200px;
            height: 90px;
            clear:both;
            float:left;
            margin-left:100px;
            margin-right: 100px;
            z-index: 1;
        }

        #img-logo img{
            width: 300px;
            height: 150px;
            margin-top: -35px;
        }

        #menu-mobile{
            display: none;
        }
        #menu-desktop{
            float: left;
            height: 90px;
            margin-left: 30px;
        }

        #menu-desktop ul li{
            display: inline-block;
            list-style: none;
            font-family: aller_lightregular;
            font-size: 18px;
            width:100px;
            height: 55px;
            text-align: center;
            padding-top: 35px;
        }

        #menu-desktop ul li:hover{
            color:#fff;
            background-color:<?php echo($corrgb); ?>;;
            transition: 0.5s;
        }
        #menu-desktop ul li a:hover{

          color: #fff;
        }

        #menu-desktop ul li:hover #conteinner-redes{
            background-color:<?php echo($corrgb); ?>;;
            transition: 0.5s;
        }

        #conteinner-login{
            width:250px;
            height:80px;
            float:left;
            margin-left: 20px;
        }

        h1{
            color:<?php echo($corrgb); ?>;
            font-size: 25px !important;
            font-family: aller_lightregular;
            font-weight: bold;
        }

        #entre{
          clear:both;
          float:left;
        }

        #user{
          float:left;
          border-left: 1px solid <?php echo($corrgb); ?>;;
          padding-left: 5px;
          margin-left: 5px;
        }

        #user img{
          width: 50px;
          height: 50px;
        }

        .text{
            color:#000;
            font-family: aller_lightregular;
        }

        /* ============================= RODAPÉ =========================================*/
        /*
          Feito por: Bruno Farias
          Data: 10-09-2017
          Modificações: Nenhuma

        */

        footer{
            width: :100%;
            height: 350px;
            margin-top: -49.5px;
            background-color: <?php echo($corrgb); ?>;;
            -webkit-box-shadow: -5px -7px 49px -15px rgba(0,0,0,0.75);
            -moz-box-shadow: -5px -7px 49px -15px rgba(0,0,0,0.75);
            box-shadow: -5px -7px 49px -15px rgba(0,0,0,0.75)
        }

        #conteinner-footer{
            width: 1500px;
            height: 300px;
            margin: auto;
            padding: auto;
        }

        .conteinners{
            width:450px;
            height: 250px;
            padding: 15px;
            float:left;
            margin-right: 19px;
        }

        #seta{
          background-color: #fff;
          border: 3px solid <?php echo($corrgb); ?>;;
          width: 47px;
          height: 47px;
          position: absolute;
          margin-top: -25px;
          margin-left: 35%;
          border-radius: 25px;
          -webkit-box-shadow: -5px -7px 49px -15px rgba(0,0,0,0.75);
          -moz-box-shadow: -5px -7px 49px -15px rgba(0,0,0,0.75);
          box-shadow: -5px -7px 49px -15px rgba(0,0,0,0.75)
        }

        #seta img{
          margin-left: 3px;
          margin-top: 7px;
          height: 40px;
          width: 40px;
        }

        .conteinners-titulo{
          width: 100%;
          height: 50px;
          margin-top: 20px;
        }

        .bordas{
          border-bottom: 1px solid #000;
          position: absolute;
          margin-top: -7px;
          height: 20px;
          width: 400px;
          margin-left: 30px;
          z-index: 1;
        }

        .title{
          margin: auto;
          color:#000;
          font-size: 18px;
          font-weight: bold;
          font-family: aller_lightregular;
          text-align: center;
          width: 230px;
          background-color: <?php echo($corrgb); ?>;
          z-index: 2;
          position: absolute;
          margin-left: 110px;
        }

        .divisao{
          width: 225px;
          height: 200px;
          float: left;
        }

        .perguntas-frequentes li{
          list-style: none;
          color:#fff;
          font-family: aller_lightregular;
          font-size: 15px;
        }

        .perguntas-frequentes li:hover{
          list-style: disc;
          color: #000;
          cursor: pointer;
        }

        .mapa-site li{
          color:#fff;
          font-family: aller_lightregular;
          font-size: 15px;
          list-style: square;
        }

        .mapa-site li:hover{
          color:#000;
          cursor: pointer;
        }

        .divisao-info{
          width: 450px;
          height: 100px;
        }

        .local-filiais li{
          list-style-image: url('../imagens/marcador.png');
          color: #fff;
          font-family: aller_lightregular;
          font-size: 15px;
        }

        .local-filiais li:hover{
          cursor: pointer;
        }

        #redes-rodape{
            width: 200px;
            height: 50px;
            margin-top: 10px;
            margin-left: 120px;
        }

        #rede-facebook{
            width: 30px;
            height: 30px;
            padding: 10px;
            clear: both;
            float: left;
        }

        #rede-facebook:hover{
          background-color:#3b5998;
          transition: 0.2s ease all;
        }

        #rede-instagram{
            width: 30px;
            height: 30px;
            padding: 10px;
            float: left;
        }

        #rede-instagram:hover{
          background-color: #4c68d7;
          transition: 0.2s ease all;
        }

        #rede-twitter{
            width: 30px;
            height: 30px;
            padding: 10px;
            float: left;
        }

        #rede-twitter:hover{
          background-color: #00aced;
          transition: 0.2s ease all;
        }

        #conteinner-direitos-autorais{
          width: 100%;
          height: 25px;
          background-color: #000;
          clear: both;
          padding-top:20px;
          border-top: 5px solid #FFFAFA;
        }

        #direitos-autorais{
          color:#fff;
          font-size: 15px;
          font-family: aller_lightregular;
        }

        /* ========================= PESQUISA - CABEÇALHO ======================================*/
        /*
          Feito por: Bruno Farias
          Data: 10-09-2017
          Modificações: Nenhuma

        */

        .text-pesquisa{
            height: 30px;
            background-color: #000;
        }

        .pesquisa-form{
          clear:both;
          float:left;
          position:absolute;
          margin-top:121px;
          margin-left:-1095px;
          width:1500px;
          height:100px;
          overflow:hidden;
        }

        #close-pesquisa{
          width:50px;
          height:50px;
          cursor:pointer;
          margin-left:15px;
          margin-top:15px;
          clear: both;;
          float: left;
        }

        #close-pesquisa img{
          width:25px;
          height:25px;
        }

        #form-pesquisa{
          float: left;
          padding-top: 40px;
        }

        .grupo-text-pesquisa{
          position: relative;
          margin-bottom: 2.4em;
        }

        .label{
          color: #000;
          font-size: 20px;
          font-weight: normal;
          font-family: aller_lightregular;
          position: absolute;
          pointer-events: none;
          top: 10px;
          transition: 0.2s ease all;
        }

        .input{
          color:#000;
          padding: 10px 0px 10px 0px;
          display: block;
          outline: none;
          border: none;
          width: 1000px;
          border-bottom: 1px solid <?php echo($corrgb); ?>;;
          font-size: 18px;
          font-family: aller_lightregular;
        }

        /* Animação */
        .bar {
          position: relative;
          display: block;
          width: 300px;
        }

        .bar:before, .bar:after {
          content: "";
          height: 2px;
          width: 0;
          bottom: -1px;
          position: absolute;
          background: #5264ae;
          transition: 0.2s ease all;
        }

        .bar:before { left: 50%; }
        .bar:after { right: 50%; }

        /* Validação de acordo com o texto digitado */
        input:valid { border-bottom: 1px solid <?php echo($corrgb); ?>;; }

        input:valid ~ .bar:before,
        input:valid ~ .bar:after {
          background: <?php echo($corrgb); ?>; !important;
        }

        input:focus ~ label,
        input.used ~ label {
          top: -20px;
          font-size: 16px;
          color: <?php echo($corrgb); ?>;;
        }

        input:valid ~ label,
        input:valid.used ~ label {
          color: <?php echo($corrgb); ?>;;
        }

        input:focus ~ .bar:before,
        input:focus ~ .bar:after {
          width: 50%;
        }

        /*========== Formatação sectiion, definição de tamanhos =================*/


        #conteinner-home{
          width: 100%;
          height: 750px;
        }

        #slider-show{
          width: 1500px;
          height: 150px;
        }

        #menu{
          width: 1500px;
          height: 500px;
        }

        #slider{
          width:100%;
          height:700px;
          margin-top:130px;
          position:relative;
          overflow:hidden;
            background: #000;
        }

        #slider ul{
          width:2400px;
          list-style-type:none;
            margin: auto;
            padding: auto;
        }


        #slider li{
          width:800px;
          height:300px;
          background-size:100% auto !important;
        }

        #slider li.one{background:#069;
        padding-top: 150px;}


        #slider #prev, #slider #next{
          position:absolute;
          width:30px;
          height:60px;
          top:50%;
          margin-top:-30px;
        }
        #slider #next{
          right:0;
        }
        #slider #prev{left:0;}

        #slider li .row{
          float:left;
          width:100%;
          margin:6px 0;
          text-align:center;
          color:white;
        }
        .row h1{
          font-family:allerregular;
          font-size:27px;
          text-shadow:#000 0 1px 0;
          margin-top:15px;
        }



        .botao-slider{
            height: 150px;
            color: #fff;
            text-decoration: none;
            background-color: #000;
        }
}

@media screen and (min-device-width: 1002px) and (max-device-width: 1400px){
    /* ================================== CABEÇALHO ===============================*/
    /*
      Feito por: Bruno Farias
      Data: 07-09-2017
      Modificações: Nenhuma

    */
    *{
        padding: 0px;
        margin: 0px;
    }

    a{
        color:#000;
        text-decoration: none;
    }
    body{
        max-width: 100%;
    }
    header{
      width: 100%;
      height: auto;
      border-bottom: 1px solid <?php echo($corrgb); ?>;
        z-index: 1;
    }

    /* FAIXA DE REDES SOCIAIS*/
    #conteinner-redes{
        width: 100%;
        height: 30px;
        background-color: <?php echo($corrgb); ?>;

    }

    #redes{
        width: 450px;
        height: 30px;
        float:right;
    }

    .redes{
      float: left;
      width: 30px;
      height: 30px;
    }

    .redes img{
      width: 30px;
      height: 30px;
    }

    #facebook{
        clear: both;
        float: left;
        width: 30px;
        height: 30px;
    }

    #facebook:hover{
        background-color: #3b5998;
        transition: 0.5s;
    }

    #instagram{
        float: left;
        width: 30px;
        height: 30px;
    }

    #instagram:hover{
        background-color: #4c68d7;
        transition: 0.5s;
    }

    #twitter{
        float: left;
        width: 30px;
        height: 30px;
    }

    #twitter:hover{
        background-color: #00aced;
        transition: 0.5s;
    }

    #pesquisa{
        float: left;
        width: 30px;
        height: 30px;
        cursor:pointer;
    }

    #pesquisa:hover{
        background-color: #7ab800;
        transition: 0.5s;
    }

    .li_em_volta{
      list-style: none;

    }


    /* MENU, LOGO E ÁREA DE ACESSO */
    #conteinner-header{
        width: 100%;
        min-width: 1200px;
        height: 150px;
        z-index: 2;
        clear: both;
        margin: auto;
    }

    #img-logo{
        width: 200px;
        height: 90px;
        clear:both;
        float:left;
        margin-left:5px;
        margin-right: 100px;
        z-index: 1;
    }

    #img-logo img{
        width: 300px;
        height: 150px;
        margin-top: -35px;
    }

    #menu-mobile{
        display: none;
    }

    #menu-desktop{
        height: 90px;
        margin-left: 25%;
        margin-top: 50px;
        position: absolute;
    }

    #menu-desktop ul li{
        display: inline-block;
        list-style: none;
        font-family: aller_lightregular;
        font-size: 18px;
        width:80px;
        height: 55px;
        text-align: center;
        padding-top: 35px;
    }

    #menu-desktop ul li:hover{
        color:#fff;
        background-color:<?php echo($corrgb); ?>;;
        transition: 0.5s;
    }
    #menu-desktop ul li a:hover{

      color: #fff;
    }

    #menu-desktop ul li:hover #conteinner-redes{
        background-color:<?php echo($corrgb); ?>;;
        transition: 0.5s;
    }

    #conteinner-login{
        width:250px;
        height:90px;
        float:right;
        margin-left: 50px;
        padding-top: 15px;
    }

    h1{
        color:<?php echo($corrgb); ?>;;
        font-size: 20px;
        font-family: aller_lightregular;
        font-weight: bold;
    }

    #entre{
      clear:both;
      float:left;
    }

    #user{
      float:left;
      border-left: 1px solid <?php echo($corrgb); ?>;;
      padding-left: 5px;
      margin-left: 5px;
    }

    #user img{
      width: 50px;
      height: 50px;
    }

    .text{
        color:#000;
        font-family: aller_lightregular;
    }

    /* ============================= RODAPÉ =========================================*/
    /*
      Feito por: Bruno Farias
      Data: 10-09-2017
      Modificações: Nenhuma

    */

    #seta{
      background-color: #fff;
      border: 3px solid <?php echo($corrgb); ?>;;
      width: 47px;
      height: 47px;
      position: absolute;
      margin-top: -25px;
      margin-left: 35%;
      border-radius: 25px;
      -webkit-box-shadow: -5px -7px 49px -15px rgba(0,0,0,0.75);
      -moz-box-shadow: -5px -7px 49px -15px rgba(0,0,0,0.75);
      box-shadow: -5px -7px 49px -15px rgba(0,0,0,0.75)
    }

    #seta img{
      margin-left: 3px;
      margin-top: 7px;
      height: 40px;
      width: 40px;
    }

    footer{
        width: :100%;
        height: 350px;
        background-color: <?php echo($corrgb); ?>;;
        -webkit-box-shadow: -5px -7px 49px -15px rgba(0,0,0,0.75);
        -moz-box-shadow: -5px -7px 49px -15px rgba(0,0,0,0.75);
        box-shadow: -5px -7px 49px -15px rgba(0,0,0,0.75)
    }

    #conteinner-footer{
        min-width: 900px;
        width: 1150px;
        height: 300px;
        margin: auto;
        padding: auto;
    }

    .conteinners{
        height: 250px;
        padding: 16px;
        float:left;
        margin-right: 10px;
        border-right: solid 1px black;
    }

    .conteinners-titulo{
      width: 100%;
      height: 50px;
      margin-top: 20px;
    }

    .bordas{
      width: 0px;
    }

    .title{
      margin: auto;
      color:#000;
      font-size: 18px;
      font-weight: bold;
      font-family: aller_lightregular;
      text-align: center;
      width: 220px;
      background-color: <?php echo($corrgb); ?>;
      z-index: 2;
    }

    .divisao{
      max-width: 180px;
      min-width: 140px;
      height: 200px;
      float: left;
    }

    .perguntas-frequentes li{
      list-style: none;
      color:#fff;
      font-family: aller_lightregular;
      font-size: 15px;
    }

    .perguntas-frequentes li:hover{
      list-style: disc;
      color: #000;
      cursor: pointer;
    }

    .mapa-site li{
      color:#fff;
      font-family: aller_lightregular;
      font-size: 15px;
      list-style: square;
    }

    .mapa-site li:hover{
      color:#000;
      cursor: pointer;
    }

    .divisao-info{
      width: 450px;
      height: 100px;
    }

    .local-filiais li{
      list-style-image: url('../imagens/marcador.png');
      color: #fff;
      font-family: aller_lightregular;
      font-size: 15px;
    }

    .local-filiais li:hover{
      cursor: pointer;
    }

    #redes-rodape{
        width: 200px;
        height: 50px;
        margin-top: 10px;
        margin-left: 120px;
    }

    #rede-facebook{
        width: 30px;
        height: 30px;
        padding: 10px;
        clear: both;
        float: left;
    }

    #rede-facebook:hover{
      background-color:#3b5998;
      transition: 0.2s ease all;
    }

    #rede-instagram{
        width: 30px;
        height: 30px;
        padding: 10px;
        float: left;
    }

    #rede-instagram:hover{
      background-color: #4c68d7;
      transition: 0.2s ease all;
    }

    #rede-twitter{
        width: 30px;
        height: 30px;
        padding: 10px;
        float: left;
    }

    #rede-twitter:hover{
      background-color: #00aced;
      transition: 0.2s ease all;
    }

    #conteinner-direitos-autorais{
      width: 100%;
      height: 25px;
      background-color: #000;
      clear: both;
      padding-top:20px;
      border-top: 5px solid #FFFAFA;
    }

    #direitos-autorais{
      color:#fff;
      font-size: 15px;
      font-family: aller_lightregular;
    }

    /* ========================= PESQUISA - CABEÇALHO ======================================*/
    /*
      Feito por: Bruno Farias
      Data: 10-09-2017
      Modificações: Nenhuma

    */

    .text-pesquisa{
        height: 30px;
        background-color: #000;
    }

    .pesquisa-form{
      clear:both;
      float:left;
      position:absolute;
      margin-top:121px;
      margin-left:-1095px;
      width:1500px;
      height:100px;
      overflow:hidden;
    }

    #close-pesquisa{
      width:50px;
      height:50px;
      cursor:pointer;
      margin-left:15px;
      margin-top:15px;
      clear: both;;
      float: left;
    }

    #close-pesquisa img{
      width:25px;
      height:25px;
    }

    #form-pesquisa{
      float: left;
      padding-top: 40px;
    }

    .grupo-text-pesquisa{
      position: relative;
      margin-bottom: 2.4em;
    }

    .label{
      color: #000;
      font-size: 20px;
      font-weight: normal;
      font-family: aller_lightregular;
      position: absolute;
      pointer-events: none;
      top: 10px;
      transition: 0.2s ease all;
    }

    .input{
      color:#000;
      padding: 10px 0px 10px 0px;
      display: block;
      outline: none;
      border: none;
      width: 1000px;
      border-bottom: 1px solid <?php echo($corrgb); ?>;;
      font-size: 18px;
      font-family: aller_lightregular;
    }

    /* Animação */
    .bar {
      position: relative;
      display: block;
      width: 300px;
    }

    .bar:before, .bar:after {
      content: "";
      height: 2px;
      width: 0;
      bottom: -1px;
      position: absolute;
      background: #5264ae;
      transition: 0.2s ease all;
    }

    .bar:before { left: 50%; }
    .bar:after { right: 50%; }

    /* Validação de acordo com o texto digitado */
    input:valid { border-bottom: 1px solid <?php echo($corrgb); ?>;; }

    input:valid ~ .bar:before,
    input:valid ~ .bar:after {
      background: <?php echo($corrgb); ?>; !important;
    }

    input:focus ~ label,
    input.used ~ label {
      top: -20px;
      font-size: 16px;
      color: <?php echo($corrgb); ?>;;
    }

    input:valid ~ label,
    input:valid.used ~ label {
      color: <?php echo($corrgb); ?>;;
    }

    input:focus ~ .bar:before,
    input:focus ~ .bar:after {
      width: 50%;
    }

    /*========== Formatação sectiion, definição de tamanhos =================*/


    #conteinner-home{
      width: 100%;
      height: 750px;
    }

    #slider-show{
      width: 1500px;
      height: 150px;
    }

    #menu{
      width: 1500px;
      height: 500px;
    }

    #slider{
      width:100%;
      height:700px;
      margin-top:130px;
      position:relative;
      overflow:hidden;
        background: #000;
    }

    #slider ul{
      width:2400px;
      list-style-type:none;
        margin: auto;
        padding: auto;
    }


    #slider li{
      width:800px;
      height:300px;
      background-size:100% auto !important;
    }

    #slider li.one{background:#069;
    padding-top: 150px;}


    #slider #prev, #slider #next{
      position:absolute;
      width:30px;
      height:60px;
      top:50%;
      margin-top:-30px;
    }
    #slider #next{
      right:0;
    }
    #slider #prev{left:0;}

    #slider li .row{
      float:left;
      width:100%;
      margin:6px 0;
      text-align:center;
      color:white;
    }
    .row h1{
      font-family:allerregular;
      font-size:27px;
      text-shadow:#000 0 1px 0;
      margin-top:15px;
    }



    .botao-slider{
        height: 150px;
        color: #fff;
        text-decoration: none;
        background-color: #000;
    }

}

@media screen and (min-device-width: 300px) and (max-device-width: 1000px){

    *{
        padding: 0px;
        margin: 0px;
    }

    a{
        color:#000;
        text-decoration: none;
    }

    header{
      width: 100%;
      height: auto;
      border-bottom: 1px solid <?php echo($corrgb); ?>;
      z-index: 1;
    }

    /* FAIXA DE REDES SOCIAIS*/
    #conteinner-redes{
        display: none;
    }
    
    
    /* MENU, LOGO E ÁREA DE ACESSO */
    #conteinner-header{
        width: 100%;
        height: 180px;
        z-index: 2;
        clear: both;
        margin: auto;
        margin-top: 100px;
    }

    #img-logo{
        width: 200px;
        height: 90px;
        clear:both;
        float:left;
        margin-left:5px;
        margin-right: 100px;
        z-index: 1;
    }

    #img-logo img{
        width: 300px;
        height: 150px;
        margin-top: -35px;
    }

    #menu-desktop{
        display: none;
    }
    
    #menu_mobile li{
        text-align: left;
        margin-top: 40px;
        margin-left: 5px;
    }

    #menu_mobile li a{
        font-size: 35px;
        width:80px;
        height: 55px;
        text-align: center;
        margin-top: 35px;
    }

    #menu_mobile li:hover{
        color:#fff;
        background-color:<?php echo($corrgb); ?>;;
        transition: 0.5s;
    }
    #menu_mobile li a:hover{
      color: #fff;
    }

    #menu_mobile li:hover #conteinner-redes{
        background-color:<?php echo($corrgb); ?>;;
        transition: 0.5s;
    }

    #conteinner-login{
        width:350px;
        height:100px;
        float:right;
        margin-left: 50px;
        padding-top: 15px;
    }

    h1{
        color:<?php echo($corrgb); ?>;
        font-size: 28px;
        font-family: aller_lightregular;
        font-weight: bold;
    }

    #entre{
      clear:both;
      float:left;
    }

    #user{
      float:left;
      border-left: 1px solid <?php echo($corrgb); ?>;
      padding-left: 5px;
      margin-left: 5px;
    }

    #user img{
      width: 50px;
      height: 50px;
    }

    .text{
        color:#000;
        font-size:30px;
        font-family: aller_lightregular;
    }

    /* ============================= RODAPÉ =========================================*/

    #seta{
      background-color: #fff;
      border: 3px solid <?php echo($corrgb); ?>;;
      width: 47px;
      height: 47px;
      position: absolute;
      margin-top: -25px;
      margin-left: 35%;
      border-radius: 25px;
      -webkit-box-shadow: -5px -7px 49px -15px rgba(0,0,0,0.75);
      -moz-box-shadow: -5px -7px 49px -15px rgba(0,0,0,0.75);
      box-shadow: -5px -7px 49px -15px rgba(0,0,0,0.75)
    }

    #seta img{
      margin-left: 3px;
      margin-top: 7px;
      height: 40px;
      width: 40px;
    }

    footer{
        width: :100%;
        height: 700px;
        background-color: <?php echo($corrgb); ?>;;
        -webkit-box-shadow: -5px -7px 49px -15px rgba(0,0,0,0.75);
        -moz-box-shadow: -5px -7px 49px -15px rgba(0,0,0,0.75);
        box-shadow: -5px -7px 49px -15px rgba(0,0,0,0.75)
    }

    #conteinner-footer{
        width: 950px;
        height: 700px;
        margin: auto;
        padding: auto;
        border-right: solid 1px black;
    }

    .conteinners{
        height: 620px;
        padding: 18px;
        float:left;
        margin-right: 10px;
        border-right: solid 1px white;
    }
    
    #mobile_hide{
        display: none;
    }
    
    .conteinners-titulo{
      width: 100%;
      height: 50px;
      margin-top: 20px;
    }

    .bordas{
      width: 0px;
    }

    .title{
      margin: auto;
      margin-bottom: 5px;
      color:#000;
      font-size: 35px;
      font-weight: bold;
      font-family: aller_lightregular;
      text-align: center;
      width: 200px;
      background-color: <?php echo($corrgb); ?>;
      z-index: 2;
    }

    .divisao{                       /*================== AQUIII ===================*/
      min-width: 100px;
      height: auto;
      margin-bottom: 10px;

    }

    .perguntas-frequentes li{
      list-style: none;
      color:#fff;
      font-family: aller_lightregular;
      font-size: 15px;
    }

    .perguntas-frequentes li:hover{
      list-style: disc;
      color: #000;
      cursor: pointer;
    }

    .mapa-site li{
      color:#fff;
      font-family: aller_lightregular;
      font-size: 30px;
      list-style: square;
    }

    .mapa-site li:hover{
      color:#000;
      cursor: pointer;
    }

    .divisao-info{
      width: 440px;
      min-height: 100px;
    }

    .local-filiais li{
      list-style-image: url('../imagens/marcador.png');
      color: #fff;
      font-family: aller_lightregular;
      font-size: 30px;
    }

    .local-filiais li:hover{
      cursor: pointer;
    }

    #redes-rodape{
        width: 200px;
        height: 50px;
        margin-top: 10px;
        margin-left: 120px;
    }

    #rede-facebook{
        width: 30px;
        height: 30px;
        padding: 10px;
        clear: both;
        float: left;
    }

    #rede-facebook:hover{
      background-color:#3b5998;
      transition: 0.2s ease all;
    }

    #rede-instagram{
        width: 30px;
        height: 30px;
        padding: 10px;
        float: left;
    }

    #rede-instagram:hover{
      background-color: #4c68d7;
      transition: 0.2s ease all;
    }

    #rede-twitter{
        width: 30px;
        height: 30px;
        padding: 10px;
        float: left;
    }

    #rede-twitter:hover{
      background-color: #00aced;
      transition: 0.2s ease all;
    }

    #conteinner-direitos-autorais{
      width: 100%;
      height: 25px;
      background-color: #000;
      clear: both;
      padding-top:20px;
      border-top: 5px solid #FFFAFA;
    }

    #direitos-autorais{
      color:#fff;
      font-size: 15px;
      font-family: aller_lightregular;
    }

    /* ========================= PESQUISA - CABEÇALHO ======================================*/

    .text-pesquisa{
        height: 30px;
        background-color: #000;
    }

    .pesquisa-form{
      clear:both;
      float:left;
      position:absolute;
      margin-top:121px;
      margin-left:-1095px;
      width:1500px;
      height:100px;
      overflow:hidden;
    }

    #close-pesquisa{
      width:50px;
      height:50px;
      cursor:pointer;
      margin-left:15px;
      margin-top:15px;
      clear: both;;
      float: left;
    }

    #close-pesquisa img{
      width:25px;
      height:25px;
    }

    #form-pesquisa{
      float: left;
      padding-top: 40px;
    }

    .grupo-text-pesquisa{
      position: relative;
      margin-bottom: 2.4em;
    }

    .label{
      color: #000;
      font-size: 20px;
      font-weight: normal;
      font-family: aller_lightregular;
      position: absolute;
      pointer-events: none;
      top: 10px;
      transition: 0.2s ease all;
    }

    .input{
      color:#000;
      padding: 10px 0px 10px 0px;
      display: block;
      outline: none;
      border: none;
      width: 1000px;
      border-bottom: 1px solid <?php echo($corrgb); ?>;;
      font-size: 18px;
      font-family: aller_lightregular;
    }

    /* Animação */
    .bar {
      position: relative;
      display: block;
      width: 300px;
    }

    .bar:before, .bar:after {
      content: "";
      height: 2px;
      width: 0;
      bottom: -1px;
      position: absolute;
      background: #5264ae;
      transition: 0.2s ease all;
    }

    .bar:before { left: 50%; }
    .bar:after { right: 50%; }

    /* Validação de acordo com o texto digitado */
    input:valid { border-bottom: 1px solid <?php echo($corrgb); ?>;; }

    input:valid ~ .bar:before,
    input:valid ~ .bar:after {
      background: <?php echo($corrgb); ?>; !important;
    }

    input:focus ~ label,
    input.used ~ label {
      top: -20px;
      font-size: 16px;
      color: <?php echo($corrgb); ?>;;
    }

    input:valid ~ label,
    input:valid.used ~ label {
      color: <?php echo($corrgb); ?>;;
    }

    input:focus ~ .bar:before,
    input:focus ~ .bar:after {
      width: 50%;
    }

    /*========== Formatação sectiion, definição de tamanhos =================*/

/*
    #conteinner-home{
      width: 100%;
      height: 750px;
    }

    #slider-show{
      width: 1500px;
      height: 150px;
    }

    #menu{
      width: 1500px;
      height: 500px;
    }

    #slider{
      width:100%;
      height:700px;
      margin-top:130px;
      position:relative;
      overflow:hidden;
        background: #000;
    }

    #slider ul{
      width:2400px;
      list-style-type:none;
        margin: auto;
        padding: auto;
    }


    #slider li{
      width:800px;
      height:300px;
      background-size:100% auto !important;
    }

    #slider li.one{background:#069;
    padding-top: 150px;}


    #slider #prev, #slider #next{
      position:absolute;
      width:30px;
      height:60px;
      top:50%;
      margin-top:-30px;
    }
    #slider #next{
      right:0;
    }
    #slider #prev{left:0;}

    #slider li .row{
      float:left;
      width:100%;
      margin:6px 0;
      text-align:center;
      color:white;
    }
    .row h1{
      font-family:allerregular;
      font-size:27px;
      text-shadow:#000 0 1px 0;
      margin-top:15px;
    }



    .botao-slider{
        height: 150px;
        color: #fff;
        text-decoration: none;
        background-color: #000;
    }*/
}

</style>
