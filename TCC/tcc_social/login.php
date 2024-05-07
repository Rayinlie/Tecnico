<?php
session_start();
require_once "php/classes/repositorio_user_class.php";
$registro_user = new RepositorioUserMySQL();


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
    <link rel="stylesheet" href="css/estilologin.css">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <script src="java/jquery/jquery-3.4.1.min.js"></script>
    <script src="java/javinha.js"></script>
    <script src="ajax/popper.min.js"></script>
    <script src="css/bootstrap/bootstrap.min.js"></script><script src="java/jquery/jquery.min.js"></script>
    <script src="ajax/popper.min.js"></script>
    <script src="css/bootstrap/bootstrap.min.js"></script>
    <title>Helpix|Login</title>

</head>
<body class="bg-dark text-white">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
<div class="container">
    <div class="card card-login mx-auto text-center bg-dark">
        <div class="card-header mx-auto bg-dark">
            <span> <img src="img/Helpix2.png" class="w-75" alt="Logo"> </span><br/>
                        <span class="logo_title mt-5"> Login  </span>
<!--            <h1>--><?php //echo $message?><!--</h1>-->

        </div>
        <div class="card-body">
            <form action="" method="post">
                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="text" name="user" class="form-control" placeholder="Username">
                </div>

                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                    </div>
                    <input type="password" name="senha" class="form-control" placeholder="Password">
                </div>

                <div class="form-group">
                    <input type="submit" name="btn" value="Login" class="btn btn-outline-primary float-right login_btn">
                    
                    <?php



if(isset($_POST['btn'])){

$user = $_POST['user'];
$senha = $_POST['senha'];

$listagem_user = $registro_user->verificarUser($user);
$id = $listagem_user[0];
$usuario = $listagem_user[1];
$controle = $listagem_user[3];
$tipo = $listagem_user[4];


    if($user == $usuario and $senha == $controle){
        $_SESSION['id'] = $id;
        if($tipo == 0){
        header('Location:perfil.php'); 
    }else{
            header('location:admin/adminarea.php');
        }
    }else{
        echo "<br> Usuario ou senha Incorreto, por favor tente novamente!";        
    }
}

?>  
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    <!-- Button trigger modal -->
<button type="button" class="btn btn-outline-primary float-right login_btn" data-toggle="modal" data-target="#exampleModal">
  Registrar
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registrar-se</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="container-fluid">
        <div class="row">
            <div class="col-4">

            </div>
            <div class="col-4">
                <form class="form-grid" method="POST" action="#">
                    <label> Usuário: </label>
                    <input name="user2" type="text" class="form-control">
                    <br><br>
                    <label> Email: </label>
                    <input name="email2" type="text" class="form-control">
                    <br><br>
                    <label> Senha: </label>
                    <input name="senha2" type="text" class="form-control">
                    <br>
                    <input type="submit" name="Registrar" value="Registrar" class="btn btn-primary">
                </form>
            </div>
            <div class="col-4">

            </div>
        </div>
    </div>
    <?php

if (isset($_POST['Registrar'])){
            $codigo = 0;
            $nome = $_POST['user2'];
            $email = $_POST['email2'];
            $senha = $_POST['senha2'];
            $userRecebido = new User($codigo,$nome, $email, $senha);
            $registro = $registro_user->verificarUser($nome);
            if(!$registro){
                $registro_user->cadastrarUser($userRecebido);
                echo "Cadastrado com sucesso";
            } else {
                echo "Usuário já cadastrado";
                
            }
            header('Location:login.php');
        }
        
?>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        
      </div>
    </div>
  </div>
</div>
                </div>

            </form>
        </div>
    </div>
</div>


</body>
</html>