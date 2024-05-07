     <form action="incluir_socios.php" method="POST">
                    <div class=" form-group">
                      <label for="Nomeeditora">Nome do Socio</label>
                      <input type="text" name="nome" class="form-control" id="Nomeeditora" aria-describedby="nomeeditora" placeholder="Nome do editora">
                      <small id="nomeeditora" class="form-text text-muted">Digite o nome do socio</small>
                    </div>
                    <div class="form-group">
                      <label for="Descricao">Telefone</label>
                      <textarea class="form-control" name="telefone" id="telefone" rows="1"></textarea>
                    </div>
                  <!-- <div class="form-group">
                      <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1">
                    </div> 
                    -->
                    <div class="form-group">
                      <label for="Descricao">Email</label>
                      <textarea class="form-control" name="email" id="email" rows="1"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="Descricao">Celular</label>
                      <textarea class="form-control" name="celular" id="celular" rows="1"></textarea>
                    </div>
                    <input type="submit" name="Enviar" value="Enviar" class="btn btn-primary">
                 </form>
                 <br><br>