<?php

require_once 'conexao.class.php';
require_once 'user.class.php';

interface IRepositorioUser{
    public function cadastrarUser($user);
    public function atualizarUser($user);
    public function buscarUser($user);
    public function removerUser($user);
    public function getlistaUser();
}
class RepositorioUserMySQL implements IRepositorioUser{
    private $conexao;
    //conexao
    public function __construct() {
        $this->conexao = new conexao("localhost", "root", "usbw", "helpix");
        if($this->conexao->conectar() == false){
            echo "Erro ".mysqli_error();
        }
    }
    //cadastra User
    public function cadastrarUser($user) {
        $codigo = $user->getCodigo();
        $nome = $user->getNome();
        $email = $user->getemail();
        $senha = $user->getsenha();
        
        $sql = "INSERT INTO usuarios (id_usuario,nome,email,senha) VALUES ('$codigo','$nome','$email','$senha')";
        
        $this->conexao->executarQuery($sql);
    }
    // remove um User da lista
    public function removerUser($codigo) {
        $sql = "DELETE FROM usuarios WHERE id_usuario = '$codigo'";
        $this->conexao->executarQuery($sql);
    }
    // altera User da lista
    public function atualizarUser($user){
        $codigo = $user->getCodigo();
        $nome = $user->getNome();
        $email = $user->getemail();
        $senha = $user->getsenha();
        
        $sql = "UPDATE usuarios SET id_usuario = '$codigo', nome = '$nome', email = '$email', senha = '$senha' WHERE id_usuario = '$codigo'";
        $this->conexao->executarQuery($sql);
    }
    
    // Busca um novo User a partir de seu codigo
    
    public function buscarUser($codigo) {
        $linha = $this->conexao->obtemPrimeiroRegistroQuery("SELECT * FROM usuarios WHERE id_usuario = '$codigo'");
        return $linha;
    }
    
    public function verificarUser($nome) {
        $registro = $this->conexao->obtemRegistroDuplicado("SELECT * FROM usuarios WHERE nome = '$nome'");
        return $registro;
    }
    public function verificarID($id_user) {
        $registro = $this->conexao->obtemRegistroDuplicado("SELECT * FROM usuarios WHERE id_usuario = '$id_user'");
        return $registro;
    }
    public function getlistaUser() {
        $listagem_User = $this->conexao->executarQuery("SELECT * FROM usuarios");
        return $listagem_User;
    }

    public function verificarEmail($email) {
        $registro = $this->conexao->obtemRegistroDuplicado("SELECT * FROM usuarios WHERE email = '$email'");
        return $registro;
    }
    
    /*public function getlistaUser() {
        $listagem = $this->conexao->executarQuery("SELECT * FROM usuarios");
        $arrayUser = array();
        while ($linha = mysqli_fetch_array($listagem)){
            $user = new User(
                $linha['id_usuario'],
                $linha['nome'],
                $linha['email'],
                $linha['senha']
            );
            array_push($arrayUser,$user);
        }
        return $arrayUser;
    }*/
}

$repositorio = new RepositorioUserMySQL();
?>
