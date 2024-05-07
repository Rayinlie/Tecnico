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

    require_once 'repositorio_animais_class.php';
    require_once 'repositorio_especie_class.php';
    require_once 'repositorio_familia_class.php';
    require_once 'repositorio_classe_class.php';
    require_once 'repositorio_filo_class.php';
    require_once 'repositorio_ordem_class.php';
    require_once 'repositorio_genero_class.php';
    require_once 'repositorio_subspecie_class.php';

    $animais = $repositorio->getlistaanimais();
    $especie = $repositorio->getlistaespecie();
    $familia = $repositorio->getlistafamilia();
    $classe  = $repositorio->getlistaclasse();
    $filo    = $repositorio->getlistafilo();
    $ordem   = $repositorio->getlistaordem();
    $genero  = $repositorio->getlistagenero();
    $subspecie = $repositorio->getlistasubspecie();

    ?>

    <form action="" method="post">
    <div class="form-group">
    <label class="lead" for="animais">Animais: </label>
    <input class="form-control" type="text" id="animais">
    </div>
    <button class="btn btn-success" type="submit">Enviar</button>
    </form>

</body>
</html>