<?php

require_once 'conexao/conexao.php';
require_once 'usuarios/usuario.php';

interface IRepositorioUsuario {
    public function Incluir_Usuario($Usuario);
    public function Logar_Usuario($Usuario);
    public function Buscar_Usuario($nome_usuario,$senha_usuario);
}

class repositorio_usuario implements IRepositorioUsuario {
    private $conexao;
    public function __construct() {
        $this->conexao = new conexao('localhost', 'root', '', 'usuarios');
        if($this->conexao->conectar()==false){
            echo "Erro ". mysqli_error();
        }
    }
    
    public function Incluir_Usuario($Usuario_Novo) {
        $Id_Usuario = $Usuario_Novo->getId_usuario();
        $Nome_Usuario = $Usuario_Novo->getNome_usuario();
        $Email_Usuario = $Usuario_Novo->getEmail_usuario();
        $Senha_Usuario = $Usuario_Novo->getSenha_usuario();
        $Tipo_Usuario = $Usuario_Novo->getTipo_usuario();
        
        $sql = "INSERT INTO tbl_usuarios (id_usuario,nome_usuario,email_usuario,senha_usuario,tipo_usuario) VALUES"
                . "('$Id_Usuario','$Nome_Usuario','$Email_Usuario','$Senha_Usuario','$Tipo_Usuario')";
        
        $this->conexao->executarQuery($sql);
    }
    
    public function Logar_Usuario($Usuario) {
        
    }
    
    public function Buscar_Usuario($email_usuario,$senha_usuario) {
        $sql = "SELECT * from tbl_usuarios WHERE email_usuario = '$email_usuario' AND senha_usuario = '$senha_usuario'";
        $Registro_Usuario = $this->conexao->executarQuery($sql);
        return $Registro_Usuario;
    }
}

$Repositorio_Usuario = new repositorio_usuario();
