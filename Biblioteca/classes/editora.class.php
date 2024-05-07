<?php

class editora {
    private $codigo;
    private $nome;
    private $email;
    private $telefone;
    
    public function __construct($codigo,$nome,$email,$telefone) {
        $this->codigo=$codigo;
        $this->nome=$nome;
        $this->email=$email;
        $this->telefone=$telefone;
    }
    
    function getCodigo() {
        return $this->codigo;
    }

    function getNome() {
        return $this->nome;
    }

    function getEmail() {
        return $this->email;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }




}
