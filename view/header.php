

<div id="conteinner-header">
  <?php
    require_once('cms/controller/cabecalho_controller.php');

    $cabecalho = new ControllerCabecalho();

    $rs = $cabecalho->MostrarCabecalho();
    $contador = 0;
    while($contador < count($rs)){
        $texto_cima="<a href='login.php'> <span class='text'> Entre ou Cadastre-se</span></a><br>";
        $texto_baixo="";
        $foto = $rs[$contador]->foto;
        if(isset($_SESSION['nome'])){
            $texto =$_SESSION['nome'];
            $texto_cima="<a href='area_usuario/area_do_usuario.php'><span class='text'>Minha área</span></a><br>";
            $texto_baixo="<a href='sair.php'><span class='text'>Sair</span></a>";
        }else {
          $texto = $rs[$contador]->texto_boas_vindas;
        }

        $usuario = $rs[$contador]->foto_usuario;

  ?>
    <a href="index.php">
      <div id="img-logo">
          <img src="fotos/<?php echo($foto); ?>" alt="logo" />
      </div>
    </a>

<nav id="menu-desktop">
    <ul>
        <li>
          <a href="index.php">
             Home
          </a>
        </li>
        <li>
          <a href="destaque.php">
             Destaque
          </a>
        </li>
        <li>
          <a href="galeria.php">
            Galeria
          </a>
        </li>
        <li>
          <a href="eventos.php">
            Eventos
          </a>
        </li>
        <li>
          <a href="cardapio.php">
            Cardápio
          </a>
        </li>
        <li>
          <a href="contato.php">
            Contato
          </a>
        </li>
        <li>
          <a href="sobre.php">
            Sobre
          </a>
        </li>
        <li>
          <a href="reservas.php">
            Reserve
          </a>
        </li>
    </ul>
</nav>
<div id="menu-mobile">
    <div id="sidedrawer" class="mui--no-user-select">
      <div class="mui-divider"></div>
      <ul id="menu_mobile">
        <li>
          <a href="index.php">
             Home
          </a>
        </li>
        <li>
          <a href="destaque.php">
             Destaque
          </a>
        </li>
        <li>
          <a href="galeria.php">
            Galeria
          </a>
        </li>
        <li>
          <a href="eventos.php">
            Eventos
          </a>
        </li>
        <li>
          <a href="cardapio.php">
            Cardápio
          </a>
        </li>
        <li>
          <a href="contato.php">
            Contato
          </a>
        </li>
        <li>
          <a href="sobre.php">
            Sobre
          </a>
        </li>
        <li>
          <a href="reservas.php">
            Reserve
          </a>
        </li>
    </ul>
    </div>
    <header id="header">
      <div class="mui-appbar mui--appbar-line-height">
        <div class="mui-container-fluid">
          <a class="sidedrawer-toggle mui--visible-xs-inline-block mui--visible-sm-inline-block js-show-sidedrawer">☰</a>
          <a class="sidedrawer-toggle mui--hidden-xs mui--hidden-sm js-hide-sidedrawer">☰</a>
          <span class="mui--text-title mui--visible-xs-inline-block mui--visible-sm-inline-block">Ligeirinho.com</span>
        </div>
      </div>
    </header>
</div>
    <div id="conteinner-login">
        <div id="entre">
            <h1><?php echo($texto);?></h1>
            <?php
              echo($texto_cima);
              echo($texto_baixo);
             ?>
        </div>
        <div id="user">
            <img src="fotos/<?php echo($usuario); ?>" alt="Usuario" />
        </div>
    </div>
  <?php
      $contador += 1;
    }
   ?>
</div>
