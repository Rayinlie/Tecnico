<?php

class Msgn {
    private $codigo;
    private $titulo;
    private $id_usuario;
    private $mensagem;
    
    public function __construct($codigo,$titulo,$id_usuario,$mensagem) {
        $this->codigo=$codigo;
        $this->titulo=$titulo;
        $this->id_usuario=$id_usuario;
        $this->mensagem=$mensagem;
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

    function getmensagem() {
        return $this->mensagem;
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

    function setmensagem($mensagem) {
        $this->mensagem = $mensagem;
    }

}
