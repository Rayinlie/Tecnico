<?php

class socio {
    private $codigo;
    private $nome;
    private $email;
    private $celular;
    private $telefone;
    
    public function __construct($codigo,$nome,$email,$celular,$telefone) {
        $this->codigo=$codigo;
        $this->nome=$nome;
        $this->email=$email;
        $this->celular=$celular;
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
    
    function getCelular() {
        return $this->celular;
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
    
    function setCelular($celular) {
        $this->celular = $celular;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }




}
