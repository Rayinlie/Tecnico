<!DOCTYPE html>
<?php

require 'classes/repositorio_class_editora.php';

$socios = $repositorio->getListaSocios();

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
                      <label for="Nomeeditora">Nome do socio</label>
                      <input type="text" name="nome" class="form-control" id="Nomeeditora" aria-describedby="nomeeditora" placeholder="Nome do editora">
                      <small id="nomeeditora" class="form-text text-muted">Digite o nome do socio</small>
                    </div>
                    <div class="form-group">
                      <label for="Descricao">Telefone</label>
                      <textarea class="form-control" name="telefone" id="telefone" rows="1"></textarea>
                    </div>
                  <!-- <div class="form-group">
                      <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    -->
                    <div class="form-group">
                      <label for="Descricao">Email</label>
                      <textarea class="form-control" name="email" id="email" rows="1"></textarea>
                    </div> 
                    <div class="form-group">
                      <label for="Descricao">Celular</label>
                      <textarea class="form-control" name="celular" id="celular" rows="1"></textarea>
                    </div>


                    

                    <button type="submit" class="btn btn-primary">Enviar</button>
                 </form>



        <!-- jQuery library
        <script src="jquery/jquery.min.js"></script>


        <script src="ajax/popper.min.js"></script>


        <script src="bootstrap/bootstrap.min.js"></script-->
    </body>
</html>