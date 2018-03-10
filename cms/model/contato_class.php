<?php

  class Contato{

    public $id_fale;
    public $nome;
    public $email;
    public $telefone;
    public $celular;
    public $ocorrencia;
    public $descritivo;
    public $unidade;


    public function __construct(){

        require_once('model/db_class.php');

        $conexao_db = new Mysql_db();
        $conexao_db->conectar();

    }

    public function NovoContato($contato){

      $sql = "insert into tbl_fale (nome, email, telefone, celular, ocorencia, descritivo, unidade)";
      $sql = $sql."values('".$contato->nome."', '".$contato->email."', '".$contato->telefone."','".$contato->celular."', '".$contato->ocorrencia."'";
      $sql = $sql.",'".$contato->descritivo."', '".$contato->unidade."')";


      if(mysql_query($sql)){
          header('location:contato.php?sucesso=1');
      }else{
          header('location:contato.php?sucesso=0');
      }

    }

    //LISTAR TODOS
    public function ListarContato(){
      $sql = "select * from tbl_fale";
      if(mysql_query($sql)){
        $contador = 0;
        $select = mysql_query($sql);
        while($rs=mysql_fetch_array($select)){

            $contato[] = new Contato();

            $contato[$contador]->id_fale = $rs['id_fale'];
            $contato[$contador]->nome = $rs['nome'];
            $contato[$contador]->email = $rs['email'];
            $contato[$contador]->telefone = $rs['telefone'];
            $contato[$contador]->celular = $rs['celular'];
            $contato[$contador]->ocorrencia = $rs['ocorencia'];

            $contador += 1;
        }
        if(@$contato == 0){
?>
          <p class="nenhuma_cadastrada">Nenhum Contato Cadastrado</p>
<?php
        }else{
          return $contato;
        }
      }else{
        return false;
      }
    }

    //LISTAR POR ID
    public function ListarContatoId($contato){
      $sql="select f.id_fale, f.nome, f.email, f.telefone, f.celular, f.ocorencia, f.descritivo, r.nome AS unidade
            from tbl_fale as f
            inner join tbl_restaurante as r on  r.id_restaurante = f.unidade
            where f.id_fale = ".$contato->id_fale;
      if(mysql_query($sql)){

        $select = mysql_query($sql);
        if($rs = mysql_fetch_array($select)){
            $contato = new Contato();

            $contato->id_fale = $rs['id_fale'];
            $contato->nome = $rs['nome'];
            $contato->email = $rs['email'];
            $contato->telefone = $rs['telefone'];
            $contato->celular = $rs['celular'];
            $contato->ocorrencia = $rs['ocorencia'];
            $contato->descritivo = $rs['descritivo'];
            $contato->unidade = $rs['unidade'];

          return $contato;
        }else{
          return false;
        }
      }
    }


    public function Excluir($contato){
      $sql = "delete from tbl_fale where id_fale = ".$contato->id_fale;

      if(mysql_query($sql)){
        return true;
      }else{
        return false;
      }
    }


  }




?>
