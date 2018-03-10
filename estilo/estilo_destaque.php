
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



<style media="screen">
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

@media screen and (min-width: 1650px) and (max-width: 2000px){
    *{
        margin: 0;
        padding: 0;
    }
    .principal{
        width:100%;
        min-height:1000px;
        max-height: auto;
        margin-top: 90px;
    }
    .cont1{
        width:100%;
        height:500px;
        border-bottom: 3px solid #9c0404; 

    }

    .conteinner-destaque{
      width: 1900px;
      height: 500px;
    }

    .cont2{
        width:100%;
        height:360px;
        background-color: <?php echo($corrgb); ?>;
    }

    .conteinner-detalhes{
      width: 100%;
      height: 450px;
    }


    .imagem{
        width: 600px;
        height: 400px;
        margin-left: 20px;
        float: left;
        margin-top: 30px;
    }

    .imagem img{
      width: 100%;
      height: 100%;
    }

    .sobre_imagem{
        width: 700px;
        height: 400px;
        float: left;
        margin-left: 10px;
        margin-top: 30px;
    }


    .avaliacao{
        width: 100px;
        height: 80px;
        float: left;
        margin-top: 15px;
        margin-left: 5px;
        -webkit-box-shadow: -2px 4px 5px 1px rgba(212,205,212,1);
        -moz-box-shadow: -2px 4px 5px 1px rgba(212,205,212,1);
        box-shadow: -2px 4px 5px 1px rgba(212,205,212,1);
        text-align: center;
        font-family:allerbold;
        font-size: 20px;
        padding-top: 20px;
        color: <?php echo($corrgb); ?>;
    }

    .avaliacao p{
      font-size: 16px;
      color: #000;
    }


    .botao{
        width: 200px;
        height: 35px;
        background-color: white;
        margin-top: 130px;
        margin-left: 5px;
        text-align: center;
        border: 3px solid <?php echo($corrgb); ?>;
        padding-top: 15px;
        font-family: allerregular;
        color: <?php echo($corrgb); ?>;
    }

    .botao:hover{
      color: #fff;
      background-color: <?php echo($corrgb); ?>;
      transition: 0.2s ease all;
      cursor: pointer;
    }

    .texto{
        width: 670px;
        height: 200px;
        margin-left: 5px;
        -webkit-box-shadow: -2px 4px 5px 1px rgba(212,205,212,1);
    -moz-box-shadow: -2px 4px 5px 1px rgba(212,205,212,1);
    box-shadow: -2px 4px 5px 1px rgba(212,205,212,1);

    }

    .quadradinho_bolinha{
        width: 200px;
        height: 610px;
        float: right;
        margin-top: 10px;
    }
    .bolinha li{
        width: 30px;
        height: 30px;
        background-color: white;
        border-radius: 100px;
        margin-bottom: 5px;
        list-style: none;

    }

    .bolinha{
        margin-left: 150px ;
        margin-top: 200px;
    }

    .quadradinho{
        width: 100px;
        height: 100px;
        background-color: white;
        margin-top: 50px;
        margin-left: 90px;
    }

    .foto{
        width: 100px;
        height: 100px;
        border-radius: 100px;
        position: absolute;
        position: absolute;
        margin-top: 20px;
        margin-left: 10px;
        border: 3px solid #000;
        -webkit-box-shadow: -2px 4px 5px 1px rgba(212,205,212,1);
        -moz-box-shadow: -2px 4px 5px 1px rgba(212,205,212,1);
        box-shadow: -2px 4px 5px 1px rgba(212,205,212,1);
    }

    .comentario{
        width: 400px;
        height: 175px;
        background-color: white;
        margin-top: 50px;
        margin-left: 50px;
        border: 3px solid #ebe6eb;
        float: left;
        -webkit-box-shadow: -2px 4px 5px 1px rgba(212,205,212,1);
        -moz-box-shadow: -2px 4px 5px 1px rgba(212,205,212,1);
        box-shadow: -2px 4px 5px 1px rgba(212,205,212,1);
    }

    .content-comentario{
      clear: both;
      float: left;

    }

    .ingredientes{
        width: 700px;
        height: 300px;
        float: left;
        margin-left: 20px;
        margin-top: 50px;
        float: left;
    }

    .content-avaliacao{
      width: 350px;
      float: left;
      margin-top: 300px;
    }

    .ingrediente{
        width: 200px;
        height: 240px;
        margin-left: 10px;
        float: left;
    }

    .ingrediente-prato{
      width: 100%;
      color:#fff;
      border-bottom: 1px solid #f5fffa;
      font-family: allerregular;
    }

    .ingrediente-prato span{
      font-family: allerbold;

    }

    .formatacao_foto{
        width: 100px;
        height: 100px;
        border-radius: 50px;
    }



    .nome-prato{
      width: 100%;
      height: 50px;
      color: <?php echo($corrgb); ?>;
      font-family: allerregular;
      font-size: 20px;
      padding-left:  22px;
    }

    .descricao-prato{
      width: 580px;
      height: 140px;
      padding-left: 10px;
      padding-bottom: 10px;
      font-family: allerregular;
    }

    .tiutlo-comentario{
      width: 300px;
      height: 30px;
      clear: both;
      float: right;
      color: <?php echo($corrgb); ?>;
      padding-top: 10px;
      padding-left: 15px;
      font-size: 20px;
      font-family: allerregular;
    }

    .prato{
      width: 1350px;;
      height: 490px;
      clear: both;
      float: left;
      }

    .comentario-conteinner{
      width: 500px;
      height: 500px;
      float: left;
    }

    .detalhes-comentario{
        width: 335px;
        height: 160px;
        float: right;
        padding: 10px;
        font-family: allerregular;
    }

}
      
