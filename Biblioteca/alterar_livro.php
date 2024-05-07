<!DOCTYPE html>
<html>
<?php
    $codigo_livro = $_GET['id'];
    
    require_once 'classes/repositorio_autor_class.php';
    require_once 'classes/repositorio_livro_class.php';
    require_once 'classes/repositorio_Editora_class.php';

    $registro_autor = new RepositorioAutorMySQL();
    $registro_editora = new RepositorioEditoraMySQL();
    $listagem_autor = $registro_autor->getlistaAutor();
    $listagem_editora = $registro_editora->getlistaEditora();

    $registro_livro = new RepositorioLivroMySQL();

    $lista_livro = $registro_livro->buscarLivro($codigo_livro);
    
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
                    <h1 class="display-4">Alteração livro</h1>
                </div>
            </div>
             
                <div class="row">
                    <div class="col-12 bg-light">
                        <form action="" method="POST">
                    <div class=" form-group">
                      <input type="hidden" name="codigo" class="form-control" id="Idlivro" aria-describedby="Idlivro" placeholder="ID da livro" value="<?php echo $lista_livro[0];?>">
                    </div>
                    <div class=" form-group">
                      <input type="hidden" name="emprestimo" class="form-control" id="Idlivro" aria-describedby="Idlivro" placeholder="ID da livro" value="<?php echo $lista_livro[5];?>">
                    </div>
                    <div class=" form-group">
                      <label for="Nomelivro">Nome do Livro</label>
                      <input type="text" name="nome" class="form-control" id="Nomelivro" aria-describedby="nomelivro" placeholder="Nome da livro" value="<?php echo $lista_livro[1];?>">
                    </div>
                    <div class="form-group">
                      <label for="resumo">Resumo</label>
                      <textarea class="form-control" name="resumo" id="resumo" rows="7"><?php echo $lista_livro[2];?></textarea>
                    </div>
                    <div class="form-group">
              <label for="editora">Editora</label>
              <select  name="id_editora">
                  <?php
                  
                  while ($linha_editora = mysqli_fetch_array($listagem_editora)){
                  
                  ?>
                  <option value="<?php echo $linha_editora[0];?>"><?php echo$linha_editora[1];}?> </option>
                
              </select>
            </div>
            <div class="form-group">
              <label for="autor">autor</label>
              <select  name="id_autor">
                  <?php
                  
                  while ($linha_autor = mysqli_fetch_array($listagem_autor)){
                  
                  ?>
                  <option value="<?php echo $linha_autor[0];?>"><?php echo$linha_autor[1];}?> </option>
                
              </select>
            </div>
                    
                    <input type="submit" name="alterar" value="alterar" class="btn btn-primary">
              
                 </form>
 
                    </div>
                </div>
        </div>
        <?php
            if(isset($_POST['alterar'])){
                $codigo = $_POST['codigo'];
                $titulo = $_POST['nome'];
                $resumo = $_POST['resumo'];
                $id_autor = $_POST['id_autor'];
                $id_editora = $_POST['id_editora'];
                $emprestimo = $_POST['emprestimo'];
                $livroRecebido = new livro($codigo,$titulo, $resumo, $id_autor, $id_editora, $emprestimo);
                $registro_livro->atualizarlivro($livroRecebido);
                echo "Alterado com sucesso";
                header('Location:index.php');
            }

        
        ?>
        <script src="jquery/jquery.min.js"></script>
        <script src="ajax/popper.min.js"></script>
        <script src="bootstrap/bootstrap.min.js"></script>
        
                
    </body>
</html>
