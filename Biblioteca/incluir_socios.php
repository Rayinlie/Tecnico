<?php

require 'classes/repositorio_class_socios.php';

if (isset($_POST['Enviar'])=='Enviar'){
            $codigo = 0;
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $telefone = $_POST['telefone'];
            $celular = $_POST['celular'];
            $SociosRecebido = new socios($codigo,$nome, $email, $telefone, $celular);
            $registro = $repositorio->verificarSocios($nome);
            if(!$registro){
                $repositorio->cadastrarSocios($SociosRecebido);
                echo "Cadastrouuuuuu eh Tetra";
            } else {
                echo " Man, assim num foi ";

            }
            header('Location:index.php');
        }

?>
