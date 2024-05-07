<?php

require 'classes/repositorio_user_class.php';

if (isset($_POST['Enviar'])=='Enviar'){
            $codigo = 0;
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $userRecebido = new User($codigo,$nome, $email, $senha);
            $registro = $repositorio->verificarUser($nome);
            if(!$registro){
                $repositorio->cadastrarUser($userRecebido);
                echo "Cadastrado com sucesso";
            } else {
                echo "Usuário já cadastrado";
                
            }
            header('../Location:index.php');
        }
        
?>