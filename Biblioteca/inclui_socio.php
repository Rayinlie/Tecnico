        <form action="incluir_socio.php" method="POST">
            <div class=" form-group">
              <label for="Nomesocio">Nome do socio</label>
              <input type="text" name="nome" class="form-control" id="Nomesocio" aria-describedby="nomesocio" placeholder="Nome do socio">
              <small id="nomesocio" class="form-text text-muted">Digite o nome do socio</small>
            </div>
            <div class="form-group">
              <label for="Email">Email</label>
              <input type="email" name="email" class="form-control" id="Emailsocio" aria-describedby="emailsocio" placeholder="Email do socio">
            </div>
            <div class="form-group">
              <label for="Telefone">Celular</label>
              <input type="tel" name="celular" class="form-control" id="celular" aria-describedby="celularsocio" placeholder="Celular dd socio">
            </div>
            <div class="form-group">
              <label for="Telefone">Telefone</label>
              <input type="tel" name="telefone" class="form-control" id="telefone" aria-describedby="telefonesocio" placeholder="Telefone da socio">
            </div>

            <input type="submit" name="Enviar" value="Enviar" class="btn btn-primary">
         </form>
         <br><br>
