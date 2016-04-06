<?php

    require_once 'restrito.php';

    if (count($_POST) > 0){
        $logado = logar($_POST['login'], $_POST['senha']);

        if ($logado != true){
            $msg_erro = "Login e/ou senha incorreto(s), Tente Novamente!";
        }else {
            header('Location: index.php');
        }
    }


?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Confraria Poker</title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <div class="container">
        <div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info" >
                <div class="panel-heading">
                    <div class="panel-title">Login</div>
                </div>

                <div class="panel-body" >

                    <!-- <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div> -->
                    <?php if ($msg_erro != ''): ?>
                        <div class="alert alert-danger" role="alert">
                            <strong><?php echo $msg_erro ?></strong>
                        </div>
                    <?php endif ?>
                    <form id="loginform" class="form-horizontal" role="form" action="login.php" method="post">

                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="login-username" type="text" class="form-control" name="login" value="" placeholder="usuario">
                        </div>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="login-password" type="password" class="form-control" name="senha" placeholder="senha">
                        </div>

                        <div class="input-group">
                            <div class="checkbox">
                                <label>
                                    <input id="login-remember" type="checkbox" name="remember" value="1"> Lembrar
                                </label>
                            </div>
                        </div>


                        <div style="margin-top:10px" class="form-group">
                            <!-- Button -->

                            <div class="col-sm-12 controls">
                                <button type="submit" class="btn btn-success">Entrar</button>
                                <!-- <a id="btn-fblogin" href="#" class="btn btn-primary">Login with Facebook</a> -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
