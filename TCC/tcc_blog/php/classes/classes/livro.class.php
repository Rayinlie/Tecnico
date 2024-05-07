<?php

class livro {
    private $codigo;
    private $titulo;
    private $id_autor;
    private $id_editora;
    private $resumo;
    
    public function __construct($codigo,$titulo,$resumo,$id_autor,$id_editora) {
        $this->codigo=$codigo;
        $this->titulo=$titulo;
        $this->id_autor=$id_autor;
        $this->id_editora=$id_editora;
        $this->resumo=$resumo;
    }
    
    function getCodigo() {
        return $this->codigo;
    }

    function gettitulo() {
        return $this->titulo;
    }
    
    function getresumo() {
        return $this->resumo;
    }

    function getid_autor() {
        return $this->id_autor;
    }

    function getid_editora() {
        return $this->id_editora;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function settitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setresumo($resumo) {
        $this->resumo = $resumo;
    }

    function setid_autor($id_autor) {
        $this->id_autor = $id_autor;
    }

    function setid_editora($id_editora) {
        $this->id_editora = $id_editora;
    }
}
