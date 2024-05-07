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
  
  require_once 'repositorio_classe_class.php';
  $reg_classe = new RepositorioClasseMySQL();
  $lista_classe = $reg_classe->getlistaclasse();

  ?>

  <div class="container">
    <div class="row">
      <div class="col">

        <div class="table-responsive-lg">
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">classe</th>
              </tr>
            </thead>
            <?php 
      while ($reg_classe = mysqli_fetch_array($lista_classe)){
      ?>
            <tbody>
              <tr>
                <th scope="row"><?php echo $reg_classe[0];?></th>
                <th scope="row"><?php echo $reg_classe[1];?></th>
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