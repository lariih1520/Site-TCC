
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

<style >
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

@media screen and (min-width: 1410px) and (max-width: 2000px){
    
    *{
        margin: 0;
        padding: 0;
        list-style: none ;
         text-decoration:none;
        outline: 0;
    }
    
    header{
        height: auto;
    }

    section{
        width:100%;
        height:2200px;
        margin-top: 90px;
    }

    .setas{
      width: 220px;
      height: 100px;
      position: absolute;
      margin-top: 180px;
      margin-left: 150px;
      transform: rotate(100deg);
    }

    .setas-2{
      width: 220px;
      height: 100px;
      position: absolute;
      margin-left: 400px;
      margin-top: 150px;
      transform: rotate(90deg);
    }

    .tag_h2{
      display: none;
    }

    .setas-2{
      transform: rotate(240deg);
    }

    .setas-3{
      width: 220px;
      height: 100px;
      position: absolute;
      margin-left: 250px;
      margin-top: 380px;
      transform: rotate(90deg);
    }

    .setas-3 img{
      transform: rotate(-90deg);
    }

    .setas-4{
      width: 300px;
      height: 100px;
      position: absolute;
      margin-left: 500px;
      margin-top: 350px;
      transform: rotate(-20deg);
    }

    .setas-5{
      width: 250px;
      height: 100px;
      position: absolute;
      margin-left:800px;
      margin-top: 210px;
    }

    .setas-6{
      width: 250px;
      height: 100px;
      position: absolute;
      margin-left:1150px;
      margin-top: 210px;
    }

    #div_mobile{
        display: none;
    }
    /* ======== Formatação parte comparativa (Jeito The Rib's )====================*/
    #conteinner-diferencial{
        width: 1700px;
        height: 510px;
        margin: auto;
        padding: auto;
        padding-top: 20px;
    }

    #table-diferencial{
        width: 100%;
        height: 500px;
        padding: none;
    }

    .columns{
        width: 100%;
        height: 166px;
    }

    .text-maneira{
        width: 200px;
        text-align: center;
        font-size: 20px;
        font-family: aller_displayregular;
        color: ;
    }


    /* ========= Formatação dados: QTD. Pratos vendidos, QTD. Filiais Média Geral ===========*/

    #conteinner-dados{
        width: 100%;
        height: 250px;
        margin-top: 15px;
        background-attachment: fixed;
        background-image: url('imagens/back.png');
        padding: 10px;
    }


    #conteudo-dados{
        width: 1250px;
        height: 210px;
        margin: auto;
    }

    .dados{
        width: 300px;
        height: 210px;
        float: left;
        margin-left: 70px;
    }

    .dado-numero{
        width: 100%;
        height: 100px;
        text-align: center;
        color: #fff;
        font-size: 48px;
        font-family: aller_displayregular;
        padding-top: 50px;
    }

    .dado-texto{
        width: 100%;
        height: 60px;
        text-align: center;
        color: #fff;
        font-size: 28px;
        font-family: aller_displayregular;
    }

    /*Formatação história da empresa */
    #conteinner-historia{
        width: 100%;
        height: 1350px;
    }

    #coisas-historia{
        width: 1900px;
        height: 950px;
        margin: auto;
    }

    #historia{
        width: 100%;
        height: 600px;
        overflow: auto;
        text-align: center;
        color: ;
    }

    .text-historia{
        font-family: allerregular;
    }

    /*Formatação Galeria Historia*/

    #galeria-historia{
        width: 1480px;
        height: 350px;
        background-color: #000;
        margin: auto;
        border-top: solid 2px black;
    }
    /******************/

    #content {
        margin: 0 auto;
        width: 1480px;
        height: 350px;
        background-color: white;
        border:solid 1px transparent;
    }

    #carrossel {
        float: left;
        width: 1380px;
        height: 340px;
        overflow: hidden;
        border: solid 1px transparent;
    }

    #carrossel ul li {
        width: 230px;
        height: 250px !important;
        float: left;
        padding: 30px 20px 30px 20px;
        margin: 0 2px;
    }

    #carrossel ul li img{
      width: 250;
      height: 250px !important;
      float: left;
      margin: 0 2px;
    }

    #menu-carrossel {
        float: left;
        width: 40px;
        height:340px;
        font-size: 20px;
        line-height: 350px;
        border:solid 1px transparent;
        text-align: center;
    }
    #menu-carrossel a img{
        width: 35px;
    }


    /*Fotmação slider missão, visão e valores*/

    #valores{
        width: 1200px;
        height: 600px;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 10px;
        border-top: solid 1px #C0C0C0;
        border-bottom: solid 15px black;
    }


    /*****************    Slide   *****************/

    .controls{
      margin-top: -100px;
    }

    .gallery .controle:target ~ .controls .button {
        color: #ccc;
        color: rgb(0,0,0);
    }

    .gallery .button:first-of-type, .gallery .controle:nth-of-type(1):target ~ .controls .button:nth-of-type(1), .gallery .controle:nth-of-type(2):target ~ .controls .button:nth-of-type(2), .gallery .controle:nth-of-type(3):target ~ .controls .button:nth-of-type(3), .gallery .controle:nth-of-type(4):target ~ .controls .button:nth-of-type(4), .gallery .controle:nth-of-type(5):target ~ .controls .button:nth-of-type(5) {
        color: white;
        color: #000;
    }

    .gallery .item:first-of-type {
        position: static;
        pointer-events: auto;
        opacity: 1;
    }
    .gallery .item {
        position: absolute;
        top: 0;
        left: 0;
        width: 300px;
        height: 300px;
        pointer-events: none;
        opacity: 0;
        transition: opacity .5s;
        margin-left:0px;
        margin-top: 0px;
    }

    .gallery .controle:target ~ .item {
        pointer-events: none;
        opacity: 0;
        animation: none;
    }
    .gallery .controle:target ~ .controls .button {
        animation: none;
    }
    @keyframes controlAnimation-4 {
        0% {
          color: #ccc;
          color: #000;
        }

        7.1%,
        25% {

          color: #000;
        }

        32.1%,
        100% {
          color: #ccc;
          color: #000;
        }
    }
    @keyframes galleryAnimation-4 {
        0% {
        opacity: 0;
        }

        7.1%,
        25% {
        opacity: 1;
        }

        32.1%,
        100% {
        opacity: 0;
        }
    }
    .gallery .controle:nth-of-type(1):target ~ .item:nth-of-type(1) {
        pointer-events: auto;
        opacity: 1;
    }
    .gallery .controle:nth-of-type(2):target ~ .item:nth-of-type(2) {
        pointer-events: auto;
        opacity: 1;
    }
    .gallery .controle:nth-of-type(3):target ~ .item:nth-of-type(3) {
        pointer-events: auto;
        opacity: 1;
    }
    .gallery .controle:nth-of-type(4):target ~ .item:nth-of-type(4) {
        pointer-events: auto;
        opacity: 1;
    }

    .items-4.autoplay .button {
            animation: controlAnimation-4 28s infinite;
    }
      .items-4.autoplay .item {
        animation: galleryAnimation-4 28s infinite;
    }
      .items-4 .button:nth-of-type(1),
      .items-4 .item:nth-of-type(1) {
        animation-delay: -2s;
    }
      .items-4 .button:nth-of-type(2),
      .items-4 .item:nth-of-type(2) {
        animation-delay: 5s;
      }
      .items-4 .button:nth-of-type(3),
      .items-4 .item:nth-of-type(3) {
        animation-delay: 12s;
      }
      .items-4 .button:nth-of-type(4),
      .items-4 .item:nth-of-type(4) {
        animation-delay: 19s;
      }

      .gallery .controle:nth-of-type(1):target ~ .item:nth-of-type(1) {
        pointer-events: auto;
        opacity: 1;
      }
      .gallery .controle:nth-of-type(2):target ~ .item:nth-of-type(2) {
        pointer-events: auto;
        opacity: 1;
      }
      .gallery .controle:nth-of-type(3):target ~ .item:nth-of-type(3) {
        pointer-events: auto;
        opacity: 1;
      }
      .gallery .controle:nth-of-type(4):target ~ .item:nth-of-type(4) {
        pointer-events: auto;
        opacity: 1;
      }
      .gallery .controle:nth-of-type(5):target ~ .item:nth-of-type(5) {
        pointer-events: auto;
        opacity: 1;
      }


    .gallery .controle:target ~ .controls .button {
      color: #ccc;
      color: <?php echo($corrgb); ?>
    }
    .gallery .button:first-of-type, .gallery .controle:nth-of-type(1):target ~ .controls .button:nth-of-type(1), .gallery .controle:nth-of-type(2):target ~ .controls .button:nth-of-type(2), .gallery .controle:nth-of-type(3):target ~ .controls .button:nth-of-type(3), .gallery .controle:nth-of-type(4):target ~ .controls .button:nth-of-type(4), .gallery .controle:nth-of-type(5):target ~ .controls .button:nth-of-type(5) {
        color: white;
      color: #000;
    }

    .gallery .item:first-of-type {
        position: static;
        pointer-events: auto;
        opacity: 1;
    }
    .gallery .item {
        position:absolute;
        top:0;
        left:0;
        float:left;
        width:500px;
        height:500px;
        pointer-events: none;
        opacity:0;
        transition:opacity .5s;
        margin-left:0px;
        margin-top:0px;
    }
    .gallery .item img{
        width:1500px;
        height:500px;
    }
    .gallery .controle {
      display: none;
    }

    .gallery .button {
      color: #ccc;
      color: #000;
    }

    .gallery .button:hover {
      color: #000;
    }

    .gallery {
      position: relative;
    }
    .gallery .item {
      height:435px;
      width:1500px;
      overflow:hidden;
      text-align: center;
    }
    .gallery .controls {
      position: absolute;
      bottom: 0;
      top:400px;
      width:1250px;
      text-align:center;
    }
    .gallery .button {
      display: inline-block;
      margin: 0;
      font-size: 3em;
      text-align: center;
      text-decoration: none;
      transition: color .1s;

    }

    .gallery .controle:target ~ .item {
      pointer-events: none;
      opacity: 0;
      animation: none;
    }
    .gallery .controle:target ~ .controls .button {
      animation: none;
    }

    @keyframes controlAnimation-4 {
        0%{
          color: #ccc;
          color: #000;
        }

        7.1%,
        25% {
          color: white;
          color: #000;
        }

        32.1%,
        100% {
          color: #ccc;
          color: #000;
        }
    }
    @keyframes galleryAnimation-4 {
        0% {
          opacity: 0;
        }

        7.1%,
        25% {
          opacity: 1;
        }

      32.1%,
      100% {
        opacity: 0;
      }
    }
    .gallery .controle:nth-of-type(1):target ~ .item:nth-of-type(1) {
      pointer-events: auto;
      opacity: 1;
    }
    .gallery .controle:nth-of-type(2):target ~ .item:nth-of-type(2) {
      pointer-events: auto;
      opacity: 1;
    }
    .gallery .controle:nth-of-type(3):target ~ .item:nth-of-type(3) {
      pointer-events: auto;
      opacity: 1;
    }
    .gallery .controle:nth-of-type(4):target ~ .item:nth-of-type(4) {
      pointer-events: auto;
      opacity: 1;
    }

    .items-4.autoplay .button {
      animation: controlAnimation-4 28s infinite;
    }
    .items-4.autoplay .item {
      animation: galleryAnimation-4 28s infinite;
    }
    .items-4 .button:nth-of-type(1),
    .items-4 .item:nth-of-type(1) {
      animation-delay: -2s;
    }
    .items-4 .button:nth-of-type(2),
    .items-4 .item:nth-of-type(2) {
      animation-delay: 5s;
    }
    .items-4 .button:nth-of-type(3),
    .items-4 .item:nth-of-type(3) {
      animation-delay: 12s;
    }
    .items-4 .button:nth-of-type(4),
    .items-4 .item:nth-of-type(4) {
      animation-delay: 19s;
    }

    .avatar{
      width: 150px;
      height: 150px;
    }

    .avatar-fila{
        width: 150px;
        height: 150px;
        margin-left: 120px;
    }

    .td-alinhar{
      width: 350px;
    }

    .conteinner-slider-valores{
      width: 1250px !important;
      height: 400px;
    }

    .titulo-slider-valores{
      width: 1250px;
      height: 50px;
      font-family: allerregular;
      font-size: 24px;
      color: <?php echo($corrgb); ?>;
      text-align: center;

    }

    .atributo-slider-valores{
        width: 1250px;
        height: 280px;
        font-size: 28px;
        padding-top: 20px;
    }
}
    
