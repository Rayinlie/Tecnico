<?php

require_once 'conexao.class.php';
require_once 'editora.class.php';

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
        $this->conexao = new conexao("localhost", "root", "", "biblioteca");
        if($this->conexao->conectar() == false){
            echo "Erro ".mysqli_error();
        }
    }
    //cadastra Editora
    public function cadastrarEditora($editora) {
        $codigo = $editora->getCodigo();
        $nome=$editora->getNome();
        $email = $editora->getemail();
        $telefone = $editora->gettelefone();
        
        $sql = "INSERT INTO editoras (id_editora,nome,email,telefone) VALUES ('$codigo','$nome','$email','$telefone')";
        
        $this->conexao->executarQuery($sql);
    }
    // remove um Editora da lista
    public function removerEditora($codigo) {
        $sql = "DELETE FROM editoras WHERE id_editora = '$codigo'";
        $this->conexao->executarQuery($sql);
    }
    // altera Editora da lista
    public function atualizarEditora($editora){
        $codigo = $editora->getCodigo();
        $nome = $editora->getNome();
        $email = $editora->getemail();
        $telefone = $editora->gettelefone();
        
        $sql = "UPDATE editoras SET id_editora = '$codigo', nome = '$nome', email = '$email', telefone = '$telefone' WHERE codigo = '$codigo'";
        
        $this->conexao->executarQuery($sql);
    }
    
    // Busca um novo Editora a partir de seu codigo
    
    public function buscarEditora($codigo) {
        $linha = $this->conexao->obtemPrimeiroRegistroQuery("SELECT * FROM editoras WHERE id_editora = '$codigo'");
        $editora = new Editora(
             $linha['id_editora'],
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
        return $listagem;
    }
        /*
    public function getlistaEditora() {
        $listagem = $this->conexao->executarQuery("SELECT * FROM editoras");
        $arrayEditora = array();
        while ($linha = mysqli_fetch_array($listagem)){
            $editora = new Editora(
                $linha['id_editora'],
                $linha['nome'],
                $linha['email'],
                $linha['telefone']
            );
            array_push($arrayEditora,$editora);
        }
        return $arrayEditora;
    }
    */
}

$repositorio = new RepositorioEditoraMySQL();
?>
