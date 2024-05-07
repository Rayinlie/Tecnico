<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Efeito Parallax</title>
    <link rel="stylesheet" href="style/hover-min.css">
    <link rel="stylesheet" href="style/animate.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/v4-shims.css">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css">
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
                                <a class="nav-link" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="animais.php">Animais</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="sobre_nos.php">Sobre Nós</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contato.php">Contato</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="login.php">Login</a>
                            </li>
                        </ul>
                    </div>
            </div>
            </nav>
        </div>
    </div>

    <section class="all-form">
        <div class="container d-flex align-items justify-content-center mt-5">
            <form class="login-form border animated slideInUp delay-0.2" action="#">
                <ul class="nav nav-pills justify-content-center mb-3" id="pills-nav" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#nav-item-01" id="nav-pills-01" data-toggle="pill">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#nav-item-02" id="nav-pills-02" data-toggle="pill">Register</a>
                    </li>
                </ul>
                <div class="tab-content" id="nav-pills-content">
                    <div class="tab-pane fade show active" id="nav-item-01" role="tabpanel">

                        <section class="login">
                            <h1 class="display-4 text-uppercase text-center">Login</h1>
                            <br>
                            <div class="form-group">
                                <label class="lead" for="login-email">Email: </label>
                                <input class="form-control rounded-pill form-control-lg" type="email" name="email"
                                    id="login-email" placeholder="Digite seu Email...">
                            </div>

                            <div class="form-group">
                                <label class="lead" for="login-password">Senha: </label>
                                <input class="form-control rounded-pill form-control-lg" type="password" name="senha"
                                    id="login-password" placeholder="Digite sua senha...">
                            </div>


                            <div class="forgot-link d-flex align-items-center justify-content-between">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="remember">
                                    <label for="remember">Remember password</label>
                                    <a href="#">Forgot password</a>
                                </div>
                            </div>

                            <button class="btn my-5 text-uppercase btn-custom btn-block rounded-pill btn-lg"
                                type="submit">Login</button>
                            <p>Não tem uma conta? <a href="#"><strong>Registro</strong></a></p>
                        </section>

                    </div>

                    <div class="tab-pane fade" id="nav-item-02" role="tabpanel">

                        <section class="register">
                            <h1 class="display-4 text-uppercase">Registro</h1>
                            <br>

                            <div class="form-group">
                                <label class="lead" for="register-name">Nome: </label>
                                <input class="form-control rounded-pill form-control-lg" type="text" name="nome"
                                    id="register-name" placeholder="Digite seu nome...">
                            </div>

                            <div class="form-group">
                                <label class="lead" for="register-sobrenome">Sobrenome: </label>
                                <input class="form-control rounded-pill form-control-lg" type="text" name="sobrenome"
                                    id="register-name" placeholder="Digite seu sobrenome...">
                            </div>

                            <div class="form-group">
                                <label class="lead" for="register-area">Área atuante: </label>
                                <select class="form-control rounded-pill form-control-lg" name="area" id="register-area"
                                    placeholder="Escolha sua área...">
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="lead" for="register-email">Email: </label>
                                <input class="form-control rounded-pill form-control-lg" type="email" name="email"
                                    id="register-email" placeholder="Digite seu Email...">
                            </div>

                            <div class="form-group">
                                <label class="lead" for="register-senha">Senha: </label>
                                <input class="form-control rounded-pill form-control-lg" type="password" name="senha"
                                    id="register-senha" placeholder="Digite sua senha...">
                            </div>

                            <button class="btn text-uppercase btn-custom btn-block rounded-pill btn-lg"
                                type="submit">Registrar</button>

                        </section>
                    </div>
                </div>
            </form>
        </div>

    </section>

    <script type="text/javascript" src="style/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="style/bootstrap.js"></script>
    <script type="text/javascript" src="style/bootstrap.bundle.min.js"></script>

</body>

</html>