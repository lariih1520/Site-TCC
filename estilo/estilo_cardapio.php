
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

/*** CSS da página cardapio ***/
/**
    Feito por: Larissa
    Data: 25/09/2017
    Modificação: 18/11
**/

@media screen and (min-device-width: 1550px) and (max-device-width: 2000px){
    body{
        overflow-x: hidden;
        margin: 0;
        padding: 0;
    }
    #principal{
        width: 100%;
        min-height:2000px;
        height: auto;
    }

    .tag_h2{
      display: none;

    }

    #alerta{
        width: 350px;
        height: 150px;
        margin: auto;
        margin-top: 150px;
        padding-top: 50px;
        text-align: center;
        border:solid 1px #A0A0A0;
        box-shadow: 0px 0px 15px #A0A0A0;
    }
    
    .botao_ok{
        width: 80px;
        margin: auto;
        margin-top: 40px;
        border: solid 2px #9c0404;
    }
    
    .botao_ok:hover, .botao_ok:hover a{
        width: 80px;
        color: white;
        margin: auto;
        margin-top: 40px;
        background-color: #9c0404;
    }
    
    .titulo_cardapio{
        width:1295px;
        height:40px;
        font-size: 30px;
        margin-top: 80px;
        margin-left: auto;
        margin-right: auto;
        padding-top: 5px;
        border: solid 1px white;
        font-family: allerbold;
        color: <?php echo($corrgb); ?>;
        text-align: center;
    }

    /******* Barra de pesquisa *******/
    #content_pesquisar{
        width: 100%;
        height:200px;
        padding-top:30px;
        border-bottom: 1px solid <?php echo($corrgb); ?>;
    }

    .buscar_prato{
        width: 1600px;
        text-align: center;
        margin: 50px auto auto auto;
        font-size: 30px;
    }
    .buscar_prato input{
        width: 500px;
        font-size: 18px;
        border-radius: 10px;
        border-bottom: #FFF;
        padding-left: 15px;
        padding-top: 2px;
        padding-bottom: 2px;
    }
    .buscar_prato button{
        cursor: pointer;
        background-color: white;
    }
    .buscar_prato button img{
        width: 35px;
        height: 35px;
    }


    button{
      border:2px solid #fff;
    }

    button:hover{
      background-color: #fff;
      outline: none;
      transition: 0.2 ease all;
    }

    /****** Mostrar um prato de cada categoria ******/
    #content_prato_categoria{
        width: 100%;
        height:840px;
        background-image: url(imagens/steakhouse-00.jpg);
        background-position: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
        border: solid 1px transparent;
    }
    .titulo_categoria_prato{
        height:60px;
      width:800px;
        margin:auto;
      font-size:40px;
      text-align:center;
        margin-bottom:30px;
        border-bottom:solid 1px black;
    }
    #slide_categoria-pratos{
        width: 1400px;
        height:890px;
        margin: auto;
        border:solid 1px transparent;
    }

    /* Slide para mostrar o cardápio */
    .w3-content{
      float:left;
      width:1450px;
      height:750px;
      margin-top:5px;
      margin-left:auto;
      margin-right:auto;
      margin-bottom:5px;
        background-color: white;
      border:solid 1px transparent;
    }
    .w3-button{
      float:left;
      height:70px;
      width:55px;
        padding:5px;
      margin-top:350px;
      color:black;
      position:absolute;
      background-color:rgba(255,255,255, 0.5);
      outline: none;
    }
    .w3-button img{
        width:50px;
    }
    .w3-button:hover{
      transition:0.5s;
      color:white;
      cursor: pointer;
      outline: none;
    }
    .w3_content_imagem{
      margin-left:auto;
      margin-right:auto;
      width:500px;
      height:300px;
        border: solid 1px black;
    }
    .w3_content_imagem img{
      width:500px;
      height:300px;
    }
    .w3_titulo{
        width: 700px;
        height:40px;
        padding-top: 5px;
        font-size: 30px;
        text-align: center;
        margin-left: auto;
        margin-right: auto;
        margin-top: 20px;
        margin-bottom: 15px;
        border: solid 1px transparent;
    }
    .w3_content_detalhes{
        width: 1200px;
        height: 295;
        font-size: 25px;
        margin-left:auto;
      margin-right:auto;
        padding-left:5px;
        padding-right: 5px;
        border: solid 1px transparent;
    }
    .w3_descricao_prato{
        width: 450px;
        height:270px;
        float:left;
        text-align: justify;
        border:solid 1px transparent;
    }
    .w3_ingredientes{
        width:380px;
        height:270px;
        float:left;
        margin-left: 30px;
        margin-right: 10px;
        border:solid 1px transparent;
    }
    .w3_avaliacao{
        width:300px;
        height:270px;
        margin-left: 25px;
        float:left;
    }
    /*
    Avaliação do prato
    */
    table.avaliar_prato{
        width:290px;
        height:70px;
        margin-top: 5px;
        border:solid 1px transparent;
    }
    .avaliar_prato tr td{
        padding:2px;

    }
    .avaliar_prato tr td img{
        width:55px;
        height:auto;
    }

    .apagada {
      background-image: url('../imagens/estrela-prata.png');
      width: 55px;
      height: 32px;
      cursor: pointer;
    }

    .destaque {
      background-image: url('../imagens/estrela.png');
      width: 55px;
      height: 32px;
      background-size: 100% 100%;
      cursor: pointer;
    }


    /************ Todas as categorias de pratos ************/
    #content_categorias{
        width: 100%;
        min-height:1300px;
        height: auto;
        border-top: 1px solid <?php echo($corrgb); ?>;
    }

    .titulo_categorias{
        font-size: 35px;
        width:1480px;
        margin-top: 20px;
        margin-left: auto;
        margin-right: auto;
        font-family: allerregular;
        color: <?php echo($corrgb); ?>;
        text-align: center;
    }

    .detalhes_prato_carrossel{
        width:235px;
        font-size: 25px;
        min-height: 140px;
        text-align: center;
        font-family: aller_lightregular;
    }

    /*** Primeiro slide ***/
    .content{
        margin: 0 auto;
        width: 1480px;
        height: 340px;
        padding-top:20px;
        padding-bottom:5px;
        background-color: white;
    }

    .carrossel{
        float: left;
        width: 1380px;
        height: 340px;
        overflow: hidden;
        border: solid 1px transparent;
    }

    .carrossel ul li{
        width: 230px;
        height: 300px !important;
        float: left;
        padding-left: 20px;
        padding-top: 20px;
        padding-right: 20px;
        margin: 0 2px;
        list-style: none;
        background-color: white;
        border: solid 1px black;
    }

    .carrossel ul li img{
      width: 235px;
      height: 150px !important;
    }

    .menu-carrossel {
        float: left;
        width: 40px;
        height:340px;
        font-size: 20px;
        line-height: 350px;
        border:solid 1px transparent;
        text-align: center;
    }
    .menu-carrossel a img{
        width: 35px;
    }

    /***
        SE O SLIDE POSSUIR MENOS DE 3 IMAGENS ELE NÃO APARECE ENTAO
        ESTAS CLASSES SÃO PARA RESOLVER ESTE PROBLEMA
    ***/
    .pratos_carrossel{
        width: 840px;
        height: 330px;
        overflow: hidden;
        margin-left: auto;
        margin-right: auto;
        padding-top: 5px;
    }

    .pratos_carrossel ul{
        padding: auto;

    }

    .pratos_carrossel ul li{
        margin: 0 2px;
        list-style: none;
        width: 230px;
        height: 300px !important;
        float: left;
        padding-left: 20px;
        padding-top: 20px;
        padding-right: 20px;
        background-color: white;
        border: solid 1px black;
    }

    .pratos_carrossel ul li img{
      width: 235px;
      height: 150px !important;
    }

    .estrelas{
      margin-left: 10px;
      margin-top: 20px;


    }

    .estrelas input[type=radio]{
        display: none;
    }

    .estrelas label i.fa:before{
        content: '\f005';
        color: #FC0;
    }

    .estrelas  input[type=radio]:checked  ~ label i.fa:before{
        color: #CCC;
    }

    .btn_entrar{
      width: 100px;
      height: 35px;
      margin-left: 80px;
      border: 3px solid #9c0404;
      outline: none;
      color: #9c0404;
      background-color: white;
      font-size: 18px;
      font-family: aller_lightregular;

    }

    .btn_entrar:hover{
      color: white;
      background-color: #9c0404;
      transition: 0.2s ease all;

    }

}

