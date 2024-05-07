<?php

class Especie {

    private $id_especie;
    private $especie;

    public function __contruct($id_especie, $especie){
        $this->id_especie = $id_especie;
        $this->especie = $especie;
    }

    function getid_especie(){
        return $this->id_especie;
    }
    function getespecie(){
        return $this->especie;
    }

    function setid_especie($id_especie){
        $this->id_especie = $id_especie;
    }
    function setespecie($especie){
        $this->especie = $especie;
    }

}

?>