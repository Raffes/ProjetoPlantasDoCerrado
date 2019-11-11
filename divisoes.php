<?php
include 'php/conexao.php';
include 'php/SelectFormulario.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title>Divisão</title>

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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
                  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
                  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
                <![endif]-->



    </head>

    <body>

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
                    <form action="sessao.php" method="POST">
                        <ul class="header-btns">
                            <!-- Account -->


                            <li class="header-account dropdown default-dropdown">
                                <div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
                                    <div class="header-btns-icon">
                                        <i class="fa fa-user-o"></i>
                                    </div>
                                    <strong class="text-uppercase">Minha Conta <i class="fa fa-caret-down"></i></strong><br>
                                    <a href="#" class="text-uppercase">Acessar</a>
                                </div>

                                <ul class="custom-menu">
                                    <li><label class="text-uppercase">Indentificação:</label></li>
                                    <li><input type="text" name="login" class="input search-input"></li>
                                    <li><label class="text-uppercase">Senha:</label></li>
                                    <li><input type="password" name="senhaDeLogin" class="input search-input"></li>
                                    <li class="pull-right"><input type="submit" Value="ACESSAR" class="primary-btn"></li>
                                </ul>
                            </li>

                            <!-- /Account -->



                            <!-- Mobile nav toggle-->
                            <li class="nav-toggle">
                                <button class="nav-toggle-btn main-btn icon-btn"><i class="fa fa-bars"></i></button>
                            </li>
                            <!-- / Mobile nav toggle -->
                        </ul>
                    </form>   
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
            </div>


            <!-- menu nav -->
            <div class="menu-nav">
                <span class="menu-header">Menu <i class="fa fa-bars"></i></span>
                <ul class="menu-list">
                    <li id="inicio"><a href="index.php">Início <!--<i class="fa fa-list"></i>--></a></li>
                    <li><a href="divisoes.php">Divisão</a></li>
                    <li><a href="classes.php">Classe</a></li>
                    <li><a href="ordens.php">Ordem</a></li>
                    <li><a href="familias.php">Família</a></li>
                    <li><a href="carpotecas.php">Carpoteca</a></li>
                </ul>

            </div>      

        </div>
        <!-- menu nav -->
    </div>
</div>
<!-- /container -->

<!-- /NAVIGATION -->

<!-- BREADCRUMB -->
<div id="breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="index.php">Página Inicial</a></li>
            <li class="active">Divisão</li>
        </ul>
    </div>
</div>
<!-- /BREADCRUMB -->

<!-- section -->


<div class="section">
    <!-- container -->
    <div class="container">
        <div class="row">

            <div class="col-md-6">
                <div class="billing-details">

                    <div class="section-title" >
                        <h3 class="title">Feed</h3>
                    </div>

                    <div class='product product-single'>
                        <span id="feedSelect"></span>
                    </div>


                    <script type="text/javascript">

                        var qnt_result_pg = 6;
                        var pagina = 1; //Página inicial
                        $(document).ready(function () {
                            feedDivisao(pagina, qnt_result_pg);
                        });

                        function feedDivisao(pagina, qnt_result_pg) {
                            var dados = {
                                pagina: pagina,
                                qnt_result_pg: qnt_result_pg
                            }
                            $.post('php/FeedDivisao.php', dados, function (retorna) {
                                $("#feedSelect").html(retorna);
                            });
                        }
                    </script>


                </div>
            </div>


            <!--SEARCH-->

            <div class="col-md-6">
                <div class="section-title">
                    <h3 class="title">Filtro</h3>
                </div>
                <form>

                    <!--<div id="tabelaFiltro">-->


                    <table id='tabelaFiltro'>
                        <th colspan='2' class='section-title'><h5 class='title'>Nome</h5></th>


                        <tr>
                            <td><label class='text-uppercase'>Nome Científico:</label></td>
                            <td><label class='text-uppercase'>Nome Popular:</label></td>
                        </tr>
                        <tr>

                            <td><select class='input search-categories'>
                                    <option>Selecione</option>
                                    <?php echo $options5; ?>
                                    <option>Todos</option>
                                </select></td>

                            <td><select class='input search-categories'>
                                    <option>Selecione</option>
                                    <?php echo $options6; ?>
                                    <option>Todos</option>
                                </select></td>

                        </tr>
                        <tr>
                            <th colspan='2' class='section-title'><label class='text-uppercase' class='title'>Tipo</label></th>
                        </tr>
                        <tr>

                            <td><label class='text-uppercase'>Divisão:</label></td>

                            <td><label class='text-uppercase'>Classe:</label></td>
                        </tr>
                        <tr><td><select class='input search-categories'>
                                    <option>Selecione</option>
                                    <?php echo $options1; ?>
                                    <option>Todos</option>
                                </select></td>

                            <td><select class='input search-categories'>
                                    <option>Selecione</option>
                                    <?php echo $options2; ?>
                                    <option>Todos</option>
                                </select></td>
                        </tr><tr>
                            <td><label class='text-uppercase'>Ordem:</label></td>
                            <td><label class='text-uppercase'>Família:</label></td>

                        </tr>
                        <tr>

                            <td><select class='input search-categories'>
                                    <option>Selecione</option>
                                    <?php echo $options3; ?>
                                    <option>Todos</option>
                                </select></td>

                            <td><select class='input search-categories'>
                                    <option>Selecione</option>
                                    <?php echo $options4; ?>
                                    <option>Todos</option>
                                </select></td>
                        </tr><tr>

                            <td colspan='2'><label class='text-uppercase'>Carpoteca:</label></td>

                        </tr>
                        <tr>
                            <td colspan='2'><select class='input search-categories'>
                                    <option>Selecione</option>
                                    <?php echo $options; ?>
                                    <option>Todos</option>
                                </select></td>
                        </tr>


                    </table>
                    <div class='pull-right'>
                        <button class='primary-btn'>Pesquisar</button>
                    </div>


                </form>


                <!--/SEARCH-->
            </div>



        </div>

    </div>
    <!-- /container -->
</div>



<!-- /section -->

<!-- FOOTER -->

<footer id="foo" id="footer" class="section section-grey">
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

                    <p style="text-align: justify;"> Tal plataforma está sendo criada de modo a aprimorar o banco de dados de plantas do bioma Cerrado e contribuir para a 
                        pesquisa e identificação de plantas otimizando o tempo gasto por pesquisadores e alunos na classificação de uma espécie alvo.</p>


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

