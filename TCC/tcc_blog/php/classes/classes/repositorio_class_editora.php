<?php

require 'conexao.class.php';
include 'editora.class.php';

interface IRepositorioEditora{
    public function cadastrarEditora($editora);
    public function atualizarEditora($editora);
    public function buscarEditora($editora);
    public function removerEditora($editora);
    public function getlistaEditora();
}
class RepositorioEditoraMySQL implements IRepositorioEditora{
    private $conexao;
    //conexao
    public function __construct() {
        $this->conexao = new conexao("localhost", "root", "usbw", "test");
        if($this->conexao->conectar() == false){
            echo "Erro ".mysqli_error();
        }
    }
    //cadastra autor
    public function cadastrarEditora($editora) {
        $codigo = $editora->getCodigo();
        $nome=$editora->getNome();
        $email = $editora->getEmail();
        $telefone = $editora->getTelefone();

        $sql = "INSERT INTO editoras (id_editora,nome,email,telefone) VALUES ('$codigo','$nome','$email','$telefone')";

        $this->conexao->executarQuery($sql);
    }
    // remove um autor da lista
    public function removerEditora($codigo) {
        $sql = "DELETE FROM editoras WHERE codigo = '$codigo'";
        $this->conexao->executarQuery($sql);
    }
    // altera autor da lista
    public function atualizarEditora($autor){
        $codigo =$editora->getCodigo();
        $nome = $editora->getNome();
        $email = $editora->getEmail();
        $telefone = $editora->getTelefone();

        $sql = "UPDATE editoras SET id_editora = '$codigo', nome = '$nome', email = '$email', telefone = '$telefone' WHERE codigo = '$codigo'";

        $this->conexao->executarQuery($sql);
    }

    // Busca um novo autor a partir de seu codigo

    public function buscarEditora($codigo) {
        $linha = $this->conexao->obtemPrimeiroRegistroQuery("SELECT * FROM editoras WHERE id_autor = '$codigo'");
        $autor = new editora(
             $linha['codigo'],
             $linha['nome'],
             $linha['email'],
             $linha['telefone']
        );
        return $editora;
    }

    public function verificarEditora($nome) {
        $registro = $this->conexao->obtemRegistroDuplicado("SELECT * FROM editoras WHERE nome = '$nome'");
        return $registro;
    }

    public function getlistaEditora() {
        $listagem = $this->conexao->executarQuery("SELECT * FROM editoras");
        $arrayEditora = array();
        while ($linha = mysqli_fetch_array($listagem)){
            $autor = new editora(
                $linha['id_editora'],
                $linha['nome'],
                $linha['email'],
                $linha['telefone']
            );
            array_push($arrayEditora,$editora);
        }
        return $arrayEditora;
    }
}

$repositorio = new RepositorioEditoraMySQL();
?>
