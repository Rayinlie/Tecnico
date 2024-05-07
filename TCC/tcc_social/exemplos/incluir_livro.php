<?php

require 'classes/repositorio_livro_class.php';

if (isset($_POST['Enviar'])=='Enviar'){
            $codigo = 0;
            $titulo = $_POST['titulo'];
            $resumo = $_POST['resumo'];
            $id_editora = $_POST['id_editora'];
            $id_autor = $_POST['id_autor'];
            $livro = new livro($codigo,$titulo, $resumo, $id_autor, $id_editora);
            $registro = $repositorio->verificarLivro($titulo);
            if(!$registro){
                $repositorio->cadastrarlivro($livro);
                echo "Cadastrado com sucesso";
            } else {
                echo "Livro já cadastrado";
                
            }
            header('Location:index.php');
        }
        
?>