<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <!-- Latest compiled and minified CSS -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="estilo/estilo.css">
        <!-- jQuery library -->
        
        <title></title>
    </head>
    <body class="bg">
<?php

$codigo = $_GET['id'];
    require_once 'classes/repositorio_Livro_class.php';
    $registro_Livro = new RepositorioLivroMySQL();   
    $listagem_Livro = $registro_Livro->removerLivro($codigo);
    echo "Livro Removido com Sucesso!";
    header("Refresh: 5; url = index.php");
    ?>

</body>
</html>