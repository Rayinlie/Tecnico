<?php

require_once 'classes/repositorio_user_class.php';
require_once 'classes/repositorio_tags_class.php';
require_once 'classes/repositorio_posts_class.php';

$registro_user = new RepositorioUserMySQL();
$registro_tags = new RepositorioTagsMySQL();

$listagem_user = $registro_user->getlistauser();
$listagem_tags = $registro_tags->getlistatags();


?>


<form action="#" method="POST">
            <div class=" form-group">
              <label for="tituloposts">Titulo do Post</label>
              <input type="text" name="titulo" class="form-control" id="tituloposts" aria-describedby="tituloposts" placeholder="titulo do posts">
              <small id="tituloposts" class="form-text text-muted">Digite o titulo do posts</small>
            </div>
            <div class="form-group">
              <label for="resumo">resumo</label>
              <input type="resumo" name="resumo" class="form-control" id="resumoposts" aria-describedby="resumoposts" placeholder="resumo do posts">
            </div>
            <div class="form-group">
              <label for="tags">tags</label>
              <select  name="id_tags">
                  <?php
                  
                  while ($linha_tags = mysqli_fetch_array($listagem_tags)){
                  
                  ?>
                  <option value="<?php echo $linha_tags[0];?>"><?php echo$linha_tags[1];}?> </option>
                
              </select>
            </div>
            <div class="form-group">
              <label for="user">user</label>
              <select  name="id_user">
                  <?php
                  
                  while ($linha_user = mysqli_fetch_array($listagem_user)){
                  
                  ?>
                  <option value="<?php echo $linha_user[0];?>"><?php echo$linha_user[1];}?> </option>
                
              </select>
            </div>

            <input type="submit" name="Enviar" value="Enviar" class="btn btn-primary">
         </form>
 
