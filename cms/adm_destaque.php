<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ADM Destaques </title>
    <link rel="stylesheet" type="text/css" href="estilo/estilo_adm_destaque.css">
    <link rel="stylesheet" type="text/css" href="estilo/estilo.css">
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/js.js"></script>
    <script type="text/javascript" src="js/jcarousellite.js"></script>
    <script type="text/javascript">
        function destaque(destaque, id){
            if(destaque != 0){
                r = confirm('Tem certeza que deseja Retirar este prato dos destaques');
                if(r == true){
                   window.location="router.php?controller=destaque&modo=excluir&id="+id;
                }else{
                    window.location="adm_destaque.php?#conteudo_destaque";
                }
               
            }else{
               window.location="?id="+id;
            }
        }
        
        $(function() {
            $("#carrossel"). jCarouselLite({
              btnPrev: '.prev',
              btnNext: '.next',
              visible: 5
            })
        });
    </script>
  </head>
  <body>
  <section>
    <header>
      <?php require_once('view/header-cms.php'); ?>
    </header>
    <section id="menu">
        <?php require_once('view/menu-cms.html'); ?>
    </section>

      <?php require_once('view/adm_destaque_view.php') ?>

  </section>

  </body>
</html>