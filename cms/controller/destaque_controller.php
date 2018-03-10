<?php
/**
    Feito por:Larissa
    Data: 12/10/2017
    Arquivos relacionados:
        adm_destaque_view.php
        router.php
        destaque_class.php
**/

class ControllerDestaque{

    /* Esta classe lista todos os pratos, inclusive os em destaque */
    public function ListarPratos(){
        require_once('model/destaque_class.php');
        $destaque_class = new Destaques();
        $destaque = $destaque_class->SelectPratos();

        return $destaque;

    }

    public function AdicionarDestaque(){

        require_once('model/destaque_class.php');

        $destaque_class = new Destaques();
        $destaque_class->InsertDestaque();


    }

    public function DeltarDestaque(){
        require_once('model/destaque_class.php');

        $idDestaque = $_GET['id'];
        $destaque_class = new Destaques();
        $destaque_class->DeleteDestaque($idDestaque);

    }

    public function Buscar(){
        require_once('model/destaque_class.php');

        $idBuscar = $_GET['id'];
        $destaque_class = new Destaques();
        $result = $destaque_class->SelectById($idBuscar);

        return $result;
    }

    public function AlterarDestaque(){

        require_once('model/destaque_class.php');

        $destaque_class = new Destaques();
        $destaque_class->UpdateDestaque();

    }

    public function PesquisarDestaque(){

        require_once('model/destaque_class.php');

        $pesquisa = $_POST['txtpesquisa'];

        $destaque_class = new Destaques();
        $result = $destaque_class->SelectByDestaque($pesquisa);

        return $result;
    }


}


?>
