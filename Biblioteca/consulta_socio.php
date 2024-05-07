<?php
    require_once 'classes/repositorio_socio_class.php';
    $registro_socio = new RepositoriosocioMySQL();
    $listagem = $registro_socio->getlistasocio();
?>
<table class="table-responsive border mt-5">
    <tr class="bg-light">
        <td class="px-2">ID</td>
        <td class="px-2">Nome</td>
        <td class="px-2">Email</td>
        <td class="px-2">Celular</td>
        <td class="px-2">Telefone</td>
        <td class="px-2">Excluir</td>
    </tr>
<?php  
    while($reg_socio = mysqli_fetch_array($listagem)){
    
    ?>
    <tr class="bg-light">
        <td class="px-2"><?php echo $reg_socio[0];?></td>
        <td class="px-2"><?php echo $reg_socio[1];?></td>
        <td class="px-2"><?php echo $reg_socio[2];?></td>
        <td class="px-2"><?php echo $reg_socio[3];?></td>
        <td class="px-2"><?php echo $reg_socio[4];?></td>
        <td class="px-2"><button class="btn-success btn-md"><a href="excluir_socio.php?id=<?php echo $reg_socio[0];?>">Excluir</a></button></td>
    </tr>
    <br><br>
    <?php
    }
    ?>