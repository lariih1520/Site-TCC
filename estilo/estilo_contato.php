
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
/** ** CSS da página contato ** **/

/*
    Feito por: Larissa
    Data: 19/09/2017
*/
@media screen and (min-device-width: 900px) and (max-device-width: 2000px){
    
    body{
        margin: 0;
        padding: 0;
        max-width: 100%;
        overflow-x: hidden;
    }

    #principal{
        width: 100%;
        height:2100px;
    }

    .titulo{
       width: 800px;
       height: 50px;
    }

    .tag_h2{
      display: none;

    }

    #margin-titulo-perguntas{
        width: 800px;
        height: 10px;
        position: absolute;
        border-bottom: 1px solid <?php echo($corrgb); ?>;
        margin-top:8px;
        z-index: 0;
    }


    .titulo-perguntas{
        margin-left: 240px;;
        width: 320px;
        background-color: #fff;
        height: 50px;
        font-family: aller_lightregular;
        font-weight: bold;
        font-size: 30px;
        text-align: center;
        color: <?php echo($corrgb); ?>;
        z-index: 1;
        position: absolute;
    }


    /* Introdição da página */
    #introd_contatos{
        width: 100%;
        height:850px;
        background-image: url('imagens/fundo.jpg');
    }

    .introd{
        text-align: center;
        font-size: 24px;
        padding: 300px;
        font-family:aller_lightregular;
        color:#fff;
    }
    .titulo_introd{
        font-size: 34px;
        text-align: center;
        font-family: allerregular;
        color: <?php echo($corrgb); ?>;
    }

    /* Lista de peguntas frequentes */
    #perguntas_frequentes{
        width: 800px;
        height:500px;
        margin: auto;
    }

    #perguntas_centro{
        width: 1115px;
        height: 80%;
        margin-left: auto;
        margin-right: auto;
        padding-left: 20px;
        padding-top: 20px;
    }
    .lst_perguntas{
        margin: 0;
        padding: 0;
        float: left;
        width:500px;
        color: #000;
    }

    ul.lst_perguntas li{
        min-height:50px;
        font-size: 20px;
    }

    ul.lst_perguntas li a{
        color:black;
        font-family: aller_lightregular;
    }

    /* Fale conosco */
    #faleconosco{
        width: 100%;
        height:600px;
    }

    #frmcontato{
        width:830px;
        height:600px;
        margin: auto;
    }

    .titulo_faleconosco{
        height:60px;
        width: 1500px;
        font-size: 24px;
        padding-top: 28px;
        margin-bottom: 25px;
        font-family: aller_lightregular;
        margin-left: -40px;
    }

    .campos_contato{
        width:400px;
        float: left;
        font-size: 25px;
        padding-left: 15px;
        margin-bottom: 30px;
    }

    .input{
        padding: 10px 0px 10px 0px;
        width: 350px !important;
        margin-bottom:20px;
    }

    #frmcontato p span{
        font-size: 25px;
    }

    textarea{
        resize: none;
    }

    .margem_esquerda{
        margin-left: 15px;
    }

    /*Formatação inputs*/

    .grupo-text-pesquisa{
      position: relative;
      margin-bottom: 2.4em;
    }

    label{
      color: #000;
      font-size: 20px;
      font-weight: normal;
      font-family: aller_lightregular;
      position: absolute;
      pointer-events: none;
      top: 10px;
      transition: 0.2s ease all;
    }

    input{
      color:#000;
      padding: 10px 0px 10px 0px;
      display: block;
      outline: none;
      border: none;
      width: 350px;
      border-bottom: 1px solid <?php echo($corrgb); ?>;
      font-size: 18px;
      font-family: aller_lightregular;
    }

    /* Animação */
    .bar {
      position: relative;
      display: block;
      width: 350px;
    }

    .bar:before, .bar:after {
      content: "";
      height: 2px;
      width: 20;
      bottom: -1px;
      position: absolute;
      background: <?php echo($corrgb); ?>;
      transition: 0.2s ease all;
    }

    .bar:before { left: 50%; }
    .bar:after { right: 50%; }

    /* Validação de acordo com o texto digitado */
    input:valid { border-bottom: 1px solid <?php echo($corrgb); ?>; }

    input:valid ~ .bar:before,
    input:valid ~ .bar:after {
      background: <?php echo($corrgb); ?> !important;
    }

    input:focus ~ label,
    input.used ~ label {
      top: -20px;
      font-size: 16px;
      color: <?php echo($corrgb); ?>;
    }

    input:valid ~ label,
    input:valid.used ~ label {
      color: <?php echo($corrgb); ?>;
    }

    input:focus ~ .bar:before,
    input:focus ~ .bar:after {
      width: 50%;
    }

    textarea{
        width: 770px;
        outline: none;
        border: none;
        border-bottom: 1px solid <?php echo($corrgb); ?>;
        font-family: aller_lightregular;
        color:#000;
        font-size: 18px;
        height: 130px;
    }

    button{
        margin-top: 15px;
        height: 40px;
        border: none;
        background-color: #fff;
        border: 3px solid <?php echo($corrgb); ?>;
        font-family: aller_lightregular;
        font-size: 16px;
        font-weight: bold;
        color: <?php echo($corrgb); ?>;
        width: 100px;
    }

    button:hover{
        background-color: <?php echo($corrgb); ?>;
        color: #fff;
        transition: 0.2s ease all;
    }
}
    
    /*
@media screen and (min-device-width: 1200px) and (max-device-width: 1600px){

}    
    */
