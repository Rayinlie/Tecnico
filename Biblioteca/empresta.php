<?php
    $codigo_livro = $_GET['id'];
    
    require_once 'classes/repositorio_livro_class.php';

    $registro_livro = new RepositoriolivroMySQL();

    
    $registro_livro = new RepositorioLivroMySQL();

    $lista_livro = $registro_livro->buscarLivro($codigo_livro);
    $codigo = $lista_livro[0];
    $titulo = $lista_livro[1];
    $resumo = $lista_livro[2];
    $id_autor = $lista_livro[3];
    $id_editora = $lista_livro[4];
    $emprestimo = "sim";
    $livroRecebido = new livro($codigo,$titulo, $resumo, $id_autor, $id_editora, $emprestimo);
    $registro_livro->atualizarlivro($livroRecebido);
    echo "Alterado com sucesso";
    header('Location:index.php');
?>