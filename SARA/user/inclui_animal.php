<?php 

    // Inclusões >>

    require_once 'repositorio_classe_class.php';
    require_once 'repositorio_especie_class.php';
    require_once 'repositorio_familia_class.php';
    require_once 'repositorio_filo_class.php';
    require_once 'repositorio_genero_class.php';
    require_once 'repositorio_ordem_class.php';
    require_once 'repositorio_animais_class.php';

    // Variaveis definidas >>
    $registro_animais = new RepositorioAnimaisMySQL();

    $registro_classe = new RepositorioClasseMySQL();
    $lista1 = $registro_classe->getlistaclasse();

    $registro_especie = new RepositorioEspecieMySQL();
    $lista2 = $registro_especie->getlistaespecie();

    $registro_familia = new RepositorioFamiliaMySQL();
    $lista3 = $registro_familia->getlistafamilia();

    $registro_filo = new RepositorioFiloMySQL();
    $lista4 = $registro_filo->getlistafilo();

    $registro_genero = new RepositorioGeneroMySQL();
    $lista5 = $registro_genero->getlistagenero();

    $registro_ordem = new RepositorioOrdemMySQL();
    $lista6 = $registro_ordem->getlistaordem();

?>

<!-- Formulário -->

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="display-4 mt-4">Form_Include</h1>
            <br>
            <div class="row border p-3">
                <div class="col">
                    <section class="my-4 mx-auto">
                        <h5>Imagem:</h5>
                        <div class="card" style="width: 30rem;">
                            <img class="card-img-top border rounded" src="../img/animal-biology-blur-1060789.jpg"
                                alt="Imagem de capa do card">
                        </div>

                        <div class="custom-file mt-3">
                            <input type="file" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Escolher arquivo</label>
                        </div>
                    </section>

                </div>
                <div class="col">
                    <form method="POST" action="incluindo_animal.php">
                    <div class="form-group">
                            <label class="lead" for="">Nome</label>
                            <input type="text" name="animal" id="animal" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="lead" for="">Filo</label>
                            <select class="custom-select" name="filo">
                                <?php while ($lista_filo = mysqli_fetch_array ($lista4)){?>
                                <option value="<?php echo $lista_filo[0];?>"> <?php echo $lista_filo[1];}?></option>
                            </select>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="lead" for="">Classe</label>
                            <select class="custom-select" name="classe">
                                <?php while ($lista_classe = mysqli_fetch_array ($lista1)){?>
                                <option value="<?php echo $lista_classe[0];?>"> <?php echo $lista_classe[1];}?></option>
                            </select>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="lead" for="">Ordem</label>
                            <select class="custom-select" name="ordem">
                                <?php while ($lista_ordem = mysqli_fetch_array ($lista6)){?>
                                <option value="<?php echo $lista_ordem[0];?>"> <?php echo $lista_ordem[1];}?></option>
                            </select>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="lead" for="">Família</label>
                            <select class="custom-select" name="familia">
                                <?php while ($lista_familia = mysqli_fetch_array ($lista3)){?>
                                <option value="<?php echo $lista_familia[0];?>"> <?php echo $lista_familia[1];}?>
                                </option>
                            </select>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="lead" for="">Gênero</label>
                            <select class="custom-select" name="genero">
                                <?php while ($lista_genero = mysqli_fetch_array ($lista5)){?>
                                <option value="<?php echo $lista_genero[0];?>"> <?php echo $lista_genero[1];}?></option>
                            </select>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="lead" for="">Espécie</label>
                            <select class="custom-select" name="especie">
                                <?php while ($lista_especie = mysqli_fetch_array ($lista2)){?>
                                <option value="<?php echo $lista_especie[0];?>"> <?php echo $lista_especie[1];}?>
                                </option>
                            </select>
                        </div>
                        <br>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio1">Clique neste radio
                                personalizado</label>
                        </div>
                        <div class="custom-control mt-2 custom-radio">
                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio2">Ou clique neste outro radio
                                personalizado</label>
                        </div>
                        <br>
                        <input type="submit" class="btn btn-success" name="Enviar" value="Enviar">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</form>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
</script>

