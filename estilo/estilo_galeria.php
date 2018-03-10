
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
    
@media screen and (min-width: 1650px) and (max-width: 2000px){
    p{
        margin-top: 10px;
    }
    body{
        overflow-x: hidden;
    }

    #texto{
        width:100%;
        font-family:alleritalic;
        text-align: center;
        font-size:25px;
        padding-bottom:20px;
    }

    .tag_h2{
      display: none;

    }

    .conteudo{
        width:1400px;
        height:2500px;
        margin-right:auto;
        margin-left: auto;

    }
    #galeria{
        width:1200px;
        height:950px;
        padding:30px;
        margin-right:auto;
        margin-left: auto;

    }

    .conteudoSuperior{
        width:520px;
        height:450px;
        float:left;
        margin:30px 30px 0px 30px;

    }
    .texto{
        height: 30px;
        font-size: 25px;
    }

    .contImg1{
        width: 220px;
        height: 400px;
        margin-left: 10px;
        float: left;
    }
    .contImg1 img{
        width: 220px;
        height: 400px;
    }

    .contImg2{
        width: 250px;
        height: 196px;
        margin-left: 10px;
        float:left;
        margin-bottom: 5px;
    }
    .contImg2 img{
        width: 250px;
        height: 196px;
    }

    .contImg02{
        width: 250px;
        height: 230px;
        margin-left: 10px;
        float:left;
    }
    .contImg02 img{
        width: 250px;
        height: 230px;
    }

    .contImg3{
        width: 120px;
        height: 150px;
        margin-left: 10px;
        margin-top: 15px;
        float:left;
    }
    .contImg3 img{
        width: 120px;
        height: 150px;
    }

    .contImg4{
        width: 240px;
        height: 410px;
        float: left;
        margin-left: 10px;
    }
    .contImg4 img{
        width: 240px;
        height: 410px;
    }


    /* Inicio do carrossel */
    #content_carrossel{
        width:1300px;
        height:300px;
        margin-top:30px;
        margin-bottom:50px;
        padding-left: 0;
    }


    #content {
        margin: 0 auto;
        width: 1250px;
        height: 350px;
        /*background-color: white;*/
    }

    #carrossel {
        float: left;
        width: 1100px !important;
        height: 295px;
        padding-right: 8px;
        overflow: hidden;
    }

    #carrossel ul li {
        width: 210px;
        height: 200px !important;
        float: left;
        padding: 20px 5px 10px 5px;
        margin: 0 2px;
    }

    #carrossel ul li img{
        width: 200px !important;
        height: 240px !important;
        float: left;
        margin: 0 2px;
    }

    #menu-carrossel {
        float: left;
        width: 40px;
        height:300px;
        font-size: 20px;
        line-height: 280px;
        text-align: center;
    }
    #menu-carrossel a img{
        width: 35px;
    }


    /* Fim da formatação do carrossel */
    .contInferior{
        width:1260px;
        height:400px;
        margin:auto;
    }

    .conteudo1{
        width: 600px;
        height: 330px;
        margin-left: 7px;
        margin-top: 30px;
        float: left;
    }
    .conteudo1 img{
        width: 600px;
        height: 330px;
    }

    .conteudo2{
        width: 270px;
        height: 330px;
        margin-left: 40px;
        margin-top: 30px;
        float: left;
    }
    .conteudo2 img{
        width: 270px;
        height: 330px;
    }

    #contDivisao2{
        width: 915px;
        height: 380px;
        margin-left: 5px;
        margin-top: 10px;
        float: left;
    }
    #contDivisao2 img{
        width: 915px;
        height: 380px;
    }

    #cont2{
        width: 270px;
        height: 380px;
        margin-left: 40px;
        margin-top: 10px;
        float: left;
    }
    #cont2 img{
        width: 270px;
        height: 380px;
    }
}

