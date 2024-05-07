<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <script src="java/jquery/jquery.min.js"></script>
    <script src="ajax/popper.min.js"></script>
    <script src="css/bootstrap/bootstrap.min.js"></script>
    <title>Helpix|Home</title>

</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-4">

            </div>
            <div class="col-4" method="post">
                <form class="form-grid" method="POST" action="#">
                    <label> Usuário: </label>
                    <input name="user" type="text" class="form-control">
                    <br><br>
                    <label> Email: </label>
                    <input name="email" type="text" class="form-control">
                    <br><br>
                    <label> Senha: </label>
                    <input name="senha" type="text" class="form-control">
                    <br>
                    <input type="submit" name="Enviar" value="Registrar" class="btn btn-primary">
                </form>
            </div>
            <div class="col-4">

            </div>
        </div>
    </div>
</body>
</html>
<?php

require 'php/classes/repositorio_user_class.php';

if (isset($_POST['Enviar'])){
            $codigo = 0;
            $nome = $_POST['user'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $userRecebido = new User($codigo,$nome, $email, $senha);
            $registro = $repositorio->verificarUser($nome);
            if(!$registro){
                $repositorio->cadastrarUser($userRecebido);
                echo "Cadastrado com sucesso";
            } else {
                echo "Usuário já cadastrado";
                
            }
            header('Location:index.php');
        }
        
?>
