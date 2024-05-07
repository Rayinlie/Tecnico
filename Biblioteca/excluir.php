


<?php

$codigo = $_GET['id'];
    require_once 'classes/repositorio_editora_class.php';
    $registro_editora = new RepositorioEditoraMySQL();   
    $listagem_editora = $registro_editora->removerEditora($codigo);
    echo "Editora Removida com Sucesso!";
    header("Refresh: 5; url = index.php");
    ?>


