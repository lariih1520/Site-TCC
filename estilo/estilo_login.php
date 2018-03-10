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
    
@media screen and (min-width: 1550px) and (max-width: 2000px){
    section{
        height: 2837px;
    }

    .login_cadastrar{
      width: 100%;
      height: 820px;
      float: left;
    }

      .tag_h2{
        display: none;
    }

    .entre{
      width: 500px;
      height: 400px;
      background-color: #fff;
      float: left;
      margin-left: 250px;
      margin-top: 180px;
    }

    .ou{
        width: 63px;
        height: 60px;
        background-color: <?php echo($corrgb); ?>;
        float: left;
        border-radius: 200px;
        margin-left: 100px;
        margin-top: 320px;
        padding-top: 20px;
        padding-left: 17px;

    }

    .span_ou{
        font-family: aller_lightregular;
        font-size: 30px;
        color: white;

    }


    .cadastre-se{
      width: 700px;
      height: 500px;
      background-color: #fff;
      float: left;
      margin-left: 100px;
      margin-top: 180px;
    }

    .titulo_entre{
        font-size: 30px;
        color: #cc2900;
        padding-left: 20px;
        font-family: aller_lightregular;    
    }

    .login{
      position: relative;
      margin-bottom: 2.4em;
      margin-left: 20px;
      margin-top: 40px;
      float: left;
    }

    .senha{
      position: relative;
      margin-bottom: 2.4em;
      margin-left: 20px;
      margin-top: 30px;
      float: left;
    }

    .entrar{
      width: 500px;
      height: 80px;
      float: left;

    }

    .btn_entrar{
      width: 100px;
      height: 35px;
      margin-left: 30px;
      border: 3px solid <?php echo($corrgb); ?>;
      outline: none;
      color: <?php echo($corrgb); ?>;
      background-color: white;
      font-size: 18px;
      font-family: aller_lightregular;
    }

    .btn_entrar:hover{
      color: white;
      background-color: <?php echo($corrgb); ?>;
      transition: 0.2s ease all;
    }

    .esqueci_minha_senha{
      font-size: 16px;
      color: <?php echo($corrgb); ?>;
      padding-left: 60px;
      font-family: aller_lightregular;
    }

    .esqueci_minha_senha:hover{
      text-decoration: underline;
    }

    .titulo_cadastrar{
        font-size: 30px;
        color: #cc2900;
        font-family: aller_lightregular;
        padding-left: 20px;
    }

    .nome{
      position: relative;
      margin-bottom: 2.4em;
      margin-left: 20px;
      margin-top: 30px;
    }

    .cpf{
      position: relative;
      margin-bottom: 2.4em;
      margin-left: 20px;
      margin-top: 30px;
    }

    .cpf label{
      left: 0px;
      top: 0px;
    }

    .telefone{
      width: 300px;
      height: 40px;
      position: relative;
      margin-bottom: 2.4em;
      margin-left: 20px;
      float: left;
    }

    .telefone label{
      left: 0px;
    }

    .celular{
      width: 300px;
      height: 40px;
      position: relative;
      margin-bottom: 2.4em;
      margin-left: 20px;
      float: left;
    }

    .celular label{
      left: 0px;

    }

    .email{
      width: 300px;
      height: 40px;
      position: relative;
      margin-bottom: 2.4em;
      margin-left: 20px;
      float: left;
    }

    .email label{
      left: 0px;

    }

    .cep{
      width: 300px;
      height: 40px;
      position: relative;
      margin-bottom: 2.4em;
      margin-left: 20px;
      float: left;
    }

    .cep label{
      left: 0px;

    }

    .endereco{
      width: 300px;
      height: 40px;
      position: relative;
      margin-bottom: 2.4em;
      margin-left: 20px;
      float: left;
    }

    .endereco label{
      left: 0px;

    }

    .numero{
      width: 90px;
      height: 40px;
      position: relative;
      margin-bottom: 2.4em;
      margin-left: 230px;
      float: left;
    }

    .numero label{
      left: 0px;

    }

    .senha{
      width: 300px;
      height: 40px;
      position: relative;
      margin-bottom: 2.4em;
      margin-left: 20px;
      margin-top: 0.5px;
      float: left;
    }

    .confirmar_senha{
      width: 300px;
      height: 40px;
      position: relative;
      margin-bottom: 2.4em;
      margin-left: 20px;
      float: left;

    }

    .cadastrar{
      width: 125px;
      height: 80px;

    }

    .btn_cadastrar{
      width: 100px;
      height: 35px;
      margin-left: 20px;
      border: 3px solid <?php echo($corrgb); ?>;
      outline: none;
      color: <?php echo($corrgb); ?>;
      background-color: #fff;
      font-size: 18px;
      font-family: aller_lightregular;
      float: left;

    }

    .checkbox{
      width: 400px;
      height: 40px;
      margin-left: 30px;
      float: left;
    }

    .btn_checkbox{
      margin-left: -470px;
      margin-top: 15px;
      float: left;
    }

    .texto_checkbox{
      margin-left: 50px;
      margin-top: -15px;
      font-family: aller_lightregular;
      float: left;
    }

    .porque_nao{
      width: 400px;
      height: 40px;
      float: left;
      margin-left: 160px;
      margin-top: -10px;
    }

    .link_porque{
      font-size: 15px;
      font-family: aller_lightregular;
      margin-left: 55px;
      text-decoration:none;
    }

    .btn_cadastrar:hover{
      color: white;
      background-color: <?php echo($corrgb); ?>;
      transition: 0.2s ease all;
      outline: none;
    }

    .login_senha{
      color:#000;
      padding: 10px 10px 5px 0px;
      display: block;
      outline: none;
      border: none;
      width: 400px;
      border-bottom: 1px solid <?php echo($corrgb); ?>;
      font-size: 18px;
      font-family: aller_lightregular;
    }

    .login_senha2{
      color:#000;
      padding: 10px 10px 5px 0px;
      display: block;
      outline: none;
      border: none;
      width: 600px;
      border-bottom: 1px solid <?php echo($corrgb); ?>;
      font-size: 18px;
      font-family: aller_lightregular;
    }
    .login_senha3{
      color:#000;
      padding: 10px 10px 5px 10px;
      display: block;
      outline: none;
      border: none;
      width: 280px;
      border-bottom: 1px solid <?php echo($corrgb); ?>;
      font-size: 18px;
      font-family: aller_lightregular;
    }
    .login_senha4{
      color:#000;
      padding: 10px 10px 5px 0px;
      display: block;
      outline: none;
      border: none;
      width: 280px;
      border-bottom: 1px solid <?php echo($corrgb); ?>;
      font-size: 18px;
      font-family: aller_lightregular;
    }

    .login_senha5{
      color:#000;
      padding: 10px 10px 5px 0px;
      display: block;
      outline: none;
      border: none;
      width: 280px;
      border-bottom: 1px solid <?php echo($corrgb); ?>;
      font-size: 18px;
      font-family: aller_lightregular;
    }

    .login_senha6{
      color:#000;
      padding: 10px 10px 5px 0px;
      display: block;
      outline: none;
      border: none;
      width: 280px;
      border-bottom: 1px solid <?php echo($corrgb); ?>;
      font-size: 18px;
      font-family: aller_lightregular;
    }

    .login_senha7{
      color:#000;
      padding: 10px 10px 5px 0px;
      display: block;
      outline: none;
      border: none;
      width: 490px;
      border-bottom: 1px solid <?php echo($corrgb); ?>;
      font-size: 18px;
      font-family: aller_lightregular;
    }

    .login_senha8{
      color:#000;
      padding: 10px 10px 5px 0px;
      display: block;
      outline: none;
      border: none;
      width: 70px;
      border-bottom: 1px solid <?php echo($corrgb); ?>;
      font-size: 18px;
      font-family: aller_lightregular;
    }

    .login_senha9{
      color:#000;
      padding: 10px 10px 5px 0px;
      display: block;
      outline: none;
      border: none;
      width: 280px;
      border-bottom: 1px solid <?php echo($corrgb); ?>;
      font-size: 18px;
      font-family: aller_lightregular;
    }

    .login_senha10{
      color:#000;
      padding: 10px 10px 5px 0px;
      display: block;
      outline: none;
      border: none;
      width: 280px;
      border-bottom: 1px solid <?php echo($corrgb); ?>;
      font-size: 18px;
      font-family: aller_lightregular;
    }

    .login_senha11{
      color:#000;
      padding: 10px 10px 5px 0px;
      display: block;
      outline: none;
      border: none;
      width: 600px;
      border-bottom: 1px solid <?php echo($corrgb); ?>;
      font-size: 18px;
      font-family: aller_lightregular;
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

    /* Animação */
    .bar {
      position: relative;
      display: block;
      width: 100%;
    }

    .bar:before, .bar:after {
      content: "";
      height: 2px;
      width: 0;
      bottom: -1px;
      position: absolute;
      background: <?php echo($corrgb); ?>;
      transition: 0.2s ease all;
    }

    .bar:before { left: 50%; }
    .bar:after { right: 50%; }

    /* Validação de acordo com o texto digitado */
    .login_senha:valid { border-bottom: 1px solid <?php echo($corrgb); ?>; }

    .login_senha:valid ~ .bar:before,
    .login_senha:valid ~ .bar:after {
      background: <?php echo($corrgb); ?> !important;
    }

    .login_senha:focus ~ label,
    .login_senha.used ~ label {
      top: -20px;
      font-size: 16px;
      color: <?php echo($corrgb); ?>;
    }

    .login_senha:valid ~ label,
    .login_senha:valid.used ~ label {
      color: <?php echo($corrgb); ?>;
    }

    .login_senha:focus ~ .bar:before,
    .login_senha:focus ~ .bar:after {
      width: 50%;
    }

    #pq_cadastrar{
      width: 100%;
      height: 992px;
      float: left;
    }

    .ancora{
      text-decoration: none;
      color: <?php echo($corrgb); ?>;
    }

    .ancora:hover{
      text-decoration: underline;
    }

    .porque{
      font-size: 40px;
      font-family: aller_lightregular;
      margin-left: 80px;
      margin-top: 80px;
      color: <?php echo($corrgb); ?>;
    }

    .reservas{
      width: 100%;
      height: 350px;
      float: left;
      margin-top: 20px;
      float: left;
    }

    .texto_reserva{
      width: 700px;
      height: 350px;
      float: left;
      margin-left: 200px;
    }

    .imagem_reserva{
      width: 700px;
      height: 350px;
      float: left;
      margin-left: 10px;
    }

    .imagem_reserva img{
      height: 310px;
      margin-left: 100px;
      margin-top: 10px;
    }

    .titulo_reserva{
      font-size: 40px;
      font-family: aller_lightregular;
      color: <?php echo($corrgb); ?>;
      margin-left: 30px;
      margin-top: 40px;
    }

    .conteudo_reserva{
      font-size: 19px;
      font-family: aller_lightregular;
      margin-left: 15px;

    }

    .brinde{
      width: 100%;
      height: 350px;
      float: left;
      margin-top: 90px;
    }

    .imagem_brinde{
      width: 700px;
      height: 350px;
      float: left;
      margin-left: 200px;
    }

    .texto_brinde{
      width: 700px;
      height: 350px;
      float: left;
      margin-left: 10px;
    }

    .imagem_brinde img{
      height: 310px;
      margin-left: 100px;
      margin-top: 10px;
    }

    .titulo_brinde{
      font-size: 40px;
      font-family: aller_lightregular;
      color: <?php echo($corrgb); ?>;
      margin-left: 280px;
      margin-top: 40px;
    }

    .conteudo_brinde{
      font-size: 19px;
      font-family: aller_lightregular;
    }

    .nao_perca_seu_tempo{
      width: 100%;
      height: 934px;
      float: left;
    }

    .titulo_perca{
      font-size: 50px;
      font-family: aller_lightregular;
      margin-left: 700px;
      margin-top: 50px;
      color: <?php echo($corrgb); ?>;
    }

    .imagem_perca{
      width: 700px;
      height: 400px;
      margin-left: auto;
      margin-right: auto;
    }

    .imagem_perca img{
      width: 500px;
      height: 370px;
      margin-top: 15px;
      margin-left: 100px;
    }

    .caixa_texto{
      width: 250px;
      height: 200px;
      margin-left: auto;
      margin-right: auto;
      margin-top: 20px;
      text-align: center;
    }

    .texto_perca{
      font-size: 20px;
      font-family: aller_lightregular;
    }

    .botao_perca{
      width: 200px;
      height: 100px;
      margin-left: auto;
      margin-right: auto;
      margin-top: -20px;
    }

    .btn_perca{
      width: 180px;
      height: 65px;
      margin-left: 10px;
      margin-top: -20px;
      border: 3px solid <?php echo($corrgb); ?>;
      color: <?php echo($corrgb); ?>;
      background-color: white;
      font-size: 18px;
      font-family: aller_lightregular;
    }

    .btn_perca:hover{
        color: white;
        background-color: <?php echo($corrgb); ?>;
        transition: 0.2s ease all;
    }
}
    
