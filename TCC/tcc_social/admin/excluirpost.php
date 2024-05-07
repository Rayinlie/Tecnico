<!DOCTYPE html>
<html>
<?php
    require_once '../php/classes/repositorio_post_class.php';
    $registro_post = new RepositorioPostMySQL();  
    require_once '../php/classes/repositorio_user_class.php';
    $registro_user = new RepositorioUserMySQL();  
    $codigo = $_GET['id_post'];
    
    $busquei = $registro_post->buscarPost($codigo);
    $buscando = $registro_user->buscarUser($busquei[2]);
?>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
    <link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/estilologin.css">
    <script src="../java/jquery/jquery-3.4.1.min.js"></script>
    <script src="../java/javinha.js"></script>
    <script src="../ajax/popper.min.js"></script>
    <script src="../css/bootstrap/bootstrap.min.js"></script>
    <title>Helpix|Login</title>
    </head>
    <body class="bg-dark">
    <br><br><br><br><br><br><br><br><br>






<div class="row">
<div class="col-3"></div>
<div class="col-6">
    <h1 class="text-white" >Deseja excluir o post de: <?php echo $buscando[1]; ?></h1>
    <div class="row">
        <div class="col-5">
        
        </div>
            <form action="#" method="post" class="form-group">
                <input type="submit" value="Sim" class="btn btn-primary" name="ctz">
                <input type="submit" value="Não" class="btn btn-primary" name="non">
            </form>
    </div>
</div>
</div>















<?php
if(isset($_POST['ctz'])){
 
    $listagem_post = $registro_post->removerPost($codigo);
    echo "post Removido com Sucesso!";
    header("Refresh: 2; url = menupost.php");
}
if(isset($_POST['non'])){
    header("location: menupost.php");

}
    ?>

</body>
</html>