@media screen and (min-device-width: 800px) and (max-device-width: 1540px){
    body{
        overflow-x: hidden;
        margin: 0;
        padding: 0;
    }
    #principal{
        width: 100%;
        height:2000px;
        border: solid 0px transparent;
    }

    .tag_h2{
      display: none;

    }
    
    #alerta{
        width: 350px;
        height: 150px;
        margin: auto;
        margin-top: 150px;
        padding-top: 50px;
        text-align: center;
        border:solid 1px #A0A0A0;
        box-shadow: 0px 0px 15px #A0A0A0;
    }
    
    .botao_ok{
        width: 80px;
        margin: auto;
        margin-top: 40px;
        border: solid 2px #9c0404;
    }
    
    .botao_ok:hover, .botao_ok:hover a{
        width: 80px;
        color: white;
        margin: auto;
        margin-top: 40px;
        background-color: #9c0404;
    }
    
    .titulo_cardapio{
        width:1295px;
        height:40px;
        font-size: 30px;
        margin-top: 80px;
        margin-left: auto;
        margin-right: auto;
        padding-top: 5px;
        border: solid 1px white;
        font-family: allerbold;
        color: <?php echo($corrgb); ?>;
        text-align: center;
    }

    /******* Barra de pesquisa *******/
    #content_pesquisar{
        width: 100%;
        height:200px;
        padding-top:30px;
        border-bottom: 1px solid <?php echo($corrgb); ?>;
    }

    .buscar_prato{
        width: 1100px;
        text-align: center;
        margin: 50px auto auto auto;
        font-size: 30px;
    }
    .buscar_prato input{
        width: 500px;
        font-size: 18px;
        border-radius: 10px;
        border-bottom: #FFF;
        padding-left: 15px;
        padding-top: 2px;
        padding-bottom: 2px;
    }
    .buscar_prato button{
        cursor: pointer;
        background-color: white;
    }
    .buscar_prato button img{
        width: 35px;
        height: 35px;
    }


    button{
      border:2px solid #fff;
    }

    button:hover{
      background-color: #fff;
      outline: none;
      transition: 0.2 ease all;
    }

    /****** Slide de pratos e categorias ******/
    #content_prato_categoria{
        background-image: url(imagens/steakhouse-00.jpg);
        background-position: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
    }
    .titulo_categoria_prato{
        height:60px;
        width:800px;
        margin:auto;
        font-size:40px;
        text-align:center;
        margin-bottom:30px;
        border-bottom:solid 1px black;
    }
    #slide_categoria-pratos{
        width: 1205px;
        height:800px;
        margin:auto;
        border:solid 1px transparent;
    }

    /* Slide para mostrar o cardápio */
    .w3-content{
      float:left;
      width:1200px;
      height:750px;
      margin-top:5px;
      margin-left:auto;
      margin-right:auto;
      margin-bottom:5px;
        background-color: white;
        border:solid 1px transparent;
    }
    .w3-button{
        float:left;
        height:70px;
        width:55px;
        padding:5px;
        margin-top:350px;
        color:black;
        position:absolute;
        background-color:rgba(255,255,255, 0.5);
        outline: none;
    }
    .w3-button img{
        width:50px;
    }
    .w3-button:hover{
      transition:0.5s;
      color:white;
      cursor: pointer;
      outline: none;
    }
    .w3_content_imagem{
      margin-left:auto;
      margin-right:auto;
      width:500px;
      height:300px;
        border: solid 1px black;
    }
    .w3_content_imagem img{
        width:500px;
        height:300px;
    }
    .w3_titulo{
        width: 700px;
        height:40px;
        padding-top: 5px;
        font-size: 30px;
        text-align: center;
        margin-left: auto;
        margin-right: auto;
        margin-top: 20px;
        margin-bottom: 15px;
        border: solid 1px transparent;
    }
    .w3_content_detalhes{
        width: 1200px;
        height: 295;
        font-size: 25px;
        margin-left:auto;
        margin-right:auto;
        padding-left:5px;
        padding-right: 5px;
        border: solid 1px transparent;
    }
    .w3_descricao_prato{
        width: 450px;
        height:270px;
        float:left;
        text-align: justify;
        border:solid 1px transparent;
    }
    .w3_ingredientes{
        width:380px;
        height:270px;
        float:left;
        margin-left: 30px;
        margin-right: 10px;
        border:solid 1px transparent;
    }
    .w3_avaliacao{
        width:300px;
        height:270px;
        margin-left: 25px;
        float:left;
    }
    /*
    Avaliação do prato
    */
    table.avaliar_prato{
        width:290px;
        height:70px;
        margin-top: 5px;
        border:solid 1px transparent;
    }
    .avaliar_prato tr td{
        padding:2px;

    }
    .avaliar_prato tr td img{
        width:55px;
        height:auto;
    }

    .apagada {
      background-image: url('../imagens/estrela-prata.png');
      width: 55px;
      height: 32px;
      cursor: pointer;
    }

    .destaque {
      background-image: url('../imagens/estrela.png');
      width: 55px;
      height: 32px;
      background-size: 100% 100%;
      cursor: pointer;
    }


    /************ Todas as categorias de pratos ************/
    #content_categorias{
        width: 100%;
        height:900px;
        overflow: scroll;
        border-top: 1px solid <?php echo($corrgb); ?>;
    }

    .titulo_categorias{
        font-size: 35px;
        width:1000px;
        margin-top: 20px;
        margin-left: auto;
        margin-right: auto;
        font-family: allerregular;
        color: <?php echo($corrgb); ?>;
        text-align: center;
    }

    .detalhes_prato_carrossel{
        width:235px;
        font-size: 25px;
        min-height: 140px;
        text-align: center;
        font-family: aller_lightregular;
    }

    /*** Primeiro slide ***/
    .content{
        margin: 0 auto;
        width: 1240px;
        height: 340px;
        padding-top:20px;
        padding-bottom:5px;
    }

    .carrossel{
        float: left;
        width: 1180px;
        height: 340px;
        overflow: hidden;
        border: solid 1px transparent;
    }

    .carrossel ul li{
        width: 180px;
        height: 250px !important;
        float: left;
        padding-left: 20px;
        padding-top: 20px;
        padding-right: 20px;
        margin: 0 2px;
        list-style: none;
        background-color: white;
        border: solid 1px black;
    }

    .carrossel ul li img{
      width: 180px;
      height: 150px !important;
    }

    .menu-carrossel {
        float: left;
        width: 40px;
        height:340px;
        font-size: 20px;
        line-height: 350px;
        border:solid 1px transparent;
        text-align: center;
    }
    .menu-carrossel a img{
        width: 35px;
    }

    /***
        SE O SLIDE POSSUIR MENOS DE 3 IMAGENS ELE NÃO APARECE ENTAO
        ESTAS CLASSES SÃO PARA RESOLVER ESTE PROBLEMA
    ***/
    .pratos_carrossel{
        width: 840px;
        height: 330px;
        overflow: hidden;
        margin-left: auto;
        margin-right: auto;
        padding-top: 5px;
    }

    .pratos_carrossel ul{
        padding: auto;

    }

    .pratos_carrossel ul li{
        margin: 0 2px;
        list-style: none;
        width: 230px;
        height: 300px !important;
        float: left;
        padding-left: 20px;
        padding-top: 20px;
        padding-right: 20px;
        background-color: white;
        border: solid 1px black;
    }

    .pratos_carrossel ul li img{
      width: 235px;
      height: 150px !important;
    }

    .estrelas{
      margin-left: 10px;
      margin-top: 20px;


    }

    .estrelas input[type=radio]{
        display: none;
    }

    .estrelas label i.fa:before{
        content: '\f005';
        color: #FC0;
    }

    .estrelas  input[type=radio]:checked  ~ label i.fa:before{
        color: #CCC;
    }

    .btn_entrar{
      width: 100px;
      height: 35px;
      margin-left: 80px;
      border: 3px solid #9c0404;
      outline: none;
      color: #9c0404;
      background-color: white;
      font-size: 18px;
      font-family: aller_lightregular;

    }

    .btn_entrar:hover{
      color: white;
      background-color: #9c0404;
      transition: 0.2s ease all;

    }

}

