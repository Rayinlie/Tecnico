<!DOCTYPE html>
<?php

require 'classes/repositorio_autor_class.php';

$autor = $repositorio->getListaAutor();

?>
<html>
    <head>
        <meta charset="UTF-8">
        <!---<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="estilo/estilo.css"> --->
        <title></title>
    </head>
    <body>
        <br>
        
                <form>
                    <div class="form-group">
                      <label for="NomeAutor">Nome do Autor</label>
                      <input type="text" class="form-control" id="NomeAutor" aria-describedby="nomeAutor" placeholder="Nome do Autor">
                      <small id="nomeAutor" class="form-text text-muted">Digite o nome do Autor</small>
                    </div>
                    <div class="form-group">
                      <label for="Descricao">Descrição</label>
                      <textarea class="form-control" id="descricao" rows="7"></textarea>
                    </div>
                    <div class="form-group">
                      <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Enviar</button>
                 </form>
                
            

        <!-- jQuery library 
        <script src="jquery/jquery.min.js"></script>

  
        <script src="ajax/popper.min.js"></script>

        
        <script src="bootstrap/bootstrap.min.js"></script-->
    </body>
</html>
