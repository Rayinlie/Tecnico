<?php

class autor {
    private $codigo;
    private $nome;
    private $foto;
    private $descricao;
    
    public function __construct($codigo,$nome,$foto,$descricao) {
        $this->codigo=$codigo;
        $this->nome=$nome;
        $this->foto=$foto;
        $this->descricao=$descricao;
    }
    
    function getCodigo() {
        return $this->codigo;
    }

    function getNome() {
        return $this->nome;
    }
    
    function getFoto(){
        return $this->foto;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }
    
    function setFoto($foto){
        $this->foto = $foto;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

}
