<?php

require_once 'conexao.class.php';
require_once 'Ordem.class.php';

interface IRepositorioOrdem{
    public function cadastrarordem($ordem);
    // public function atualizarordem($ordem);
    public function buscarordem($ordem);
    // public function removerordem($ordem);
    public function getlistaordem();
}
class RepositorioOrdemMySQL implements IRepositorioOrdem{
    private $conexao;
    //conexao
    public function __construct() {
        $this->conexao = new conexao("localhost", "root", "usbw", "sara");
        if($this->conexao->conectar() == false){
            echo "Erro! Conexão não identificada".mysqli_error();
        }
    }
    //cadastra ordem
    public function cadastrarordem($ordem) {
        $id_ordem = $ordem->getid_ordem();
        $ordem = $ordem->getordem();

        $sql = "INSERT INTO ordem (id_ordem,ordem) VALUES ('$id_ordem','$ordem')";

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
    //     $ordem = $autor->getordem();
    //     $foto = $autor->getFoto();
    //     $descricao = $autor->getDescricao();

    //     $sql = "UPDATE autores SET id_autor = '$codigo', ordem = '$ordem', foto = '$foto', descricao = '$descricao' WHERE codigo = '$codigo'";

    //     $this->conexao->executarQuery($sql);
    // }

    // Busca um novo autor a partir de seu codigo

    public function buscarordem($id_ordem) {
        $linha = $this->conexao->obtemPrimeiroRegistroQuery("SELECT * FROM ordem WHERE id_ordem = '$id_ordem'");
        return $linha;
    }

    public function verificarordem($ordem) {
        $registro = $this->conexao->obtemRegistroDuplicado("SELECT * FROM ordem WHERE ordem = '$ordem'");
        return $registro;
        if (!$registro){
            echo 'erro';
        }
    } 

    public function getlistaordem() {
        $lista_ordem = $this->conexao->executarQuery("SELECT * FROM ordem");
        return $lista_ordem;
    }

}

$repositorio = new RepositorioOrdemMySQL();
?>
