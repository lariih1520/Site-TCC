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

    public function ListarContato($contato){
      $sql = "SELECT * FROM tbl_fale";
      if(mysql_query($sql)){

        $contador=0;
        $select = mysql_query($sql);
        while($rs=mysql_fetch_array($select)){
            $contato[] = new Contato();

            $contato[$contador]->id_contato = $rs['id_fale'];
            $contato[$contador]->nome = $rs['nome'];
            $contato[$contador]->email = $rs['email'];
            $contato[$contador]->telefone = $rs['telefone'];
            $contato[$contador]->celular = $rs['celular'];
            $contato[$contador]->ocorrencia = $rs['ocorrencia'];
            $contato[$contador]->descritivo = $rs['descritivo'];

            $contador += 1;
        }
        return $contato;

      }else{
        return false;
      }


    }

  }



?>
