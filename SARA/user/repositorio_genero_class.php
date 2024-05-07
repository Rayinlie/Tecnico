<?php

require_once 'conexao.class.php';
require_once 'Genero.class.php';

interface IRepositorioGenero{
    public function cadastrargenero($genero);
    // public function atualizargenero($genero);
    public function buscargenero($genero);
    // public function removergenero($genero);
    public function getlistagenero();
}
class RepositorioGeneroMySQL implements IRepositorioGenero{
    private $conexao;
    //conexao
    public function __construct() {
        $this->conexao = new conexao("localhost", "root", "usbw", "sara");
        if($this->conexao->conectar() == false){
            echo "Erro! Conexão não identificada".mysqli_error();
        }
    }
    //cadastra genero
    public function cadastrargenero($genero) {
        $id_genero = $genero->getid_genero();
        $genero = $genero->getgenero();

        $sql = "INSERT INTO genero (id_genero,genero) VALUES ('$id_genero','$genero')";

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
    //     $genero = $autor->getgenero();
    //     $foto = $autor->getFoto();
    //     $descricao = $autor->getDescricao();

    //     $sql = "UPDATE autores SET id_autor = '$codigo', genero = '$genero', foto = '$foto', descricao = '$descricao' WHERE codigo = '$codigo'";

    //     $this->conexao->executarQuery($sql);
    // }

    // Busca um novo autor a partir de seu codigo

    public function buscargenero($id_genero) {
        $linha = $this->conexao->obtemPrimeiroRegistroQuery("SELECT * FROM genero WHERE id_genero = '$id_genero'");
        return $linha;
    }

    public function verificargenero($genero) {
        $registro = $this->conexao->obtemRegistroDuplicado("SELECT * FROM genero WHERE genero = '$genero'");
        return $registro;
        if (!$registro){
            echo 'erro';
        }
    } 

    public function getlistagenero() {
        $lista_genero = $this->conexao->executarQuery("SELECT * FROM genero");
        return $lista_genero;
    }

}

$repositorio = new RepositorioGeneroMySQL();
?>
