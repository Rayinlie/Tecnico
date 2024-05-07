<!DOCTYPE html>
<?php

require_once 'repositorios/repositorio_usuario.php';

?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title></title>
    </head>
    <body>
        <!-- Botão para acionar modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cadastraUsuario">
          Cadastrar Usuario
        </button>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#loginUsuario">
          Login
        </button>

        <!-- Modal -->
        <div class="modal fade" id="cadastraUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Incluir UIsuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                  <form method="POST" action="incluir_usuario.php">
                    <div class="form-group">
                      <label>Nome do Usuário</label>
                      <input type="text" name="Nome_Usuario" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Endereço de email</label>
                      <input type="email" name="Email_Usuario" class="form-control">
                      <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
                    </div>
                    <div class="form-group">
                      <label>Senha</label>
                      <input type="password" name="Senha_Usuario" class="form-control">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Enviar</button>
                </form>
              </div>
              </div>
          </div>
        </div>
        <div class="modal fade" id="loginUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Login Usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                  <form method="POST" action="logar_usuario.php">
                    <div class="form-group">
                      <label>Email Usuario</label>
                      <input type="email" name="Email_Usuario" class="form-control">
                      <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
                    </div>
                    <div class="form-group">
                      <label>Senha Usuario</label>
                      <input type="password" name="Senha_Usuario" class="form-control">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Enviar</button>
                </form>
              </div>
              </div>
          </div>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>
