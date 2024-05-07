<?php

class Animais {

    private $id_animais;
    private $animal;
    private $id_especie;
    private $id_familia;
    private $id_classe;
    private $id_filo;
    private $id_ordem;
    private $id_genero;
    private $id_subspecie;


    public function __contruct($id_animais, $animal, $id_especie, $id_familia, $id_classe, $id_filo, $id_ordem, $id_genero, $id_subspecie){
        $this->id_animais = $id_animais;
        $this->animal = $animal;
        $this->id_especie = $id_especie;
        $this->id_familia = $id_familia;
        $this->id_classe = $id_classe;
        $this->id_filo = $id_filo;
        $this->id_ordem = $id_ordem;
        $this->id_genero = $id_genero;
        $this->id_subspecie = $id_subspecie;
    }

    function getid_animais(){
        return $this->id_animais;
    }
    function getanimais(){
        return $this->animal;
    }
    function getid_especie(){
        return $this->id_especie;
    }
    function getid_familia(){
        return $this->id_familia;
    }
    function getid_classe(){
        return $this->id_classe;
    }
    function getid_filo(){
        return $this->id_filo;
    }
    function getid_ordem(){
        return $this->id_ordem;
    }
    function getid_genero(){
        return $this->id_genero;
    }
    function getid_subspecie(){
        return $this->id_subspecie;
    }
    
    function setid_animais($id_animais){
        $this->id_animais = $id_animais;
    }
    function setanimais($animal){
        $this->animal = $animal;
    }
    function setid_especie($id_especie){
        $this->id_especie = $id_especie;
    }
    function setid_familia($id_familia){
        $this->id_familia = $id_familia;
    }
    function setid_classe($id_classe){
        $this->id_classe = $id_classe;
    }
    function setid_filo($id_filo){
        $this->id_filo = $id_filo;
    }
    function setid_ordem($id_ordem){
        $this->id_ordem = $id_ordem;
    }
    function setid_genero($id_genero){
        $this->id_genero = $id_genero;
    }
    function setid_subspecie($id_subspecie){
        $this->id_subspecie = $id_subspecie;
    }

}

?>