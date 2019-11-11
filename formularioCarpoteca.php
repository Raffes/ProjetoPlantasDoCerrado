<?php
include 'php/conexao.php';
include 'php/SelectFormulario.php';
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title>Fichamento da Carpoteca</title>

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
                                    <strong class="text-uppercase">LOGADO AQUI <i class="fa fa-caret-down"></i></strong><br>
                                    <a href="#" class="text-uppercase">Acesso</a>
                                </div>

                                <ul class="custom-menu">
                                    <!--<li><a href="#"><i class="fa fa-user-o"></i> Minha Conta</a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-heart-o"></i> Plantas Salvas</a></li>-->
                                    <li><a href="formularioPlanta.php"><i class="fa fa-check"></i> Ficha da Planta</a></li>
                                    <li><a href="formularioCarpoteca.php"><i class="fa fa-check"></i> Ficha da Carpoteca</a></li>
                                    <!--<li><a href="cadastro.php"><i class="fa fa-user-plus"></i> Conceder Acesso</a></li>-->
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

</div>
</div>
<!-- /NAVIGATION -->

<!-- BREADCRUMB -->
<div id="breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="logIndex.php">Página Inicial</a></li>
            <li class="active">Fichamento da Carpoteca</li>
        </ul>
    </div>
</div>
<!-- /BREADCRUMB -->

