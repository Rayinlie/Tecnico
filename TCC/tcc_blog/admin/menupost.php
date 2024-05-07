<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
    <link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <script src="../java/jquery/jquery-3.4.1.min.js"></script>
    <script src="../java/javinha.js"></script>
    <script src="../ajax/popper.min.js"></script>
    <script src="../css/bootstrap/bootstrap.min.js"></script>
    <title>Helpix|Login</title>

</head>
<body class="bg-white">
<?php
session_start();
require_once "../php/classes/repositorio_post_class.php";
require_once "../php/classes/repositorio_user_class.php";
$registro_user = new RepositorioUserMySQL();
$registro_post = new RepositorioPostMySQL();
$id_user = $_SESSION['id'];
$listagem_user = $registro_user->VerificarID($id_user);
$nomedousuario = $listagem_user[1];
$emaildousuario = $listagem_user[2];
$tipousuario = $listagem_user[4];
 $_SESSION['nome'] = $nomedousuario;
$_SESSION['email'] = $emaildousuario;


?>
 <div class="page-wrapper chiller-theme toggled">
  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-brand">
        <a href="#">Helpix</a>
        <a href="../logout_usuario.php" class="" role="button" aria-pressed="true"><img src="img/icones/logout.png" alt="" srcset=""><small class="text-muted">Logout</small></a>
        <div id="close-sidebar">
          <i class="fas fa-times"></i>
        </div>
      </div>
      <div class="sidebar-header">
        <div class="user-pic">
          <img class="img-responsive img-rounded" src="../img/<?php echo $nomedousuario;?>.png"
            alt="User picture">
        </div>
        <div class="user-info">
          <span class="user-name"><?php echo $nomedousuario;?>
            <strong></strong>
          </span>
          <span class="user-role"><?php echo "Administrador"; ?></span>
          <span class="user-status">
            <i class="fa fa-circle"></i>
            <span>Online</span>
          </span>
        </div>
      </div>
      <!-- sidebar-header  -->
      
      <!-- sidebar-search  -->
      <div class="sidebar-menu">
        <ul>
          <li class="header-menu">
            <span>Geral</span>
          </li>
          <li class="">
            <a href="postar.php" id="postar" name="postar">
              <i class="fa fa-tachometer-alt"></i>
              <span>Postar</span>
              <span class="badge badge-pill badge-warning"></span>
            </a>
          </li>
          <li class="">
            <a href="perfil_user.php" id="perfil_user" name="perfil_user">
              <i class="fa fa-tachometer-alt"></i>
              <span>Perfil</span>
              <span class="badge badge-pill badge-warning"></span>
            </a>
          </li>
          <li class="">
            <a href="myposts.php" id="myposts" name="myposts">
              <i class="fa fa-shopping-cart"></i>
              <span>Minhas Postagens</span>
              <span class="badge badge-pill badge-danger"></span>
            </a>
          </li>
          <li class="" id="mainpage">
            <a href="mainpage.php" id="mainpage">
              <i class="far fa-gem" id="mainpage"></i>
              <span id="mainpage">Página Inicial</span>
            </a>
          </li>
          <li class="header-menu">
            <span>Gerenciamento</span>
          </li>
          <li>
            <a href="geruser.php">
              <i class="fa fa-calendar"></i>
              <span>Usuários</span>
            </a>
          </li>
          <li>
            <a href="menupost.php">
              <i class="fa fa-folder"></i>
              <span>Posts</span>
            </a>
          </li>
        </ul>
      </div>
      <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->
    <div class="sidebar-footer">
      <a href="#">
        <i class="fa fa-bell"><img src="img/icones/tw.png" alt=""></i>
        <span class="badge badge-pill badge-warning notification"></span>
      </a>
      <a href="#">
        <i class="fa fa-envelope"><img src="img/icones/face.png" alt=""></i>
        <span class="badge badge-pill badge-success notification"></span>
      </a>
      <a href="#">
        <i class="fa fa-cog"><img src="img/icones/yt.png" alt=""></i>
        <span class="badge-pill"></span>
      </a>
      <a href="#">
        <i class="fa fa-power-off"></i>
      </a>
    </div>
  </nav>
  <!-- sidebar-wrapper  -->
  <div class="page-content" id="conteudo-paaginas-lida">
    <div class="row">
      <div class="col-1">
        
      </div>
      <div class="col-10">

<table class="table-responsive table-white bg-white">

    <tr class="table-white">
        <td class=""><button class="btn-primary btn btn-md mx-1"><a id="tituloposts" class="btn-primary btn btn-md" href="#">Buscar Post pelo Titulo</a></button></td>
        <td class=""><button class="btn-primary btn btn-md mx-1"><a id="userposts" class="btn-primary btn btn-md" href="#">Buscar Post pelo Usuário</a></button></td>
        <td class=""><button class="btn-primary btn btn-md mx-1"><a id="tagposts" class="btn-primary btn btn-md" href="#">Buscar Post pela Tag</a></button></td>
        <td class=""><button class="btn-primary btn btn-md mx-1"><a href="allposts.php" class="btn-primary btn btn-md" href="#">Lista de Todos os Posts</a></button></td>
        </tr>
    <br><br>

    </table>
    <div id="busvando">
    
    </div>
      </div>
      
    </div>
    
</div>
  <!-- page-content" -->
</div>

<!-- page-wrapper -->
<script>
            $(document).ready(function(){
                $("#tituloposts").click(function(){ 
                    $(function(){
                            $("#busvando").load("tituloposts.php"); 
                    });
                })
            });
            $(document).ready(function(){
                $("#userposts").click(function(){ 
                    $(function(){
                            $("#busvando").load("nomeuser.php"); 
                    });
                })
            });
            $(document).ready(function(){
                $("#tagposts").click(function(){ 
                    $(function(){
                            $("#busvando").load("tagposts.php"); 
                    });
                })
            });

</script>