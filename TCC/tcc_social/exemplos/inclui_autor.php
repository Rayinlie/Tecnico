        <form action="incluir_autor.php" method="POST">
                    <div class=" form-group">
                      <label for="NomeAutor">Nome do Autor</label>
                      <input type="text" name="nome" class="form-control" id="NomeAutor" aria-describedby="nomeAutor" placeholder="Nome do Autor">
                      <small id="nomeAutor" class="form-text text-muted">Digite o nome do Autor</small>
                    </div>
                    <div class="form-group">
                      <label for="Descricao">Descrição</label>
                      <textarea class="form-control" name="descricao" id="descricao" rows="7"></textarea>
                    </div>
                    <div class="form-group">
                      <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    
                    <input type="submit" name="Enviar" value="Enviar" class="btn btn-primary">
                 </form>
 
