<?php

require 'conexao.class.php';
include 'socios.class.php';

interface IRepositorioSocios{
    public function cadastrarSocios($socios);
    public function atualizarSocios($socios);
    public function buscarSocios($socios);
    public function removerSocios($socios);
    public function getlistaSocios();
}
class RepositorioSociosMySQL implements IRepositorioSocios{
    private $conexao;
    //conexao
    public function __construct() {
        $this->conexao = new conexao("localhost", "root", "", "test");
        if($this->conexao->conectar() == false){
            echo "Erro ".mysqli_error();
        }
    }
    //cadastra autor
    public function cadastrarSocios($socios) {
        $codigo = $socios->getCodigo();
        $nome=$socios->getNome();
        $email = $socios->getEmail();
        $telefone = $socios->getTelefone();
        $celular = $socios->getCelular();


        $sql = "INSERT INTO socios (id_socios,nome,email,telefone,celular) VALUES ('$codigo','$nome','$email','$telefone','$celular')";

        $this->conexao->executarQuery($sql);
    }
    // remove um autor da lista
    public function removerSocios($codigo) {
        $sql = "DELETE FROM socios WHERE id_socios = '$codigo'";
        $this->conexao->executarQuery($sql);
    }
    // altera autor da lista
    public function atualizarSocios($socios){
        $codigo =$socios->getCodigo();
        $nome = $socios->getNome();
        $email = $socios->getEmail();
        $telefone = $socios->getTelefone();
        $celular = $socios->getCelular();

        $sql = "UPDATE socios SET id_socios = '$codigo', nome = '$nome', email = '$email', telefone = '$telefone', celular = '$celular' WHERE codigo = '$codigo'";

        $this->conexao->executarQuery($sql);
    }

    // Busca um novo autor a partir de seu codigo

    public function buscarSocios($codigo) {
        $linha = $this->conexao->obtemPrimeiroRegistroQuery("SELECT * FROM socios WHERE id_socios = '$codigo'");
        $autor = new socios(
             $linha['codigo'],
             $linha['nome'],
             $linha['email'],
             $linha['telefone'],
             $linha['celular']

        );
        return $socios;
    }

    public function verificarSocios($nome) {
        $registro = $this->conexao->obtemRegistroDuplicado("SELECT * FROM socios WHERE nome = '$nome'");
        return $registro;
    }

    public function getlistaSocios() {
        $listagem = $this->conexao->executarQuery("SELECT * FROM socios");
        $arraySocios = array();
        while ($linha = mysqli_fetch_array($listagem)){
            $autor = new socios(
                $linha['id_socios'],
                $linha['nome'],
                $linha['email'],
                $linha['telefone'],
                $linha['celular']

            );
            array_push($arraySocios,$socios);
        }
        return $arraySocios;
    
} 
}

$repositorio = new RepositorioSociosMySQL();
?>
