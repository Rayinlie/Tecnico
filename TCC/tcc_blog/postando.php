<?php
session_start();
require 'php/classes/repositorio_post_class.php';

if (isset($_POST['Enviar'])=='Enviar'){
            $codigo = 0;
            $titulo = $_POST['titulo'];
            $id_user = $_SESSION['id'];
            $postar = $_POST['postagem'];
            $id_tag = $_POST['tag'];
            $post = new post($codigo,$titulo, $id_user, $postar, $id_tag);
            $registro = $repositorio->verificarPost($titulo);
            $repositorio->cadastrarPost($post);
            header('Location:perfil.php?id='.$id_user);
}
?>