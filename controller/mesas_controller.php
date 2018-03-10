<?php
  /**
   *
   */
  class ControllerMesas{

    public function selectMesas() {
      require_Once("model/mesa_class.php");
      $mesa_class = new Mesa();
      return $mesa_class->selectMesas();
    }

    public function insertMesa(){
      require_Once("model/mesa_class.php");
      $mesa_class = new Mesa();
      $mesa_class->numero = $_POST['txtNumero'];
      $mesa_class->lugares = $_POST['slcLugares'];
      $mesa_class->restaurante = $_POST['slcFiliais'];
      if($mesa_class->insertMesa()){
        header("location:adm_mesas.php");
      }else{
        echo "Erro no insert";
      }
    }

    public function selectId(){
      require_Once("model/mesa_class.php");
      $mesa_class = new Mesa();
      $mesa_class->id = $_GET['id'];
      $mesa_class->selectId();
      require_Once("adm_mesas.php");
    }

    public function editarMesa(){
      require_Once("model/mesa_class.php");
      $mesa_class = new Mesa();
      $mesa_class->id = $_GET['id'];
      $mesa_class->numero = $_POST['txtNumero'];
      $mesa_class->lugares = $_POST['slcLugares'];
      $mesa_class->restaurante = $_POST['slcFiliais'];
      if($mesa_class->editarMesa()){
        header("location:adm_mesas.php");
      }else{
        echo "Erro no insert";
      }
    }

    public function excluirMesa(){
      require_Once("model/mesa_class.php");
      $mesa_class = new Mesa();
      $mesa_class->id = $_GET['id'];
      if($mesa_class->excluirMesa()){
        header("location:adm_mesas.php");
      }else{
        echo "<script>alert('Erro no delete');</script>";
      }
    }
  }

 ?>
