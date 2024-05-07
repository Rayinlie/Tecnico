<?php

require_once 'conexao.class.php';
require_once 'autor.class.php';

interface IRepositorioAutor{
    public function cadastrarAutor($autor);
    public function atualizarAutor($autor);
    public function buscarAutor($autor);
    public function removerAutor($autor);
    public function getlistaAutor();
}
class RepositorioAutorMySQL implements IRepositorioAutor{
    private $conexao;
    //conexao
    public function __construct() {
        $this->conexao = new conexao("localhost", "root", "usbw", "biblioteca");
        if($this->conexao->conectar() == false){
            echo "Erro ".mysqli_error();
        }
    }
    //cadastra autor
    public function cadastrarAutor($autor) {
        $codigo = $autor->getCodigo();
        $nome=$autor->getNome();
        $foto = $autor->getFoto();
        $descricao = $autor->getDescricao();
        
        $sql = "INSERT INTO autores (id_autor,nome,foto,descricao) VALUES ('$codigo','$nome','$foto','$descricao')";
        
        $this->conexao->executarQuery($sql);
    }
    // remove um autor da lista
    public function removerAutor($codigo) {
        $sql = "DELETE FROM autores WHERE id_autor = '$codigo'";
        $this->conexao->executarQuery($sql);
    }
    // altera autor da lista
    public function atualizarAutor($autor){
        $codigo = $autor->getCodigo();
        $nome = $autor->getNome();
        $foto = $autor->getFoto();
        $descricao = $autor->getDescricao();
        
        $sql = "UPDATE autores SET id_autor = '$codigo', nome = '$nome', foto = '$foto', descricao = '$descricao' WHERE id_autor = '$codigo'";
        $this->conexao->executarQuery($sql);
    }
    
    // Busca um novo autor a partir de seu codigo
    
    public function buscarAutor($codigo) {
        $linha = $this->conexao->obtemPrimeiroRegistroQuery("SELECT * FROM autores WHERE id_autor = '$codigo'");
        return $linha;
    }
    
    public function verificarAutor($nome) {
        $registro = $this->conexao->obtemRegistroDuplicado("SELECT * FROM autores WHERE nome = '$nome'");
        return $registro;
    }
    
    public function getlistaAutor() {
        $listagem_autor = $this->conexao->executarQuery("SELECT * FROM autores");
        return $listagem_autor;
    }
    public function getlistaAutor2() {
        $listagem_autor = $this->conexao->obtemPrimeiroRegistroQuery("SELECT * FROM autores");
        return $listagem_autor;
    }
    /*public function getlistaAutor() {
        $listagem = $this->conexao->executarQuery("SELECT * FROM autores");
        $arrayAutor = array();
        while ($linha = mysqli_fetch_array($listagem)){
            $autor = new autor(
                $linha['id_autor'],
                $linha['nome'],
                $linha['foto'],
                $linha['descricao']
            );
            array_push($arrayAutor,$autor);
        }
        return $arrayAutor;
    }*/
}

$repositorio = new RepositorioAutorMySQL();
?>
