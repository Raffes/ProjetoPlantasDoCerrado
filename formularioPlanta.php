<?php include 'php/conexao.php'; ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title>Fichamento da Planta</title>

        <!-- Google font -->
        <link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">

        <!-- Bootstrap -->
        <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

        <!-- Slick -->
        <link type="text/css" rel="stylesheet" href="css/slick.css" />
        <link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

        <!-- nouislider -->
        <link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

        <!-- Font Awesome Icon -->
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <!-- Custom stlylesheet -->
        <link type="text/css" rel="stylesheet" href="css/style.css" />

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
                  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
                  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
                <![endif]-->

        <!--Editor de texto-->
        <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
        <script type="text/javascript" src="js/events.js"></script>
    </head>

    <body>
        <!-- HEADER -->
        <header>


            <!-- header -->
            <div id="header">
                <div class="container">
                    <div class="pull-left">
                        <!-- Logo -->
                        <div class="header-logo">
                            <a class="logo" href="#">
                                <img src="./img/logo.png" alt="">
                            </a>
                        </div>
                        <!-- /Logo -->


                    </div>
                    <div class="pull-right">
                        <ul class="header-btns">
                            <!-- Account -->
                            <li class="header-account dropdown default-dropdown">
                                <div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
                                    <div class="header-btns-icon">
                                        <i class="fa fa-user-o"></i>
                                    </div>
                                    <strong class="text-uppercase">LOGADO AQUI <i class="fa fa-caret-down"></i></strong>
                                </div>
                                <a href="#" class="text-uppercase">Login</a> / <a href="#" class="text-uppercase">Join</a>
                                <ul class="custom-menu">
                                    <li><a href="#"><i class="fa fa-user-o"></i> Minha Conta</a></li>
                                    <li><a href="#"><i class="fa fa-heart-o"></i> Plantas Salvas</a></li>
                                    <li><a href="formularioPlanta.php"><i class="fa fa-check"></i> Ficha da Planta</a></li>
                                    <li><a href="formularioCarpoteca.php"><i class="fa fa-check"></i> Ficha da Carpoteca</a></li>
                                    <li><a href="cadastro.php"><i class="fa fa-user-plus"></i> Conceder Acesso</a></li>
                                    <li><a href="#"><i class="fa fa-exchange"></i> Sair</a></li>
                                </ul>
                            </li>
                            <!-- /Account -->


                            <!-- Mobile nav toggle-->
                            <li class="nav-toggle">
                                <button class="nav-toggle-btn main-btn icon-btn"><i class="fa fa-bars"></i></button>
                            </li>
                            <!-- / Mobile nav toggle -->
                        </ul>
                    </div>
                </div>
                <!-- header -->
            </div>
            <!-- container -->
        </header>
        <!-- /HEADER -->

        <!-- NAVIGATION -->
        <div id="navigation">
            <!-- container -->
            <div class="container">
                <div id="responsive-nav">


                    <!-- menu nav -->
                    <div class="menu-nav">
                        <div class="menu-nav">
                            <span class="menu-header">Menu <i class="fa fa-bars"></i></span>
                            <ul class="menu-list">
                                <li><a href="./php/logado.php"><span class="category-header">Início <!--<i class="fa fa-list"></i>--></span></a></li>
                                <li class="dropdown mega-dropdown full-width"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Filo <i class="fa fa-caret-down"></i></a>
                                    <div class="custom-menu">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="hidden-sm hidden-xs">
                                                    <a class="banner banner-1" href="#">
                                                        <img src="./img/banner06.jpg" alt="">
                                                        <div class="banner-caption text-center">
                                                            <h3 class="white-color text-uppercase">Women’s</h3>
                                                        </div>
                                                    </a>
                                                    <hr>
                                                </div>
                                                <ul class="list-links">
                                                    <li>
                                                        <h3 class="list-links-title">Categories</h3></li>
                                                    <li><a href="#">Women’s Clothing</a></li>
                                                    <li><a href="#">Men’s Clothing</a></li>
                                                    <li><a href="#">Phones & Accessories</a></li>
                                                    <li><a href="#">Jewelry & Watches</a></li>
                                                    <li><a href="#">Bags & Shoes</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="hidden-sm hidden-xs">
                                                    <a class="banner banner-1" href="#">
                                                        <img src="./img/banner07.jpg" alt="">
                                                        <div class="banner-caption text-center">
                                                            <h3 class="white-color text-uppercase">Men’s</h3>
                                                        </div>
                                                    </a>
                                                </div>
                                                <hr>
                                                <ul class="list-links">
                                                    <li>
                                                        <h3 class="list-links-title">Categories</h3></li>
                                                    <li><a href="#">Women’s Clothing</a></li>
                                                    <li><a href="#">Men’s Clothing</a></li>
                                                    <li><a href="#">Phones & Accessories</a></li>
                                                    <li><a href="#">Jewelry & Watches</a></li>
                                                    <li><a href="#">Bags & Shoes</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="hidden-sm hidden-xs">
                                                    <a class="banner banner-1" href="#">
                                                        <img src="./img/banner08.jpg" alt="">
                                                        <div class="banner-caption text-center">
                                                            <h3 class="white-color text-uppercase">Accessories</h3>
                                                        </div>
                                                    </a>
                                                </div>
                                                <hr>
                                                <ul class="list-links">
                                                    <li>
                                                        <h3 class="list-links-title">Categories</h3></li>
                                                    <li><a href="#">Women’s Clothing</a></li>
                                                    <li><a href="#">Men’s Clothing</a></li>
                                                    <li><a href="#">Phones & Accessories</a></li>
                                                    <li><a href="#">Jewelry & Watches</a></li>
                                                    <li><a href="#">Bags & Shoes</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="hidden-sm hidden-xs">
                                                    <a class="banner banner-1" href="#">
                                                        <img src="./img/banner09.jpg" alt="">
                                                        <div class="banner-caption text-center">
                                                            <h3 class="white-color text-uppercase">Bags</h3>
                                                        </div>
                                                    </a>
                                                </div>
                                                <hr>
                                                <ul class="list-links">
                                                    <li>
                                                        <h3 class="list-links-title">Categories</h3></li>
                                                    <li><a href="#">Women’s Clothing</a></li>
                                                    <li><a href="#">Men’s Clothing</a></li>
                                                    <li><a href="#">Phones & Accessories</a></li>
                                                    <li><a href="#">Jewelry & Watches</a></li>
                                                    <li><a href="#">Bags & Shoes</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown mega-dropdown full-width"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Classe <i class="fa fa-caret-down"></i></a>
                                    <div class="custom-menu">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="hidden-sm hidden-xs">
                                                    <a class="banner banner-1" href="#">
                                                        <img src="./img/banner06.jpg" alt="">
                                                        <div class="banner-caption text-center">
                                                            <h3 class="white-color text-uppercase">Women’s</h3>
                                                        </div>
                                                    </a>
                                                    <hr>
                                                </div>
                                                <ul class="list-links">
                                                    <li>
                                                        <h3 class="list-links-title">Categories</h3></li>
                                                    <li><a href="#">Women’s Clothing</a></li>
                                                    <li><a href="#">Men’s Clothing</a></li>
                                                    <li><a href="#">Phones & Accessories</a></li>
                                                    <li><a href="#">Jewelry & Watches</a></li>
                                                    <li><a href="#">Bags & Shoes</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="hidden-sm hidden-xs">
                                                    <a class="banner banner-1" href="#">
                                                        <img src="./img/banner07.jpg" alt="">
                                                        <div class="banner-caption text-center">
                                                            <h3 class="white-color text-uppercase">Men’s</h3>
                                                        </div>
                                                    </a>
                                                </div>
                                                <hr>
                                                <ul class="list-links">
                                                    <li>
                                                        <h3 class="list-links-title">Categories</h3></li>
                                                    <li><a href="#">Women’s Clothing</a></li>
                                                    <li><a href="#">Men’s Clothing</a></li>
                                                    <li><a href="#">Phones & Accessories</a></li>
                                                    <li><a href="#">Jewelry & Watches</a></li>
                                                    <li><a href="#">Bags & Shoes</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="hidden-sm hidden-xs">
                                                    <a class="banner banner-1" href="#">
                                                        <img src="./img/banner08.jpg" alt="">
                                                        <div class="banner-caption text-center">
                                                            <h3 class="white-color text-uppercase">Accessories</h3>
                                                        </div>
                                                    </a>
                                                </div>
                                                <hr>
                                                <ul class="list-links">
                                                    <li>
                                                        <h3 class="list-links-title">Categories</h3></li>
                                                    <li><a href="#">Women’s Clothing</a></li>
                                                    <li><a href="#">Men’s Clothing</a></li>
                                                    <li><a href="#">Phones & Accessories</a></li>
                                                    <li><a href="#">Jewelry & Watches</a></li>
                                                    <li><a href="#">Bags & Shoes</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="hidden-sm hidden-xs">
                                                    <a class="banner banner-1" href="#">
                                                        <img src="./img/banner09.jpg" alt="">
                                                        <div class="banner-caption text-center">
                                                            <h3 class="white-color text-uppercase">Bags</h3>
                                                        </div>
                                                    </a>
                                                </div>
                                                <hr>
                                                <ul class="list-links">
                                                    <li>
                                                        <h3 class="list-links-title">Categories</h3></li>
                                                    <li><a href="#">Women’s Clothing</a></li>
                                                    <li><a href="#">Men’s Clothing</a></li>
                                                    <li><a href="#">Phones & Accessories</a></li>
                                                    <li><a href="#">Jewelry & Watches</a></li>
                                                    <li><a href="#">Bags & Shoes</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown mega-dropdown full-width"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Ordem <i class="fa fa-caret-down"></i></a>
                                    <div class="custom-menu">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="hidden-sm hidden-xs">
                                                    <a class="banner banner-1" href="#">
                                                        <img src="./img/banner06.jpg" alt="">
                                                        <div class="banner-caption text-center">
                                                            <h3 class="white-color text-uppercase">Women’s</h3>
                                                        </div>
                                                    </a>
                                                    <hr>
                                                </div>
                                                <ul class="list-links">
                                                    <li>
                                                        <h3 class="list-links-title">Categories</h3></li>
                                                    <li><a href="#">Women’s Clothing</a></li>
                                                    <li><a href="#">Men’s Clothing</a></li>
                                                    <li><a href="#">Phones & Accessories</a></li>
                                                    <li><a href="#">Jewelry & Watches</a></li>
                                                    <li><a href="#">Bags & Shoes</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="hidden-sm hidden-xs">
                                                    <a class="banner banner-1" href="#">
                                                        <img src="./img/banner07.jpg" alt="">
                                                        <div class="banner-caption text-center">
                                                            <h3 class="white-color text-uppercase">Men’s</h3>
                                                        </div>
                                                    </a>
                                                </div>
                                                <hr>
                                                <ul class="list-links">
                                                    <li>
                                                        <h3 class="list-links-title">Categories</h3></li>
                                                    <li><a href="#">Women’s Clothing</a></li>
                                                    <li><a href="#">Men’s Clothing</a></li>
                                                    <li><a href="#">Phones & Accessories</a></li>
                                                    <li><a href="#">Jewelry & Watches</a></li>
                                                    <li><a href="#">Bags & Shoes</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="hidden-sm hidden-xs">
                                                    <a class="banner banner-1" href="#">
                                                        <img src="./img/banner08.jpg" alt="">
                                                        <div class="banner-caption text-center">
                                                            <h3 class="white-color text-uppercase">Accessories</h3>
                                                        </div>
                                                    </a>
                                                </div>
                                                <hr>
                                                <ul class="list-links">
                                                    <li>
                                                        <h3 class="list-links-title">Categories</h3></li>
                                                    <li><a href="#">Women’s Clothing</a></li>
                                                    <li><a href="#">Men’s Clothing</a></li>
                                                    <li><a href="#">Phones & Accessories</a></li>
                                                    <li><a href="#">Jewelry & Watches</a></li>
                                                    <li><a href="#">Bags & Shoes</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="hidden-sm hidden-xs">
                                                    <a class="banner banner-1" href="#">
                                                        <img src="./img/banner09.jpg" alt="">
                                                        <div class="banner-caption text-center">
                                                            <h3 class="white-color text-uppercase">Bags</h3>
                                                        </div>
                                                    </a>
                                                </div>
                                                <hr>
                                                <ul class="list-links">
                                                    <li>
                                                        <h3 class="list-links-title">Categories</h3></li>
                                                    <li><a href="#">Women’s Clothing</a></li>
                                                    <li><a href="#">Men’s Clothing</a></li>
                                                    <li><a href="#">Phones & Accessories</a></li>
                                                    <li><a href="#">Jewelry & Watches</a></li>
                                                    <li><a href="#">Bags & Shoes</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown mega-dropdown full-width"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Família <i class="fa fa-caret-down"></i></a>
                                    <div class="custom-menu">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="hidden-sm hidden-xs">
                                                    <a class="banner banner-1" href="#">
                                                        <img src="./img/banner06.jpg" alt="">
                                                        <div class="banner-caption text-center">
                                                            <h3 class="white-color text-uppercase">Women’s</h3>
                                                        </div>
                                                    </a>
                                                    <hr>
                                                </div>
                                                <ul class="list-links">
                                                    <li>
                                                        <h3 class="list-links-title">Categories</h3></li>
                                                    <li><a href="#">Women’s Clothing</a></li>
                                                    <li><a href="#">Men’s Clothing</a></li>
                                                    <li><a href="#">Phones & Accessories</a></li>
                                                    <li><a href="#">Jewelry & Watches</a></li>
                                                    <li><a href="#">Bags & Shoes</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="hidden-sm hidden-xs">
                                                    <a class="banner banner-1" href="#">
                                                        <img src="./img/banner07.jpg" alt="">
                                                        <div class="banner-caption text-center">
                                                            <h3 class="white-color text-uppercase">Men’s</h3>
                                                        </div>
                                                    </a>
                                                </div>
                                                <hr>
                                                <ul class="list-links">
                                                    <li>
                                                        <h3 class="list-links-title">Categories</h3></li>
                                                    <li><a href="#">Women’s Clothing</a></li>
                                                    <li><a href="#">Men’s Clothing</a></li>
                                                    <li><a href="#">Phones & Accessories</a></li>
                                                    <li><a href="#">Jewelry & Watches</a></li>
                                                    <li><a href="#">Bags & Shoes</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="hidden-sm hidden-xs">
                                                    <a class="banner banner-1" href="#">
                                                        <img src="./img/banner08.jpg" alt="">
                                                        <div class="banner-caption text-center">
                                                            <h3 class="white-color text-uppercase">Accessories</h3>
                                                        </div>
                                                    </a>
                                                </div>
                                                <hr>
                                                <ul class="list-links">
                                                    <li>
                                                        <h3 class="list-links-title">Categories</h3></li>
                                                    <li><a href="#">Women’s Clothing</a></li>
                                                    <li><a href="#">Men’s Clothing</a></li>
                                                    <li><a href="#">Phones & Accessories</a></li>
                                                    <li><a href="#">Jewelry & Watches</a></li>
                                                    <li><a href="#">Bags & Shoes</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="hidden-sm hidden-xs">
                                                    <a class="banner banner-1" href="#">
                                                        <img src="./img/banner09.jpg" alt="">
                                                        <div class="banner-caption text-center">
                                                            <h3 class="white-color text-uppercase">Bags</h3>
                                                        </div>
                                                    </a>
                                                </div>
                                                <hr>
                                                <ul class="list-links">
                                                    <li>
                                                        <h3 class="list-links-title">Categories</h3></li>
                                                    <li><a href="#">Women’s Clothing</a></li>
                                                    <li><a href="#">Men’s Clothing</a></li>
                                                    <li><a href="#">Phones & Accessories</a></li>
                                                    <li><a href="#">Jewelry & Watches</a></li>
                                                    <li><a href="#">Bags & Shoes</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown mega-dropdown full-width"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Carpoteca<i class="fa fa-caret-down"></i></a>
                                    <div class="custom-menu">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="hidden-sm hidden-xs">
                                                    <a class="banner banner-1" href="#">
                                                        <img src="./img/banner06.jpg" alt="">
                                                        <div class="banner-caption text-center">
                                                            <h3 class="white-color text-uppercase">Women’s</h3>
                                                        </div>
                                                    </a>
                                                    <hr>
                                                </div>
                                                <ul class="list-links">
                                                    <li>
                                                        <h3 class="list-links-title">Categories</h3></li>
                                                    <li><a href="#">Women’s Clothing</a></li>
                                                    <li><a href="#">Men’s Clothing</a></li>
                                                    <li><a href="#">Phones & Accessories</a></li>
                                                    <li><a href="#">Jewelry & Watches</a></li>
                                                    <li><a href="#">Bags & Shoes</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="hidden-sm hidden-xs">
                                                    <a class="banner banner-1" href="#">
                                                        <img src="./img/banner07.jpg" alt="">
                                                        <div class="banner-caption text-center">
                                                            <h3 class="white-color text-uppercase">Men’s</h3>
                                                        </div>
                                                    </a>
                                                </div>
                                                <hr>
                                                <ul class="list-links">
                                                    <li>
                                                        <h3 class="list-links-title">Categories</h3></li>
                                                    <li><a href="#">Women’s Clothing</a></li>
                                                    <li><a href="#">Men’s Clothing</a></li>
                                                    <li><a href="#">Phones & Accessories</a></li>
                                                    <li><a href="#">Jewelry & Watches</a></li>
                                                    <li><a href="#">Bags & Shoes</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="hidden-sm hidden-xs">
                                                    <a class="banner banner-1" href="#">
                                                        <img src="./img/banner08.jpg" alt="">
                                                        <div class="banner-caption text-center">
                                                            <h3 class="white-color text-uppercase">Accessories</h3>
                                                        </div>
                                                    </a>
                                                </div>
                                                <hr>
                                                <ul class="list-links">
                                                    <li>
                                                        <h3 class="list-links-title">Categories</h3></li>
                                                    <li><a href="#">Women’s Clothing</a></li>
                                                    <li><a href="#">Men’s Clothing</a></li>
                                                    <li><a href="#">Phones & Accessories</a></li>
                                                    <li><a href="#">Jewelry & Watches</a></li>
                                                    <li><a href="#">Bags & Shoes</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="hidden-sm hidden-xs">
                                                    <a class="banner banner-1" href="#">
                                                        <img src="./img/banner09.jpg" alt="">
                                                        <div class="banner-caption text-center">
                                                            <h3 class="white-color text-uppercase">Bags</h3>
                                                        </div>
                                                    </a>
                                                </div>
                                                <hr>
                                                <ul class="list-links">
                                                    <li>
                                                        <h3 class="list-links-title">Categories</h3></li>
                                                    <li><a href="#">Women’s Clothing</a></li>
                                                    <li><a href="#">Men’s Clothing</a></li>
                                                    <li><a href="#">Phones & Accessories</a></li>
                                                    <li><a href="#">Jewelry & Watches</a></li>
                                                    <li><a href="#">Bags & Shoes</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                        <!-- menu nav -->
                    </div>
                </div>
                <!-- /container -->
            </div>
        </div>
        <!-- /NAVIGATION -->

        <!-- BREADCRUMB -->
        <div id="breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="./php/logado.php">Página Inicial</a></li>
                    <li class="active">Fichamento da Planta</li>
                </ul>
            </div>
        </div>
        <!-- /BREADCRUMB -->

        <!-- section -->
        <div class="section">
            <!-- container -->
            <div class="tabelaFormulario"><!--se bugar mude a class para uma id-->
                <div class="row">

                    <form id="checkout-form" class="clearfix" action="php/cadastroDasPlantas.php" method="POST">
                        <div class="section-title" id="cadastro">
                            <h3 class="title">Fichamento da Planta</h3>
                        </div>
                        <div class="col-md-6">

                            <table id="fichamento1">

                                <tr class="size-option">
                                    <td class="form-group"><label class="text-uppercase" id="formularioLabel">Nome Científico:</label></td>
                                    <td class="form-group"><label class="text-uppercase" id="formularioLabel">Nome Popular:</label></td>
                                </tr>

                                <tr class="size-option">

                                    <td class="form-group" id="select1">
                                        <select class="input search-categories" id="formulario" name="nomeCientifico">
                                            <option value="0">Todos</option>
                                            <option value="1">Category 01</option>
                                            <option onclick="extraFormulario1()">Outro</option>
                                        </select>

