<?php

require 'classes/repositorio_editora_class.php';

if (isset($_POST['Enviar'])=='Enviar'){
            $codigo = 0;
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $telefone = $_POST['telefone'];
            $editoraRecebido = new editora($codigo,$nome, $email, $telefone);
            $registro = $repositorio->verificareditora($nome);
            if(!$registro){
                $repositorio->cadastrareditora($editoraRecebido);
                echo "Cadastrado com sucesso";
            } else {
                echo "editora já cadastrado";
                
            }
            header('Location:index.php');
        }
        
?>