@media screen and (min-device-width: 300px) and (max-device-width: 1000px){

   body{
        overflow-x: hidden;
        margin: 0;
        padding: 0;
    }
    #principal{
        width: 100%;
        height:2000px;
        border: solid 0px transparent;
    }

    .tag_h2{
      display: none;

    }

    #alerta{
        width: 400px;
        height: 180px;
        margin: auto;
        margin-top: 150px;
        padding-top: 50px;
        text-align: center;
        font-size: 30px;
        border:solid 1px #A0A0A0;
        box-shadow: 0px 0px 15px #A0A0A0;
    }
    
    .botao_ok{
        width: 80px;
        margin: auto;
        margin-top: 40px;
        border: solid 4px #9c0404;
    }
    
    .botao_ok:hover, .botao_ok:hover a{
        width: 80px;
        color: white;
        margin: auto;
        margin-top: 40px;
        background-color: #9c0404;
    }
    
    .titulo_cardapio{
        width:800px;
        height:40px;
        font-size: 30px;
        margin-top: 80px;
        margin-left: auto;
        margin-right: auto;
        padding-top: 5px;
        border: solid 1px white;
        font-family: allerbold;
        color: <?php echo($corrgb); ?>;
        text-align: center;
    }

    /******* Barra de pesquisa *******/
    #content_pesquisar{
        width: 100%;
        height:200px;
        padding-top:30px;
        border-bottom: 1px solid <?php echo($corrgb); ?>;
    }

    .buscar_prato{
        width: 850px;
        text-align: center;
        margin: 50px auto auto auto;
        font-size: 38px;
    }
    .buscar_prato input{
        width: 530px;
        font-size: 28px;
        border-radius: 10px;
        border-bottom: #FFF;
        padding-left: 15px;
        padding-top: 2px;
        padding-bottom: 2px;
    }
    .buscar_prato button{
        cursor: pointer;
        background-color: white;
    }
    .buscar_prato button img{
        width: 35px;
        height: 35px;
    }

    button{
      border:2px solid #fff;
    }

    button:hover{
      background-color: #fff;
      outline: none;
      transition: 0.2 ease all;
    }

    /****** Slide de pratos e categorias ******/
    #content_prato_categoria{
        
    }
    .titulo_categoria_prato{
        height:60px;
        width:800px;
        margin:auto;
        font-size:40px;
        text-align:center;
        margin-bottom:30px;
        border-bottom:solid 1px black;
    }
    #slide_categoria-pratos{
        width: 1000px;
        height:800px;
        margin:auto;
        overflow-y: scroll;
        border:solid 1px transparent;
    }

    /* Slide para mostrar o cardápio */
    .w3-content{
        float:left;
        width:980px;
        height:750px;
        margin-top:5px;
        margin-left:auto;
        margin-right:auto;
        margin-bottom:5px;
        background-color: white;
        border:solid 1px transparent;
    }
    .w3-button{
        float:left;
        height:70px;
        width:55px;
        padding:5px;
        margin-top:350px;
        color:black;
        position:absolute;
        background-color:rgba(255,255,255, 0.5);
        outline: none;
    }
    .w3-button img{
        width:50px;
    }
    .w3-button:hover{
      transition:0.5s;
      color:white;
      cursor: pointer;
      outline: none;
    }
    .w3_content_imagem{
      margin-left:auto;
      margin-right:auto;
      width:500px;
      height:300px;
        border: solid 1px black;
    }
    .w3_content_imagem img{
        width:500px;
        height:300px;
    }
    .w3_titulo{
        width: 700px;
        height:40px;
        padding-top: 5px;
        font-size: 30px;
        text-align: center;
        margin-left: auto;
        margin-right: auto;
        margin-top: 20px;
        margin-bottom: 15px;
        border: solid 1px transparent;
    }
    .w3_content_detalhes{
        width: 870px;
        height: 295;
        font-size: 35px;
        margin-left:auto;
        margin-right:auto;
        padding-left:5px;
        padding-right: 5px;
        border: solid 1px transparent;
    }
    .w3_descricao_prato{
        width: 250px;
        height:270px;
        float:left;
        text-align: justify;
        border:solid 1px transparent;
    }
    .w3_ingredientes{
        width:200px;
        height:270px;
        float:left;
        margin-left: 30px;
        margin-right: 10px;
        border:solid 1px transparent;
    }
    .w3_avaliacao{
        width:300px;
        height:270px;
        margin-left: 25px;
        float:left;
    }
    /*
    Avaliação do prato
    */
    table.avaliar_prato{
        width:290px;
        height:70px;
        margin-top: 5px;
        border:solid 1px transparent;
    }
    .avaliar_prato tr td{
        padding:2px;

    }
    .avaliar_prato tr td img{
        width:55px;
        height:auto;
    }

    .apagada {
      background-image: url('../imagens/estrela-prata.png');
      width: 55px;
      height: 32px;
      cursor: pointer;
    }

    .destaque {
      background-image: url('../imagens/estrela.png');
      width: 55px;
      height: 32px;
      background-size: 100% 100%;
      cursor: pointer;
    }


    /************ Todas as categorias de pratos ************/
    #content_categorias{
        width: 100%;
        height:900px;
        overflow: scroll;
        border-top: 1px solid <?php echo($corrgb); ?>;
    }

    .titulo_categorias{
        font-size: 35px;
        width:800px;
        margin-top: 20px;
        margin-left: auto;
        margin-right: auto;
        font-family: allerregular;
        color: <?php echo($corrgb); ?>;
        text-align: center;
    }

    .detalhes_prato_carrossel{
        width:235px;
        font-size: 25px;
        min-height: 140px;
        text-align: center;
        font-family: aller_lightregular;
    }

    /*** Primeiro slide ***/
    .content{
        width: 950px;
        height: 310px;
        padding-top:20px;
        padding-bottom:5px;
    }

    .carrossel{
        float: left;
        width: 880px;
        height: 300px;
        overflow: hidden;
        border: solid 1px transparent;
    }

    .carrossel ul li{
        width: 160px;
        height: 200px !important;
        float: left;
        padding-left: 2px;
        padding-top: 20px;
        padding-right: 2px;
        margin: 0 2px;
        list-style: none;
        background-color: white;
        border: solid 1px black;
    }

    .carrossel ul li img{
      width: 150px;
      height: 100px !important;
    }

    .menu-carrossel {
        float: left;
        width: 40px;
        height:340px;
        font-size: 20px;
        line-height: 350px;
        border:solid 1px transparent;
        text-align: center;
    }
    .menu-carrossel a img{
        width: 35px;
    }

    /***
        SE O SLIDE POSSUIR MENOS DE 3 IMAGENS ELE NÃO APARECE ENTAO
        ESTAS CLASSES SÃO PARA RESOLVER ESTE PROBLEMA
    ***/
    .pratos_carrossel{
        width: 840px;
        height: 330px;
        overflow: hidden;
        margin-left: auto;
        margin-right: auto;
        padding-top: 5px;
    }

    .pratos_carrossel ul{
        padding: auto;

    }

    .pratos_carrossel ul li{
        margin: 0 2px;
        list-style: none;
        width: 230px;
        height: 300px !important;
        float: left;
        padding-left: 20px;
        padding-top: 20px;
        padding-right: 20px;
        background-color: white;
        border: solid 1px black;
    }

    .pratos_carrossel ul li img{
      width: 235px;
      height: 150px !important;
    }

    .estrelas{
      margin-left: 10px;
      margin-top: 20px;
    }
    
    .estrelas input[type=radio]{
        display: none;
    }

    .estrelas label i.fa:before{
        content: '\f005';
        color: #FC0;
    }

    .estrelas  input[type=radio]:checked  ~ label i.fa:before{
        color: #CCC;
    }

    .btn_entrar{
      width: 100px;
      height: 35px;
      margin-left: 80px;
      border: 3px solid #9c0404;
      outline: none;
      color: #9c0404;
      background-color: white;
      font-size: 18px;
      font-family: aller_lightregular;
    }

    .btn_entrar:hover{
      color: white;
      background-color: #9c0404;
      transition: 0.2s ease all;
    }


}

</style>