<!--<input class="input search-input" id="formulario" name="nomeCientifico" type="text" placeholder="Nome Científico">-->
                                    </td>

                                    <td class="form-group">
                                        <input class="input search-input" id="formulario" name="nomePopular" type="text" placeholder="Nome Popular">
                                    </td> 
                                </tr>

                                <tr>
                                    <td id="f1"></td>
                                </tr>

                                <tr class="size-option">
                                    <td class="form-group"><label class="text-uppercase" id="formularioLabel">Divisão:</label></td>
                                    <td class="form-group"><label class="text-uppercase" id="formularioLabel">Classe:</label></td>
                                </tr>

                                <tr>
                                    <?php
                                    $divisaoFiltro = "SELECT divisao FROM plantas";

                                    $resultDivisaoFiltro = $conecta->query(($divisaoFiltro));
                                    if ($resultDivisaoFiltro->num_rows > 0) {
                                        while ($linhaDivisaoFiltro = $resultDivisaoFiltro->fetch_assoc()) {
                                            echo "<td class='form-group' id='select2'>
                                                                                <select class='input search-categories' id='formulario' name='divisaoFormulario'>
                                                                                <option>" . $linha["divisao"] . "</option>
                                                                                <option onclick='extraFormulario2()'>Outro</option>
                                                                                </select></td>";
                                        }
                                    } else {
                                        echo "<td class='form-group'>"
                                        . "<input class='input search-input' id='formulario' name='divisaoFormulario' type='text' placeholder='Divisão'></td>";
                                    }


                                    $divisaoClasse = "SELECT classe FROM plantas";

                                    $resultClasseFiltro = $conecta->query(($divisaoClasse));
                                    if ($resultClasseFiltro->num_rows > 0) {
                                        while ($linhaClasseFiltro = $resultClasseFiltro->fetch_assoc()) {
                                            echo "<td class='form-group' id='select3'>
                                                                                <select class='input search-categories' id='formulario' name='classeFormulario'>
                                                                                <option>" . $linha["classe"] . "</option>
                                                                                </select></td>";
                                        }
                                    } else {
                                        echo "<td class='form-group'>"
                                        . "<input class='input search-input' id='formulario' name='classeFormulario' type='text' placeholder='Classe'></td>";
                                    }
                                    ?>
                                </tr>


                                <tr class="size-option">
                                    <td class="form-group" id="f2"></td>
                                    <td class="form-group" id="f3"></td>
                                </tr>


                                <tr class="size-option">
                                    <td class="form-group"><label class="text-uppercase" id="formularioLabel">Ordem:</label></td>
                                    <td class="form-group"><label class="text-uppercase" id="formularioLabel">Família:</label></td>
                                </tr>
                                <tr class="size-option">

                                    <td class="form-group" id="select4">
                                        <select class="input search-categories" id="formulario" name="ordemFormulario">
                                            <option value="0">Todos</option>
                                            <option value="1">Category 01</option>
                                            <option value="1">Category 02</option>
                                            <option onclick="extraFormulario4()">Outro</option>
                                        </select>
                                            <!--<input class="input search-input" id="formulario" name="ordemFormulario" type="text" placeholder="Ordem">-->
                                    </td>
                                    <!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-->

                                    <td class="form-group" id="select5">
                                        <select class="input search-categories" id="formulario" name="familiaFormulario">
                                            <option value="0">Todos</option>
                                            <option value="1">Category 01</option>
                                            <option value="1">Category 02</option>
                                            <option onclick="extraFormulario5()">Outro</option>
                                        </select>
                                            <!--<input class="input search-input" id="formulario" name="familiaFormulario" type="text" placeholder="Família">-->

                                    </td>
                                </tr>

                                <tr class="size-option">
                                    <td class="form-group" id="f4"></td>
                                    <td class="form-group" id="f5"></td>
                                </tr>

                                <tr class="size-option">
                                    <td colspan="2" class="form-group"><label class="text-uppercase">Imagem:</label></td>
                                </tr>
                                <tr class="size-option">
                                    <td class="form-group">
                                        <input type="file" id="formulario" name="fotoPlanta1" size="25">
                                    </td>
                                    <td class="form-group">
                                        <input type="file" id="formulario" name="fotoPlanta2" size="25">
                                    </td>
                                </tr>
                                <tr class="size-option">
                                    <td class="form-group">
                                        <input type="file" id="formulario" name="fotoPlanta3" size="25">
                                    </td>
                                    <td class="form-group">
                                        <input type="file" id="formulario" name="fotoPlanta4" size="25">
                                    </td>
                                </tr>





                            </table>         

                        </div>
                        <div class="col-lg-6">
                            <table id="fichamento2">
                                <tr>
                                    <td> <label class="text-uppercase">Descrição: </label></td>
                                </tr>
                                <tr>
                                    <td><textarea name="descricao" id="ckeditor" class="ckeditor" maxlength="3000"></textarea></td> 
                                </tr>
                                <tr class="pull-right">
                                    <td><input type="submit" class="primary-btn" value="Adicionar dados da planta"></td>
                                </tr>
                            </table>

                        </div>

                    </form>
                </div>
            </div>
            <!-- /container -->
        </div>
        <!-- /section -->


        <!-- FOOTER -->
        <footer id="footer" class="section section-grey">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- footer widget -->
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="footer">
                            <!-- footer logo -->
                            <div class="footer-logo">
                                <a class="logo" href="#">
                                    <img src="./img/logo.png" alt="">
                                </a>
                            </div>
                            <!-- /footer logo -->

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>


                        </div>
                    </div>

                </div>
                <!-- /row -->
                <hr>
                <!-- row -->
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <!-- footer copyright -->
                        <div class="footer-copyright">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div>
                        <!-- /footer copyright -->
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </footer>

        <!-- /FOOTER -->


        <!-- jQuery Plugins -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/nouislider.min.js"></script>
        <script src="js/jquery.zoom.min.js"></script>
        <script src="js/main.js"></script>
        <?php $conecta->close(); ?>
    </body>

</html>