@media screen and (min-width: 1200px) and (max-width: 1640px){
    
    body{
        max-width: 100%;
        overflow-x: hidden;
    }
    
    .principal{
        width:100%;
        min-height:1000px;
        max-height: auto;
        margin-top: 90px;
    }
    .cont1{
        width:100%;
        height:500px;
        border-bottom: 3px solid #9c0404; 

    }

    .conteinner-destaque{
      width: 1280px;
      height: 500px;
    }

    .cont2{
        width:100%;
        height:360px;
        background-color: <?php echo($corrgb); ?>;
    }

    .conteinner-detalhes{
      width: 100%;
      height: 450px;
    }


    .imagem{
        width: 250px;
        height: 200px;
        margin-left: 10px;
        float: left;
        margin-top: 30px;
    }

    .imagem img{
        width: 100%;
        height: 100%;
    }

    .sobre_imagem{
        width: 450px;
        height: 400px;
        float: left;
        margin-left: 10px;
        margin-top: 30px;
    }

    .avaliacao{
        width: 90px;
        height: 70px;
        float: left;
        margin-top: 15px;
        margin-left: 5px;
        -webkit-box-shadow: -2px 4px 5px 1px rgba(212,205,212,1);
        -moz-box-shadow: -2px 4px 5px 1px rgba(212,205,212,1);
        box-shadow: -2px 4px 5px 1px rgba(212,205,212,1);
        text-align: center;
        font-family:allerbold;
        font-size: 18px;
        padding-top: 20px;
        color: <?php echo($corrgb); ?>;
    }

    .avaliacao p{
        font-size: 16px;
        color: #000;
    }


    .botao{
        width: 180px;
        height: 30px;
        background-color: white;
        margin-top: 130px;
        margin-left: 5px;
        text-align: center;
        border: 3px solid <?php echo($corrgb); ?>;
        padding-top: 15px;
        font-family: allerregular;
        color: <?php echo($corrgb); ?>;
    }

    .botao:hover{
        color: #fff;
        background-color: <?php echo($corrgb); ?>;
        transition: 0.2s ease all;
        cursor: pointer;
    }

    .texto{
        width: 470px;
        height: 250px;
        margin-left: 5px;
        -webkit-box-shadow: -2px 4px 5px 1px rgba(212,205,212,1);
        -moz-box-shadow: -2px 4px 5px 1px rgba(212,205,212,1);
        box-shadow: -2px 4px 5px 1px rgba(212,205,212,1);

    }

    .quadradinho_bolinha{
        width: 200px;
        height: 610px;
        float: right;
        margin-top: 10px;
    }
    .bolinha li{
        width: 30px;
        height: 30px;
        background-color: white;
        border-radius: 100px;
        margin-bottom: 5px;
        list-style: none;

    }

    .bolinha{
        margin-left: 150px ;
        margin-top: 200px;
    }

    .quadradinho{
        width: 100px;
        height: 100px;
        background-color: white;
        margin-top: 50px;
        margin-left: 90px;
    }

    .foto{
        width: 100px;
        height: 100px;
        border-radius: 100px;
        position: absolute;
        position: absolute;
        margin-top: 20px;
        margin-left: 10px;
        border: 3px solid #000;
        -webkit-box-shadow: -2px 4px 5px 1px rgba(212,205,212,1);
        -moz-box-shadow: -2px 4px 5px 1px rgba(212,205,212,1);
        box-shadow: -2px 4px 5px 1px rgba(212,205,212,1);
    }

    .comentario{
        width: 400px;
        height: 175px;
        background-color: white;
        margin-top: 50px;
        margin-left: 50px;
        border: 3px solid #ebe6eb;
        float: left;
        -webkit-box-shadow: -2px 4px 5px 1px rgba(212,205,212,1);
        -moz-box-shadow: -2px 4px 5px 1px rgba(212,205,212,1);
        box-shadow: -2px 4px 5px 1px rgba(212,205,212,1);
    }

    .content-comentario{
      clear: both;
      float: left;

    }

    .ingredientes{
        width: 700px;
        height: 300px;
        float: left;
        margin-left: 20px;
        margin-top: 50px;
        float: left;
    }

    .content-avaliacao{
      width: 350px;
      float: left;
      margin-top: 300px;
    }

    .ingrediente{
        width: 200px;
        height: 240px;
        margin-left: 10px;
        float: left;
    }

    .ingrediente-prato{
      width: 100%;
      color:#fff;
      border-bottom: 1px solid #f5fffa;
      font-family: allerregular;
    }

    .ingrediente-prato span{
      font-family: allerbold;

    }

    .formatacao_foto{
        width: 100px;
        height: 100px;
        border-radius: 50px;
    }

    .nome-prato{
        width: 90%;
        height: 50px;
        color: <?php echo($corrgb); ?>;
        font-family: allerregular;
        font-size: 20px;
        padding-left:  22px;
    }

    .descricao-prato{
      width: 450px;
      height: 190px;
      padding-left: 10px;
      padding-bottom: 10px;
      font-family: allerregular;
    }

    .tiutlo-comentario{
      width: 300px;
      height: 30px;
      clear: both;
      float: right;
      color: <?php echo($corrgb); ?>;
      padding-top: 10px;
      padding-left: 15px;
      font-size: 20px;
      font-family: allerregular;
    }

    .prato{
        width: 750px;;
        height: 490px;
        clear: both;
        float: left;
    }

    .comentario-conteinner{
      width: 500px;
      height: 500px;
      float: left;
    }

    .detalhes-comentario{
        width: 335px;
        height: 160px;
        float: right;
        padding: 10px;
        font-family: allerregular;
    }
}    
    