@media screen and (min-width: 1010px) and (max-width: 1540px){
    section{
        height: 2837px;
    }

    .login_cadastrar{
      width: 100%;
      height: 820px;
      float: left;

    }

      .tag_h2{
        display: none;
    }

    .entre{
        width: 450px;
        height: 400px;
        background-color: #fff;
        float: left;
        margin-left: 10px;
        margin-top: 50px;
    }

    .ou{
        width: 58px;
        height: 52px;
        background-color: <?php echo($corrgb); ?>;
        float: left;
        border-radius: 200px;
        margin-left: 10px;
        margin-top: 320px;
        padding-top: 20px;
        padding-left: 17px;
    }

    .span_ou{
        font-family: aller_lightregular;
        font-size: 28px;
        color: white;
    }

    .cadastre-se{
        width: 660px;
        height: 500px;
        background-color: #fff;
        float: left;
        margin-left: 10px;
        margin-top: 50px;
    }

    .titulo_entre{
        font-size: 30px;
        color: #cc2900;
        padding-left: 20px;
        font-family: aller_lightregular;    
    }

    .login{
      position: relative;
      margin-bottom: 2.4em;
      margin-left: 20px;
      margin-top: 40px;
      float: left;
    }

    .senha{
      position: relative;
      margin-bottom: 2.4em;
      margin-left: 20px;
      margin-top: 30px;
      float: left;
    }

    .entrar{
      width: 500px;
      height: 80px;
      float: left;

    }

    .btn_entrar{
      width: 100px;
      height: 35px;
      margin-left: 30px;
      border: 3px solid <?php echo($corrgb); ?>;
      outline: none;
      color: <?php echo($corrgb); ?>;
      background-color: white;
      font-size: 18px;
      font-family: aller_lightregular;
    }

    .btn_entrar:hover{
      color: white;
      background-color: <?php echo($corrgb); ?>;
      transition: 0.2s ease all;
    }

    .esqueci_minha_senha{
      font-size: 16px;
      color: <?php echo($corrgb); ?>;
      padding-left: 60px;
      font-family: aller_lightregular;
    }

    .esqueci_minha_senha:hover{
      text-decoration: underline;
    }

    .titulo_cadastrar{
        font-size: 30px;
        color: #cc2900;
        font-family: aller_lightregular;
        padding-left: 20px;
    }

    .nome{
      position: relative;
      margin-bottom: 2.4em;
      margin-left: 20px;
      margin-top: 30px;
    }

    .cpf{
      position: relative;
      margin-bottom: 2.4em;
      margin-left: 20px;
      margin-top: 30px;
    }

    .cpf label{
      left: 0px;
      top: 0px;
    }

    .telefone{
      width: 300px;
      height: 40px;
      position: relative;
      margin-bottom: 2.4em;
      margin-left: 20px;
      float: left;
    }

    .telefone label{
      left: 0px;
    }

    .celular{
      width: 300px;
      height: 40px;
      position: relative;
      margin-bottom: 2.4em;
      margin-left: 20px;
      float: left;
    }

    .celular label{
      left: 0px;

    }

    .email{
      width: 300px;
      height: 40px;
      position: relative;
      margin-bottom: 2.4em;
      margin-left: 20px;
      float: left;
    }

    .email label{
      left: 0px;

    }

    .cep{
      width: 300px;
      height: 40px;
      position: relative;
      margin-bottom: 2.4em;
      margin-left: 20px;
      float: left;
    }

    .cep label{
      left: 0px;

    }

    .endereco{
      width: 300px;
      height: 40px;
      position: relative;
      margin-bottom: 2.4em;
      margin-left: 20px;
      float: left;
    }

    .endereco label{
      left: 0px;

    }

    .numero{
      width: 90px;
      height: 40px;
      position: relative;
      margin-bottom: 2.4em;
      margin-left: 230px;
      float: left;
    }

    .numero label{
      left: 0px;
    }

    .senha{
      width: 300px;
      height: 40px;
      position: relative;
      margin-bottom: 2.4em;
      margin-left: 20px;
      margin-top: 0.5px;
      float: left;
    }

    .confirmar_senha{
      width: 300px;
      height: 40px;
      position: relative;
      margin-bottom: 2.4em;
      margin-left: 20px;
      float: left;
    }

    .cadastrar{
      width: 125px;
      height: 80px;
    }

    .btn_cadastrar{
      width: 100px;
      height: 35px;
      margin-left: 20px;
      border: 3px solid <?php echo($corrgb); ?>;
      outline: none;
      color: <?php echo($corrgb); ?>;
      background-color: #fff;
      font-size: 18px;
      font-family: aller_lightregular;
      float: left;

    }

    .checkbox{
      width: 400px;
      height: 40px;
      margin-left: 30px;
      float: left;
    }

    .btn_checkbox{
      margin-top: 15px;
      float: left;
    }

    .texto_checkbox{
      margin-left: 50px;
      margin-top: -15px;
      font-family: aller_lightregular;
      float: left;
    }

    .porque_nao{
      width: 400px;
      height: 40px;
      float: left;
      margin-left: 160px;
      margin-top: -10px;
    }

    .link_porque{
      font-size: 15px;
      font-family: aller_lightregular;
      margin-left: 55px;
      text-decoration:none;
    }

    .btn_cadastrar:hover{
      color: white;
      background-color: <?php echo($corrgb); ?>;
      transition: 0.2s ease all;
      outline: none;
    }

    .login_senha{
      color:#000;
      padding: 10px 10px 5px 0px;
      display: block;
      outline: none;
      border: none;
      width: 400px;
      border-bottom: 1px solid <?php echo($corrgb); ?>;
      font-size: 18px;
      font-family: aller_lightregular;
    }

    .login_senha2{
      color:#000;
      padding: 10px 10px 5px 0px;
      display: block;
      outline: none;
      border: none;
      width: 600px;
      border-bottom: 1px solid <?php echo($corrgb); ?>;
      font-size: 18px;
      font-family: aller_lightregular;
    }
    .login_senha3{
      color:#000;
      padding: 10px 10px 5px 10px;
      display: block;
      outline: none;
      border: none;
      width: 280px;
      border-bottom: 1px solid <?php echo($corrgb); ?>;
      font-size: 18px;
      font-family: aller_lightregular;
    }
    .login_senha4{
      color:#000;
      padding: 10px 10px 5px 0px;
      display: block;
      outline: none;
      border: none;
      width: 280px;
      border-bottom: 1px solid <?php echo($corrgb); ?>;
      font-size: 18px;
      font-family: aller_lightregular;
    }

    .login_senha5{
      color:#000;
      padding: 10px 10px 5px 0px;
      display: block;
      outline: none;
      border: none;
      width: 280px;
      border-bottom: 1px solid <?php echo($corrgb); ?>;
      font-size: 18px;
      font-family: aller_lightregular;
    }

    .login_senha6{
      color:#000;
      padding: 10px 10px 5px 0px;
      display: block;
      outline: none;
      border: none;
      width: 280px;
      border-bottom: 1px solid <?php echo($corrgb); ?>;
      font-size: 18px;
      font-family: aller_lightregular;
    }

    .login_senha7{
      color:#000;
      padding: 10px 10px 5px 0px;
      display: block;
      outline: none;
      border: none;
      width: 490px;
      border-bottom: 1px solid <?php echo($corrgb); ?>;
      font-size: 18px;
      font-family: aller_lightregular;
    }

    .login_senha8{
      color:#000;
      padding: 10px 10px 5px 0px;
      display: block;
      outline: none;
      border: none;
      width: 70px;
      border-bottom: 1px solid <?php echo($corrgb); ?>;
      font-size: 18px;
      font-family: aller_lightregular;
    }

    .login_senha9{
      color:#000;
      padding: 10px 10px 5px 0px;
      display: block;
      outline: none;
      border: none;
      width: 280px;
      border-bottom: 1px solid <?php echo($corrgb); ?>;
      font-size: 18px;
      font-family: aller_lightregular;
    }

    .login_senha10{
      color:#000;
      padding: 10px 10px 5px 0px;
      display: block;
      outline: none;
      border: none;
      width: 280px;
      border-bottom: 1px solid <?php echo($corrgb); ?>;
      font-size: 18px;
      font-family: aller_lightregular;
    }

    .login_senha11{
      color:#000;
      padding: 10px 10px 5px 0px;
      display: block;
      outline: none;
      border: none;
      width: 600px;
      border-bottom: 1px solid <?php echo($corrgb); ?>;
      font-size: 18px;
      font-family: aller_lightregular;
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

    /* Animação */
    .bar {
      position: relative;
      display: block;
      width: 100%;
    }

    .bar:before, .bar:after {
      content: "";
      height: 2px;
      width: 0;
      bottom: -1px;
      position: absolute;
      background: <?php echo($corrgb); ?>;
      transition: 0.2s ease all;
    }

    .bar:before { left: 50%; }
    .bar:after { right: 50%; }

    /* Validação de acordo com o texto digitado */
    .login_senha:valid { border-bottom: 1px solid <?php echo($corrgb); ?>; }

    .login_senha:valid ~ .bar:before,
    .login_senha:valid ~ .bar:after {
      background: <?php echo($corrgb); ?> !important;
    }

    .login_senha:focus ~ label,
    .login_senha.used ~ label {
      top: -20px;
      font-size: 16px;
      color: <?php echo($corrgb); ?>;
    }

    .login_senha:valid ~ label,
    .login_senha:valid.used ~ label {
      color: <?php echo($corrgb); ?>;
    }

    .login_senha:focus ~ .bar:before,
    .login_senha:focus ~ .bar:after {
      width: 50%;
    }

    #pq_cadastrar{
      width: 100%;
      height: 992px;
      float: left;
    }

    .ancora{
      text-decoration: none;
      color: <?php echo($corrgb); ?>;
    }

    .ancora:hover{
      text-decoration: underline;
    }

    .porque{
      font-size: 40px;
      font-family: aller_lightregular;
      margin-left: 80px;
      margin-top: 80px;
      color: <?php echo($corrgb); ?>;
    }

    .reservas{
      width: 100%;
      height: 350px;
      float: left;
      margin-top: 20px;
      float: left;
    }

    .texto_reserva{
      width: 700px;
      height: 350px;
      float: left;
      margin-left: 200px;
    }

    .imagem_reserva{
      width: 700px;
      height: 350px;
      float: left;
      margin-left: 10px;
    }

    .imagem_reserva img{
      height: 310px;
      margin-left: 100px;
      margin-top: 10px;
    }

    .titulo_reserva{
      font-size: 40px;
      font-family: aller_lightregular;
      color: <?php echo($corrgb); ?>;
      margin-left: 30px;
      margin-top: 40px;
    }

    .conteudo_reserva{
      font-size: 19px;
      font-family: aller_lightregular;
      margin-left: 15px;

    }

    .brinde{
      width: 100%;
      height: 350px;
      float: left;
      margin-top: 90px;
    }

    .imagem_brinde{
      width: 700px;
      height: 350px;
      float: left;
      margin-left: 200px;
    }

    .texto_brinde{
      width: 700px;
      height: 350px;
      float: left;
      margin-left: 10px;
    }

    .imagem_brinde img{
      height: 310px;
      margin-left: 100px;
      margin-top: 10px;
    }

    .titulo_brinde{
      font-size: 40px;
      font-family: aller_lightregular;
      color: <?php echo($corrgb); ?>;
      margin-left: 280px;
      margin-top: 40px;
    }

    .conteudo_brinde{
      font-size: 19px;
      font-family: aller_lightregular;
    }

    .nao_perca_seu_tempo{
      width: 100%;
      height: 934px;
      float: left;
    }

    .titulo_perca{
      font-size: 50px;
      font-family: aller_lightregular;
      margin-left: 700px;
      margin-top: 50px;
      color: <?php echo($corrgb); ?>;
    }

    .imagem_perca{
      width: 700px;
      height: 400px;
      margin-left: auto;
      margin-right: auto;
    }

    .imagem_perca img{
      width: 500px;
      height: 370px;
      margin-top: 15px;
      margin-left: 100px;
    }

    .caixa_texto{
      width: 250px;
      height: 200px;
      margin-left: auto;
      margin-right: auto;
      margin-top: 20px;
      text-align: center;
    }

    .texto_perca{
      font-size: 20px;
      font-family: aller_lightregular;
    }

    .botao_perca{
      width: 200px;
      height: 100px;
      margin-left: auto;
      margin-right: auto;
      margin-top: -20px;
    }

    .btn_perca{
      width: 180px;
      height: 65px;
      margin-left: 10px;
      margin-top: -20px;
      border: 3px solid <?php echo($corrgb); ?>;
      color: <?php echo($corrgb); ?>;
      background-color: white;
      font-size: 18px;
      font-family: aller_lightregular;
    }

    .btn_perca:hover{
        color: white;
        background-color: <?php echo($corrgb); ?>;
        transition: 0.2s ease all;
    }
}
    
