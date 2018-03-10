<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ADM Histórico de reservas </title>
    <link rel="stylesheet" type="text/css" href="estilo/estilo_adm_galeria.css">
    <link rel="stylesheet" type="text/css" href="estilo/estilo.css">
    <script language=javascript type="text/javascript"></script>
    <script type="text/javascript" src="js/js.js"></script>
    <script type="text/javascript">


    $(document).ready(function() {
    function filterPath(string) {
        return string
        .replace(/^\//,'')
        .replace(/(index|default).[a-zA-Z]{3,4}$/,'')
        .replace(/\/$/,'');
      }
    $('a[href*=#]').each(function() {
      if ( filterPath(location.pathname) == filterPath(this.pathname)
      && location.hostname == this.hostname
      && this.hash.replace(/#/,'') ) {
        var $targetId = $(this.hash), $targetAnchor = $('[name=' + this.hash.slice(1) +']');
        var $target = $targetId.length ? $targetId : $targetAnchor.length ? $targetAnchor : false;
        if ($target) {
          var targetOffset = $target.offset().top;
          $(this).click(function() {
          $('html, body').animate({scrollTop: targetOffset},200);
          return false;
          });
        }
      }
    });
  });
    </script>
  </head>
  <body>
    <header>
      <?php require_once('view/header-cms.php'); ?>
    </header>
    <section id="menu">
        <?php require_once('view/menu-cms.html'); ?>
    </section>
    <section id="conteudo">
        <?php require_once('view/adm_galeria_view.php') ?>
    </section>

  <footer>

  </footer>
  </body>
</html>
