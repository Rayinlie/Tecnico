<?php

require 'classes/repositorio_autor_class.php';
$codigo = $_GET['codigo'];
$pesquisa = $repositorio->buscarAutor($codigo);
?>