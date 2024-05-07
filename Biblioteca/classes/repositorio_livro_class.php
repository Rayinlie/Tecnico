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
        $this->conexao = new conexao("localhost", "root", "usbw", "biblioteca");
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
        $emprestimo = $livro->getemprestimo();
        
        $sql = "UPDATE livros SET id_livro = '$codigo', titulo = '$titulo', resumo = '$resumo',id_autor = '$id_autor', id_editora = '$id_editora', emprestimo = '$emprestimo' WHERE id_livro = '$codigo'";
        
        $this->conexao->executarQuery($sql);
    }
    //Alterar Emprestimo
    public function emprestar($livro){
        $codigo = $livro->getCodigo();
        $sql = "UPDATE livros SET emprestimo = '$emprestimo' WHERE id_livro = '$codigo'";
    }
    
    // Busca um novo livro a partir de seu codigo
    
    public function buscarlivro($codigo) {
        $listagem_livro = $this->conexao->obtemPrimeiroRegistroQuery("SELECT * FROM livros WHERE id_livro = '$codigo'");
        return $listagem_livro;
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
        while ($listagem_livro = mysqli_fetch_array($listagem)){
            $livro = new livro(
                $listagem_livro['id_livro'],
                $listagem_livro['titulo'],
                $listagem_livro['resumo'],
                $listagem_livro['id_autor'],
                $listagem_livro['id_editora']
            );
            array_push($arraylivro,$livro);
        }
        return $arraylivro;
    }*/


}

$repositorio = new RepositoriolivroMySQL();
?>