@media screen and (min-width: 1010px) and (max-width: 1400px){
    
    *{
        margin: 0;
        padding: 0;
        list-style: none ;
        text-decoration:none;
        outline: 0;
    }
    
    body{
        overflow-x: hidden;
    }
    
    header{
        height: auto;
    }

    section{
        width:100%;
        height:2200px;
        margin-top: 90px;
    }
    #div_desktop{
        display: none;
        
    }
    
    #div_mobile{
        width: 1000px;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 50px;
    }
    
    .setas{
      width: 220px;
      height: 100px;
      position: absolute;
      margin-top: 180px;
      margin-left: 150px;
      transform: rotate(100deg);
    }

    .setas-2{
      width: 220px;
      height: 100px;
      position: absolute;
      margin-left: 400px;
      margin-top: 150px;
      transform: rotate(90deg);
    }

    .tag_h2{
      display: none;
    }

    .setas-2{
      transform: rotate(240deg);
    }

    .setas-3{
      width: 220px;
      height: 100px;
      position: absolute;
      margin-left: 250px;
      margin-top: 380px;
      transform: rotate(90deg);
    }

    .setas-3 img{
      transform: rotate(-90deg);
    }

    .setas-4{
      width: 300px;
      height: 100px;
      position: absolute;
      margin-left: 500px;
      margin-top: 350px;
      transform: rotate(-20deg);
    }

    .setas-5{
      width: 250px;
      height: 100px;
      position: absolute;
      margin-left:800px;
      margin-top: 210px;
    }

    .setas-6{
      width: 250px;
      height: 100px;
      position: absolute;
      margin-left:1150px;
      margin-top: 210px;
    }

    #div_mobile{
        display: none;
    }
    /* ======== Formatação parte comparativa (Jeito The Rib's )====================*/
    #conteinner-diferencial{
        width: 1700px;
        height: 510px;
        margin: auto;
        padding: auto;
        padding-top: 20px;
    }

    #table-diferencial{
        width: 100%;
        height: 500px;
        padding: none;
    }

    .columns{
        width: 100%;
        height: 166px;
    }

    .text-maneira{
        width: 200px;
        text-align: center;
        font-size: 20px;
        font-family: aller_displayregular;
        color: ;
    }

    /* ========= Formatação dados: QTD. Pratos vendidos, QTD. Filiais Média Geral ===========*/

    #conteinner-dados{
        width: 100%;
        height: 250px;
        margin-top: 15px;
        background-attachment: fixed;
        background-image: url('imagens/back.png');
        padding: 10px;
    }


    #conteudo-dados{
        width: 1250px;
        height: 210px;
        margin: auto;
    }

    .dados{
        width: 300px;
        height: 210px;
        float: left;
        margin-left: 70px;
    }

    .dado-numero{
        width: 100%;
        height: 100px;
        text-align: center;
        color: #fff;
        font-size: 48px;
        font-family: aller_displayregular;
        padding-top: 50px;
    }

    .dado-texto{
        width: 100%;
        height: 60px;
        text-align: center;
        color: #fff;
        font-size: 28px;
        font-family: aller_displayregular;
    }

    /*Formatação história da empresa */
    #conteinner-historia{
        width: 100%;
        height: 1350px;
    }

    #coisas-historia{
        width: 1200px;
        height: 950px;
    }

    #historia{
        width: 100%;
        height: 600px;
        overflow: auto;
        text-align: center;
    }

    .text-historia{
        font-family: allerregular;
    }

    /*Formatação Galeria Historia*/

    #galeria-historia{
        width: 1350px;
        height: 350px;
        background-color: #000;
        border-top: solid 2px black;
    }
    /******************/

    #content {
        width: 1345px;
        height: 345px;
        background-color: white;
        border:solid 1px transparent;
    }

    #carrossel {
        float: left;
        width: 1250px;
        height: 340px;
        overflow: hidden;
        border: solid 1px transparent;
    }

    #carrossel ul li {
        width: 205px;
        height: 250px !important;
        float: left;
        padding: 30px 20px 30px 20px;
        margin: 0 2px;
    }

    #carrossel ul li img{
      width: 205;
      height: 250px !important;
      float: left;
      margin: 0 2px;
    }

    #menu-carrossel {
        float: left;
        width: 40px;
        height:340px;
        font-size: 20px;
        line-height: 350px;
        border:solid 1px transparent;
        text-align: center;
    }
    #menu-carrossel a img{
        width: 35px;
    }


    /*Fotmação slider missão, visão e valores*/

    #valores{
        width: 1200px;
        height: 600px;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 10px;
        margin-top: 10px;
        border-top: solid 1px #C0C0C0;
        border-bottom: solid 15px black;
    }


    /*****************    Slide   *****************/

    .controls{
      margin-top: -100px;
    }

    .gallery .controle:target ~ .controls .button {
        color: #ccc;
        color: rgb(0,0,0);
    }

    .gallery .button:first-of-type, .gallery .controle:nth-of-type(1):target ~ .controls .button:nth-of-type(1), .gallery .controle:nth-of-type(2):target ~ .controls .button:nth-of-type(2), .gallery .controle:nth-of-type(3):target ~ .controls .button:nth-of-type(3), .gallery .controle:nth-of-type(4):target ~ .controls .button:nth-of-type(4), .gallery .controle:nth-of-type(5):target ~ .controls .button:nth-of-type(5) {
        color: white;
        color: #000;
    }

    .gallery .item:first-of-type {
        position: static;
        pointer-events: auto;
        opacity: 1;
    }
    .gallery .item {
        position: absolute;
        top: 0;
        left: 0;
        width: 300px;
        height: 300px;
        pointer-events: none;
        opacity: 0;
        transition: opacity .5s;
        margin-left:0px;
        margin-top: 0px;
    }

    .gallery .controle:target ~ .item {
        pointer-events: none;
        opacity: 0;
        animation: none;
    }
    .gallery .controle:target ~ .controls .button {
        animation: none;
    }
    @keyframes controlAnimation-4 {
        0% {
          color: #ccc;
          color: #000;
        }

        7.1%,
        25% {

          color: #000;
        }

        32.1%,
        100% {
          color: #ccc;
          color: #000;
        }
    }
    @keyframes galleryAnimation-4 {
        0% {
        opacity: 0;
        }

        7.1%,
        25% {
        opacity: 1;
        }

        32.1%,
        100% {
        opacity: 0;
        }
    }
    .gallery .controle:nth-of-type(1):target ~ .item:nth-of-type(1) {
        pointer-events: auto;
        opacity: 1;
    }
    .gallery .controle:nth-of-type(2):target ~ .item:nth-of-type(2) {
        pointer-events: auto;
        opacity: 1;
    }
    .gallery .controle:nth-of-type(3):target ~ .item:nth-of-type(3) {
        pointer-events: auto;
        opacity: 1;
    }
    .gallery .controle:nth-of-type(4):target ~ .item:nth-of-type(4) {
        pointer-events: auto;
        opacity: 1;
    }

    .items-4.autoplay .button {
            animation: controlAnimation-4 28s infinite;
    }
      .items-4.autoplay .item {
        animation: galleryAnimation-4 28s infinite;
    }
      .items-4 .button:nth-of-type(1),
      .items-4 .item:nth-of-type(1) {
        animation-delay: -2s;
    }
      .items-4 .button:nth-of-type(2),
      .items-4 .item:nth-of-type(2) {
        animation-delay: 5s;
      }
      .items-4 .button:nth-of-type(3),
      .items-4 .item:nth-of-type(3) {
        animation-delay: 12s;
      }
      .items-4 .button:nth-of-type(4),
      .items-4 .item:nth-of-type(4) {
        animation-delay: 19s;
      }

      .gallery .controle:nth-of-type(1):target ~ .item:nth-of-type(1) {
        pointer-events: auto;
        opacity: 1;
      }
      .gallery .controle:nth-of-type(2):target ~ .item:nth-of-type(2) {
        pointer-events: auto;
        opacity: 1;
      }
      .gallery .controle:nth-of-type(3):target ~ .item:nth-of-type(3) {
        pointer-events: auto;
        opacity: 1;
      }
      .gallery .controle:nth-of-type(4):target ~ .item:nth-of-type(4) {
        pointer-events: auto;
        opacity: 1;
      }
      .gallery .controle:nth-of-type(5):target ~ .item:nth-of-type(5) {
        pointer-events: auto;
        opacity: 1;
      }


    .gallery .controle:target ~ .controls .button {
      color: #ccc;
      color: <?php echo($corrgb); ?>
    }
    .gallery .button:first-of-type, .gallery .controle:nth-of-type(1):target ~ .controls .button:nth-of-type(1), .gallery .controle:nth-of-type(2):target ~ .controls .button:nth-of-type(2), .gallery .controle:nth-of-type(3):target ~ .controls .button:nth-of-type(3), .gallery .controle:nth-of-type(4):target ~ .controls .button:nth-of-type(4), .gallery .controle:nth-of-type(5):target ~ .controls .button:nth-of-type(5) {
        color: white;
      color: #000;
    }

    .gallery .item:first-of-type {
        position: static;
        pointer-events: auto;
        opacity: 1;
    }
    .gallery .item {
        position:absolute;
        top:0;
        left:0;
        float:left;
        width:500px;
        height:500px;
        pointer-events: none;
        opacity:0;
        transition:opacity .5s;
        margin-left:0px;
        margin-top:0px;
    }
    .gallery .item img{
        width:1500px;
        height:500px;
    }
    .gallery .controle {
      display: none;
    }

    .gallery .button {
      color: #ccc;
      color: #000;
    }

    .gallery .button:hover {
      color: #000;
    }

    .gallery {
      position: relative;
    }
    .gallery .item {
      height:435px;
      width:1500px;
      overflow:hidden;
      text-align: center;
    }
    .gallery .controls {
      position: absolute;
      bottom: 0;
      top:400px;
      width:1250px;
      text-align:center;
    }
    .gallery .button {
      display: inline-block;
      margin: 0;
      font-size: 3em;
      text-align: center;
      text-decoration: none;
      transition: color .1s;

    }

    .gallery .controle:target ~ .item {
      pointer-events: none;
      opacity: 0;
      animation: none;
    }
    .gallery .controle:target ~ .controls .button {
      animation: none;
    }

    @keyframes controlAnimation-4 {
        0%{
          color: #ccc;
          color: #000;
        }

        7.1%,
        25% {
          color: white;
          color: #000;
        }

        32.1%,
        100% {
          color: #ccc;
          color: #000;
        }
    }
    @keyframes galleryAnimation-4 {
        0% {
          opacity: 0;
        }

        7.1%,
        25% {
          opacity: 1;
        }

      32.1%,
      100% {
        opacity: 0;
      }
    }
    .gallery .controle:nth-of-type(1):target ~ .item:nth-of-type(1) {
      pointer-events: auto;
      opacity: 1;
    }
    .gallery .controle:nth-of-type(2):target ~ .item:nth-of-type(2) {
      pointer-events: auto;
      opacity: 1;
    }
    .gallery .controle:nth-of-type(3):target ~ .item:nth-of-type(3) {
      pointer-events: auto;
      opacity: 1;
    }
    .gallery .controle:nth-of-type(4):target ~ .item:nth-of-type(4) {
      pointer-events: auto;
      opacity: 1;
    }

    .items-4.autoplay .button {
      animation: controlAnimation-4 28s infinite;
    }
    .items-4.autoplay .item {
      animation: galleryAnimation-4 28s infinite;
    }
    .items-4 .button:nth-of-type(1),
    .items-4 .item:nth-of-type(1) {
      animation-delay: -2s;
    }
    .items-4 .button:nth-of-type(2),
    .items-4 .item:nth-of-type(2) {
      animation-delay: 5s;
    }
    .items-4 .button:nth-of-type(3),
    .items-4 .item:nth-of-type(3) {
      animation-delay: 12s;
    }
    .items-4 .button:nth-of-type(4),
    .items-4 .item:nth-of-type(4) {
      animation-delay: 19s;
    }

    .avatar{
      width: 150px;
      height: 150px;
    }

    .avatar-fila{
        width: 150px;
        height: 150px;
        margin-left: 120px;
    }

    .td-alinhar{
      width: 350px;
    }

    .conteinner-slider-valores{
      width: 1250px !important;
      height: 400px;
    }

    .titulo-slider-valores{
      width: 1250px;
      height: 50px;
      font-family: allerregular;
      font-size: 24px;
      color: <?php echo($corrgb); ?>;
      text-align: center;

    }

    .atributo-slider-valores{
        width: 1250px;
        height: 280px;
        font-size: 28px;
        padding-top: 20px;
    }
}    
    
