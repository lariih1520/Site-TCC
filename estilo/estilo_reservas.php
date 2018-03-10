
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
/*
	CSS da página de reservas
	Feito por: Larissa Oliveira
	Data:11/09/2017
 */

@media screen and (min-device-width: 1000px) and (max-device-width: 2000px){
     #principal{
        height: 690px;
        background-color: #000;
        margin-top: 20px;
        background-image:url('slides/2.png');
     }

    #slide{
        width:100%;
        height:690px;
        margin-top: -20px;
    }

    #slide img{
      width: 100%;
      height: 680px;
    }

    #campos_reserva{
        width:900px;
        height:200px;
        padding:20px;
    }
    #tbl_campos{
        width:800px;
        height:200px;
        padding:25px;
        padding-left:40px;
        padding-right:40px;
        border:solid 3px #fff;
        margin-top: -350px;
        margin-left: 50px;
    }
    #tbl_campos tr td{
        font-size: 20px;
        border:solid 1px transparent;
    }
    #tr_maior{
        width:500px;
    }
    #tr_menor{
        max-width:150px;
    }

    td{
      font-family: allerregular;
      color: #fff;
    }

    .botao{
        width:150px;
        height:20px;
        float:right;
        cursor:pointer;
        background-color: white;
        padding-bottom: 30px !important;
        padding-top: 5px !important;
        border-radius: 5px;
        border:solid 1px transparent !important;
        border-bottom:solid 1px transparent !important;
        box-shadow: 2px 2px 15px #505050;
    }
    select{
        margin:0;
        padding:0;
        width:auto;
        font-size: 18px;
        font-family: aller_lightregular;
    }
    input{
      margin:0;
      padding:0;
      width:auto;
      font-size: 18px;
      font-family: aller_lightregular;
    }

    #button{
      background-color: rgba(0,0,0,0.3);
      border: 3px solid #fff;
      color: #fff;
      font-family: allerregular;
      float:right;
      height: 40px;
    }

    #button:hover{
      background-color: #fff;
      color:<?php echo($corrgb); ?>;
      transition: 0.2s ease all;
    }

    .lightbox{
      color:#fff;
      font-size: 16px;
    }
    #registre{
      width: auto;
      height: 100%;
      margin: auto;
      font-family: allerregular;
      text-align: center;
      font-size: 30px;
      color: <?php echo($corrgb);?>;
      background-color: rgba(0,0,0,0.3);
    }

    #btn_ir_autentica{
      background-color: rgba(0,0,0,0.3);
      border: 3px solid #fff;
      color: #fff;
      font-family: allerregular;
      height: 60px;
      line-height: 60px;
      width: 300px;
      margin-left: auto;
      margin-right: auto;
      margin-top: 10px;
    }
    #btn_ir_autentica:hover{
      background-color: #fff;
      color:<?php echo($corrgb); ?>;
      transition: 0.2s ease all;
    }
}
    /*
@media screen and (min-width: 1200px) and (max-width: 1600px){

}    
    */
@media screen and (min-device-width: 300px) and (max-device-width: 800px){
    #principal{
        height: 690px;
        background-color: #000;
        margin-top: 20px;
        background-image:url('slides/2.png');
     }

    #slide{
        width:100%;
        height:690px;
        margin-top: -20px;
    }

    #slide img{
      width: 100%;
      height: 680px;
    }

    #campos_reserva{
        width:800px;
        height:200px;
        padding:20px;
    }
    #tbl_campos{
        width:800px;
        height:200px;
        padding:20px;
        padding-left:40px;
        padding-right:40px;
        border:solid 3px #fff;
        margin-top: -350px;
    }
    #tbl_campos tr td{
        font-size: 30px;
        color: black;
        border:solid 1px transparent;
    }
    #tr_maior{
        width:500px;
    }
    #tr_menor{
        max-width:150px;
    }

    td{
      font-family: allerregular;
      color: #fff;
    }

    .botao{
        width:150px;
        height:20px;
        float:right;
        cursor:pointer;
        background-color: white;
        padding-bottom: 30px !important;
        padding-top: 5px !important;
        border-radius: 5px;
        border:solid 1px transparent !important;
        border-bottom:solid 1px transparent !important;
        box-shadow: 2px 2px 15px #505050;
    }
    select{
        margin:0;
        padding:0;
        width:auto;
        font-size: 18px;
        font-family: aller_lightregular;
    }
    input{
      margin:0;
      padding:0;
      width:auto;
      font-size: 24px;
      font-family: aller_lightregular;
    }

    #button{
      background-color: rgba(0,0,0,0.3);
      border: 3px solid #fff;
      color: #fff;
      font-family: allerregular;
      float:right;
      height: 40px;
    }

    #button:hover{
      background-color: #fff;
      color:<?php echo($corrgb); ?>;
      transition: 0.2s ease all;
    }

    .lightbox{
      color:#fff;
      font-size: 16px;
    }
    #registre{
        width: auto;
        height: 100%;
        margin: auto;
        font-family: allerregular;
        text-align: center;
        font-size: 38px;
        color: <?php echo($corrgb);?>;
        background-color: rgba(0,0,0,0.3);
    }

    #btn_ir_autentica{
      background-color: rgba(0,0,0,0.3);
      border: 3px solid #fff;
      color: #fff;
      font-family: allerregular;
      height: 60px;
      line-height: 60px;
      width: 380px;
      margin-left: auto;
      margin-right: auto;
      margin-top: 10px;
    }
    #btn_ir_autentica:hover{
      background-color: #fff;
      color:<?php echo($corrgb); ?>;
      transition: 0.2s ease all;
    }
}    
    
</style>
