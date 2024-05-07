<div class="col-12">

    <?php

    require_once 'classes/repositorio_Livro_class.php';
    require_once 'classes/repositorio_autor_class.php';
    require_once 'classes/repositorio_editora_class.php';

    $registro_Livro = new RepositorioLivroMySQL();
    $registro_autor = new RepositorioAutorMySQL();
    $registro_editora = new RepositorioEditoraMySQL();

    $lista_Livro = $registro_Livro->getlistaLivro();



    ?>

    <table class="table-responsive table-bordered">
        <tr class="table-light">
            <td>Codigo</td>
            <td>Nome</td>
            <td>Resumo</td>
            <td>Autor</td>
            <td>Editora</td>
        </tr>
        <?php 
            while ($listagem_Livro= mysqli_fetch_array($lista_Livro)){
        ?>
        <tr class="table-light">
            <td class="px-2"><?php echo $listagem_Livro[0];?></td>
            <td class="px-2"><?php echo $listagem_Livro[1];?></td>
            <td class="px-2"><?php echo $listagem_Livro[2];?></td>
            <td class="px-2"><?php
                $codigo = $listagem_Livro[3];
                $lista_autor = $registro_autor->buscarAutor($codigo);
            
            echo $lista_autor[1];?></td>
            <td class="px-2"><?php 
                $codigo = $listagem_Livro[4];
                $lista_editora = $registro_editora->buscarEditora($codigo);

            echo $lista_editora[1];?></td>
            <td class="mx-auto"><button class="btn-success btn-md"><a href="alterar_Livro.php?id=<?php echo $listagem_Livro[0];?>">Alterar</a></button>
        </tr>
            <?php } ?>
    </table>
    <br><br>
</div>


