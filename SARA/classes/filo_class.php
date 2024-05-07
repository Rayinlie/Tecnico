
<?php

    class Filo {

        private $id_filo;
        private $nome;
        private $carac_filo;

        public function __contruct($id_filo, $nome, $carac_filo){
            $this->id_filo = $id_filo;
            $this->nome = $nome;
            $this->carac_filo = $carac_filo;
        }

        function getid_filo(){
            return $this->id_filo;
        }
        function getnome(){
            return $this->nome;
        }
        function getcarac_filo(){
            return $this->carac_filo;
        }

        function setid_filo($id_filo){
            $this->id_filo = $id_filo;
        }
        function setnome($nome){
            $this->nome = $nome;
        }
        function setcarac_filo($carac_filo){
            $this->carac_filo = $carac_filo;
        }

    }

?>