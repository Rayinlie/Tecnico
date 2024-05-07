<?php
    require_once 'classes/repositorio_autor_class.php';
    $registro_autor = new RepositorioAutorMySQL();
    $listagem_autor = $registro_autor->getlistaAutor();
?>
<table class="table-responsive border mt-5 table-bordered">
    <tr class="bg-light">
        <td class="px-2">ID</td>
        <td class="px-2">Nome</td>
        <td class="px-2">Descrição</td>
        <td class="px-2">Foto</td>
        <td class="px-2">Excluir</td>
    </tr>
<?php  
    while($reg_autor = mysqli_fetch_array($listagem_autor)){
    
    ?>
    <tr class="bg-light">
        <td class="px-2"><?php echo $reg_autor[0];?></td>
        <td class="px-2"><?php echo $reg_autor[1];?></td>
        <td class="px-2"><?php echo substr($reg_autor[2],0,10);?></td>
        <td class="px-2"><img class="img-thumbnail img-fluid w-50 h-50" src="imgs/autores/<?php echo $reg_autor[3];?>"></td>
     
        <td class="px-2"><button class="btn-success btn-md"><a href="excluir_autor.php?id=<?php echo $reg_autor[0];?>">Excluir</a></button></td>
    </tr>
    <br><br>
    <?php
    }
    ?>