@media screen and (min-width: 1010px) and (max-width: 1640px){
    p{
        margin-top: 10px;
    }
    body{
        overflow-x: hidden;
    }

    #texto{
        width:100%;
        font-family:alleritalic;
        text-align: center;
        font-size:25px;
        padding-bottom:20px;
    }

    .tag_h2{
      display: none;
    }

    .conteudo{
        width:auto;
        height:2500px;
        margin-right:auto;
        margin-left: auto;
    }
    
    #galeria{
        width:1200px;
        height:950px;
        padding:30px;
        margin-right:auto;
        margin-left: auto;
    }

    .conteudoSuperior{
        width:520px;
        height:450px;
        float:left;
        margin:30px 30px 0px 30px;
    }
    
    .texto{
        height: 30px;
        font-size: 25px;
    }

    .contImg1{
        width: 220px;
        height: 400px;
        margin-left: 10px;
        float: left;
        border: solid 1px #CDCDCD;
    }
    .contImg1 img{
        width: 220px;
        height: 400px;
    }

    .contImg2{
        width: 250px;
        height: 196px;
        margin-left: 10px;
        float:left;
        margin-bottom: 5px;
        border: solid 1px #CDCDCD;
    }
    .contImg2 img{
        width: 250px;
        height: 196px;
    }

    .contImg02{
        width: 250px;
        height: 230px;
        margin-left: 10px;
        float:left;
        border: solid 1px #CDCDCD;
    }
    .contImg02 img{
        width: 250px;
        height: 230px;
    }

    .contImg3{
        width: 120px;
        height: 150px;
        margin-left: 10px;
        margin-top: 15px;
        float:left;
        border: solid 1px #CDCDCD;
    }
    .contImg3 img{
        width: 120px;
        height: 150px;
    }

    .contImg4{
        width: 240px;
        height: 410px;
        float: left;
        margin-left: 10px;
        border: solid 1px #CDCDCD;
    }
    .contImg4 img{
        width: 240px;
        height: 410px;
    }


    /* Inicio do carrossel */
    #content_carrossel{
        width:1300px;
        height:300px;
        margin-top:30px;
        margin-bottom:50px;
        padding-left: 0;
    }


    #content {
        margin: 0 auto;
        width: 1250px;
        height: 350px;
        /*background-color: white;*/
    }

    #carrossel {
        float: left;
        width: 1100px !important;
        height: 295px;
        padding-right: 8px;
        overflow: hidden;
    }

    #carrossel ul li {
        width: 210px;
        height: 200px !important;
        float: left;
        padding: 20px 5px 10px 5px;
        margin: 0 2px;
    }

    #carrossel ul li img{
        width: 200px !important;
        height: 240px !important;
        float: left;
        margin: 0 2px;
    }

    #menu-carrossel {
        float: left;
        width: 40px;
        height:300px;
        font-size: 20px;
        line-height: 280px;
        text-align: center;
    }
    #menu-carrossel a img{
        width: 35px;
    }

    /* Fim da formatação do carrossel */
    
    .contInferior{
        width:1260px;
        height:400px;
    }

    .conteudo1{
        width: 600px;
        height: 330px;
        margin-left: 7px;
        margin-top: 30px;
        float: left;
    }
    .conteudo1 img{
        width: 600px;
        height: 330px;
    }

    .conteudo2{
        width: 270px;
        height: 330px;
        margin-left: 40px;
        margin-top: 30px;
        float: left;
    }
    .conteudo2 img{
        width: 270px;
        height: 330px;
    }

    #contDivisao2{
        width: 915px;
        height: 380px;
        margin-left: 5px;
        margin-top: 10px;
        float: left;
    }
    #contDivisao2 img{
        width: 915px;
        height: 380px;
    }

    #cont2{
        width: 270px;
        height: 380px;
        margin-left: 40px;
        margin-top: 10px;
        float: left;
    }
    #cont2 img{
        width: 270px;
        height: 380px;
    }
}