@media screen and (min-width: 300px) and (max-width: 1000px){
    
    *{
        margin: 0;
        padding: 0;
        list-style: none ;
        text-decoration:none;
        outline: 0;
    }
    
    body{
        overflow-x: hidden;
    }
    
    header{
        height: auto;
    }

    section{
        width:100%;
        min-height:2500px;
        height:auto;
        margin-top: 90px;
    }
    
    #div_desktop{
        display: none;
        
    }
    
    .setas{
      width: 220px;
      height: 100px;
      position: absolute;
      margin-top: 80px;
      margin-left: 150px;
      transform: rotate(100deg);
    }

    .setas-2{
      width: 210px;
      height: 90px;
      position: absolute;
      margin-left: 440px;
      margin-top: 80px;
    }

    .tag_h2{
      display: none;
    }

    .setas-2{
      transform: rotate(240deg);
    }

    .setas-3{
      width: 220px;
      height: 100px;
      position: absolute;
      margin-left: 250px;
      margin-top: 380px;
      transform: rotate(90deg);
    }

    .setas-3 img{
      transform: rotate(-90deg);
    }

    .setas-4{
      width: 300px;
      height: 100px;
      position: absolute;
      margin-left: 500px;
      margin-top: 350px;
      transform: rotate(-20deg);
    }

    .setas-5{
      width: 250px;
      height: 100px;
      position: absolute;
      margin-left:800px;
      margin-top: 210px;
    }

    .setas-6{
      width: 250px;
      height: 100px;
      position: absolute;
      margin-left:1150px;
      margin-top: 210px;
    }

    #div_mobile{
        display: none;
    }
    /* ======== Formatação parte comparativa (Jeito The Rib's )====================*/
    #formatacao_mobile{
        transform: rotate(90deg);
    }
    
    #conteinner-diferencial{
        width: 550px;
        height: 1700px;
        margin: auto;
        padding: auto;
        padding-top: 20px;
    }

    #table-diferencial{
        width: 100%;
        height: 500px;
        padding: none;
    }

    .columns{
        width: 100%;
        height: 166px;
    }

    .text-maneira{
        width: 200px;
        transform: rotate(-90deg);
        text-align: center;
        font-size: 20px;
        font-family: aller_displayregular;
        color: ;
    }

    /* ========= Formatação dados: QTD. Pratos vendidos, QTD. Filiais Média Geral ===========*/

    #conteinner-dados{
        width: 99%;
        height: 250px;
        margin-top: 15px;
        background-attachment: fixed;
        background-image: url('imagens/back.png');
        padding: 10px;
    }


    #conteudo-dados{
        width: 900px;
        height: 210px;
    }

    .dados{
        width: 280px;
        height: 210px;
        float: left;
        margin-left: 10px;
    }

    .dado-numero{
        width: 100%;
        height: 100px;
        text-align: center;
        color: #fff;
        font-size: 48px;
        font-family: aller_displayregular;
        padding-top: 50px;
    }

    .dado-texto{
        width: 100%;
        height: 60px;
        text-align: center;
        color: #fff;
        font-size: 28px;
        font-family: aller_displayregular;
    }

    /*Formatação história da empresa */
    #conteinner-historia{
        width: 100%;
        height: 1700px;
    }

    #coisas-historia{
        width: 950px;
        height: 1700px;
    }

    #historia{
        width: 100%;
        height: 600px;
        overflow: auto;
        text-align: center;
    }

    .text-historia{
        font-family: allerregular;
    }

    /*Formatação Galeria Historia*/

    #galeria-historia{
        width: 950px;
        height: 350px;
        background-color: #000;
        border-top: solid 2px black;
    }
    /******************/

    #content {
        width: 970px;
        height: 345px;
        background-color: white;
        border:solid 1px transparent;
    }

    #carrossel {
        float: left;
        width: 900px;
        height: 340px;
        overflow: hidden;
        border: solid 1px transparent;
    }

    #carrossel ul li {
        width: 170px;
        height: 250px !important;
        float: left;
    }

    #carrossel ul li img{
      width: 170;
      height: 250px !important;
      margin: 0 2px;
    }

    #menu-carrossel {
        float: left;
        width: 40px;
        height:340px;
        font-size: 20px;
        line-height: 350px;
        border:solid 1px transparent;
        text-align: center;
    }
    #menu-carrossel a img{
        width: 35px;
    }


    /*Fotmação slider missão, visão e valores*/

    #valores{
        width: 950px;
        height: 500px;
        margin-bottom: 10px;
        margin-top: 10px;
        border-top: solid 1px #C0C0C0;
        border-bottom: solid 15px black;
    }


    /*****************    Slide   *****************/

    .controls{
      margin-top: -100px;
    }

    .gallery .controle:target ~ .controls .button {
        color: #ccc;
        color: rgb(0,0,0);
    }

    .gallery .button:first-of-type, .gallery .controle:nth-of-type(1):target ~ .controls .button:nth-of-type(1), .gallery .controle:nth-of-type(2):target ~ .controls .button:nth-of-type(2), .gallery .controle:nth-of-type(3):target ~ .controls .button:nth-of-type(3), .gallery .controle:nth-of-type(4):target ~ .controls .button:nth-of-type(4), .gallery .controle:nth-of-type(5):target ~ .controls .button:nth-of-type(5) {
        color: white;
        color: #000;
    }

    .gallery .item:first-of-type {
        position: static;
        pointer-events: auto;
        opacity: 1;
    }
    .gallery .item {
        position: absolute;
        top: 0;
        left: 0;
        width: 300px;
        height: 300px;
        pointer-events: none;
        opacity: 0;
        transition: opacity .5s;
        margin-left:0px;
        margin-top: 0px;
    }

    .gallery .controle:target ~ .item {
        pointer-events: none;
        opacity: 0;
        animation: none;
    }
    .gallery .controle:target ~ .controls .button {
        animation: none;
    }
    @keyframes controlAnimation-4 {
        0% {
          color: #ccc;
          color: #000;
        }

        7.1%,
        25% {

          color: #000;
        }

        32.1%,
        100% {
          color: #ccc;
          color: #000;
        }
    }
    @keyframes galleryAnimation-4 {
        0% {
        opacity: 0;
        }

        7.1%,
        25% {
        opacity: 1;
        }

        32.1%,
        100% {
        opacity: 0;
        }
    }
    .gallery .controle:nth-of-type(1):target ~ .item:nth-of-type(1) {
        pointer-events: auto;
        opacity: 1;
    }
    .gallery .controle:nth-of-type(2):target ~ .item:nth-of-type(2) {
        pointer-events: auto;
        opacity: 1;
    }
    .gallery .controle:nth-of-type(3):target ~ .item:nth-of-type(3) {
        pointer-events: auto;
        opacity: 1;
    }
    .gallery .controle:nth-of-type(4):target ~ .item:nth-of-type(4) {
        pointer-events: auto;
        opacity: 1;
    }

    .items-4.autoplay .button {
            animation: controlAnimation-4 28s infinite;
    }
      .items-4.autoplay .item {
        animation: galleryAnimation-4 28s infinite;
    }
      .items-4 .button:nth-of-type(1),
      .items-4 .item:nth-of-type(1) {
        animation-delay: -2s;
    }
      .items-4 .button:nth-of-type(2),
      .items-4 .item:nth-of-type(2) {
        animation-delay: 5s;
      }
      .items-4 .button:nth-of-type(3),
      .items-4 .item:nth-of-type(3) {
        animation-delay: 12s;
      }
      .items-4 .button:nth-of-type(4),
      .items-4 .item:nth-of-type(4) {
        animation-delay: 19s;
      }

      .gallery .controle:nth-of-type(1):target ~ .item:nth-of-type(1) {
        pointer-events: auto;
        opacity: 1;
      }
      .gallery .controle:nth-of-type(2):target ~ .item:nth-of-type(2) {
        pointer-events: auto;
        opacity: 1;
      }
      .gallery .controle:nth-of-type(3):target ~ .item:nth-of-type(3) {
        pointer-events: auto;
        opacity: 1;
      }
      .gallery .controle:nth-of-type(4):target ~ .item:nth-of-type(4) {
        pointer-events: auto;
        opacity: 1;
      }
      .gallery .controle:nth-of-type(5):target ~ .item:nth-of-type(5) {
        pointer-events: auto;
        opacity: 1;
      }


    .gallery .controle:target ~ .controls .button {
      color: #ccc;
      color: <?php echo($corrgb); ?>
    }
    .gallery .button:first-of-type, .gallery .controle:nth-of-type(1):target ~ .controls .button:nth-of-type(1), .gallery .controle:nth-of-type(2):target ~ .controls .button:nth-of-type(2), .gallery .controle:nth-of-type(3):target ~ .controls .button:nth-of-type(3), .gallery .controle:nth-of-type(4):target ~ .controls .button:nth-of-type(4), .gallery .controle:nth-of-type(5):target ~ .controls .button:nth-of-type(5) {
        color: white;
        color: #000;
    }

    .gallery .item:first-of-type {
        position: static;
        pointer-events: auto;
        opacity: 1;
    }
    .gallery .item {
        position:absolute;
        top:0;
        left:0;
        float:left;
        width:950px;
        height:500px;
        pointer-events: none;
        opacity:0;
        transition:opacity .5s;
        margin-left:0px;
        margin-top:0px;
    }
    .gallery .item img{
        width:900px;
        height:500px;
    }
    .gallery .controle {
      display: none;
    }

    .gallery .button {
      color: #ccc;
      color: #000;
    }

    .gallery .button:hover {
      color: #000;
    }

    .gallery {
      position: relative;
    }
    .gallery .item {
      height:435px;
      width:950px;
      overflow:hidden;
      text-align: center;
    }
    .gallery .controls {
      position: absolute;
      bottom: 0;
      top:400px;
      width:950px;
      text-align:center;
    }
    .gallery .button {
      display: inline-block;
      margin: 0;
      font-size: 3em;
      text-align: center;
      text-decoration: none;
      transition: color .1s;

    }

    .gallery .controle:target ~ .item {
      pointer-events: none;
      opacity: 0;
      animation: none;
    }
    .gallery .controle:target ~ .controls .button {
      animation: none;
    }

    @keyframes controlAnimation-4 {
        0%{
          color: #ccc;
          color: #000;
        }

        7.1%,
        25% {
          color: white;
          color: #000;
        }

        32.1%,
        100% {
          color: #ccc;
          color: #000;
        }
    }
    @keyframes galleryAnimation-4 {
        0% {
          opacity: 0;
        }

        7.1%,
        25% {
          opacity: 1;
        }

      32.1%,
      100% {
        opacity: 0;
      }
    }
    .gallery .controle:nth-of-type(1):target ~ .item:nth-of-type(1) {
      pointer-events: auto;
      opacity: 1;
    }
    .gallery .controle:nth-of-type(2):target ~ .item:nth-of-type(2) {
      pointer-events: auto;
      opacity: 1;
    }
    .gallery .controle:nth-of-type(3):target ~ .item:nth-of-type(3) {
      pointer-events: auto;
      opacity: 1;
    }
    .gallery .controle:nth-of-type(4):target ~ .item:nth-of-type(4) {
      pointer-events: auto;
      opacity: 1;
    }

    .items-4.autoplay .button {
      animation: controlAnimation-4 28s infinite;
    }
    .items-4.autoplay .item {
      animation: galleryAnimation-4 28s infinite;
    }
    .items-4 .button:nth-of-type(1),
    .items-4 .item:nth-of-type(1) {
      animation-delay: -2s;
    }
    .items-4 .button:nth-of-type(2),
    .items-4 .item:nth-of-type(2) {
      animation-delay: 5s;
    }
    .items-4 .button:nth-of-type(3),
    .items-4 .item:nth-of-type(3) {
      animation-delay: 12s;
    }
    .items-4 .button:nth-of-type(4),
    .items-4 .item:nth-of-type(4) {
      animation-delay: 19s;
    }

    .avatar{
      width: 150px;
      height: 150px;
        transform: rotate(-90deg);
    }

    .avatar-fila{
        width: 150px;
        height: 150px;
        margin-left: 120px;
        transform: rotate(-90deg);
    }

    .td-alinhar{
      width: 350px;
    }

    .conteinner-slider-valores{
      width: 950px !important;
      height: 400px;
    }

    .titulo-slider-valores{
      width: 950px;
      height: 50px;
      font-family: allerregular;
      font-size: 24px;
      color: <?php echo($corrgb); ?>;
      text-align: center;

    }

    .atributo-slider-valores{
        width: 950px;
        height: 280px;
        font-size: 28px;
        padding-top: 20px;
    }
}    
 
</style>
