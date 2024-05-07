<?php

class usuario {
    private $id_usuario;
    private $nome_usuario;
    private $email_usuario;
    private $senha_usuario;
    private $tipo_usuario;
    
    public function __construct($id_usuario,$nome_usuario,$email_usuario,$senha_usuario,$tipo_usuario) {
        $this->id_usuario=$id_usuario;
        $this->nome_usuario=$nome_usuario;
        $this->email_usuario=$email_usuario;
        $this->senha_usuario=$senha_usuario;
        $this->tipo_usuario=$tipo_usuario;
    }
    
    function getId_usuario() {
        return $this->id_usuario;
    }

    function getNome_usuario() {
        return $this->nome_usuario;
    }

    function getEmail_usuario() {
        return $this->email_usuario;
    }

    function getSenha_usuario() {
        return $this->senha_usuario;
    }

    function getTipo_usuario() {
        return $this->tipo_usuario;
    }

    function setId_usuario($id_usuario) {
        $this->id_usuario = $id_usuario;
        return $this;
    }

    function setNome_usuario($nome_usuario) {
        $this->nome_usuario = $nome_usuario;
        return $this;
    }

    function setEmail_usuario($email_usuario) {
        $this->email_usuario = $email_usuario;
        return $this;
    }

    function setSenha_usuario($senha_usuario) {
        $this->senha_usuario = $senha_usuario;
        return $this;
    }

    function setTipo_usuario($tipo_usuario) {
        $this->tipo_usuario = $tipo_usuario;
        return $this;
    }


}
