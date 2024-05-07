<?php
    require_once 'classes/repositorio_editora_class.php';
    $registro_editora = new RepositorioEditoraMySQL();
    $listagem_editora = $registro_editora->getlistaEditora();
?>
<table class="table-responsive border mt-5">
    <tr class="bg-light">
        <td class="px-2">ID</td>
        <td class="px-2">Nome</td>
        <td class="px-2">Email</td>
        <td class="px-2">Telefone</td>
        <td class="px-2">Excluir</td>
    </tr>
<?php  
    while ($reg_editora = mysqli_fetch_array($listagem_editora)){
    
    ?>
    <tr class="bg-light">
        <td class="px-2"><?php echo $reg_editora[0];?></td>
        <td class="px-2"><?php echo $reg_editora[1];?></td>
        <td class="px-2"><?php echo $reg_editora[2];?></td>
        <td class="px-2"><?php echo $reg_editora[3];?></td>
        <td class="px-2"><button class="btn-success btn-md"><a href="excluir.php?id=<?php echo $reg_editora[0];?>">Excluir</a></button></td>
    </tr>
    <br><br>
    <?php
    }
    ?>