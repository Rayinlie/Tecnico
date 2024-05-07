<!DOCTYPE html>
<html>
<?php
    $codigo_editora = $_GET['id'];
    
    require_once 'classes/repositorio_editora_class.php';

    $registro_editora = new RepositorioEditoraMySQL();

    $lista_editora = $registro_editora->buscarEditora($codigo_editora);
    
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
                    <h1 class="display-4">Alteração editora</h1>
                </div>
            </div>
             
                <div class="row">
                    <div class="col-12 bg-light">
                        <form action="" method="POST">
                    <div class=" form-group">
                      <input type="hidden" name="codigo" class="form-control" id="Ideditora" aria-describedby="Ideditora" placeholder="ID da editora" value="<?php echo $lista_editora[0];?>">
                    </div>
                    <div class=" form-group">
                      <label for="Nomeeditora">Nome da Editora</label>
                      <input type="text" name="nome" class="form-control" id="Nomeeditora" aria-describedby="nomeeditora" placeholder="Nome da editora" value="<?php echo $lista_editora[1];?>">
                    </div>
                    <div class=" form-group">
                      <label for="Emaileditora">Email da Editora</label>
                      <input type="text" name="email" class="form-control" id="Emaileditora" aria-describedby="Emaileditora" placeholder="Email da editora" value="<?php echo $lista_editora[2];?>">
                    </div>
                    <div class=" form-group">
                      <label for="Teleditora">Telefone da Editora</label>
                      <input type="text" name="tel" class="form-control" id="Teleeditora" aria-describedby="Teleditora" placeholder="Telefone da editora" value="<?php echo $lista_editora[3];?>">
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
                $email = $_POST['email'];
                $tel = $_POST['tel'];
                $editoraRecebido = new editora($codigo,$nome, $email, $tel);
                $repositorio->atualizareditora($editoraRecebido);
                echo "Alterado com sucesso";
                header('Location:index.php');
            }

        
        ?>
        <script src="jquery/jquery.min.js"></script>
        <script src="ajax/popper.min.js"></script>
        <script src="bootstrap/bootstrap.min.js"></script>
        
                
    </body>
</html>
