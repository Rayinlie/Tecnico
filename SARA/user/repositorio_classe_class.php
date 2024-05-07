<?php

require_once 'conexao.class.php';
require_once 'Classe.class.php';

interface IRepositorioClasse{
    public function cadastrarclasse($classe);
    // public function atualizarclasse($classe);
    public function buscarclasse($classe);
    // public function removerclasse($classe);
    public function getlistaclasse();
}
class RepositorioClasseMySQL implements IRepositorioClasse{
    private $conexao;
    //conexao
    public function __construct() {
        $this->conexao = new conexao("localhost", "root", "usbw", "sara");
        if($this->conexao->conectar() == false){
            echo "Erro! Conexão não identificada".mysqli_error();
        }
    }
    //cadastra classe
    public function cadastrarclasse($classe) {
        $id_classe = $classe->getid_classe();
        $classe = $classe->getclasse();

        $sql = "INSERT INTO classe (id_classe,classe) VALUES ('$id_classe','$classe')";

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
    //     $classe = $autor->getclasse();
    //     $foto = $autor->getFoto();
    //     $descricao = $autor->getDescricao();

    //     $sql = "UPDATE autores SET id_autor = '$codigo', classe = '$classe', foto = '$foto', descricao = '$descricao' WHERE codigo = '$codigo'";

    //     $this->conexao->executarQuery($sql);
    // }

    // Busca um novo autor a partir de seu codigo

    public function buscarclasse($id_classe) {
        $linha = $this->conexao->obtemPrimeiroRegistroQuery("SELECT * FROM classe WHERE id_classe = '$id_classe'");
        return $linha;
    }

    public function verificarclasse($classe) {
        $registro = $this->conexao->obtemRegistroDuplicado("SELECT * FROM classe WHERE classe = '$classe'");
        return $registro;
        if (!$registro){
            echo 'erro';
        }
    } 

    public function getlistaclasse() {
        $lista_classe = $this->conexao->executarQuery("SELECT * FROM classe");
        return $lista_classe;
    }

}

$repositorio = new RepositorioClasseMySQL();
?>
