<?php

class conexao {
    private $Host;
    private $Usuario;
    private $Senha;
    private $Banco;
    private $Conexao;
    
    function __construct($Host,$Usuario,$Senha,$Banco) {
        $this->Host=$Host;
        $this->Usuario=$Usuario;
        $this->Senha=$Senha;
        $this->Banco=$Banco;
    }
    
    function conectar(){
        $this->Conexao = mysqli_connect($this->Host, $this->Usuario, $this->Senha, $this->Banco);
    
        if (mysqli_connect_errno($this->Conexao)){
            return false;
        } else {
            mysqli_query($this->Conexao,"SET NAMES 'utf-8;");
            return true;
        }
    }
    
    function executarQuery($sql){
        return mysqli_query($this->Conexao,$sql);
    }
       
}
