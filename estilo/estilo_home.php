
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

    require_once('controller/home_controller.php');
    $menu_controller = new ControllerHome();

    $rs = $menu_controller->ListarMenu();
    if($rs != null){
        $imgMenu1 = $rs[0]->imagem;
        $imgMenu2 = $rs[1]->imagem;
        $imgMenu3 = $rs[2]->imagem;
        $imgMenu4 = $rs[3]->imagem;
        $imgMenu5 = $rs[4]->imagem;
        $imgMenu6 = $rs[5]->imagem;
        $imgMenu7 = $rs[6]->imagem;
        $imgMenu8 = $rs[7]->imagem;

    }else{
        $imgMenu1 = 'imagens/back-filial.png';
        $imgMenu2 = 'imagens/back-cadastro.png';
        $imgMenu3 = 'imagens/back-contato.png';
        $imgMenu4 = 'imagens/back-cardapio.png';
        $imgMenu5 = 'imagens/back-sobre.png';
        $imgMenu6 = 'imagens/back-reservas.png';
        $imgMenu7 = 'imagens/back-galeria.png';
        $imgMenu8 = 'imagens/back-eventos.png';
    }


?>



<style media="screen">
    
@media screen and (min-device-width: 1000px) and (max-device-width: 2000px){
    
    section{
      width: auto;
      min-height: 3600px;
      margin-top: -45px;
    }

    #conteinner-home{
        width: 100%;
        height: 950px;
    }

    #conteinner-menu{
        width: 100%;
        min-height: 1650px;
        height: auto;
        clear: both;
        float: left;
    }

    #conteinner-mapa{
        width: 100%;
        height: 950px;
        background-color: bisque;
        float: left;
    }

    #conteinner-mapa img{
        width: 100%;
        height: 950px;
    }

    /*============ Formatação slider ==================*/


    #slider-show{
      width: 100%;
      height: 950px;
    }

    #slider{
      width:100%;
      height:950px;
      overflow:hidden;
        z-index: 9;
    }

    #slider ul{
      float:right;
      width:100%;
      list-style-type:none;

    }

    #slider li{
      float:right;
      width:480px;
      height:950px;
      background-size:100% auto !important;
        padding-top: 320px;
        z-index:1;
    }

    #slider li.one{background:#069;}

    #slider #prev, #slider #next{
      position:absolute;
      width:60px;
      height:60px;
      top:50%;
        border-radius: 30px;
      margin-top:-30px;
        margin-left: 15px;
        margin-right: 15px;
        text-decoration: none;
        font-size: 30px;
        font-family: aller_lightregular;
        text-align: center;
    }

    .marcador{
        margin-top: 12px;
    }

    #slider #next{

      right:0;
    }

    #slider #prev{
      left:10;
    }

    #prev img{
        width: 100%;
        height: 100%;
        transform: rotate(180deg);
    }

    #next img{
        width: 100%;
        height: 100%;
    }

    .row p{
      margin-top: 45px;
      color:#fff;
      font-size: 30px;
      font-family: aller_lightregular;
      text-shadow: 4px 4px 2px rgba(0, 0, 0, 1);
    }

    .row h1{
      font-family: allerbold ;
      color: <?php echo($corrgb); ?>;
      font-size:47px;
      margin-top:15px;
    }

    button{
        height: 70px;
        width: 200px;
        display:inline-block;
        padding:5px 8px;
        border:2px solid #fff;
        margin: auto;
        text-decoration:none;
        color:#fff;
        font-weight:bold;
        margin-top: 30px;
        font-family: aller_lightregular;
        font-size: 18px;
        background-color: rgba(0,0,0,0.2);
    }

    button:hover{
      background-color: #fff;
      color:<?php echo($corrgb); ?>;
       transition: 0.2s ease all;
    }

    #indicador{
        width: 50px;
        height: 48px;
        position: absolute;
        margin-left: 49%;
        margin-top: 40%;
        z-index: 10;
        background-color: rgba(255, 255, 255, 0.2);
        border-radius: 150px;
        padding-top: 2px;
    }

    #indicador img{
        width: 50px;
        height: 50px;
    }

    iframe{
        width: 100%;
        height: 950px;
    }

    .area_filiais{
      width: 400px;
      height: 500px;
      float: left;
      border: 1px solid #f0f0f5;
      margin-top:200px;
      margin-left: 170px;
    }

    .imagem_filial{
      width: 100%;
      height: 220px;
    }

    .imagem_filial img{
      width: 90%;
      height: 200px;
      margin-left: 10px;
    }

    .nome_filial{
      width: 100%;
      height: 50px;
      color:#9c0404;
      font-size: 20px;
      font-family: allerbold;
      text-align: center;
    }

    .label_cnpj{
      width: 100px;
      height: 50px;
      float: left;
      color:#000;
      font-size: 20px;
      font-family: allerbold;
      text-align: center;
    }

    .label_cnpj_banco{
      width: 300px;
      height: 50px;
      float: left;
      color:#000;
      font-size: 20px;
      font-family: aller_lightregular;

    }

    .label_localidade{
      width: 120px;
      height: 50px;
      float: left;
      color:#000;
      font-size: 20px;
      font-family: allerbold;
      text-align: center;

    }

    .label_localidade_banco{
      width: 280px;
      height: 50px;
      float: left;
      color:#000;
      font-size: 20px;
      font-family: aller_lightregular;

    }

    .avaliacao{
      width: 100%;
      margin-left: 115px;
      margin-top: 20px;
      float: left;

    }

    .estrelas input[type=radio]{
        display: none;
    }

    .estrelas label i.fa:before{
        content: '\f005';
        color: #FC0;
    }

    
    .busca{
      width: 80px;
      height: 80px;
      margin-left: 160px;
      border: solid 3px #9c0404;
      background-color: #9c0404;
      margin-top: 10px;
      float: left;
      border-radius: 100px;
    }

    .busca i{
      color: #fff;
      margin-left: 21px;
      margin-top: 17px;

    }

    #local{
      background-color: #fff;
      border-style: none;


    }

}

