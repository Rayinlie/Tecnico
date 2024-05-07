<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <form action="" method="post">
    <div class="form-group">
    <label class="lead" for="ordem">Ordem: </label>
    <input class="form-control" type="text" name="ordem" id="ordem">
    </div>
    <button class="btn btn-success" type="submit" name="Enviar">Enviar</button>
    </form>

</body>
</html>

    <?php

    require_once 'repositorio_ordem_class.php';

    if (isset($_POST['Enviar'])=='Enviar'){
                $id_ordem = 0;
                $ordem = $_POST ['ordem'];
                $ordemRecebido = new ordem($id_ordem, $ordem);
                $registro = $repositorio->verificarordem($ordem);
            }
            
    ?>