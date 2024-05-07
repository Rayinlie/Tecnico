<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>

  <?php 
  
  require_once 'repositorio_genero_class.php';
  $reg_genero = new RepositorioGeneroMySQL();
  $lista_genero = $reg_genero->getlistagenero();

  ?>

  <div class="container">
    <div class="row">
      <div class="col">

        <div class="table-responsive-lg">
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Gênero</th>
              </tr>
            </thead>
            <?php 
      while ($reg_genero = mysqli_fetch_array($lista_genero)){
      ?>
            <tbody>
              <tr>
                <th scope="row"><?php echo $reg_genero[0];?></th>
                <th scope="row"><?php echo $reg_genero[1];?></th>
              </tr>
            </tbody>
            <?php
          }
          ?>
          </table>
        </div>
      </div>
    </div>
  </div>

</body>

</html>