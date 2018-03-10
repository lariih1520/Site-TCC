<?php
    $modo = 'inserir';
    $botao = 'Salvar';

    if(isset($_GET['editar'])){
        $id = $_GET['id'];
        $modo = 'editar&id='.$id;
        $botao = 'Editar';
    }
    
?>
<div id="novo_funcionario">
    <form method="post" action="router.php?controller=funcionario&modo=<?php echo $modo ?>" enctype="multipart/form-data" class="lado">
        <div class="content_lado">
            <div class="lado">
                <div class="ver_foto_funcionario">
                    <img src="" alt="">
                </div>
                <input type="file" name="flFoto">
            </div>
            <div class="lado">
                <p> Código </p>
                <input type="text" name="txtCodigo" size="8">
            </div>
            <div class="lado">
                <div class="lado">
                    <p> Filial: </p>
                    <select>
                        <option> Selecione </option>
                        <option> Filial - tal filial </option>
                    </select>
                </div>
                <div class="lado">
                    <p> Função: </p>
                    <select>
                        <option> Selecione </option>
                        <option> Funcao garçom </option>
                    </select>
                </div>
            </div>
            <div class="clear">
            
                <p> Nome </p>
                <input type="text" name="txtNome" size="30">
                <p> E-mail: </p>
                <input type="text" name="txtEmail" size="30">
                <p> Celular: </p>
                <input type="text" name="txtCelular" size="30">
            </div>
            <div class="clear">
                <p> <input type="submit" name="btnSalvar" class="botao" value="<?php echo $botao ?>"> 
                <?php
                  if($botao == 'Editar'){  
                ?>
                <input type="submit" name="btnExcluir" class="botao" value="Excluir"> </p>
                
                <?php } ?>
            </div>
        </div>
    </form>
    <div id="todos_funcionario">
        <p class="titulo"> Funcionários já cadastrados </p>
        <div id="lista_funcionarios">
            
            
        </div>
    </div>
</div>