@media screen and (min-width: 300px) and (max-width: 1000px){
     body{
        max-width: 100%;
        overflow-x: hidden;
    }
    
    .principal{
        width:100%;
        min-height:1000px;
        max-height: auto;
        margin-top: 90px;
    }
    .cont1{
        width:100%;
        height:720px;
        border-bottom: 3px solid #9c0404; 
    }

    .conteinner-destaque{
      width: 800px;
    }

    .conteinner-detalhes{
      width: 100%;
      height: 300px;
    }

    .imagem{
        width: 270px;
        max-height: 220px;
        margin-left: 10px;
        float: left;
        margin-top: 30px;
    }

    .imagem img{
        width: 100%;
        height: 100%;
    }

    .sobre_imagem{
        width: 580px;
        height: 400px;
        float: left;
        margin-left: 10px;
        margin-top: 30px;
    }

    .avaliacao{
        width: 90px;
        height: 70px;
        float: left;
        margin-top: 15px;
        margin-left: 5px;
        -webkit-box-shadow: -2px 4px 5px 1px rgba(212,205,212,1);
        -moz-box-shadow: -2px 4px 5px 1px rgba(212,205,212,1);
        box-shadow: -2px 4px 5px 1px rgba(212,205,212,1);
        text-align: center;
        font-family:allerbold;
        font-size: 18px;
        padding-top: 20px;
        color: <?php echo($corrgb); ?>;
    }

    .avaliacao p{
        font-size: 16px;
        color: #000;
    }

    .botao{
        float: left;
        width: 320px;
        height: 50px;
        background-color: white;
        margin-top: 20px;
        margin-left: 30px;
        text-align: center;
        border: 3px solid <?php echo($corrgb); ?>;
        padding-top: 15px;
        font-family: allerregular;
        font-size:34px;
        color: <?php echo($corrgb); ?>;
    }

    .botao:hover{
        color: #fff;
        background-color: <?php echo($corrgb); ?>;
        transition: 0.2s ease all;
        cursor: pointer;
    }

    .texto{
        width: 550px;
        height: 250px;
        margin-left: 5px;
        -webkit-box-shadow: -2px 4px 5px 1px rgba(212,205,212,1);
        -moz-box-shadow: -2px 4px 5px 1px rgba(212,205,212,1);
        box-shadow: -2px 4px 5px 1px rgba(212,205,212,1);
    }

    .quadradinho_bolinha{
        width: 200px;
        height: 610px;
        float: right;
        margin-top: 10px;
    }
    
    .bolinha li{
        width: 30px;
        height: 30px;
        background-color: white;
        border-radius: 100px;
        margin-bottom: 5px;
        list-style: none;
    }

    .bolinha{
        margin-left: 150px ;
        margin-top: 200px;
    }

    .quadradinho{
        width: 100px;
        height: 100px;
        background-color: white;
        margin-top: 50px;
        margin-left: 90px;
    }

    .foto{
        width: 100px;
        height: 100px;
        border-radius: 100px;
        position: absolute;
        position: absolute;
        margin-top: 20px;
        margin-left: 10px;
        border: 3px solid #000;
        -webkit-box-shadow: -2px 4px 5px 1px rgba(212,205,212,1);
        -moz-box-shadow: -2px 4px 5px 1px rgba(212,205,212,1);
        box-shadow: -2px 4px 5px 1px rgba(212,205,212,1);
    }

    .comentario{
        width: 700px;
        height: 175px;
        background-color: white;
        margin-top: 50px;
        margin-left: 50px;
        border: 3px solid #ebe6eb;
        float: left;
        -webkit-box-shadow: -2px 4px 5px 1px rgba(212,205,212,1);
        -moz-box-shadow: -2px 4px 5px 1px rgba(212,205,212,1);
        box-shadow: -2px 4px 5px 1px rgba(212,205,212,1);
    }

    .content-comentario{
        clear: both;
        float: left;
    }

    .ingredientes{
        width: 700px;
        height: 300px;
        float: left;
        margin-left: 20px;
        margin-top: 50px;
        float: left;
    }

    .content-avaliacao{
        width: 350px;
        float: left;
        margin-top: 300px;
    }

    .ingrediente{
        width: 200px;
        height: 240px;
        margin-left: 10px;
        float: left;
    }

    .ingrediente-prato{
        width: 100%;
        color:#fff;
        border-bottom: 1px solid #f5fffa;
        font-family: allerregular;
    }

    .ingrediente-prato span{
        font-family: allerbold;
    }

    .formatacao_foto{
        width: 100px;
        height: 100px;
        border-radius: 50px;
    }

    .nome-prato{
        width: 90%;
        height: 50px;
        color: <?php echo($corrgb); ?>;
        font-family: allerregular;
        font-size: 30px;
        padding-left:  22px;
    }

    .descricao-prato{
        width: 450px;
        height: 190px;
        padding-left: 10px;
        padding-bottom: 10px;
        font-size: 28px;
        font-family: allerregular;
    }

    .tiutlo-comentario{
        width: 550px;
        height: 30px;
        clear: both;
        float: left;
        color: <?php echo($corrgb); ?>;
        padding-top: 10px;
        padding-left: 15px;
        font-size: 28px;
        font-family: allerregular;
        margin-left: 60px;
    }

    .prato{
        width: 900px;;
        height: 400px;
        clear: both;
        float: left;
    }

    .comentario-conteinner{
        width: 780px;
        height: 300px;
        clear: both;
        float: left;
    }

    .detalhes-comentario{
        width: 550px;
        height: 150px;
        float: right;
        padding: 10px;
        font-size:30px;
        font-family: allerregular;
    }
    
}    
    
</style>
