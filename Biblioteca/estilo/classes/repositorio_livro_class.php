<?php

require_once 'conexao.class.php';
require_once 'livro.class.php';

interface IRepositoriolivro{
    public function cadastrarlivro($livro);
    public function atualizarlivro($livro);
    public function buscarlivro($livro);
    public function removerlivro($livro);
    public function getlistalivro();
}
class RepositoriolivroMySQL implements IRepositoriolivro{
    private $conexao;
    //conexao
    public function __construct() {
        $this->conexao = new conexao("localhost", "root", "", "biblioteca");
        if($this->conexao->conectar() == false){
            echo "Erro ".mysqli_error();
        }
    }
    //cadastra livro
    public function cadastrarlivro($livro) {
        $codigo = $livro->getCodigo();
        $titulo = $livro->gettitulo();
        $resumo = $livro->getresumo();
        $id_autor = $livro->getid_autor();
        $id_editora = $livro->getid_editora();
        
        $sql = "INSERT INTO livros (id_livro,titulo,resumo,id_autor,id_editora) VALUES ('$codigo','$titulo','$resumo','$id_autor','$id_editora')";
        
        $this->conexao->executarQuery($sql);
    }
    // remove um livro da lista
    public function removerlivro($codigo) {
        $sql = "DELETE FROM livros WHERE id_livro = '$codigo'";
        $this->conexao->executarQuery($sql);
    }
    // altera livro da lista
    public function atualizarlivro($livro){
        $codigo = $livro->getCodigo();
        $titulo = $livro->gettitulo();
        $resumo = $livro->getresumo();
        $id_autor = $livro->getid_autor();
        $id_editora = $livro->getid_editora();
        
        $sql = "UPDATE livros SET id_livro = '$codigo', titulo = '$titulo', resumo = '$resumo',id_autor = '$id_autor', id_editora = '$id_editora' WHERE codigo = '$codigo'";
        
        $this->conexao->executarQuery($sql);
    }
    
    // Busca um novo livro a partir de seu codigo
    
    public function buscarlivro($codigo) {
        $linha = $this->conexao->obtemPrimeiroRegistroQuery("SELECT * FROM livros WHERE id_livro = '$codigo'");
        $livro = new livro(
             $linha['id_livro'],
             $linha['titulo'],
             $linha['resumo'],
             $linha['id_autor'],
             $linha['id_editora']
        );
        return $livro;
    }
    
    public function verificarlivro($titulo) {
        $registro = $this->conexao->obtemRegistroDuplicado("SELECT * FROM livros WHERE titulo = '$titulo'");
        return $registro;
    }
    public function getlistalivro() {
        $listagem_livro = $this->conexao->executarQuery("SELECT * FROM livros");
        return $listagem_livro;
    }
    /*
    public function getlistalivro() {
        $listagem = $this->conexao->executarQuery("SELECT * FROM livros");
        $arraylivro = array();
        while ($linha = mysqli_fetch_array($listagem)){
            $livro = new livro(
                $linha['id_livro'],
                $linha['titulo'],
                $linha['resumo'],
                $linha['id_autor'],
                $linha['id_editora']
            );
            array_push($arraylivro,$livro);
        }
        return $arraylivro;
    }*/
}

$repositorio = new RepositoriolivroMySQL();
?>
