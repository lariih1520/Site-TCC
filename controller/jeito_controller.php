<?php
/*
  Objetivo: Alterar as imagens do jeito therib's na página sobre.
  Data: 13/09/2017
  Autor: Paulo Henrique
  Ultima Modificação: 13/10/2017
  Obervações: ...
  Arquivos Relacionados: cms/model/jeito_class.php
                         cms/views/sobre_view.php
*/
//Imports
require_once('model/imagem_class.php');

class ControllerJeito{
  public function Editar(){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $contador = 1;
      while($contador<=7){
        $foto[$contador] = $_FILES["filejeito_".$contador];
        if(empty($foto[$contador]['name'])){
          $contador ++;
        }else{
          //Gerando a url e salvando foto
          $imagem = new Imagem();
          $imagem->nome_arquivo=$foto[$contador];
          $imagem->GetUrl();
          //Inserindo no banco
          $imagem_banco = new Jeito();
          $imagem_banco->id_img = $contador;
          $imagem_banco->url = $imagem->url;
          if($imagem_banco->Editar()){
            $contador ++;
          }else{
            echo("<script>window.alert('Problema na inserção de dados no banco')</script>");
          }
        }
      }
      header('location: adm_sobre.php');
    }
  }

  public function Listar(){
    require_once('model/jeito_class.php');
    $imagens [] = null;
    $contador = 1;
    while($contador<=7){
      $imagens[$contador] = new Jeito();
      $imagens[$contador]->id_img = $contador;
      $imagens[$contador]->Listar();
      $contador ++;
    }
    return $imagens;


  }

}

 ?>
