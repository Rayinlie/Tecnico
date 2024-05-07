<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <?php 
    require_once 'repositorio_classe_class.php';
    $classe = $repositorio->getlistaclasse();
    ?>

    <form action="" method="post">
    <div class="form-group">
    <label class="lead" for="classe">Classe: </label>
    <input class="form-control" type="text" id="classe">
    </div>
    <button class="btn btn-success" type="submit">Enviar</button>
    </form>

</body>
</html>