@media screen and (min-width: 300px) and (max-width: 1005px){
    p{
        margin-top: 10px;
    }
    body{
        overflow-x: hidden;
    }

    #texto{
        width:100%;
        font-family:alleritalic;
        text-align: center;
        font-size:40px;
        padding-bottom:20px;
    }

    .tag_h2{
      display: none;
    }

    .conteudo{
        width:950px;
        min-height:2500px;
        height:auto;
    }
    
    #galeria{
        width:950px;
        height:2600px;
    }

    .conteudoSuperior{
        width:845px;
        height:650px;
        margin: auto;
    }
    
    .texto{
        height: 30px;
        font-size: 25px;
    }

    .contImg1{
        width: 440px;
        height: 610px;
        margin-right: 2px;
        float: left;
        border: solid 1px black;
    }
    .contImg1 img{
        width: 440px;
        height: 610px;
    }

    .contImg2{
        width: 380px;
        height: 300px;
        margin-left: 2px;
        float:left;
        margin-bottom: 5px;
        border: solid 1px black;
    }
    .contImg2 img{
        width: 380px;
        height: 300px;
    }

    .contImg02{
        width: 380px;
        height: 330px;
        margin-left: 2px;
        float:left;
        border: solid 1px black;
    }
    .contImg02 img{
        width: 380px;
        height: 330px;
    }

    .contImg3{
        width: 190px;
        height: 250px;
        margin-left: 2px;
        margin-top: 15px;
        float:left;
        border: solid 1px black;
    }
    .contImg3 img{
        width: 180px;
        height: 250px;
    }

    .contImg4{
        width: 410px;
        height: 610px;
        float: left;
        margin-right: 4px;
        border: solid 1px black;
    }
    .contImg4 img{
        width: 410px;
        height: 610px;
    }

    /* Inicio do carrossel */
    #content_carrossel{
        width:950px;
        height:300px;
        margin-top:30px;
        margin-bottom:50px;
        padding-left: 0;
    }

    #content {
        margin: 0 auto;
        width: 945px;
        height: 320px;
    }

    #carrossel {
        float: left;
        width: 850px !important;
        height: 250px;
        padding-right: 8px;
        overflow: hidden;
        margin-top: 0px;
        list-style: none;
    }

    #carrossel ul li {
        width: 205px;
        height: 250px !important;
        float: left;
        margin: 0 2px;
    }

    #carrossel ul li img{
        width: 205px !important;
        height: 250px !important;
        float: left;
    }

    #menu-carrossel {
        float: left;
        width: 40px;
        height:250px;
        font-size: 20px;
        line-height: 280px;
        text-align: center;
    }
    #menu-carrossel a img{
        width: 35px;
    }
    /* Fim da formatação do carrossel */

    .contInferior{
        width:950px;
        height:400px;
    }

    .conteudo1{
        width: 450px;
        height: 330px;
        margin-left: 5px;
        margin-top: 30px;
        float: left;
        border: solid 1px #C0C0C0;
    }
    .conteudo1 img{
        width: 450px;
        height: 330px;
    }

    .conteudo2{
        width: 200px;
        height: 330px;
        margin-left: 5px;
        margin-top: 30px;
        float: left;
        border: solid 1px #C0C0C0;
    }
    .conteudo2 img{
        width: 200px;
        height: 330px;
    }

    #contDivisao2{
        width: 600px;
        height: 380px;
        margin-left: 5px;
        margin-top: 10px;
        float: left;
        border: solid 1px #C0C0C0;
    }
    #contDivisao2 img{
        width: 600px;
        height: 380px;
    }

    #cont2{
        width: 250px;
        height: 380px;
        margin-left:10px;
        margin-top: 10px;
        float: left;
        border: solid 1px #C0C0C0;
    }
    #cont2 img{
        width: 250px;
        height: 380px;
    }
    

}   
    
</style>
