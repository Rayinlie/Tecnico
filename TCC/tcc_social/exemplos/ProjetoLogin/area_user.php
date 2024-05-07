<!DOCTYPE html>
<?php
session_start();
if((!isset($_SESSION['Email_Usuario']) == true) and (!isset($_SESSION['Tipo_Usuario']) == true))
{
  unset($_SESSION['Email_Usuario']);
  unset($_SESSION['Tipo_Usuario']);
  unset($_SESSION['Nome_Usuario']);
  header('location:login_usuario.php');
}


echo "Nome Usuario: ".$_SESSION['Nome_Usuario'];
echo "Email Usuario: ".$_SESSION['Email_Usuario'];
echo "Tipo Usuario: ".$_SESSION['Tipo_Usuario'];

if($_SESSION['Tipo_Usuario']==0){
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <a href="logout_usuario.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Logout</a>
    </body>
</html>
<?php

} else {
    header('location:login_usuario.php');
}

?>