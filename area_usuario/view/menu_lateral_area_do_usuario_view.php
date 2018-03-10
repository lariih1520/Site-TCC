<?php
  require_Once("controller/cliente_controller.php");
  $cliente_controller = new ControllerCliente();
  $cliente = $cliente_controller->getCliente();

?>
<div class="menu-fixo-usuario-lateral">
  <div class="informacoes-usuario">
    <div class="conteinner-foto-usuario">
        <div class="foto-usuario">
            <img src="imagens/user-padrao.jpg" alt="" />
        </div>
    </div>
    <div class="dados-usuario">
      <div class="nome-usuario">
        <?php echo($cliente->nome); ?>
      </div>
      <div class="editar-perfil">
        <a href="#">
          <img src="imagens/edit.png" alt="Alterar Dados">
        </a>
          
      </div>
    </div>
  </div>
  <div class="menu-usuario-opcoes">
      <ul class="menu-opcoes">
        <a href="adm_historico_reservas.php">
          <li>
              Histórico de Reservas
          </li>
        </a>
        <a href="cartao.php">
          <li>
              Meus Cartões
          </li>
        </a>
        <a href="nota_fiscal.php">
          <li>
              Validar nota fiscal
          </li>
        </a>
        <a href="../index.php">
          <li>
              Voltar ao site
          </li>
        </a>
        <a href="sair.php">
          <li>
              Sair
          </li>
        </a>
      </ul>
  </div>
</div>