@media screen and (min-device-width: 300px) and (max-device-width: 890px){
    
    
    body{
        margin: 0;
        padding: 0;
        max-width: 100%;
        overflow-x: hidden;
    }

    #principal{
        width: 100%;
        height:2500px;
    }

    .titulo{
       width: 500px;
       height: 50px;
    }

    .tag_h2{
      display: none;

    }

    #margin-titulo-perguntas{
        width: 560px;
        border-bottom: 1px solid <?php echo($corrgb); ?>;
        margin-top:8px;
        position: absolute;
        z-index: 0;
    }


    .titulo-perguntas{
        margin-left: 80px;
        width: 400px;
        background-color: #fff;
        height: 50px;
        font-family: aller_lightregular;
        font-weight: bold;
        font-size: 40px;
        text-align: center;
        color: <?php echo($corrgb); ?>;
        z-index: 1;
        position: absolute;
    }


    /* Introdução da página */
    #introd_contatos{
        width: 100%;
        height:800px;
        background-image: url('imagens/fundo.jpg');
    }

    .introd{
        text-align: center;
        font-size: 38px;
        padding-top: 250px;
        padding-left: 150px;
        padding-right: 150px;
        font-family:aller_lightregular;
        color:#fff;
    }
    .titulo_introd{
        font-size: 40px;
        text-align: center;
        font-family: allerregular;
        color: <?php echo($corrgb); ?>;
    }

    /* Lista de peguntas frequentes */
    #perguntas_frequentes{
        width: 600px;
        height:500px;
        margin: auto;
    }

    #perguntas_centro{
        width: 600px;
        height: 80%;
        margin-left: auto;
        margin-right: auto;
        padding-left: 20px;
        padding-top: 20px;

    }
    .lst_perguntas{
        margin: 0;
        padding: 0;
        float: left;
        width:500px;
        color: #000;
    }

    ul.lst_perguntas li{
        min-height:50px;
        font-size: 40px;
    }

    ul.lst_perguntas li a{
        color:black;
        font-family: aller_lightregular;
    }

    /* Fale conosco */
    #faleconosco{
        width: 100%;
        height:1120px;
    }

    #frmcontato{
        width:740px;
        height:1120px;
        margin: auto;
    }

    .titulo_faleconosco{
        height:90px;
        width: 740px;
        font-size: 35px;
        padding-top: 28px;
        margin-bottom: 25px;
        font-family: aller_lightregular;
    }

    .campos_contato{
        width:400px;
        float: left;
        font-size: 25px;
        padding-left: 15px;
        margin-bottom: 30px;
    }

    .input{
        padding: 10px 0px 10px 0px;
        width: 350px !important;
        margin-bottom:20px;
    }

    #frmcontato p span{
        font-size: 25px;
    }

    textarea{
        resize: none;
    }


    /*Formatação inputs*/

    .grupo-text-pesquisa{
      position: relative;
      margin-bottom: 2.4em;
    }

    label{
      top: 10px;
      color: #000;
      font-size: 30px;
      font-weight: normal;
      font-family: aller_lightregular;
      position: absolute;
      pointer-events: none;
      transition: 0.2s ease all;
    }

    select{
        font-size: 34px;
    }
    
    option{
        font-size: 12px;
    }
    
    input{
      color:#000;
      padding: 10px 0px 10px 0px;
      display: block;
      outline: none;
      border: none;
      width: 350px;
      border-bottom: 1px solid <?php echo($corrgb); ?>;
      font-size: 26px;
      font-family: aller_lightregular;
    }
    
    /* Animação */
    .bar {
      position: relative;
      display: block;
      width: 350px;
    }

    .bar:before, .bar:after {
      content: "";
      height: 2px;
      width: 20;
      bottom: -1px;
      position: absolute;
      background: <?php echo($corrgb); ?>;
      transition: 0.2s ease all;
    }

    .bar:before { left: 50%; }
    .bar:after { right: 50%; }

    /* Validação de acordo com o texto digitado */
    input:valid { border-bottom: 1px solid <?php echo($corrgb); ?>; }

    input:valid ~ .bar:before,
    input:valid ~ .bar:after {
      background: <?php echo($corrgb); ?> !important;
    }

    input:focus ~ label,
    input.used ~ label {
      top: -20px;
      font-size: 16px;
      color: <?php echo($corrgb); ?>;
    }

    input:valid ~ label,
    input:valid.used ~ label {
      color: <?php echo($corrgb); ?>;
    }

    input:focus ~ .bar:before,
    input:focus ~ .bar:after {
      width: 50%;
    }

    textarea{
        width: 650px;
        outline: none;
        border: none;
        border-bottom: 1px solid <?php echo($corrgb); ?>;
        font-family: aller_lightregular;
        color:#000;
        font-size: 30px;
        height: 130px;
    }

    button{
        margin-top: 15px;
        height: 40px;
        border: none;
        background-color: #fff;
        border: 3px solid <?php echo($corrgb); ?>;
        font-family: aller_lightregular;
        font-size: 28px;
        font-weight: bold;
        color: <?php echo($corrgb); ?>;
        width: 120px;
    }

    button:hover{
        background-color: <?php echo($corrgb); ?>;
        color: #fff;
        transition: 0.2s ease all;
    }
}    

</style>
