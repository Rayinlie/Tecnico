<?php
    require_once 'classes/repositorio_livro_class.php';
    require_once 'classes/repositorio_autor_class.php';
    require_once 'classes/repositorio_editora_class.php';
    $registro_livro = new RepositoriolivroMySQL();
    $listagem_livro = $registro_livro->getlistalivro();
    $registro_autor = new RepositorioAutorMySQL();
    $registro_editora = new RepositorioEditoraMySQL();
?>
<table class="table-responsive table-bordered">
    <tr class="table-light">
        <td class="px-2">ID</td>
        <td class="px-2">Titulo</td>
        <td class="px-2">Resumo</td>
        <td class="px-2">Autor</td>
        <td class="px-2">Editora</td>
        <td class="px-2">Emprestado</td>
    </tr>
    <tr class="table-light">
<?php  
    
    while($reg_livro = mysqli_fetch_array($listagem_livro)){
        ?>
        <td class="px-2"><?php echo $reg_livro[0];?></td>
        <td class="px-2"><?php echo $reg_livro[1];?></td>
        <td class="px-2"><?php echo $reg_livro[2];?></td>
        <td class="px-2"><?php
                $codigo = $reg_livro[3];
                $lista_autor = $registro_autor->buscarAutor($codigo);
            
            echo $lista_autor[1];?></td>
        <td class="px-2"><?php 
                $codigo = $reg_livro[4];
                $lista_editora = $registro_editora->buscarEditora($codigo);

            echo $lista_editora[1];?></td>
        <td class="px-2"><?php echo $reg_livro[5];?></td>
        <td class="px-2"><button class="btn-success btn-md"><a href="empresta.php?id=<?php echo $reg_livro[0];?>">Emprestar</a></button></td>
    </tr>
    <br><br>
    <?php
    }
    ?>