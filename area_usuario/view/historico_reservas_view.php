<div id="principal">
  <div id="header">
      Próximas reservas
  </div>
  <div id="todas_reservas">
      <div id="lista_reservas">
          <table>

          <?php
              require_Once("controller/reservas_controller.php");
              $reservas_controller = new ControllerReservas();
              $lst_proximo = $reservas_controller->buscarProximasReservas();
              $cont = 0;
              if($lst_proximo){
                ?>
                <thead>
                    <tr>
                        <td> Data </td>
                        <td> Periodo </td>
                        <td> Restaurante </td>
                        <td> Mesa </td>
                        <td> Status </td>
                    </tr>
                </thead>
                <?php
                while($cont < count($lst_proximo)){
                    $cor = "";
                  if($cont % 2 == 1 ){
                      $cor = 'style="background-color:#9c0404;color:#fff;"';
                  }
          ?>
              <tbody>
                  <tr <?php echo($cor)?>>
                      <td> <?php echo(date('d/m/Y', strtotime($lst_proximo[$cont]->data))); ?> </td>
                      <td> <?php echo($lst_proximo[$cont]->periodo) ?> </td>
                      <td> <?php echo($lst_proximo[$cont]->restaurante) ?> </td>
                      <td> <?php echo($lst_proximo[$cont]->mesa) ?> </td>
                      <?php if ($lst_proximo[$cont]->validacao == null) {?>
                        <td> Pendente </td>
                      <?php }elseif ($lst_proximo[$cont]->validacao == 0) { ?>
                        <td> Cancelada </td>
                      <?php }elseif($lst_proximo[$cont]->validacao == 1){?>
                        <td> Confirmada </td>
                       <?php }?>
                  </tr>
              </tbody>
          <?php

                $cor = " ";
                  $cont++;
              }
            }else {
              ?>
              <tr>
                <td>Não há próximas reservas.</td>
              </tr>
              <?php
            }
          ?>
          </table>
      </div>
  </div>


  <div id="header">
      Histórico de reservas
  </div>
  <div id="todas_reservas">
      <div id="lista_reservas">
          <table>
          <?php
            require_Once("controller/reservas_controller.php");
            $reservas_controller = new ControllerReservas();
            $lst_historico = $reservas_controller->buscarHistoricoReservas();
            $cont_hist = 0;
            if($lst_historico){
              ?>
              <thead>
                  <tr>
                      <td> Data </td>
                      <td> Periodo </td>
                      <td> Restaurante </td>
                      <td> Mesa </td>
                      <td> Status </td>
                  </tr>
              </thead>
              <?php
              while($cont_hist < count($lst_historico)){
                  $cor = "";
                if($cont % 2 == 1 ){
                    $cor = 'style="background-color:#9c0404;color:#fff;"';
                }
          ?>
              <tbody>
                  <tr <?php echo($cor)?>>
                    <td> <?php echo(date('d/m/Y', strtotime($lst_historico[$cont]->data))); ?> </td>
                    <td> <?php echo($lst_historico[$cont_hist]->periodo) ?> </td>
                    <td> <?php echo($lst_historico[$cont_hist]->restaurante) ?> </td>
                    <td> <?php echo($lst_historico[$cont_hist]->mesa) ?> </td>
                    <?php if ($lst_historico[$cont_hist]->validacao == null) {?>
                      <td> Pendente </td>
                    <?php }elseif ($lst_historico[$cont_hist]->validacao == 0) { ?>
                      <td> Cancelada </td>
                    <?php }elseif($lst_historico[$cont_hist]->validacao == 1){?>
                      <td> Confirmada </td>
                     <?php }?>
                  </tr>
              </tbody>
          <?php

                $cor = " ";
                $cont_hist++;
              }
            }else {
              ?>
                <tr>
                  <td>Não há reservas no seu histórico.</td>
                </tr>
              <?php
            }
          ?>
          </table>
      </div>
  </div>
</div>
