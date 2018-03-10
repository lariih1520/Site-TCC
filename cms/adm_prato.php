<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>CMS | ADM PRATOS</title>
        <link rel="stylesheet" type="text/css" href="estilo/estilo.css">
        <link rel="stylesheet" type="text/css" href="estilo/estilo_adm_prato.css">
    </head>
    <body>
        <?php
            $titulo = '';
            $preco = '';
            $descricao = '';
            $imagem = '';
            $botao = 'Salvar';
            $modo = 'inserir';
        ?>
        
        <header>
            <?php  require_once('view/header-cms.php') ?>
        </header>
        <section id="menu">
            <?php require_once('view/menu-cms.html') ?>
        </section>
        
        <section id="conteudo">
            <?php require_once('view/adm_prato_view.php')?>
        </section>
        <footer></footer>
    </body>
</html>
