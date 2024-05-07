<!DOCTYPE html>
<html>
<?php
    $codigo_autor = $_GET['id'];
    
    require_once 'classes/repositorio_autor_class.php';

    $registro_autor = new RepositorioAutorMySQL();

    $lista_autor = $registro_autor->buscarAutor($codigo_autor);
    
?>
    <head>
        <meta charset="UTF-8">
        <!-- Latest compiled and minified CSS -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="estilo/estilo.css">
  
        
        <title></title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12 bg-primary" >
                    <h1 class="display-4">Alteração Autor</h1>
                </div>
            </div>
             
                <div class="row">
                    <div class="col-12 bg-light">
                        <form action="" method="POST">
                    <div class=" form-group">
                      <input type="hidden" name="codigo" class="form-control" id="IdAutor" aria-describedby="IdAutor" placeholder="ID do Autor" value="<?php echo $lista_autor[0];?>">
                    </div>
                    <div class=" form-group">
                      <label for="NomeAutor">Nome do Autor</label>
                      <input type="text" name="nome" class="form-control" id="NomeAutor" aria-describedby="nomeAutor" placeholder="Nome do Autor" value="<?php echo $lista_autor[1];?>">
                    </div>
                    <div class="form-group">
                      <label for="Descricao">Descrição</label>
                      <textarea class="form-control" name="descricao" id="descricao" rows="7"><?php echo $lista_autor[2];?></textarea>
                    </div>
                    <div class="form-group">
                      <img class="img-thumbnail img-fluid" src="imgs/autores/<?php echo $lista_autor[3];?>">
                      <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    
                    <input type="submit" name="alterar" value="alterar" class="btn btn-primary">
              
                 </form>
 
                    </div>
                </div>
        </div>
        <?php
            if(isset($_POST['alterar'])){
                $codigo = $_POST['codigo'];
                $nome = $_POST['nome'];
                $foto = $_POST['file'];
                $descricao = $_POST['descricao'];
                $autorRecebido = new autor($codigo,$nome, $foto, $descricao);
                $repositorio->atualizarAutor($autorRecebido);
                echo "Alterado com sucesso";
                header('Location:index.php');
            }

        
        ?>
        <script src="jquery/jquery.min.js"></script>
        <script src="ajax/popper.min.js"></script>
        <script src="bootstrap/bootstrap.min.js"></script>
        
                
    </body>
</html>
