<?php

require 'classes/repositorio_socio_class.php';

if (isset($_POST['Enviar'])=='Enviar'){
            $codigo = 0;
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $celular = $_POST['celular'];
            $telefone = $_POST['telefone'];
            $socioRecebido = new socio($codigo,$nome, $email,$celular, $telefone);
            $registro = $repositorio->verificarsocio($nome);
            if(!$registro){
                $repositorio->cadastrarsocio($socioRecebido);
                echo "Cadastrado com sucesso";
            } else {
                echo "socio já cadastrado";
                
            }
            header('Location:index.php');
        }
        
?>