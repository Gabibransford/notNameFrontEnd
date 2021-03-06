<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fontawesome-free-5.0.10/web-fonts-with-css/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">
    <style>
        a {
            text-decoration: none;

        }

        a:link {
            text-decoration: none;

        }

        a:hover {
            text-decoration: none;

        }

    </style>

    <title>Not name</title>
</head>

<body>
    <div id="topo">
        <div class="container">
            <div class="row">
                <div class="col-md-6 ofertaDoDia animated fadeInDown">
                    <a href="#" class="btn btn-success btn-sm animated bounce">Oferta do dia</a> <a href="#">Obtenha um desconto de 35% em pedidos com mais de R$ 200! </a>
                </div>

                <div class="col-md-6  animated fadeInDown">
                    <ul class="menu">
                        <li><a href="#" data-toggle="modal" data-target="#loginMoldal">Login</a></li> |
                        <li><a href="registrar.php">Registro</a></li> |
                        <li><a href="contato.php">Contato</a></li> |
                        <li><a href="#">Visto recentemente</a></li>
                    </ul>
                </div>
            </div>
            <div class="modal fade" id="loginMoldal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modalTitulo">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="Login">Login do cliente</h4>
                        </div>
                        <div class="modal-body">
                            <form action="" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="email-modal" placeholder="Email">
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control" id="senha-modal" placeholder="Senha">
                                </div>

                                <p class="text-center">
                                    <button class="btn btn-primary"><i class="fa fa-sign-in"></i>Entrar</button>
                                </p>
                            </form>
                            <p class="text-center text-muted"><a href="registrar.php" class="text-center text-muted">não registrado?</a></p>

                            <p class="text-center text-muted">Cadastre-se! É fácil e feito em 1 minuto e dá acesso a descontos especiais e muito mais!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">




        <nav class="navbar navbar-expand-lg navbar-light caixaNav">
            <a class="navbar-brand" href="index.php"><img src="assets/logo.png" alt=""></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
            <span class="navbar-toggler-icon" ></span>
        </button>

            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ">
                    <li class="nav-item"><a class="nav-link" href="">menu1</a></li>
                    <li class="nav-item"><a class="nav-link" href="">menu2</a></li>
                    <li class="nav-item"><a class="nav-link" href="">menu3</a></li>


                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="">menu4</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="">produto 1</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="">produto 2</a>

                            <a class="dropdown-item" href="">produto 3</a>

                            <a class="dropdown-item" href="">produto 4</a>
                        </div>

                    </li>

                </ul>

                <div class="navbar-buttons col" style="background: black">

                    <div class="navbar-collapse collapse right ">
                        <a href="carrinho.php" class="btn btn-primary navbar-btn"><i class="fas fa-shopping-cart"></i><span class="hidden-sm">3 itens no carrinho</span></a>
                    </div>
                    <!--/.nav-collapse -->

                    <div class="navbar-collapse collapse right ">
                        <button type="button" class="btn navbar-btn btn-primary" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Pesquisar</span>
                        <i class="fa fa-search"></i>
                    </button>
                    </div>

                </div>

            </div>
        </nav>
        <div class="navbar-buttons">

            <div class="navbar-collapse collapse right">
                <a href="" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span class="hidden-sm">3 itens no carrinho</span></a>
            </div>
            <!--/.nav-collapse -->

            <div class="navbar-collapse collapse right">
                <button type="button" class="btn navbar-btn btn-primary" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Pesquisar</span>
                        <i class="fa fa-search"></i>
                    </button>
            </div>

        </div>
        <div class=" col-md-12 caixaNav">
            <div class="collapse clearfix col-md-12" id="search">

                <form class="col-md-5 navbar-form  float-right" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Pesquisar">
                        <span class="input-group-btn">

			<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>


		    </span>
                    </div>
                </form>

            </div>
        </div>
