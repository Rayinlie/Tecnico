<?php

require_once 'conexao.class.php';
require_once 'msgn.class.php';

interface IRepositorioMsgn{
    public function cadastrarMsgn($msgn);
    public function atualizarMsgn($msgn);
    public function buscarMsgn($msgn);
    public function removerMsgn($msgn);
    public function getlistaMsgn();
}
class RepositorioMsgnMySQL implements IRepositorioMsgn{
    private $conexao;
    //conexao
    public function __construct() {
        $this->conexao = new conexao("localhost", "root", "usbw", "helpix");
        if($this->conexao->conectar() == false){
            echo "Erro ".mysqli_error();
        }
    }
    //cadastra Msgn
    public function cadastrarMsgn($msgn) {
        $codigo = $msgn->getCodigo();
        $titulo = $msgn->gettitulo();
        $id_usuario = $msgn->getid_usuario();
        $mensagem = $msgn->getmensagem();
        
        $sql = "INSERT INTO mensagens (id_mens,titulo,id_usuario,mensagem) VALUES ('$codigo','$titulo','$id_usuario','$mensagem')";
        
        $this->conexao->executarQuery($sql);
    }
    // remove um Msgn da lista
    public function removerMsgn($codigo) {
        $sql = "DELETE FROM mensagens WHERE id_mens = '$codigo'";
        $this->conexao->executarQuery($sql);
    }
    // altera Msgn da lista
    public function atualizarMsgn($msgn){
        $codigo = $msgn->getCodigo();
        $titulo = $msgn->gettitulo();
        $id_usuario = $msgn->getid_usuario();
        $mensagem = $msgn->getmensagem();
        
        $sql = "UPDATE mensagens SET id_mens = '$codigo', titulo = '$titulo', id_usuario = '$id_usuario', mensagem = '$mensagem' WHERE id_mens = '$codigo'";
        $this->conexao->executarQuery($sql);
    }
    
    // Busca um novo Msgn a partir de seu codigo
    
    public function buscarMsgn($codigo) {
        $linha = $this->conexao->obtemPrimeiroRegistroQuery("SELECT * FROM mensagens WHERE id_mens = '$codigo'");
        return $linha;
    }
    
    public function verificarMsgn($titulo) {
        $registro = $this->conexao->obtemRegistroDuplicado("SELECT * FROM mensagens WHERE titulo = '$titulo'");
        return $registro;
    }
    public function verificarID($id_Msgn) {
        $registro = $this->conexao->obtemRegistroDuplicado("SELECT * FROM mensagens WHERE id_mens = '$id_Msgn'");
        return $registro;
    }
    public function getlistaMsgn() {
        $listagem_Msgn = $this->conexao->executarQuery("SELECT * FROM mensagens");
        return $listagem_Msgn;
    }

    public function verificarid_usuario($id_usuario) {
        $registro = $this->conexao->obtemRegistroDuplicado("SELECT * FROM mensagens WHERE id_usuario = '$id_usuario'");
        return $registro;
    }
    
    /*public function getlistaMsgn() {
        $listagem = $this->conexao->executarQuery("SELECT * FROM mensagens");
        $arrayMsgn = array();
        while ($linha = mysqli_fetch_array($listagem)){
            $msgn = new Msgn(
                $linha['id_mens'],
                $linha['titulo'],
                $linha['id_usuario'],
                $linha['mensagem']
            );
            array_push($arrayMsgn,$msgn);
        }
        return $arrayMsgn;
    }*/
}

$repositorio = new RepositorioMsgnMySQL();
?>
