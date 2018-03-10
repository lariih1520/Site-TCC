<?php
	$restaurante_id = null;
	$periodo_id = null;
	$data=null;
	$able_mesa = "style='pointer-events: none;touch-action: none; background-color:#eee;'";
	$abled = null;
	$readonly=null;
	$style_data=null;
	$action = "reservas.php?modo=mesas";
	$botao = " Buscar Mesas Disponíveis ";
	if(isset($_GET['modo'])){
		if($_GET['modo']=='mesas'){
			$restaurante_id = $_POST['slcFilial'];
			$periodo_id=$_POST['slcHora'];
			$data=$_POST['txtData'];
			$able_mesa = null;
			$abled = "style='pointer-events: none;touch-action: none; background-color:#eee;'";
			$style_data="style='background-color:#eee;'";
			$readonly="readonly";
			$botao=" Solicitar Reserva ";
			$action="router.php?controller=reservas&modo=novo";
		}
	}

	if(isset($_GET['reserva'])){
		if($_GET['reserva']==1){
			echo("<script>alert('Solicitação realizada, aguarde o retorno para confirmação.');</script>");
		}if($_GET['reserva']==0){
			echo("<script>alert('Muitas reservas realizadas. Para continuar, contate nossa equipe para realizar um cancelamento.');</script>");
		}
	}
 ?>
	<!-- ** Link para o CSS ** -->
	<link rel="stylesheet" type="text/css" href="estilo/estilo_reservas.css">

	<div id="principal">

		<?php
			//TODO(VERIFICAR SE O USUÁRIO ESTÁ LOGADO PARA MOSTRAR O FORMULÁRIO)
			if(isset($_SESSION['id'])){
			?>
				<div id="slide">

				</div>
				<form action="<?php echo($action);?>" method="post" id='campos_reserva'>
					<table id="tbl_campos">
						<tr id="tr_menor">
							<td> Filial:
								<select required <?php echo($abled) ?> name="slcFilial">
									<option value="">Selecione um restaurante</option>
						      <?php
						        require_once('controller/filial_controller.php');
						        $restaurante_controller = new ControllerFilial();
						        $restaurante = $restaurante_controller->MostrarFiliais();
										$selected_filial;
						        $contador_filial = 0;
						        while($contador_filial<count($restaurante)){
						          $selected_filial[$contador_filial]=null;
						          if($restaurante_id !=null){
						            if($restaurante[$contador_filial]->id_restaurante == $restaurante_id){
						              $selected_filial[$contador_filial] = "selected";
						            }
						          }
								     ?>
						          <option <?php echo($selected_filial[$contador_filial]);?> value="<?php echo($restaurante[$contador_filial]->id_restaurante);?>">
						            <?php echo($restaurante[$contador_filial]->nome);?>
						          </option>
						      <?php
						          $contador_filial ++;
						        }
						      ?>
								</select>
							</td>
							<td> Mesa:
								<select required <?php echo($able_mesa);?> name="slcMesa">
									<option> Selecione uma mesa </option>
									<?php
									if (isset($_GET['modo'])) {
										if ($_GET['modo']=='mesas'){
											require_Once("controller/reservas_controller.php");
											$reservas_controller = new ControllerReservas();
											$lst_mesas = $reservas_controller->buscarMesas();
											$contador_mesa=0;
											while($contador_mesa<count($lst_mesas)){
									 ?>
													<option value="<?php echo($lst_mesas[$contador_mesa]->id);?>">
														<?php echo("Mesa ".$lst_mesas[$contador_mesa]->numero." (".$lst_mesas[$contador_mesa]->lugares." lugares)"); ?>
													</option>
									<?php
													$contador_mesa ++;
												}
											}
										}
									 ?>
								</select>
							</td>
						</tr>
						<tr id="tr_maior">
							<td> Horário:<br>
								<select  <?php echo($abled) ?> name="slcHora">
									<option> selecione </option>
									<?php
						        require_once('controller/periodo_controller.php');
						        $periodo_controller = new ControllerPeriodo();
						        $lst_periodo = $periodo_controller->selectPeriodos();
						        $contador_periodo = 0;
						        while($contador_periodo<count($lst_periodo)){
											$selected_periodo[$contador_periodo]=null;
						          if($periodo_id!=null){
						            if($lst_periodo[$contador_periodo]->id == $periodo_id){
						              $selected_periodo[$contador_periodo] = "selected";
						            }
						          }
						       ?>
						          <option <?php echo($selected_periodo[$contador_periodo]);?> value="<?php echo($lst_periodo[$contador_periodo]->id);?>">
						            <?php echo($lst_periodo[$contador_periodo]->nome." (".$lst_periodo[$contador_periodo]->horario.")");?>
						          </option>
						      <?php
						          $contador_periodo ++;
						        }
						      ?>>
								</select>
							</td>
							<td> Data:
								<input required <?php echo($style_data." ".$readonly); ?> type="date" name="txtData" value="<?php echo($data);?>">
							</td>
							<td> <input id="button" type="submit" name="btn" value="<?php echo($botao);?>"> </td>
						</tr>
					</table>

				</form>
		<?php
			}else{
		 ?>
		 		<div id="registre">
					<p><b>Entre ou registre-se para fazer uma reserva!</b></p>
					<a href="login.php">
						<div id="btn_ir_autentica">
							Cadastrar/Autenticar
						</div>
					</a>

		 		</div>
		 <?php
	 		}
		  ?>
	</div>