@media screen and (min-device-width: 300px) and (max-device-width: 980px){
    *{
        padding: 0;
        margin: 0;
    }
    
    body{
        overflow-x: hidden;
        max-width: 100%;
        padding: 0;
        margin: 0;
    }
    
    section{
        width: auto;
        min-height: 3550px;
        margin-top: -45px;
        padding: 0;
        margin: 0;
    }

    #conteinner-home{
        width: 100%;
        height: 950px;
    }

    #conteinner-menu{
        width: 100%;
        min-height: 1650px;
        height: auto;
        clear: both;
        float: left;
    }

    #conteinner-mapa{
        width: 100%;
        height: 800px;
        background-color: bisque;
        float: left;
    }

    #conteinner-mapa img{
        width: 100%;
        height: 950px;
    }

    /*============ Formatação slider ==================*/


    #slider-show{
      width: 100%;
      height: 800px;
    }

    #slider{
      width:100%;
      height:800px;
      overflow:hidden;
        z-index: 9;
    }

    #slider ul{
      float:right;
      width:100%;
      list-style-type:none;

    }

    #slider li{
      float:right;
      width:480px;
      height:800px;
      background-size:100% auto !important;
        padding-top: 320px;
        z-index:1;
    }

    #slider li.one{background:#069;}

    #slider #prev, #slider #next{
      position:absolute;
      width:60px;
      height:60px;
      top:20%;
      border-radius: 30px;
      margin-top:-30px;
        margin-left: 15px;
        margin-right: 15px;
        text-decoration: none;
        font-size: 30px;
        font-family: aller_lightregular;
        text-align: center;
    }

    .marcador{
        margin-top: 12px;
    }

    #slider #next{

      right:0;
    }

    #slider #prev{
      left:10;
    }

    #prev img{
        width: 100%;
        height: 100%;
        transform: rotate(180deg);
    }

    #next img{
        width: 100%;
        height: 100%;
    }

    .row p{
      margin-top: 45px;
      color:#fff;
      font-size: 30px;
      font-family: aller_lightregular;
      text-shadow: 4px 4px 2px rgba(0, 0, 0, 1);
    }

    .row h1{
      font-family: allerbold ;
      color: <?php echo($corrgb); ?>;
      font-size:47px;
      margin-top:15px;
    }

    button{
        height: 70px;
        width: 200px;
        display:inline-block;
        padding:5px 8px;
        border:2px solid #fff;
        margin: auto;
        text-decoration:none;
        color:#fff;
        font-weight:bold;
        margin-top: 30px;
        font-family: aller_lightregular;
        font-size: 18px;
        background-color: rgba(0,0,0,0.2);
    }

    button:hover{
      background-color: #fff;
      color:<?php echo($corrgb); ?>;
       transition: 0.2s ease all;
    }

    #indicador{
        width: 50px;
        height: 48px;
        position: absolute;
        margin-left: 49%;
        margin-top: 40%;
        z-index: 10;
        background-color: rgba(255, 255, 255, 0.2);
        border-radius: 150px;
        padding-top: 2px;
    }

    #indicador img{
        width: 50px;
        height: 50px;
    }

    iframe{
        width: 100%;
        height: 900px;
    }

    .area_filiais{
        width: 460px;
        height: 550px;
        float: left;
        border: 1px solid #f0f0f5;
        margin-top:100px;
        margin-left: 20px;
    }

    .imagem_filial{
      width: 100%;
      height: 220px;
    }

    .imagem_filial img{
      width: 90%;
      height: 200px;
      margin-left: 10px;
    }

    .nome_filial{
      width: 100%;
      height: 50px;
      color:#9c0404;
      font-size: 26px;
      font-family: allerbold;
      text-align: center;
    }

    .label_cnpj{
      width: 100px;
      height: 50px;
      float: left;
      color:#000;
      font-size: 26px;
      font-family: allerbold;
      text-align: center;
    }

    .label_cnpj_banco{
      width: 250px;
      height: 50px;
      float: left;
      color:#000;
      font-size: 26px;
      font-family: aller_lightregular;
    }

    .label_localidade{
      width: 120px;
      height: 50px;
      float: left;
      color:#000;
      font-size: 26px;
      font-family: allerbold;
      text-align: center;

    }

    .label_localidade_banco{
      width: 280px;
      height: 50px;
      float: left;
      color:#000;
      font-size: 26px;
      font-family: aller_lightregular;

    }

    .avaliacao{
      width: 100%;
      margin-left: 115px;
      margin-top: 20px;
      float: left;

    }

    .estrelas input[type=radio]{
        display: none;
    }

    .estrelas label i.fa:before{
        content: '\f005';
        color: #FC0;
    }

    
    .busca{
      width: 80px;
      height: 80px;
      margin-left: 160px;
      border: solid 3px #9c0404;
      background-color: #9c0404;
      margin-top: 10px;
      float: left;
      border-radius: 100px;
    }

    .busca i{
      color: #fff;
      margin-left: 21px;
      margin-top: 17px;

    }

    #local{
      background-color: #fff;
      border-style: none;


    }

    
}

</style>
