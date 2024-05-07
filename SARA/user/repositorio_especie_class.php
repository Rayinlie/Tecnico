<?php

require_once 'conexao.class.php';
require_once 'Especie.class.php';

interface IRepositorioEspecie{
    public function cadastrarespecie($especie);
    // public function atualizarespecie($especie);
    public function buscarespecie($especie);
    // public function removerespecie($especie);
    public function getlistaespecie();
}
class RepositorioEspecieMySQL implements IRepositorioEspecie{
    private $conexao;
    //conexao
    public function __construct() {
        $this->conexao = new conexao("localhost", "root", "usbw", "sara");
        if($this->conexao->conectar() == false){
            echo "Erro! Conexão não identificada".mysqli_error();
        }
    }
    //cadastra especie
    public function cadastrarespecie($especie) {
        $id_especie = $especie->getid_especie();
        $especie = $especie->getespecie();

        $sql = "INSERT INTO especie (id_especie,especie) VALUES ('$id_especie','$especie')";

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
    //     $especie = $autor->getespecie();
    //     $foto = $autor->getFoto();
    //     $descricao = $autor->getDescricao();

    //     $sql = "UPDATE autores SET id_autor = '$codigo', especie = '$especie', foto = '$foto', descricao = '$descricao' WHERE codigo = '$codigo'";

    //     $this->conexao->executarQuery($sql);
    // }

    // Busca um novo autor a partir de seu codigo

    public function buscarespecie($id_especie) {
        $linha = $this->conexao->obtemPrimeiroRegistroQuery("SELECT * FROM especie WHERE id_especie = '$id_especie'");
        return $linha;
    }

    public function verificarespecie($especie) {
        $registro = $this->conexao->obtemRegistroDuplicado("SELECT * FROM especie WHERE especie = '$especie'");
        return $registro;
        if (!$registro){
            echo 'erro';
        }
    } 

    public function getlistaespecie() {
        $lista_especie = $this->conexao->executarQuery("SELECT * FROM especie");
        return $lista_especie;
    }

}

$repositorio = new RepositorioEspecieMySQL();
?>
