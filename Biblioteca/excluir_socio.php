<?php

$codigo = $_GET['id'];
    require_once 'classes/repositorio_Socio_class.php';
    $registro_Socio = new RepositorioSocioMySQL();   
    $listagem_Socio = $registro_Socio->removerSocio($codigo);
    echo "Socio Removido com Sucesso!";
    header("Refresh: 5; url = index.php");
    ?>