<!DOCTYPE html>
<html>
<?php
    $codigo_socio = $_GET['id'];
    
    require_once 'classes/repositorio_socio_class.php';

    $registro_socio = new RepositorioSocioMySQL();

    $lista_socio = $registro_socio->buscarsocio($codigo_socio);
    
?>
    <head>
        <meta charset="UTF-8">
        <!-- Latest compiled and minified CSS -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="estilo/estilo.css">
  
        
        <title></title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12 bg-primary" >
                    <h1 class="display-4">Alteração socio</h1>
                </div>
            </div>
             
                <div class="row">
                    <div class="col-12 bg-light">
                    <form action="" method="POST">
                    <div class=" form-group">
                      <input type="hidden" name="codigo" class="form-control" id="Idsocio" aria-describedby="Idsocio" placeholder="ID da socio" value="<?php echo $lista_socio[0];?>">
                    </div>
                    <div class=" form-group">
                      <label for="Nomesocio">Nome do Socio</label>
                      <input type="text" name="nome" class="form-control" id="Nomesocio" aria-describedby="nomesocio" placeholder="Nome da socio" value="<?php echo $lista_socio[1];?>">
                    </div>
                    <div class=" form-group">
                      <label for="Emailsocio">Email do Socio</label>
                      <input type="text" name="email" class="form-control" id="Emailsocio" aria-describedby="Emailsocio" placeholder="Email da socio" value="<?php echo $lista_socio[2];?>">
                    </div>
                    <div class=" form-group">
                      <label for="Telsocio">Celular do Socio</label>
                      <input type="text" name="cel" class="form-control" id="Telesocio" aria-describedby="Telsocio" placeholder="Telefone da socio" value="<?php echo $lista_socio[3];?>">
                    </div>
                    <div class=" form-group">
                      <label for="Telsocio">Telefone do Socio</label>
                      <input type="text" name="tel" class="form-control" id="Telesocio" aria-describedby="Telsocio" placeholder="Telefone da socio" value="<?php echo $lista_socio[4];?>">
                    </div>
                    
                    <input type="submit" name="alterar" value="alterar" class="btn btn-primary">
              
                 </form>
 
                    </div>
                </div>
        </div>
        <?php
if(isset($_POST['alterar'])){
    if(isset($_POST['alterar'])){
        $codigo = $_POST['codigo'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $cel = $_POST['cel'];
        $tel = $_POST['tel'];
        $socioRecebido = new socio($codigo,$nome, $email, $cel, $tel);
        $repositorio->atualizarsocio($socioRecebido);
        echo "Alterado com sucesso";
        header('Location:index.php');
    }

}   
        ?>
        <script src="jquery/jquery.min.js"></script>
        <script src="ajax/popper.min.js"></script>
        <script src="bootstrap/bootstrap.min.js"></script>
        
                
    </body>
</html>