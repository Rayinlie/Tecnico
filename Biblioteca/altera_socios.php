<div class="col-12">

    <?php

    require_once 'classes/repositorio_socio_class.php';

    $registro_socio = new RepositoriosocioMySQL();

    $lista_socio = $registro_socio->getlistaSocio();


    ?>

    <table class="table-responsive table-bordered">
        <tr class="table-light">
            <td class="px-2">Codigo</td>
            <td class="px-2">Nome</td>
            <td class="px-2">Email</td>
            <td class="px-2">Celular</td>
            <td class="px-2">Telefone</td>
        </tr>
        <?php 
            while ($listagem_socio= mysqli_fetch_array($lista_socio)){
        ?>
        <tr class="table-light">
            <td class="px-2"><?php echo $listagem_socio[0];?></td>
            <td class="px-2"><?php echo $listagem_socio[1];?></td>
            <td class="px-2"><?php echo $listagem_socio[2];?></td>
            <td class="px-2"><?php echo $listagem_socio[3];?></td>
            <td class="px-2"><?php echo $listagem_socio[4];?></td>
            <td class="mx-auto"><button class="btn-success btn-md"><a href="alterar_socio.php?id=<?php echo $listagem_socio[0];?>">Alterar</a></button>
        </tr>
            <?php } ?>
    </table>
    <br><br>
</div>


