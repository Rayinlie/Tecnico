<?php

class Ordem {

    private $id_ordem;
    private $ordem;


    public function __contruct($id_ordem, $ordem){
        $this->id_ordem = $id_ordem;
        $this->ordem = $ordem;
    }

    function getid_ordem(){
        return $this->id_ordem;
    }
    function getordem(){
        return $this->ordem;
    }

    function setid_ordem($id_ordem){
        $this->id_ordem = $id_ordem;
    }
    function setordem($ordem){
        $this->ordem = $ordem;
    }

}

?>