<?php

require_once 'conexao.class.php';
require_once 'Familia.class.php';

interface IRepositorioFamilia{
    public function cadastrarfamilia($familia);
    // public function atualizarfamilia($familia);
    public function buscarfamilia($familia);
    // public function removerfamilia($familia);
    public function getlistafamilia();
}
class RepositorioFamiliaMySQL implements IRepositorioFamilia{
    private $conexao;
    //conexao
    public function __construct() {
        $this->conexao = new conexao("localhost", "root", "usbw", "sara");
        if($this->conexao->conectar() == false){
            echo "Erro! Conexão não identificada".mysqli_error();
        }
    }
    //cadastra familia
    public function cadastrarfamilia($familia) {
        $id_familia = $familia->getid_familia();
        $familia = $familia->getfamilia();

        $sql = "INSERT INTO familia (id_familia,familia) VALUES ('$id_familia','$familia')";

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
    //     $familia = $autor->getfamilia();
    //     $foto = $autor->getFoto();
    //     $descricao = $autor->getDescricao();

    //     $sql = "UPDATE autores SET id_autor = '$codigo', familia = '$familia', foto = '$foto', descricao = '$descricao' WHERE codigo = '$codigo'";

    //     $this->conexao->executarQuery($sql);
    // }

    // Busca um novo autor a partir de seu codigo

    public function buscarfamilia($id_familia) {
        $linha = $this->conexao->obtemPrimeiroRegistroQuery("SELECT * FROM familia WHERE id_familia = '$id_familia'");
        return $linha;
    }

    public function verificarfamilia($familia) {
        $registro = $this->conexao->obtemRegistroDuplicado("SELECT * FROM familia WHERE familia = '$familia'");
        return $registro;
        if (!$registro){
            echo 'erro';
        }
    } 

    public function getlistafamilia() {
        $lista_familia = $this->conexao->executarQuery("SELECT * FROM familia");
        return $lista_familia;
    }

}

$repositorio = new RepositorioFamiliaMySQL();
?>
