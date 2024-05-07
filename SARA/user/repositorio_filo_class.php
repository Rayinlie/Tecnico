<?php

require_once 'conexao.class.php';
require_once 'Filo.class.php';

interface IRepositorioFilo{
    public function cadastrarfilo($filo);
    // public function atualizarfilo($filo);
    public function buscarfilo($filo);
    // public function removerfilo($filo);
    public function getlistafilo();
}
class RepositorioFiloMySQL implements IRepositorioFilo{
    private $conexao;
    //conexao
    public function __construct() {
        $this->conexao = new conexao("localhost", "root", "usbw", "sara");
        if($this->conexao->conectar() == false){
            echo "Erro! Conexão não identificada".mysqli_error();
        }
    }
    //cadastra filo
    public function cadastrarfilo($filo) {
        $id_filo = $filo->getid_filo();
        $filo = $filo->getfilo();

        $sql = "INSERT INTO filo (id_filo,filo) VALUES ('$id_filo','$filo')";

        $this->conexao->executarQuery($sql);
    }
    // // remove um autor da lista
    // public function removerAutor($codigo) {
    //     $sql = "DELETE FROM autores WHERE id_autor = '$codigo'";
    //     $this->conexao->executarQuery($sql);
    // }
    // // altera autor da lista
    // public function atualizarAutor($autor){
    //     $codigo = $autor->getCodigo();
    //     $filo = $autor->getfilo();
    //     $foto = $autor->getFoto();
    //     $descricao = $autor->getDescricao();

    //     $sql = "UPDATE autores SET id_autor = '$codigo', filo = '$filo', foto = '$foto', descricao = '$descricao' WHERE codigo = '$codigo'";

    //     $this->conexao->executarQuery($sql);
    // }

    // Busca um novo autor a partir de seu codigo

    public function buscarfilo($id_filo) {
        $linha = $this->conexao->obtemPrimeiroRegistroQuery("SELECT * FROM filo WHERE id_filo = '$id_filo'");
        return $linha;
    }

    public function verificarfilo($filo) {
        $registro = $this->conexao->obtemRegistroDuplicado("SELECT * FROM filo WHERE filo = '$filo'");
        return $registro;
        if (!$registro){
            echo 'erro';
        }
    } 

    public function getlistafilo() {
        $lista_filo = $this->conexao->executarQuery("SELECT * FROM filo");
        return $lista_filo;
    }

}

$repositorio = new RepositorioFiloMySQL();
?>
