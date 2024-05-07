<div class="col-12">

    <?php

    require_once 'classes/repositorio_editora_class.php';

    $registro_editora = new RepositorioEditoraMySQL();

    $lista_editora = $registro_editora->getlistaEditora();


    ?>

    <table class="table-responsive table-bordered">
        <tr class="table-light">
            <td class="px-2">Codigo</td>
            <td class="px-2">Nome</td>
            <td class="px-2">Email</td>
            <td class="px-2">Telefone</td>
        </tr>
        <?php 
            while ($listagem_editora= mysqli_fetch_array($lista_editora)){
        ?>
        <tr class="table-light">
            <td class="px-2"><?php echo $listagem_editora[0];?></td>
            <td class="px-2"><?php echo $listagem_editora[1];?></td>
            <td class="px-2"><?php echo $listagem_editora[2];?></td>
            <td class="px-2"><?php echo $listagem_editora[3];?></td>
            <td class="mx-auto"><button class="btn-success btn-md"><a href="alterar_editora.php?id=<?php echo $listagem_editora[0];?>">Alterar</a></button>
        </tr>
            <?php } ?>
    </table>
    <br><br>
</div>


