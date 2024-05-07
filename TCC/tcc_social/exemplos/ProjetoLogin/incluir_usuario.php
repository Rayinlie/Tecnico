<?php
require_once 'repositorios/repositorio_usuario.php';
    if(isset($_POST['submit'])=='submit'){
            $id_usuario = "";
            $nome_usuario = $_POST['Nome_Usuario'];
            $email_usuario = $_POST['Email_Usuario'];
            $senha_usuario = $_POST['Senha_Usuario'];
            $tipo_usuario = 1;
            $Usuario_Novo = new usuario($id_usuario, $nome_usuario, $email_usuario, $senha_usuario,$tipo_usuario);
            $Registro_Novo = $Repositorio_Usuario->Incluir_Usuario($Usuario_Novo);
    }
?>