@media screen and (min-width: 300px) and (max-width: 1000px){
    
    section{
        height: 2837px;
    }

    .login_cadastrar{
      width: 100%;
      height: 1200px;
    }

    .tag_h2{
        display: none;
    }
    
    .entre{
        width: 700px;
        height: 400px;
        background-color: #fff;
        margin-left: auto;
        margin-right: auto;
        margin-top: 50px;
    }

    .ou{
        width: 58px;
        height: 52px;
        background-color: <?php echo($corrgb); ?>;
        border-radius: 200px;
        margin-left: auto;
        margin-right: auto;
        margin-top: 20px;
        padding-top: 20px;
        padding-left: 17px;
    }

    .span_ou{
        font-family: aller_lightregular;
        font-size: 28px;
        color: white;
    }

    .cadastre-se{
        width: 700px;
        height: 500px;
        background-color: #fff;
        margin-left: auto;
        margin-right: auto;
        margin-top: 50px;
    }

    .titulo_entre{
        font-size: 35px;
        color: #cc2900;
        padding-left: 20px;
        font-family: aller_lightregular;    
    }

    .login{
        position: relative;
        margin-bottom: 2.4em;
        margin-left: 20px;
        margin-top: 40px;
        float: left;
        font-size: 30px;
    }

    .senha{
        position: relative;
        margin-bottom: 2.4em;
        margin-left: 20px;
        margin-top: 30px;
        float: left;
        font-size: 30px;
    }

    .entrar{
      width: 600px;
      height: 80px;
      float: left;
    }

    .btn_entrar{
      width: 100px;
      height: 35px;
      margin-left: 30px;
      border: 3px solid <?php echo($corrgb); ?>;
      outline: none;
      color: <?php echo($corrgb); ?>;
      background-color: white;
      font-size: 18px;
      font-family: aller_lightregular;
    }

    .btn_entrar:hover{
      color: white;
      background-color: <?php echo($corrgb); ?>;
      transition: 0.2s ease all;
    }

    .esqueci_minha_senha{
      font-size: 20px;
      color: <?php echo($corrgb); ?>;
      padding-left: 60px;
      font-family: aller_lightregular;
    }

    .esqueci_minha_senha:hover{
      text-decoration: underline;
    }

    .titulo_cadastrar{
        font-size: 35px;
        color: #cc2900;
        font-family: aller_lightregular;
        padding-left: 20px;
    }

    .nome{
      position: relative;
      margin-bottom: 2.4em;
      margin-left: 20px;
      margin-top: 30px;
    }

    .cpf{
      position: relative;
      margin-bottom: 2.4em;
      margin-left: 20px;
      margin-top: 30px;
    }

    .cpf label{
      left: 0px;
      top: 0px;
    }

    .telefone{
      width: 300px;
      height: 40px;
      position: relative;
      margin-bottom: 2.4em;
      margin-left: 20px;
      float: left;
    }

    .telefone label{
      left: 0px;
    }

    .celular{
      width: 300px;
      height: 40px;
      position: relative;
      margin-bottom: 2.4em;
      margin-left: 20px;
      float: left;
    }

    .celular label{
      left: 0px;
    }

    .email{
      width: 300px;
      height: 40px;
      position: relative;
      margin-bottom: 2.4em;
      margin-left: 20px;
      float: left;
    }

    .email label{
      left: 0px;
    }

    .cep{
      width: 300px;
      height: 40px;
      position: relative;
      margin-bottom: 2.4em;
      margin-left: 20px;
      float: left;
    }

    .cep label{
      left: 0px;
    }

    .endereco{
      width: 300px;
      height: 40px;
      position: relative;
      margin-bottom: 2.4em;
      margin-left: 20px;
      float: left;
    }

    .endereco label{
      left: 0px;
    }

    .numero{
      width: 90px;
      height: 40px;
      position: relative;
      margin-bottom: 2.4em;
      margin-left: 230px;
      float: left;
    }

    .numero label{
      left: 0px;
    }

    .senha{
      width: 300px;
      height: 40px;
      position: relative;
      margin-bottom: 2.4em;
      margin-left: 20px;
      margin-top: 0.5px;
      float: left;
    }

    .confirmar_senha{
      width: 300px;
      height: 40px;
      position: relative;
      margin-bottom: 2.4em;
      margin-left: 20px;
      float: left;
    }

    .cadastrar{
      width: 125px;
      height: 80px;
    }

    .btn_cadastrar{
      width: 100px;
      height: 35px;
      margin-left: 20px;
      border: 3px solid <?php echo($corrgb); ?>;
      outline: none;
      color: <?php echo($corrgb); ?>;
      background-color: #fff;
      font-size: 18px;
      font-family: aller_lightregular;
      float: left;
    }

    .checkbox{
      width: 400px;
      height: 40px;
      margin-left: 30px;
      float: left;
    }

    .btn_checkbox{
      margin-top: 15px;
      float: left;
    }

    .texto_checkbox{
      margin-left: 50px;
      margin-top: -15px;
      font-family: aller_lightregular;
      float: left;
    }

    .porque_nao{
      width: 400px;
      height: 40px;
      float: left;
      margin-left: 160px;
      margin-top: -10px;
    }

    .link_porque{
      font-size: 15px;
      font-family: aller_lightregular;
      margin-left: 55px;
      text-decoration:none;
    }

    .btn_cadastrar:hover{
      color: white;
      background-color: <?php echo($corrgb); ?>;
      transition: 0.2s ease all;
      outline: none;
    }

    .login_senha{
      color:#000;
      padding: 10px 10px 5px 0px;
      display: block;
      outline: none;
      border: none;
      width: 600px;
      border-bottom: 1px solid <?php echo($corrgb); ?>;
      font-size: 40px;
      font-family: aller_lightregular;
    }

    .login_senha2{
      color:#000;
      padding: 10px 10px 5px 0px;
      display: block;
      outline: none;
      border: none;
      width: 600px;
      border-bottom: 1px solid <?php echo($corrgb); ?>;
      font-size: 40px;
      font-family: aller_lightregular;
    }
    .login_senha3{
      color:#000;
      padding: 10px 10px 5px 10px;
      display: block;
      outline: none;
      border: none;
      width: 280px;
      border-bottom: 1px solid <?php echo($corrgb); ?>;
      font-size: 40px;
      font-family: aller_lightregular;
    }
    .login_senha4{
      color:#000;
      padding: 10px 10px 5px 0px;
      display: block;
      outline: none;
      border: none;
      width: 280px;
      border-bottom: 1px solid <?php echo($corrgb); ?>;
      font-size: 40px;
      font-family: aller_lightregular;
    }

    .login_senha5{
      color:#000;
      padding: 10px 10px 5px 0px;
      display: block;
      outline: none;
      border: none;
      width: 280px;
      border-bottom: 1px solid <?php echo($corrgb); ?>;
      font-size: 40px;
      font-family: aller_lightregular;
    }

    .login_senha6{
      color:#000;
      padding: 10px 10px 5px 0px;
      display: block;
      outline: none;
      border: none;
      width: 280px;
      border-bottom: 1px solid <?php echo($corrgb); ?>;
      font-size: 40px;
      font-family: aller_lightregular;
    }

    .login_senha7{
      color:#000;
      padding: 10px 10px 5px 0px;
      display: block;
      outline: none;
      border: none;
      width: 490px;
      border-bottom: 1px solid <?php echo($corrgb); ?>;
      font-size: 40px;
      font-family: aller_lightregular;
    }

    .login_senha8{
      color:#000;
      padding: 10px 10px 5px 0px;
      display: block;
      outline: none;
      border: none;
      width: 70px;
      border-bottom: 1px solid <?php echo($corrgb); ?>;
      font-size: 40px;
      font-family: aller_lightregular;
    }

    .login_senha9{
      color:#000;
      padding: 10px 10px 5px 0px;
      display: block;
      outline: none;
      border: none;
      width: 280px;
      border-bottom: 1px solid <?php echo($corrgb); ?>;
      font-size: 40px;
      font-family: aller_lightregular;
    }

    .login_senha10{
      color:#000;
      padding: 10px 10px 5px 0px;
      display: block;
      outline: none;
      border: none;
      width: 280px;
      border-bottom: 1px solid <?php echo($corrgb); ?>;
      font-size: 40px;
      font-family: aller_lightregular;
    }

    .login_senha11{
      color:#000;
      padding: 10px 10px 5px 0px;
      display: block;
      outline: none;
      border: none;
      width: 600px;
      border-bottom: 1px solid <?php echo($corrgb); ?>;
      font-size: 40px;
      font-family: aller_lightregular;
    }

    label{
      color: #000;
      font-size: 30px;
      font-weight: normal;
      font-family: aller_lightregular;
      position: absolute;
      pointer-events: none;
      top: 10px;
      transition: 0.2s ease all;
    }

    /* Animação */
    .bar {
      position: relative;
      display: block;
      width: 100%;
    }

    .bar:before, .bar:after {
      content: "";
      height: 2px;
      width: 0;
      bottom: -1px;
      position: absolute;
      background: <?php echo($corrgb); ?>;
      transition: 0.2s ease all;
    }

    .bar:before { left: 50%; }
    .bar:after { right: 50%; }

    /* Validação de acordo com o texto digitado */
    .login_senha:valid { border-bottom: 1px solid <?php echo($corrgb); ?>; }

    .login_senha:valid ~ .bar:before,
    .login_senha:valid ~ .bar:after {
      background: <?php echo($corrgb); ?> !important;
    }

    .login_senha:focus ~ label,
    .login_senha.used ~ label {
      top: -20px;
      font-size: 16px;
      color: <?php echo($corrgb); ?>;
    }

    .login_senha:valid ~ label,
    .login_senha:valid.used ~ label {
      color: <?php echo($corrgb); ?>;
    }

    .login_senha:focus ~ .bar:before,
    .login_senha:focus ~ .bar:after {
      width: 50%;
    }

    #pq_cadastrar{
      width: 100%;
      height: 992px;
      float: left;
    }

    .ancora{
      text-decoration: none;
      color: <?php echo($corrgb); ?>;
    }

    .ancora:hover{
      text-decoration: underline;
    }

    .porque{
      font-size: 40px;
      font-family: aller_lightregular;
      margin-left: 80px;
      margin-top: 80px;
      color: <?php echo($corrgb); ?>;
    }

    .reservas{
      width: 100%;
      height: 350px;
      float: left;
      margin-top: 20px;
      float: left;
    }

    .texto_reserva{
      width: 700px;
      height: 350px;
      float: left;
      margin-left: 200px;
    }

    .imagem_reserva{
      width: 700px;
      height: 350px;
      float: left;
      margin-left: 10px;
    }

    .imagem_reserva img{
      height: 310px;
      margin-left: 100px;
      margin-top: 10px;
    }

    .titulo_reserva{
      font-size: 40px;
      font-family: aller_lightregular;
      color: <?php echo($corrgb); ?>;
      margin-left: 30px;
      margin-top: 40px;
    }

    .conteudo_reserva{
      font-size: 19px;
      font-family: aller_lightregular;
      margin-left: 15px;

    }

    .brinde{
      width: 100%;
      height: 350px;
      float: left;
      margin-top: 90px;
    }

    .imagem_brinde{
      width: 700px;
      height: 350px;
      float: left;
      margin-left: 200px;
    }

    .texto_brinde{
      width: 700px;
      height: 350px;
      float: left;
      margin-left: 10px;
    }

    .imagem_brinde img{
      height: 310px;
      margin-left: 100px;
      margin-top: 10px;
    }

    .titulo_brinde{
      font-size: 40px;
      font-family: aller_lightregular;
      color: <?php echo($corrgb); ?>;
      margin-left: 280px;
      margin-top: 40px;
    }

    .conteudo_brinde{
      font-size: 19px;
      font-family: aller_lightregular;
    }

    .nao_perca_seu_tempo{
      width: 100%;
      height: 934px;
      float: left;
    }

    .titulo_perca{
      font-size: 50px;
      font-family: aller_lightregular;
      margin-left: 700px;
      margin-top: 50px;
      color: <?php echo($corrgb); ?>;
    }

    .imagem_perca{
      width: 700px;
      height: 400px;
      margin-left: auto;
      margin-right: auto;
    }

    .imagem_perca img{
      width: 500px;
      height: 370px;
      margin-top: 15px;
      margin-left: 100px;
    }

    .caixa_texto{
      width: 250px;
      height: 200px;
      margin-left: auto;
      margin-right: auto;
      margin-top: 20px;
      text-align: center;
    }

    .texto_perca{
      font-size: 20px;
      font-family: aller_lightregular;
    }

    .botao_perca{
      width: 200px;
      height: 100px;
      margin-left: auto;
      margin-right: auto;
      margin-top: -20px;
    }

    .btn_perca{
      width: 180px;
      height: 65px;
      margin-left: 10px;
      margin-top: -20px;
      border: 3px solid <?php echo($corrgb); ?>;
      color: <?php echo($corrgb); ?>;
      background-color: white;
      font-size: 18px;
      font-family: aller_lightregular;
    }

    .btn_perca:hover{
        color: white;
        background-color: <?php echo($corrgb); ?>;
        transition: 0.2s ease all;
    }
}
    
    
</style>
