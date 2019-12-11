<?php require_once '../vendor/autoload.php'; ?>
<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/css/all.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/login.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="container">
            <div class="row" style="margin-top: 10%;">
                <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                    <div class="card card-signin my-5">
                        <div class="card-body">
                            <h5 class="card-title text-center"><img src="assets/images/logo-officetotal.png" /></h5>
                            <form class="form-signin" action="" method="post">
                                <input type="hidden" name="send_login">
                                <div class="form-label-group">
                                    <input type="text" name="login" id="inputEmail" class="form-control" placeholder="Login" required autofocus>
                                    <label for="inputEmail">Login</label>
                                </div>

                                <div class="form-label-group">
                                    <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Senha" required>
                                    <label for="inputPassword">Senha</label>
                                </div>

                                <div class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">Lembrar-me</label>
                                </div>
                                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Entrar</button>
                                <hr class="my-4">
<!--                                <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Google</button>
                                <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i>  Facebook</button>-->
                            </form>
                            <?php

                            use App\DI\Container;

                            if (isset($_POST['send_login'])) {
                                $login = Container::getLogin();
                                $login->setUser(filter_input(INPUT_POST, 'login', FILTER_DEFAULT))
                                        ->setPass(filter_input(INPUT_POST, 'senha', FILTER_DEFAULT))
                                        ->setTempoSessao(filter_input(INPUT_POST, 'conectado', FILTER_SANITIZE_SPECIAL_CHARS));
                                if ($login->login()) {
                                    header("Location: home");
                                } else {
                                    ?>
                                    <p class="msg-login warning text-center">Login ou senha inválidos</p>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="assets/js/jquery.slim.min.js" ></script>
    <script src="assets/js/bootstrap.bundle.min.js" ></script>
</html>
