<?php

require_once 'classes/repositorio_autor_class.php';
require_once 'classes/repositorio_editora_class.php';
require_once 'classes/repositorio_livro_class.php';

$registro_autor = new RepositorioAutorMySQL();
$registro_editora = new RepositorioEditoraMySQL();

$listagem_autor = $registro_autor->getlistaAutor();
$listagem_editora = $registro_editora->getlistaEditora();


?>


<form action="incluir_livro.php" method="POST">
            <div class=" form-group">
              <label for="titulolivro">titulo do livro</label>
              <input type="text" name="titulo" class="form-control" id="titulolivro" aria-describedby="titulolivro" placeholder="titulo do livro">
              <small id="titulolivro" class="form-text text-muted">Digite o titulo do livro</small>
            </div>
            <div class="form-group">
              <label for="resumo">resumo</label>
              <input type="resumo" name="resumo" class="form-control" id="resumolivro" aria-describedby="resumolivro" placeholder="resumo do livro">
            </div>
            <div class="form-group">
              <label for="editora">Editora</label>
              <select  name="id_editora">
                  <?php
                  
                  while ($linha_editora = mysqli_fetch_array($listagem_editora)){
                  
                  ?>
                  <option value="<?php echo $linha_editora[0];?>"><?php echo$linha_editora[1];}?> </option>
                
              </select>
            </div>
            <div class="form-group">
              <label for="autor">autor</label>
              <select  name="id_autor">
                  <?php
                  
                  while ($linha_autor = mysqli_fetch_array($listagem_autor)){
                  
                  ?>
                  <option value="<?php echo $linha_autor[0];?>"><?php echo$linha_autor[1];}?> </option>
                
              </select>
            </div>

            <input type="submit" name="Enviar" value="Enviar" class="btn btn-primary">
         </form>
         <br><br>
