<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <!-- Latest compiled and minified CSS -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="estilo/estilo.css">
        <!-- jQuery library -->
        
        <title></title>
    </head>
    <body class="bg img-responsive">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 bg-primary" >
                    <h1 class="display-4">BILIOTECA ONLINE</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 bg-success">
                    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                <!-- Brand -->
                
                <!-- Links -->
                <ul class="navbar-nav">
                  

                  <!-- Dropdown -->
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                      Autores
                    </a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#" id="inclui_autor">Incluir Autores</a>
                      <a class="dropdown-item" href="#" id="altera_autor">Alterar Autores</a>
                      <a class="dropdown-item" href="#" id="consulta_autor">Consultar Autores</a>
                      <a class="dropdown-item" href="#" id="excluir_autor">Excluir Autores</a>
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                      Editoras
                    </a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#" id="inclui_editora">Incluir Editoras</a>
                      <a class="dropdown-item" href="#" id="altera_editora">Alterar Editoras</a>
                      <a class="dropdown-item" href="#" id="consulta_editora">Consultar Editoras</a>
                      <a class="dropdown-item" href="#" id="excluir_editora">Excluir Editoras</a>
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                      Socios
                    </a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#" id="inclui_socio">Incluir Socios</a>
                      <a class="dropdown-item" href="#" id="altera_socio">Alterar Socios</a>
                      <a class="dropdown-item" href="#" id="consulta_socio">Consultar Socios</a>
                      <a class="dropdown-item" href="#" id="excluir_socio">Excluir Socios</a>
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                      Livro
                    </a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#" id="inclui_livro">Incluir Livros</a>
                      <a class="dropdown-item" href="#" id="altera_livro">Alterar Livros</a>
                      <a class="dropdown-item" href="#" id="consulta_livro">Consultar Livros</a>
                      <a class="dropdown-item" href="#" id="excluir_livro">Excluir Livros</a>
                      <a class="dropdown-item" href="#" id="emprestar_livro">Emprestar Livros</a>
                    </div>
                  </li>
                </ul>
               </nav>
                </div>
            </div>
             
                <div class="row">
                    <div class="col-2">
                        
                    </div>
                    <div class="col-8 bg-light">
                        <div id="conteudo-pagina-lida">
                            
                        </div>
                    </div>
                    <div class="col-2">
                    </div>
                </div>
        </div>
        <script src="jquery/jquery.min.js"></script>
        <script src="ajax/popper.min.js"></script>
        <script src="bootstrap/bootstrap.min.js"></script>
        <script>
           
            $(document).ready(function(){
                $("#inclui_autor").click(function(){ 
                    $(function(){
                            $("#conteudo-pagina-lida").load("inclui_autor.php"); 
                    });
                })
            });
            $(document).ready(function(){
                $("#altera_autor").click(function(){ 
                    $(function(){
                            $("#conteudo-pagina-lida").load("altera_autor.php"); 
                    });
                })
            });
            $(document).ready(function(){
                $("#altera_editora").click(function(){ 
                    $(function(){
                            $("#conteudo-pagina-lida").load("altera_editora.php"); 
                    });
                })
            });
            $(document).ready(function(){
                $("#altera_livro").click(function(){ 
                    $(function(){
                            $("#conteudo-pagina-lida").load("altera_livro.php"); 
                    });
                })
            });
            $(document).ready(function(){
                $("#altera_socio").click(function(){ 
                    $(function(){
                            $("#conteudo-pagina-lida").load("altera_socios.php"); 
                    });
                })
            });
            $(document).ready(function(){
                $("#exclui_autor").click(function(){ 
                    $(function(){
                            $("#conteudo-pagina-lida").load("exclui_autor.php"); 
                    });
                })
            });
            $(document).ready(function(){
                $("#inclui_editora").click(function(){ 
                    $(function(){
                            $("#conteudo-pagina-lida").load("inclui_editora.php"); 
                    });
                })
            });
            $(document).ready(function(){
                $("#inclui_socio").click(function(){ 
                    $(function(){
                            $("#conteudo-pagina-lida").load("inclui_socio.php"); 
                    });
                })
            });
            $(document).ready(function(){
                $("#inclui_livro").click(function(){ 
                    $(function(){
                            $("#conteudo-pagina-lida").load("inclui_livro.php"); 
                    });
                })
            });
            $(document).ready(function(){
                $("#consulta_editora").click(function(){ 
                    $(function(){
                            $("#conteudo-pagina-lida").load("consulta_editora.php"); 
                    });
                })
            });
            $(document).ready(function(){
                $("#consulta_livro").click(function(){ 
                    $(function(){
                            $("#conteudo-pagina-lida").load("consulta_livro.php"); 
                    });
                })
            });
            $(document).ready(function(){
                $("#consulta_socio").click(function(){ 
                    $(function(){
                            $("#conteudo-pagina-lida").load("consulta_socio.php"); 
                    });
                })
            });
            $(document).ready(function(){
                $("#consulta_autor").click(function(){ 
                    $(function(){
                            $("#conteudo-pagina-lida").load("consultando.php"); 
                    });
                })
            });
            $(document).ready(function(){
                $("#emprestar_livro").click(function(){ 
                    $(function(){
                            $("#conteudo-pagina-lida").load("emprestimo.php"); 
                    });
                })
            });
    </script>

                
    </body>
</html>
