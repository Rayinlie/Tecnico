<?php

class Familia {

    private $id_familia;
    private $familia;


    public function __contruct($id_familia, $familia){
        $this->id_familia = $id_familia;
        $this->familia = $familia;
    }

    function getid_familia(){
        return $this->id_familia;
    }
    function getfamilia(){
        return $this->familia;
    }

    function setid_familia($id_familia){
        $this->id_familia = $id_familia;
    }
    function setfamilia($familia){
        $this->familia = $familia;
    }

}

?>