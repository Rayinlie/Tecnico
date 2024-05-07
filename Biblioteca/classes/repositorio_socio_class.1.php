<?php

require 'conexao.class.php';
include 'socio.class.php';

interface IRepositoriosocio{
    public function cadastrarsocio($socio);
    public function atualizarsocio($socio);
    public function buscarsocio($socio);
    public function removersocio($socio);
    public function getlistasocio();
}
class RepositoriosocioMySQL implements IRepositoriosocio{
    private $conexao;
    //conexao
    public function __construct() {
        $this->conexao = new conexao("localhost", "root", "usbw", "biblioteca");
        if($this->conexao->conectar() == false){
            echo "Erro ".mysqli_error();
        }
    }
    //cadastra socio
    public function cadastrarsocio($socio) {
        $codigo = $socio->getCodigo();
        $nome=$socio->getNome();
        $email = $socio->getemail();
        $celular = $socio->getcelular();
        $telefone = $socio->gettelefone();
        
        $sql = "INSERT INTO socios (id_socios,nome,email,celular,telefone) VALUES ('$codigo','$nome','$email','$celular','$telefone')";
        
        $this->conexao->executarQuery($sql);
    }
    // remove um socio da lista
    public function removersocio($codigo) {
        $sql = "DELETE FROM socios WHERE id_socios = '$codigo'";
        $this->conexao->executarQuery($sql);
    }
    // altera socio da lista
    public function atualizarsocio($socio){
        $codigo = $socio->getCodigo();
        $nome = $socio->getNome();
        $email = $socio->getemail();
        $celular = $socio->getcelular();
        $telefone = $socio->gettelefone();
        
        $sql = "UPDATE socios SET id_socios = '$codigo', nome = '$nome', email = '$email',celular = '$celular', telefone = '$telefone' WHERE codigo = '$codigo'";
        
        $this->conexao->executarQuery($sql);
    }
    
    // Busca um novo socio a partir de seu codigo
    
    public function buscarsocio($codigo) {
        $linha = $this->conexao->obtemPrimeiroRegistroQuery("SELECT * FROM socios WHERE id_socios = '$codigo'");
        $socio = new socio(
             $linha['id_socios'],
             $linha['nome'],
             $linha['email'],
             $linha['celular'],
             $linha['telefone']
        );
        return $socio;
    }
    
    public function verificarsocio($nome) {
        $registro = $this->conexao->obtemRegistroDuplicado("SELECT * FROM socios WHERE nome = '$nome'");
        return $registro;
    }

    public function getlistasocio() {
        $listagem_socio = $this->conexao->executarQuery("SELECT * FROM socios");
        return $listagem_socio;
    }
    /*
    public function getlistasocio() {
        $listagem = $this->conexao->executarQuery("SELECT * FROM socios");
        $arraysocio = array();
        while ($linha = mysqli_fetch_array($listagem)){
            $socio = new socio(
                $linha['id_socios'],
                $linha['nome'],
                $linha['email'],
                $linha['celular'],
                $linha['telefone']
            );
            array_push($arraysocio,$socio);
        }
        return $arraysocio;
    }*/
}

$repositorio = new RepositoriosocioMySQL();
?>
