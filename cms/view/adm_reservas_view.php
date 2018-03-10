<?php
  if(isset($reserva_class)){
    if($reserva_class->validacao==null){
      $status="Pendente";
    }elseif ($reserva_class->validacao==0) {
      $status="Cancelada";
    }elseif ($reserva_class->validacao==1) {
      $status="Confirmada";
    }
 ?>
<div id="contato">
  <div class="info">
    <p>Cliente</p>
    <div class="cont">Nome: <?php echo($reserva_class->nome); ?></div>
    <div class="cont">CPF: <?php echo($reserva_class->cpf); ?></div>
    <div class="cont">Telefone: <?php echo($reserva_class->telefone); ?></div>
    <div class="cont">Celular: <?php echo($reserva_class->celular); ?></div>
    <div class="cont">Email: <?php echo($reserva_class->email); ?></div>
  </div>
  <div class="info">
    <p>Reserva</p>
    <div class="cont">Data: <?php echo(date('d/m/Y', strtotime($reserva_class->data))); ?></div>
    <div class="cont">Período: <?php echo($reserva_class->periodo);?></div>
    <div class="cont">Restaurante: <?php echo($reserva_class->restaurante); ?></div>
    <div class="cont">Mesa: <?php echo($reserva_class->mesa); ?></div>
    <div class="cont">Status: <?php echo($status); ?></div>
  </div>
</div>
<div id="validacao">
  <form class="" action="router.php?controller=reservas&modo=validacao&id=<?php echo($reserva_class->id); ?>" method="post">
    <?php
      if(isset($status)){
        if($status=="Pendente"){
          ?>
            <input type="submit" name="btn_true" value="Confirmar">
            <input type="submit" name="btn_false" value="Cancelar">
          <?php
        }elseif ($status=="Cancelada") {
          ?>
            <input type="submit" name="btn_true" value="Confirmar">
            <input type="submit" name="btn_back" value="Voltar">
          <?php
        }elseif ($status=="Confirmada") {
          ?>
            <input type="submit" name="btn_false" value="Cancelar">
            <input type="submit" name="btn_back" value="Voltar">
          <?php
        }
      }else {
     ?>
      <input type="submit" name="btn_t" value="Confirmar">
      <input type="submit" name="btn_f" value="Cancelar">
    <?php
      }
     ?>
  </form>
</div>
<?php } ?>

<div id="reservas">
  <div id="todas_reservas">
    <div class="lista_reservas">
      <p>Próximas reservas</p>
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
                <td> Opções </td>
              </tr>
          </thead>
          <?php
          while ($cont<count($lst_proximo)) {
      ?>
          <tbody>
            <tr>
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
              <td>
                <a href="router.php?controller=reservas&modo=listarId&id=<?php echo($lst_proximo[$cont]->id)?>">
                  Visualizar
                <a>
              </td>
            </tr>
        </tbody>
      <?php
            $cont ++;
          }
        }else{
            ?>
            <tr>
              <td>
                Não há reservas pendentes.
              </td>
            </tr>
            <?php
        }
      ?>
      </table>
    </div>

    <div class="lista_reservas">
      <p>Histórico de reservas</p>
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
                  <td> Opções </td>
              </tr>
          </thead>
        <?php
          while ($cont_hist<count($lst_historico)) {
      ?>
        <tbody>
          <tr>
            <td> <?php echo(date('d/m/Y', strtotime($lst_historico[$cont_hist]->data))); ?> </td>
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
             <td>
               <a href="router.php?controller=reservas&modo=listarId&id=<?php echo($lst_historico[$cont_hist]->id)?>">
                 Visualizar
               <a>
             </td>
          </tr>
        </tbody>
      <?php
            $cont_hist ++;
          }
        }else {
          ?>
            <tr>
              <td>
                Não há nada Aqui
              </td>
            </tr>
          <?php
        }
      ?>
      </table>
    </div>
  </div>
</div>
