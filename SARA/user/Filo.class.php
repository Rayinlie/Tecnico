<?php

class Filo {

    private $id_filo;
    private $filo;

    public function __contruct($id_filo, $filo){
        $this->id_filo = $id_filo;
        $this->filo = $filo;
    }

    function getid_filo(){
        return $this->id_filo;
    }
    function getfilo(){
        return $this->filo;
    }

    function setid_filo($id_filo){
        $this->id_filo = $id_filo;
    }
    function setfilo($filo){
        $this->filo = $filo;
    }

}

?>