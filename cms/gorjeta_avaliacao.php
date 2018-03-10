<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ADM Gorjetas e avaliação </title>
    <link rel="stylesheet" type="text/css" href="estilo/estilo_gorjeta_avaliacao.css">
    <link rel="stylesheet" type="text/css" href="estilo/estilo.css">
    <link rel="stylesheet" type="text/css" href="estilo/estilo_area_do_funcionario.css">
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/js.js"></script>
    <script type="text/javascript">
        function filtro(filt, avaliacoes){
            window.location="gorjeta_avaliacao.php?filtro="+filt+avaliacoes;
        }

    </script>
  </head>
  <body>
      <?php
            $a = '';
            $d = '';
            $s = '';
            $m = '';
            $an = '';
            $func = '';
            $rest = '';
            $prod = '';

            if(empty($_GET['filtro'])){
                $filtro = 'Todos';
            }else{
                $filtro = $_GET['filtro'];
                switch ($filtro){
                    case 'Dia':
                        $d = 'checked';
                        break;
                    case 'Semana':
                        $s = 'checked';
                        break;
                    case 'Mês':
                        $m = 'checked';
                        break;
                    case 'Ano':
                        $an = 'checked';
                        break;
                }
            }

            if(isset($_GET['avaliacoes'])){
                $a = $_GET['avaliacoes'];

                if($a == 1){
                    $func = 'selected';

                }elseif($a == 2){
                    $rest = 'selected';

                }elseif($a == 3){
                    $prod = 'selected';
                }
                $a = '&avaliacoes='.$_GET['avaliacoes'];
            }

      ?>
      <section>

          <?php require_once('view/menu_lateral_area_do_funcionario_view.php'); ?>

      </section>

      <section>

          <div id="conteudo">

              <!-- O filtro irá continuar em todas as telas mas a view irá mudar -->
              <form class="titulo_filtro" action="?#conteudo" method="get">
                  Filtrar por:
                  <select name="avaliacoes" onChange="this.form.submit();">
                      <option value="1" <?php echo $func ?>> Funcionário </option>
                      <option value="2" <?php echo $rest ?>> Restaurantes </option>
                      <option value="3" <?php echo $prod ?>> Produtos </option>
                  </select>
              </form>
              <form id="filtro" action="router.php?controller=avaliacao&modo=filtrar" method="post">
                  <ul>
                      <li>
                            <input type="radio" name="rd" value="dia" onClick="filtro('Dia','<?php echo $a ?>');" <?php echo $d ?>>
                            Dia
                      </li>
                      <li>
                            <input type="radio" name="rd" value="sem" onClick="filtro('Semana','<?php echo $a ?>');" <?php echo $s ?>>
                            Semanal
                        </li>
                        <li>
                            <input type="radio" name="rd" value="mes" onClick="filtro('Mês','<?php echo $a ?>');" <?php echo $m ?>>
                            Mensal
                        </li>
                        <li>
                            <input type="radio" name="rd" value="ano" onClick="filtro('Ano','<?php echo $a ?>');" <?php echo $an ?>>
                            Anual
                        </li>
                  </ul>
                  <div class="filtro_slc" >
                        <?php
                               /* É possivel filtrar por dia, semana, mes e ano, assim as opções do select tambem devem mudar */ require_once("controller/avaliacao_gorjeta_controller.php");
                               $controller = new ControllerGorjetasAvaliacoes();
                               $result = $controller->FiltroSelect($filtro);
                         ?>
                        <div>
                            <p> De: </p>
                            <select name="slctDe">
                                <option value="0"> Selecione </option>
                                <?php
                                    $cont = 0;
                                    while($cont < count($result)){
                                        /* Para que o value inicie com o valor 1 */
                                        $value = $cont + 1;
                                        $tag = '<option value="'.$value.'">';
                                        $valor = $result[$cont];
                                        $fimTag = ' </option>';

                                        echo $tag.$valor.$fimTag;
                                        $cont ++;
                                    }

                                ?>

                            </select>
                        </div>
                        <div>
                            <p> Para: </p>
                            <select name="slctPara">
                                <option value="0"> Selecione </option>
                                <?php
                                    $cont = 0;
                                    while($cont < count($result)){
                                        /* Para que o value inicie com o valor 1 */
                                        $value = $cont + 1;
                                        $tag = '<option value="'.$value.'">';
                                        $valor = $result[$cont];
                                        $fimTag = ' </option>';

                                        echo $tag.$valor.$fimTag;
                                        $cont ++;
                                    }

                                ?>
                            </select>
                        </div>
                        <a href="gorjeta_avaliacao.php"> Sem filtro</a>
                        <input type="submit" name="btnFiltro" value="FILTRAR">

                  </div>
              </form>
              <div class="content-dados">
                <?php
                    if(!empty($_GET['avaliacoes'])){
                        $avalia = $_GET['avaliacoes'];

                        switch ($avalia){
                            case '1':
                                require_once('view/avaliacoes_gorjetas_view.php');
                                break;
                            case '2':
                                require_once('view/avaliacoes_restaurantes_view.php');
                                break;
                            case '3':
                                require_once('view/avaliacoes_produtos_view.php');
                                break;

                        }

                    }else{
                        require_once('view/avaliacoes_gorjetas_view.php');
                    }

                ?>
              </div>
          </div>
      </section>
    </body>
</html>
