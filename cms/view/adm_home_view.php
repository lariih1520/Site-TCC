<?php
    require_once('controller/home_controller.php');
    $editSlide = 0;
    $editCarrossel = 0;

    if(isset($_GET['acao'])){

        if($_GET['acao'] == 'editarSlide'){
            $editSlide = 1;
            $idS = $_GET['id'];

        }
        if($_GET['acao'] == 'editarCarsl'){
            $editCarrossel = 1;
            $idC = $_GET['id'];

        }

    }
?>
<div class="titulo_slide">
    SLIDE PÁGINA HOME
    <a href="?acao=inserirSlide">
        <input type="submit" value="Cadastrar" class="estilo_botao">
    </a>
</div>
<div class="content_slide">
    <?php
        if(isset($_GET['acao'])){
            if($_GET['acao'] == 'inserirSlide'){

    ?>
        <div class="imagem_slide">
            <img src="" class="img_slide">
            <form action="router.php?controller=home&modo=inserirSld" method="post" enctype="multipart/form-data">
                <p><input type="file" name="flSlide"></p>
                <input type="submit" name="btn_salvar">
            </form>

        </div>
    <?php
            }
        }


    $controller = new ControllerHome();
    $rs = $controller->ListarImagensSlide();
    if($rs != null){
        $cont = 0;
        while($cont < count($rs)){
            $idSlide = $rs[$cont]->idSlide;
            $imagem = $rs[$cont]->imagem;

    ?>
    <div class="imagem_slide">
        <img src="../<?php echo $imagem ?>" class="img_slide">

        <?php
            if($editSlide != 0 && $idSlide == $idS){
        ?>
            <form action="router.php?controller=home&modo=editarSld&id=<?php echo $idSlide ?>" method="post" enctype="multipart/form-data">
                <p><input type="file" name="flSlide"></p>
                <input type="submit" name="btn_salvar">
            </form>
        <?php
            }else{
        ?>
            <div class="EditarExcluir">
                <a href="adm_home.php?acao=editarSlide&id=<?php echo $idSlide ?>" class="left">
                     <img src="imagens/editar.png" class="icone">
                     Editar
                </a>
                <a href="router.php?controller=home&modo=excluirSlide&id=<?php echo $idSlide ?>" class="right">
                    <img src="imagens/delete.png" class="icone">
                    Excluir
                </a>
            </div>
        <?php
            }
        ?>
    </div>
    <?php
            $cont++;
        }
    }else{
        echo 'Não há imagens cadastradas';

    }
    ?>
</div>

<div class="titulo_slide" id="carrossel">
    CARROSSEL PÁGINA HOME
    <a href="?acao=inserirCarrossel#carrossel">
        <input type="submit" value="Cadastrar" class="estilo_botao">
    </a>
</div>
<div class="content_slide">
    <?php
        if(isset($_GET['acao'])){
            if($_GET['acao'] == 'inserirCarrossel'){

    ?>
        <div class="imagem_slide">
            <img src="" class="img_carrossel">
            <form action="router.php?controller=home&modo=inserirCrsl" method="post" enctype="multipart/form-data">
                <p><input type="file" name="flCarrossel"></p>
                <input type="submit" name="btn_salvar">
            </form>

        </div>
    <?php
            }
        }

    $controller = new ControllerHome();
    $rs = $controller->ListarImagensCarrossel();
    if($rs != null){
        $cont = 0;
        while($cont < count($rs)){
            $idCarsl = $rs[$cont]->idCarrossel;
            $imagem = $rs[$cont]->imagem;

    ?>
    <div class="imagem_carrossel">
        <img src="../<?php echo $imagem ?>" alt="" class="img_carrossel">

        <?php
            if($editCarrossel != 0 && $idCarsl == $idC){
        ?>
            <form action="router.php?controller=home&modo=editarCarsl&id=<?php echo $idCarsl ?>" method="post" enctype="multipart/form-data">
                <p><input type="file" name="flCarrossel"></p>
                <input type="submit" name="btn_salvar">
            </form>
        <?php
            }else{
        ?>
            <div class="EditarExcluir">
                <a href="adm_home.php?acao=editarCarsl&id=<?php echo $idCarsl ?>#carrossel" class="left">
                     <img src="imagens/editar.png" class="icone">
                     Editar
                </a>
                <a href="router.php?controller=home&modo=excluirCarsl&id=<?php echo $idCarsl ?>" class="right">
                    <img src="imagens/delete.png" class="icone">
                    Excluir
                </a>
            </div>

        <?php
            }
        ?>
    </div>
    <?php
            $cont++;
        }
    }else{
        echo 'Não há imagens cadastradas';

    }

    ?>
</div>
