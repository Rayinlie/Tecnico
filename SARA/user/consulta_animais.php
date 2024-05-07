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
  
  require_once 'repositorio_animais_class.php';
  $reg_animais = new RepositorioAnimaisMySQL();
  $lista_animais = $reg_animais->getlistaanimais();

  ?>

  <div class="container">
    <div class="row">
      <div class="col">

        <div class="table-responsive-lg">
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Animais</th>
                <th scope="col">Id_especie</th>
                <th scope="col">Id_familia</th>
                <th scope="col">Id_classe</th>
                <th scope="col">Id_filo</th>
                <th scope="col">Id_ordem</th>
                <th scope="col">Id_genero</th>
                <th scope="col">Id_subspecie<th>

              </tr>
            </thead>
            <?php 
      while ($reg_animais = mysqli_fetch_array($lista_animais)){
      ?>
            <tbody>
              <tr>
                <th scope="row"><?php echo $reg_animais[0];?></th>
                <th scope="row"><?php echo $reg_animais[1];?></th>
                <th scope="row"><?php echo $reg_animais[2];?></th>
                <th scope="row"><?php echo $reg_animais[3];?></th>
                <th scope="row"><?php echo $reg_animais[4];?></th>
                <th scope="row"><?php echo $reg_animais[5];?></th>
                <th scope="row"><?php echo $reg_animais[6];?></th>
                <th scope="row"><?php echo $reg_animais[7];?></th>
                <th scope="row"><?php echo $reg_animais[8];?></th>
                <th scope="row"><?php echo $reg_animais[9];?></th>

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