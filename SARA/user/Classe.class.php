<?php

class Classe {

    private $id_classe;
    private $classe;


    public function __contruct($id_classe, $classe){
        $this->id_classe = $id_classe;
        $this->classe = $classe;
    }

    function getid_classe(){
        return $this->id_classe;
    }
    function getclasse(){
        return $this->classe;
    }

    function setid_classe($id_classe){
        $this->id_classe = $id_classe;
    }
    function setclasse($classe){
        $this->classe = $classe;
    }

}

?>