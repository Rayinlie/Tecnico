<?php

$codigo = $_GET['id'];
    require_once 'classes/repositorio_Autor_class.php';
    $registro_Autor = new RepositorioAutorMySQL();   
    $listagem_Autor = $registro_Autor->removerAutor($codigo);
    echo "Autor Removido com Sucesso!";
?>