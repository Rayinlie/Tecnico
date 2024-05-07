<?php

class Genero {

    private $id_genero;
    private $genero;

    public function __contruct($id_genero, $genero){
        $this->id_genero = $id_genero;
        $this->genero = $genero;
    }

    function getid_genero(){
        return $this->id_genero;
    }
    function getgenero(){
        return $this->genero;
    }

    function setid_genero($id_genero){
        $this->id_genero = $id_genero;
    }
    function setgenero($genero){
        $this->genero = $genero;
    }

}

?>