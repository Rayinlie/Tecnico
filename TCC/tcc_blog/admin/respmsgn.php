<!DOCTYPE html>
<?php
session_start();
$_SESSION['pagina'] = 1;
ini_set('display_errors', 0 );
error_reporting(0);
?>
<html lang="pt-br">
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

$id_user = $_SESSION['id'];
require_once "../php/classes/repositorio_post_class.php";
require_once "../php/classes/repositorio_user_class.php";
require_once "../php/classes/repositorio_msgn_class.php";
$registro_user = new RepositorioUserMySQL();
$registro_post = new RepositorioPostMySQL();
$registro_msgn = new RepositorioMsgnMySQL();
$listagem_user = $registro_user->VerificarID($id_user);
$nomedousuario = $listagem_user[1];
$emaildousuario = $listagem_user[2];
$tipousuario = $listagem_user[4];
 $_SESSION['nome'] = $nomedousuario;
$_SESSION['email'] = $emaildousuario;
$_SESSION['pagina'] = 1;
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
  <div class="page-content" id="conteudo-pagina-lida">
<?php
$id_msgn = $_GET['id_msgn'];
$regmsgn = $registro_msgn->buscarMsgn($id_msgn);
?>
<div class="row">
<div class="col-12">
<div class=" bg-white rounded">
<br>
<h1 class="text-dark mt-2" style="padding-left:30%;"> Responder Mensagem</h1>
<br>
</div>
<br><br>
<div class="row">
<div class="col-5 bg-white rounded border-dark" style="padding-left:15px;">
<form action="#" method="post" class="form-group">
    <label for="nomeuser" class="h3 text-dark mt-2">Nome do Infeliz</label>
    <input type="text" name="nome" id="nomeuser" value="<?php
    $reguser = $registro_user->buscarUser($regmsgn[2]);
    echo $reguser[1];?>" class="form-control text-dark border-dark rounded" readonly>
    <br>
    <label for="msgn" class="label h3 text-dark mt-2">Mensagem</label>
    <textarea name="msgndele" id="msgn" cols="30" rows="10" class="form-control text-dark border-dark rounded" readonly><?php echo $regmsgn[3];?></textarea>
</form>

</div>
<div class="col-1"></div>
<div class="col-6 bg-white rounded border-dark">
<br>
<form action="#" method="post" class="form-group">
  <textarea name="resposta" id="resposta" cols="30" rows="10" class="form-control text-dark border-dark rounded bg-ligth" placeholder="RESPONDER:"></textarea>
  <input type="submit" name="Resp" value="Responder" class="btn btn-primary mt-5">
</form>
</div>
<?php
if(isset($_POST['Resp'])){
$nome = $reguser[1];
$email = $reguser[2];
$mensagem = $_POST['resposta'];
date_default_timezone_set('America/Sao_Paulo');
$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');

   
  // emails para quem será enviado o formulário
  $emailenviar = $email;
  $destino = $emailenviar;
  $assunto = "Contato pelo Site";
 
  // É necessário indicar que o formato do e-mail é html
  $headers =  'MIME-Version: 1.0' . "\r\n"; 
  $headers .= 'From: Helpix <helpixtcc@gmail.com>' . "\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
  
   
  echo "<script> location.href='geruser.php';</script>";
  $enviaremail = mail($destino, $assunto, $mensagem, $headers);
  if($enviaremail){
  $mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
  echo " <meta http-equiv='refresh' content='10;URL=contato.php'>";
  } else {
  $mgm = "ERRO AO ENVIAR E-MAIL!";
  echo "";
  }
}
?>
</div>
</div>
</div>
<?php
?>
</div>
  <!-- page-content" -->
</div>
<!-- page-wrapper -->

</body>
</html>