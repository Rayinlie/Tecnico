<?php
session_start();
require 'php/classes/repositorio_msgn_class.php';
            $codigo = 0;
            $titulo = $_POST['titulo'];
            $user = $_SESSION['id'];
            $mensagem = $_POST['postagem'];
            $post = new Msgn($codigo,$titulo, $user, $mensagem);
            $repositorio->cadastrarMsgn($post);
            header('Location:perfil.php?id='.$id_user);

?>