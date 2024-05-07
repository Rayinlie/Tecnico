<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Efeito Parallax</title>

    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/hover-min.css">
    <link rel="stylesheet" href="style/animate.min.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/v4-shims.css">

</head>

<body>

    <!-- Menu Principal -->

    <div class="container-fluid menu">
        <div class="row">
            <div class="col">
                <nav class="menu-principal navbar navbar-expand-sm bg-light navbar-light sticky-top">
                    <a class="navbar-brand" href="#">S.A.R.A</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu_principal">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" role="navigation" id="menu_principal">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="#" id="index">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" id="animais">Animais</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" id="sobre_nos">Sobre Nós</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" id="contato">Contato</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" id="login">Login</a>
                            </li>
                        </ul>
                    </div>
                    <div class="row">
                    <div class="col-3 bg-light">

                    </div>
                    <div class="col-9 bg-light">
                        <div id="conteudo-pagina-lida">

                        </div>
                    </div>
                </div>
            </div>
            </nav>
        </div>
    </div>

    <!-- Parallax -->

    <section class="header">
        <div class="container">
            <div class="row">
                <div class="col">
                    <main>
                        <h1 class="display-4 animated zoomIn delay-0.5s">Bem-vindos à S.A.R.A
                        </h1>
                        <p class="lead animated zoomIn delay-0.7s">É um fato conhecido de todos que um leitor se
                            distrairá com o conteúdo de texto legível</p>
                        <br>
                        <p class="">
                            <a href="#" class="btn btn-primary hvr-bob animated fadeInUp delay-0.8s">Cadastre-se</a>
                        </p>
                    </main>
                </div>
            </div>
        </div>
    </section>

    <!-- Cards -->
    <div class="card-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                    <h2 class="display-3">Classes</h2>
                    <p>Você sabe como são dadas as Classes dos animais? Não?</p>
                </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4">
                <div class="card"><a href="">
                        <img class="card-img-top img-fluid" src="images/mamifero/lobo_guara.jpg" alt="">
                        <div class="card-body">
                            <h3 class="card-title">Mamíferos</h3>
                            <p class="card-text">É um fato conhecido de todos que um leitor se distrairá
                                com o conteúdo de texto legível</p>
                        </div>
                </div></a>
            </div>

            <div class="col-md-4">
                <div class="card"><a href="#">
                        <img class="card-img-top img-fluid" src="images/anfibio/sapo_verde.jpg" alt="">
                        <div class="card-body">
                            <h3 class="card-title">Anfíbios</h3>
                            <p class=" card-text">É um fato conhecido de todos que um leitor se distrairá
                                com o conteúdo de texto legível</p>
                        </div>
                </div></a>
            </div>
            <div class="col-md-4">
                <div class="card"><a href="#">
                        <img class="card-img-top img-fluid" src="images/reptil/cobra_cascavel.jpg" alt="">
                        <div class="card-body">
                            <h3 class="card-title">Répteis</h3>
                            <p class="card-text">É um fato conhecido de todos que um leitor se distrairá
                                com o conteúdo de texto legível</p>
                        </div>
                </div></a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div id="btn">
                <div class="btn btn-primary">
                    <a href="animais.html">Veja Mais >></a>
                </div>
            </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Parallax Pt.2 -->

    <section class="section-parallax-2"></section>

    <!-- Footer -->

    <footer class="bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <hr>
                    <p>&copy 2019 Copyright:
                        <a href="index.html">S.A.R.A</a></p>
                </div>
            </div>
        </div>
    </footer>

    <script type="text/javascript" src="style/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="style/bootstrap.js"></script>
    <script type="text/javascript" src="style/bootstrap.bundle.min.js"></script>

    <script>

            $(document).ready(function(){
                $("#index").click(function(){
                    $(function(){
                            $("#conteudo-pagina-lida").load("index.php");
                    });
                })
            });
            $(document).ready(function(){
                $("#animais").click(function(){
                    $(function(){
                            $("#conteudo-pagina-lida").load("animais.php");
                    });
                })
            });
            $(document).ready(function(){
                $("#sobre_nos").click(function(){
                    $(function(){
                            $("#conteudo-pagina-lida").load("about_us.php");
                    });
                })
            });
            $(document).ready(function(){
                $("#contato").click(function(){
                    $(function(){
                            $("#conteudo-pagina-lida").load("contato.php");
                    });
                })
            });
            $(document).ready(function(){
                $("#login").click(function(){
                    $(function(){
                            $("#conteudo-pagina-lida").load("login.php");
                    });
                })
            });

    </script>

</body>

</html>