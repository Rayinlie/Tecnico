<?php

require 'classes/repositorio_autor_class.php';

if (isset($_POST['Enviar'])=='Enviar'){
            $codigo = 0;
            $nome = $_POST['nome'];
            $foto = $_POST['file'];
            $descricao = $_POST['descricao'];
            $autorRecebido = new autor($codigo,$nome, $foto, $descricao);
            $registro = $repositorio->verificarAutor($nome);
            if(!$registro){
                $repositorio->cadastrarAutor($autorRecebido);
                echo "Cadastrado com sucesso";
            } else {
                echo "Autor já cadastrado";
                
            }
            header('Location:index.php');
        }
        
?>