<?php

class Post {
    private $codigo;
    private $titulo;
    private $id_usuario;
    private $postagem;
    private $id_tag;
    
    public function __construct($codigo,$titulo,$id_usuario,$postagem,$id_tag) {
        $this->codigo=$codigo;
        $this->titulo=$titulo;
        $this->id_usuario=$id_usuario;
        $this->postagem=$postagem;
        $this->tag=$id_tag;
    }
    
    function getCodigo() {
        return $this->codigo;
    }

    function gettitulo() {
        return $this->titulo;
    }
    
    function getid_usuario(){
        return $this->id_usuario;
    }

    function getid_tag() {
        return $this->id_tag;
    }

    function getpost() {
        return $this->postagem;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function settitulo($titulo) {
        $this->titulo = $titulo;
    }
    
    function setid_usuario($id_usuario){
        $this->id_usuario = $id_usuario;
    }

    function setpost($postagem) {
        $this->postagem = $postagem;
    }

    function setpostagemid_tag($id_tag) {
        $this->id_tag = $id_tag;
    }

}
