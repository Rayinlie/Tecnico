<?php
require_once 'repositorios/repositorio_usuario.php';
if(isset($_POST['submit'])=="submit"){
    $email_usuario = $_POST['Email_Usuario'];
    $senha_usuario = $_POST['Senha_Usuario'];
    $Lista_Usuario = $Repositorio_Usuario->Buscar_Usuario($email_usuario,$senha_usuario);
    if(mysqli_num_rows($Lista_Usuario)>0){
        $Registro_Usuarios = mysqli_fetch_array($Lista_Usuario);
        session_start();
        $_SESSION['Nome_Usuario']  = $Registro_Usuarios['nome_usuario'];
        $_SESSION['Email_Usuario'] = $Registro_Usuarios['email_usuario'];
        $_SESSION['Tipo_Usuario']  = $Registro_Usuarios['tipo_usuario']; 
        if($_SESSION['Tipo_Usuario']==1){
            header('Location:area_adm.php');
        }
        if($_SESSION['Tipo_Usuario']==0){
            header('Location:area_user.php');
        }
        
    } else {
         unset ($_SESSION['Nome_Usuario']);
         unset ($_SESSION['Email_Usuario']);
         unset ($_SESSION['Tipo_Usuario']);
         header('location:login_usuario.php');
    }   
}