<!-- section -->
<div class="section">
    <!-- container -->
    <div class="tabelaFormulario"><!--se bugar mude a class para uma id-->
        <div class="row">


            <div class="section-title" id="cadastro">
                <h3 class="title">Fichamento da Carpoteca</h3>
            </div>
            <div class="col-md-6">
                <form id="checkout-form" class="clearfix" action="php/cadastroCarpoteca.php" method="POST">
                    <table id='fichamento1'>
                        <tr class='size-option'>
                            <td class='form-group'><label class='text-uppercase' id='formularioLabel'>Nome Científico:</label></td>
                            <td class='form-group'><label class='text-uppercase' id='formularioLabel'>Nome Popular:</label></td>
                        </tr>
                        <tr class='size-option'>
                            <td class='form-group'>
                                <select class='input search-categories'  id="formSelect" name='nomeCientificoCarpoteca'>
                                    <option value="1">Selecione</option>
                                    <?php echo $options; ?>
                                    <option value="Outro">Outro</option>
                                </select></td>

                            <td class='form-group'>
                                <input class='input search-input' name='nomePopularCarpoteca' id="formSelect" type='text' placeholder='Nome Popular'>
                            </td>                                                                                 

                        </tr>
                        <tr>
                            <td id="selectForm" style='display:none;'><input class='input search-input' name='nomeCientificoCarpoteca' id="selectForm" type='text' placeholder='Nome Científico'></td>
                        </tr>


                        <tr class='size-option'>
                            <td class='form-group'><label class='text-uppercase' id='formularioLabel'>Divisão:</label></td>
                            <td class='form-group'><label class='text-uppercase' id='formularioLabel'>Classe:</label></td>
                        </tr>

                        <tr>
                            <td class='form-group'>
                                <select class='input search-categories'  id="formSelect1" name='divisaoFormulario'>
                                    <option value="1">Selecione</option>
                                    <?php echo $options1; ?>
                                    <option value="Outro">Outro</option>
                                </select></td>
                            <td class='form-group'>
                                <select class='input search-categories'  id="formSelect2" name='classeFormulario'>
                                    <option value="1">Selecione</option>
                                    <?php echo $options2; ?>
                                    <option value="Outro">Outro</option>
                                </select></td>

                        </tr>


                        <tr>
                            <td id="selectForm1" style='display:none;'><input class='input search-input' name='divisaoFormulario' id="selectForm1" type='text' placeholder='Divisão'></td>
                            <td id="selectForm2" style='display:none;'><input class='input search-input' name='classeFormulario' id="selectForm2" type='text' placeholder='Classe'></td>
                        </tr>


                        <tr class='size-option'>
                            <td class='form-group'><label class='text-uppercase' id='formularioLabel'>Ordem:</label></td>
                            <td class='form-group'><label class='text-uppercase' id='formularioLabel'>Família:</label></td>
                        </tr>
                        <tr class='size-option'>
                            <td class='form-group'>
                                <select class='input search-categories'  id="formSelect3" name='ordemFormulario'>
                                    <option value="1">Selecione</option>
                                    <?php echo $options3; ?>
                                    <option value="Outro">Outro</option>
                                </select></td>
                            <td class='form-group'>
                                <select class='input search-categories'  id="formSelect4" name='familiaFormulario'>
                                    <option value="1">Selecione</option>
                                    <?php echo $options4; ?>
                                    <option value="Outro">Outro</option>
                                </select></td>

                        </tr>
                         <tr>
                            <td id="selectForm3" style='display:none;'><input class='input search-input' name='ordemFormulario' id="selectForm3" type='text' placeholder='Ordem'></td>
                            <td id="selectForm4" style='display:none;'><input class='input search-input' name='familiaFormulario' id="selectForm4" type='text' placeholder='Família'></td>
                        </tr>
                        <tr class='size-option'>
                            <td colspan='2' class='form-group'><label class='text-uppercase'>Imagem:</label></td>
                        </tr>
                        <tr class='size-option'>
                            <td class='form-group'>
                                <input type='file' id='formulario' name='fotoCarpoteca1' size='25'>
                            </td>
                            <td class='form-group'>
                                <input type='file' id='formulario' name='fotoCarpoteca2' size='25'>
                            </td>
                        </tr>
                        <tr class='size-option'>
                            <td class='form-group'>
                                <input type='file' id='formulario' name='fotoCarpoteca3' size='25'>
                            </td>
                            <td class='form-group'>
                                <input type='file' id='formulario' name='fotoCarpoteca4' size='25'>
                            </td>
                        </tr>

                    </table>

                </form>



            </div>
            <div class="col-lg-6">
                <form id="checkout-form" class="clearfix" action="php/cadastroCarpoteca.php" method="POST">
                    <table id="fichamento2">
                        <tr>
                            <td> <label class="text-uppercase">Descrição: </label></td>
                        </tr>
                        <tr>
                            <td><textarea name="descricao" id="ckeditor" class="ckeditor" maxlength="3000"></textarea></td> 
                        </tr>
                        <tr class="pull-right">
                            <td><input type="submit" class="primary-btn" value="Adicionar Carpoteca"></td>
                        </tr>
                    </table>
                </form>
            </div>


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

<script>
                        $('#formSelect').change(function () {
                            var valor = $('#formSelect').val();
                            if (valor == "Outro") {
                                $('#selectForm').show();

                            } else {
                                $('#selectForm').hide();

                            }
                        });
                        $('#formSelect1').change(function () {
                            var valor = $('#formSelect1').val();
                            if (valor == "Outro") {
                                $('#selectForm1').show();

                            } else {
                                $('#selectForm1').hide();

                            }
                        });
                        $('#formSelect2').change(function () {
                            var valor = $('#formSelect2').val();
                            if (valor == "Outro") {
                                $('#selectForm2').show();

                            } else {
                                $('#selectForm2').hide();

                            }
                        });

                        $('#formSelect3').change(function () {
                            var valor = $('#formSelect3').val();
                            if (valor == "Outro") {
                                $('#selectForm3').show();

                            } else {
                                $('#selectForm3').hide();

                            }
                        });

                        $('#formSelect4').change(function () {
                            var valor = $('#formSelect4').val();
                            if (valor == "Outro") {
                                $('#selectForm4').show();

                            } else {
                                $('#selectForm4').hide();

                            }
                        });
</script>

<?php $conecta->close(); ?>
</body>

</html>

