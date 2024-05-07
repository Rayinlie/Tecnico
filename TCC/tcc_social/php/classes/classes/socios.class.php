<?php
 class socios {
    private $codigo;
    private $nome;
    private $email;
    private $telefone;
    private $celular;

    public function __construct($codigo,$nome,$email,$telefone, $celular) {
        $this->codigo=$codigo;
        $this->nome=$nome;
        $this->email=$email;
        $this->telefone=$telefone;
        $this->celular=$celular;
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

    function getTelefone() {
        return $this->telefone;
    }
    function getCelular() {
        return $this->celular;
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

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }
    function setCelular($celular) {
        $this->celular = $celular;
    }

}
