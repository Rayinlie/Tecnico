<?php

class User {
    private $codigo;
    private $nome;
    private $email;
    private $senha;
    
    public function __construct($codigo,$nome,$email,$senha) {
        $this->codigo=$codigo;
        $this->nome=$nome;
        $this->email=$email;
        $this->senha=$senha;
    }
    
    function getCodigo() {
        return $this->codigo;
    }

    function getNome() {
        return $this->nome;
    }
    
    function getEmail(){
        return $this->email;
    }

    function getSenha() {
        return $this->senha;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }
    
    function setEmail($email){
        $this->email = $email;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

}
