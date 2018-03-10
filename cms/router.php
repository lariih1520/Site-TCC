 <?php


  $controller = $_GET['controller'];
  $modo = $_GET['modo'];

  switch ($controller){
    case 'slider':
      require_once ('controller/slider_controller.php');
      require_once ('model/slider_class.php');
      $controller_slider = new ControllerSlider();
      switch ($modo) {
        case 'novo':
          $controller_slider->novoSlider();
          break;
        case 'excluir':
          $controller_slider->excluirSlider();
          break;
        case 'update':
          $controller_slider->updateSlider();
          break;

        default:
          # code...
          break;
      }
    case 'cor':
      require_once ('controller/cores_controller.php');
      require_once ('model/cores_class.php');

      $controller_cor = new ControllerCor();
      switch ($modo) {
        case 'alterar':
          $controller_cor->AlterarCor();
          break;

        case 'padrao':
          $controller_cor->VoltarPadrao();
          break;

        default:
          # code...
          break;
      }
      break;

    case 'filial':
      require_once('model/filial_class.php');
      require_once('controller/filial_controller.php');

      $controller_filial = new ControllerFilial();
      switch ($modo) {
        case 'cadastrar':
          $controller_filial->CadastrarFilial();
          break;
        case 'excluir':
          $controller_filial->ExcluirFilial();
          break;
        case 'alterar':
          $controller_filial->AlterarFilial();
          break;
        case 'buscar':
          $controller_filial->BuscarFilial();
          break;
        default:
          # code...
          break;
      }
      break;

    case 'cabecalho':

      require_once('model/cabecalho_class.php');
      require_once('controller/cabecalho_controller.php');

      $controller_cabecalho = new ControllerCabecalho();

      switch ($modo) {
        case 'logo':
          $controller_cabecalho->AlterarLogo();
          break;
        case 'boas-vindas':
          $controller_cabecalho->AlterarBoasVinda();
          break;

        default:
          # code...
          break;
      }

      break;

    case 'rede':

      require_once('controller/redes_controller.php');
      require_once('model/redes_class.php');

      $controller_redes = new ControllerRede();
      switch ($modo) {
        case 'nova':
          $controller_redes->Cadastrar();
          break;
        case 'excluir':
          $controller_redes->Excluir();
          break;
        case 'listarUpdate':
          $controller_redes->Mostrar();
          break;
        case 'alterar':
          $controller_redes->Alterar();
          break;
        default:
          # code...
          break;
      }

      break;

    case 'contato':

        require_once('controller/contato_controller.php');
        require_once('model/contato_class.php');

        $controller_contato = new ControllerContato();

        switch ($modo) {
          case 'enviar':
              $controller_contato->NovoContato();
            break;
          case 'buscar':
            $controller_contato->ListarContatoId();
            break;
          case 'excluir':

            if(isset($_POST['btn_respondido'])){
              $controller_contato->Excluir();
            }else if(isset($_POST['btn_nao_lido'])){
              header('location:adm_contato.php');
            }

            break;
          default:
            # code...
            break;
          }
        break;

    case 'historia':
      require_once('controller/historia_controller.php');
      require_once('model/historia_class.php');

      $controller_historia = new ControllerHistoria();

      switch ($modo) {
        case 'novo':
          $controller_historia->NovaHistoria();
          break;
        case 'excluir':
          $controller_historia->Excluir();
          break;
        case 'buscar':
          $controller_historia->ListarHistoriaId();
          break;
        case 'editar':
          $controller_historia->Editar();
          break;
        default:
          # code...
          break;
      }

    case 'avaliacao':
        require_once('controller/avaliacaoGorjeta_controller.php');
        require_once('model/avaliacaoGorjeta_class.php');

        $controller_avaliacao = new ControllerGorjetasAvaliacoes();

        switch($modo){
            case 'listar':
                $controller_avaliacao->ListarAvaliacoes();
                break;
            case 'filtrar':
                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    $filtro = $_POST['rd'];
                    $de = $_POST['slctDe'];
                    $para = $_POST['slctPara'];
                    echo "<h1>".$de." ".$para."</h1>";

                    $controller = new ControllerGorjetasAvaliacoes();

                    switch ($filtro){
                        case 'dia':
                            $controller->ListarDia($de, $para);
                            break;

                        case 'sem':
                            $controller->ListarSem();
                            break;

                        case 'mes':
                            $controller->ListarMes($de, $para);
                            break;

                        case 'ano':
                            $controller->ListarAno();
                            break;
                    }

                }
                break;

        }
        break;

    case 'institucional':
      require_once('controller/institucional_controller.php');
      require_once('model/institucional_class.php');

      $controller_institucional = new ControllerInstitucional();

      switch ($modo) {
        case 'buscar':
          $controller_institucional->Buscar();
          break;
        case 'editar':
          $controller_institucional->Editar();
          break;
      }
      break;

    case 'destaque':
      session_start();

      switch($modo){
          /* Salvar no banco */
          case 'inserir':
            require_once('controller/destaque_controller.php');
            $controllerDestaque = new ControllerDestaque();
            $controllerDestaque->AdicionarDestaque();
            break;

          /* Fazer o select para editar as informações */
          case 'editar':
            $id = $_GET['id'];
            echo 'editar '.$id;
            break;

          /* Editar no banco */
          case 'alterar':
            $id = $_GET['id'];
            echo 'alterar '.$id;
            break;
      }
      break;
          session_start();


          switch($modo){

              /* Salvar */
              case 'inserir':
                  if($_POST['btn_cancelar']){
                      header('location:adm_destaque.php');
                  }else{

                      require_once('controller/destaque_controller.php');
                      $controllerDestaque = new ControllerDestaque();
                      $controllerDestaque->AdicionarDestaque();
                  }
                  break;

              /* Editar */
              case 'alterar':
                  require_once('controller/destaque_controller.php');
                  $controllerDestaque = new ControllerDestaque();
                  $controllerDestaque->AlterarDestaque();

                  break;

              /* Excluir */
              case 'excluir':
                  require_once('controller/destaque_controller.php');

                  $controller = new ControllerDestaque();
                  $controller->DeltarDestaque();
                  break;

          }

        break;


    case 'galeria':
        require_once('controller/galeria_controller.php');
        require_once('model/galeria_class.php');

        $controller_galeria = new controllerGaleria();

        switch ($modo){
          case 'alterar':
            $controller_galeria->updateTitulo();
            break;

          case 'imagens':
            $controller_galeria->alterarGaleria();
            break;
        }
        break;

    case 'jeito':
      require_once('controller/jeito_controller.php');
      require_once('model/jeito_class.php');
      $controller_jeito = new ControllerJeito();
      switch($modo){
        case 'editar':
          $controller_jeito->Editar();
          break;

      }
      break;

    case 'paglogin':
      require_once('controller/login_controller.php');
      $controller_login = new ControllerMotivos();

      switch($modo){
          case 'inserir':
            $controller_login->CadastrarMotivo();

            break;

          case 'editar':
            $controller_login->EditarMotivo();

            break;

          case 'on':
            $controller_login->MotivoOn();

            break;

          case 'off':
            $controller_login->MotivoOff();

            break;

          case 'excluir':
            $controller_login->ExcluirMotivo();

            break;

      }

      break;

    case 'eventos':
          require_once('controller/eventos_controller.php');
          $controller_login = new ControllerEventos();

          switch($modo){
              case 'inserir':
                $controller_login->CadastrarEvento();

                break;

              case 'editar':
                $controller_login->AlterarEvento();
                break;

              case 'selectId':
                $controller_login->SelectId();
                break;

              case 'excluir':
                $controller_login->ExcluirEvento();
                break;

          }

        break;

    case 'prato':
          require_once('controller/prato_controller.php');
          $controller_prato = new ControllerPrato();

          switch($modo){
              case 'inserir':
                $controller_prato->CadastrarPrato();

                break;

              case 'editar':
                $controller_prato->EditarPrato();

                break;

              case 'excluir':
                $controller_prato->ExcluirPrato();

                break;

          }

        break;

    case 'categoria':
        require_once('controller/categoria_controller.php');
        require_once('model/categoria_class.php');

        $controller_categoria = new ControllerCategoria();

        switch ($modo){

          case 'inserir':
              $controller_categoria->CadastrarCategoria();
            break;

          case 'listar':
              $controller_categoria->ListarCategoria();
            break;

          case 'excluir':
                $controller_categoria->ExcluirCategoria();
            break;

          case 'editarID':
                $controller_categoria->ListarCategoriaID();

            break;
          case 'alterar':
                $controller_categoria->EditarCategoria();

            break;

          default:
            # code...
            break;
        }
      break;

    case 'ocorrencia':
        require_once('controller/ocorrencia_controller.php');
        require_once('model/ocorrencia_class.php');

        $controller_ocorrencia = new ControllerOcorrencia();

        switch ($modo) {
          case 'inserir':
              $controller_ocorrencia->CadastrarOcorrencia();
            break;

          case 'listar':
              $controller_ocorrencia->MostarOcorrencias();
            break;

          case 'excluir':
                $controller_ocorrencia->ExcluirOcorrencia();
            break;

          case 'editarPeloID':
                $controller_ocorrencia->ListarOcorrenciaID();
            break;

          case 'alterar':
                $controller_ocorrencia->AlterarOcorrencia();
            break;

          default:
            # code...
            break;
        }

      case 'home':
        require_once('controller/home_controller.php');

        $controller_home = new ControllerHome();

        switch ($modo){

          case 'inserirSld':
              $controller_home->SalvarImagemSlide();
            break;

          case 'excluirSlide':
                $controller_home->ExcluirImagemSlide();
            break;

          case 'editarSld':
                $controller_home->EditarImagemSlide();

            break;

          case 'inserirCrsl':
              $controller_home->SalvarSlideCarrossel();
            break;

          case 'excluirCarsl':
                $controller_home->ExcluirSlideCarrossel();
            break;

          case 'editarCarsl':
                $controller_home->EditarSlideCarrossel();

            break;
          case 'editar':
                $controller_home->EditarMenu();

            break;

          default:
            # code...
            break;
        }

        # code...
        break;

      case 'faq':
        require_once('model/faq_class.php');
        require_once('controller/faq_controller.php');

        $controller_faq = new ControllerFaq();

        switch ($modo) {

          case 'inserir':
              $controller_faq->InserirFaq();
            break;

          case 'listar':
              $controller_faq->MostrarFaq();
            break;

          case 'listarID':
              $controller_faq->MostrarFaqID();
            break;

          case 'excluir':
              $controller_faq->ExcluirFaq();
            break;

          case 'alterar':
              $controller_faq->AlterarFaq();
            break;

          default:
            # code...
            break;
        }

        break;

    case 'mesas':
  		require_Once("model/mesa_class.php");
  		require_Once("controller/mesas_controller.php");
  		$controller_mesas = new ControllerMesas();
  		switch ($modo) {
  		  case 'inserir':
  			$controller_mesas->insertMesa();
  			break;
  		  case 'selectid':
  			$controller_mesas->selectId();
  			break;
  		  case 'delete':
  			$controller_mesas->excluirMesa();
  			break;
  		  case 'editar':
  			$controller_mesas->editarMesa();
  			break;
  		  default:
  			# code...
  			break;
  		}
  		break;


  	case 'funcoes':
  		require_Once("model/funcao_class.php");
  		require_Once("controller/funcoes_controller.php");
  		$controller_funcoes = new ControllerFuncoes();
  		switch ($modo){
  			case 'inserir':
  			  $controller_funcoes->insertFuncao();
  			  break;
  			case 'selectid':
  			  $controller_funcoes->selectId();
  			  break;
  			case 'delete':
  			  $controller_funcoes->excluirFuncao();
  			  break;
  			case 'editar':
  			  $controller_funcoes->editarFuncao();
  			  break;
  			default:
  			  # code...
  			  break;
  		}
  		break;

    case 'brinde':
      require_once('model/brinde_class.php');
      require_once('controller/brinde_controller.php');

      $controller_brinde = new ControllerBrinde();

      switch ($modo) {
        case 'inserir':
            $controller_brinde->InserirBrinde();
          break;

        case 'ListarBrindeID':
            $controller_brinde->ListarBrindeID();
          break;

        case 'excluirBrinde':
            $controller_brinde->ExcluirBrinde();
          break;

        case 'alterarBrinde':
            $controller_brinde->AlterarBrinde();
          break;


        default:
          # code...
          break;
      }
      break;

    case 'notaFiscal':
      require_Once('controller/nota_fiscal_controller.php');
      $controller_nota = new ControllerNotaFiscal();

      switch ($modo) {
        case 'buscar':
          $controller_nota->getBrinde();
          break;
        case 'validar':
          $controller_nota->validarBrinde();
          break;

        default:
          # code...
          break;
      }
      break;

    case 'reservas':
      require_Once('controller/reservas_controller.php');
      $controller_reserva = new ControllerReservas();
      switch($modo) {
        case 'listarId':
          $controller_reserva->listarId();
          break;
        case 'validacao':
          $controller_reserva->validarReserva();
          break;
        default:
          # code...
          break;
      }
      break;
  }

?>
