<?php


/**
 *
 */
class Login
{

  public $id_motivo;
  public $titulo;
  public $descricao;

  public $url;


  public function __construct(){
    //Inclui arquivo de conexão
    require_once('model/db_class.php');

    //Abre a conexão com o Banco de Dados
    $conexao_db = new Mysql_db();
    $conexao_db->conectar();

  }

  public function ListarLogin(){

    $sql = "select * from tbl_motivo_login as tml
          	inner join tbl_imagem as tm on tm.id_imagem = tml.id_img
            where status = 1";

    if(mysql_query($sql)){

      $select = mysql_query($sql);

      $contador = 0;
      $lista = "";

        while($rs = mysql_fetch_array($select)){

          $lista[] = new Login();

          $lista[$contador]->id_motivo = $rs['id_motivo'];
          $lista[$contador]->titulo = $rs['titulo'];
          $lista[$contador]->descricao = $rs['descricao'];
          $lista[$contador]->url = $rs['url'];

          $contador += 1;
        }

        return $lista;

    }else {
        return false;
    }




}
}

?>
