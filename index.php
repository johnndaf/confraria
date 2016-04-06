<?php

    require_once 'restrito.php';

    verificaLogin();

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
        <header class="navbar-fixed-top navbar-inverse">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Site da Confraria</a>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Ranking<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Pontos</a></li>
                            <li><a href="#">Kills</a></li>
                            <li><a href="#">Dinheiro Gasto</a></li>
                            <li><a href="#">Dinheiro Ganho</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Regras</a></li>
                    <li><a href="#">Administrativo</a></li>
                    <li><a href="#">Logout</a></li>
                </ul>
            </div>
        </header>

        <section id="lala" class="lala">
        </section>

        <script src="js/jquery-1.11.3.js"></script>
        <script src="js/bootstrap.js"></script>
    </body>
</html>
