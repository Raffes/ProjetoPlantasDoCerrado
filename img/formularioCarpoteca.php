<?php include 'php/conexao.php'; ?>
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
                        <li id="inicio"><a href="logIndex.php"><span class="category-header">Início <!--<i class="fa fa-list"></i>--></span></a></li>
                        <li class="dropdown mega-dropdown full-width"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Divisão <i class="fa fa-caret-down"></i></a>
                            <div class="custom-menu">
                                <div class="row">


                                    <div class="col-md-3">
                                        <ul class="list-links">
                                            <li><h3 class='list-links-title'>Categorias</h3></li>
                                            <?php
                                            $DivisaoSelect = "SELECT divisao FROM plantas LIMIT 39";

                                            $resultadoDivisao = $conecta->query(($DivisaoSelect));
                                            if ($resultadoDivisao->num_rows > 0) {


                                                for ($i = 0; $i < $linhaDivisao = $resultadoDivisao->fetch_assoc(); $i++) {
                                                    echo "<li><a href='logDivisoes.php'>" . $linhaDivisao["divisao"] . "</a></li>";
                                                    if (($i + 1) % 6 == 0) {
                                                        echo "</ul>"
                                                        . "</div>"
                                                        . "<ul class='list-links'>"
                                                        . "<li><h3 class='list-links-title'>Categorias</h3></li>"
                                                        ;
                                                    }

                                                    if ($i == $linhaDivisao = $resultadoDivisao->fetch_assoc()) {
                                                        echo "</ul>"
                                                        . "<hr class='hidden-md hidden-lg'>"
                                                        . "</div>";
                                                    }

                                                    if ($i + 1 >= 20) {
                                                        echo "</div><bottom>Add</bottom>";
                                                        return;
                                                    }
                                                }
                                            } else {
                                                echo "0 resultados";
                                            }
                                            ?>


                                    </div>         

                                    <li class="dropdown mega-dropdown full-width"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Classe <i class="fa fa-caret-down"></i></a>
                                        <div class="custom-menu">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <ul class="list-links">
                                                        <li><h3 class='list-links-title'>Categorias</h3></li>
                                                        <?php
                                                        $ClasseSelect = "SELECT classe FROM plantas LIMIT 39";

                                                        $resultadoClasse = $conecta->query(($ClasseSelect));
                                                        if ($resultadoClasse->num_rows > 0) {


                                                            for ($i = 0; $i < $linhaClasse = $resultadoClasse->fetch_assoc(); $i++) {
                                                                echo "<li><a href='logClasses.php'>" . $linhaClasse["classe"] . "</a></li>";
                                                                if (($i + 1) % 6 == 0) {
                                                                    echo "</ul>"
                                                                    . "</div>"
                                                                    . "<ul class='list-links'>"
                                                                    . "<li><h3 class='list-links-title'>Categorias</h3></li>"
                                                                    ;
                                                                }

                                                                if ($i == $linhaClasse = $resultadoClasse->fetch_assoc()) {
                                                                    echo "</ul>"
                                                                    . "<hr class='hidden-md hidden-lg'>"
                                                                    . "</div>";
                                                                }

                                                                if ($i + 1 >= 20) {
                                                                    echo "</div><bottom>Add</bottom>";
                                                                    return;
                                                                }
                                                            }
                                                        } else {
                                                            echo "0 resultados";
                                                        }
                                                        ?>


                                                </div>      
                                                <li class="dropdown mega-dropdown full-width"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Ordem <i class="fa fa-caret-down"></i></a>
                                                    <div class="custom-menu">
                                                        <div class="row">

                                                            <div class="col-md-3">
                                                                <ul class="list-links">
                                                                    <li><h3 class='list-links-title'>Categorias</h3></li>
                                                                    <?php
                                                                    $OrdemSelect = "SELECT ordem FROM plantas LIMIT 39";

                                                                    $resultadoOrdem = $conecta->query(($OrdemSelect));
                                                                    if ($resultadoOrdem->num_rows > 0) {


                                                                        for ($i = 0; $i < $linhaOrdem = $resultadoOrdem->fetch_assoc(); $i++) {
                                                                            echo "<li><a href='logOrdens.php'>" . $linhaOrdem["ordem"] . "</a></li>";
                                                                            if (($i + 1) % 6 == 0) {
                                                                                echo "</ul>"
                                                                                . "</div>"
                                                                                . "<ul class='list-links'>"
                                                                                . "<li><h3 class='list-links-title'>Categorias</h3></li>"
                                                                                ;
                                                                            }

                                                                            if ($i == $linhaOrdem = $resultadoOrdem->fetch_assoc()) {
                                                                                echo "</ul>"
                                                                                . "<hr class='hidden-md hidden-lg'>"
                                                                                . "</div>";
                                                                            }

                                                                            if ($i + 1 >= 20) {
                                                                                echo "</div><bottom>Add</bottom>";
                                                                                return;
                                                                            }
                                                                        }
                                                                    } else {
                                                                        echo "0 resultados";
                                                                    }
                                                                    ?>


                                                            </div>      
                                                            <li class="dropdown mega-dropdown full-width"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Família <i class="fa fa-caret-down"></i></a>
                                                                <div class="custom-menu">
                                                                    <div class="row">
                                                                        <div class="col-md-3">
                                                                            <ul class="list-links">
                                                                                <li><h3 class='list-links-title'>Categorias</h3></li>
                                                                                <?php
                                                                                $FamiliaSelect = "SELECT familia FROM plantas LIMIT 39";

                                                                                $resultadoFamilia = $conecta->query(($FamiliaSelect));
                                                                                if ($resultadoFamilia->num_rows > 0) {


                                                                                    for ($i = 0; $i < $linhaFamilia = $resultadoFamilia->fetch_assoc(); $i++) {
                                                                                        echo "<li><a href='logFamilias.php'>" . $linhaFamilia["familia"] . "</a></li>";
                                                                                        if (($i + 1) % 6 == 0) {
                                                                                            echo "</ul>"
                                                                                            . "</div>"
                                                                                            . "<ul class='list-links'>"
                                                                                            . "<li><h3 class='list-links-title'>Categorias</h3></li>"
                                                                                            ;
                                                                                        }

                                                                                        if ($i == $linhaFamilia = $resultadoFamilia->fetch_assoc()) {
                                                                                            echo "</ul>"
                                                                                            . "<hr class='hidden-md hidden-lg'>"
                                                                                            . "</div>";
                                                                                        }

                                                                                        if ($i + 1 >= 20) {
                                                                                            echo "</div><bottom>Add</bottom>";
                                                                                            return;
                                                                                        }
                                                                                    }
                                                                                } else {
                                                                                    echo "0 resultados";
                                                                                }
                                                                                ?>


                                                                        </div>      
                                                                        <li class="dropdown mega-dropdown full-width"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Carpoteca<i class="fa fa-caret-down"></i></a>
                                                                            <div class="custom-menu">
                                                                                <div class="row">
                                                                                    <div class="col-md-3">
                                                                                        <ul class="list-links">
                                                                                            <li><h3 class='list-links-title'>Categorias</h3></li>
                                                                                            <?php
                                                                                            $CarpotecaSelect = "SELECT nomeCientificoCarpoteca FROM carpoteca LIMIT 39";

                                                                                            $resultadoCarpoteca = $conecta->query(($CarpotecaSelect));
                                                                                            if ($resultadoCarpoteca->num_rows > 0) {


                                                                                                for ($i = 0; $i < $linhaCarpoteca = $resultadoCarpoteca->fetch_assoc(); $i++) {
                                                                                                    echo "<li><a href='logCarpotecas.php'>" . $linhaCarpoteca["nomeCientificoCarpoteca"] . "</a></li>";
                                                                                                    if (($i + 1) % 6 == 0) {
                                                                                                        echo "</ul>"
                                                                                                        . "</div>"
                                                                                                        . "<ul class='list-links'>"
                                                                                                        . "<li><h3 class='list-links-title'>Categorias</h3></li>"
                                                                                                        ;
                                                                                                    }

                                                                                                    if ($i == $linhaCarpoteca = $resultadoCarpoteca->fetch_assoc()) {
                                                                                                        echo "</ul>"
                                                                                                        . "<hr class='hidden-md hidden-lg'>"
                                                                                                        . "</div>";
                                                                                                    }

                                                                                                    if ($i + 1 >= 20) {
                                                                                                        echo "</div><bottom>Add</bottom>";
                                                                                                        return;
                                                                                                    }
                                                                                                }
                                                                                            } else {
                                                                                                echo "0 resultados";
                                                                                            }
                                                                                            ?>


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
                                                                <?php
                                                                $formulario1 = "SELECT a.nomeCientificoCarpoteca, a.nomePopularCarpoteca, b.divisao, b.classe, b.ordem, b.familia FROM carpoteca as a inner join plantas as b on a.id = b.id";

                                                                $resultadoFormulario2 = $conecta->query($formulario1);
                                                                if ($resultadoFormulario2->num_rows > 0) {
                                                                    while ($linhaFormulario2 = $resultadoFormulario2->fetch_assoc()) {
                                                                        echo "<table id='fichamento1'>
                                                                        <tr class='size-option'>
                                                                                <td class='form-group'><label class='text-uppercase' id='formularioLabel'>Nome Científico:</label></td>
                                                                                <td class='form-group'><label class='text-uppercase' id='formularioLabel'>Nome Popular:</label></td>
                                                                            </tr>

                                                                            <tr class='size-option'>
                                                                                <td class='form-group' id='select6'>
                                                                                <select class='input search-categories' id='formulario' name='nomeCientificoCarpoteca'>
                                                                                <option>Selecione</option>
                                                                                <option>" . $linhaFormulario2["nomeCientificoCarpoteca"] . "</option>
                                                                                <option onclick='extraFormulario6()'>Outro</option>
                                                                                </select></td>
                                                                                
                                                                                <td class='form-group'>
                                                                                    <input class='input search-input' id='formulario' name='nomePopularCarpoteca' type='text' placeholder='Nome Popular'>
                                                                                </td>                                                                                 

                                                                            </tr>
                                                                            <tr>
                                                                                <td id='f6'></td>
                                                                            </tr>
                                                                            

                                                                            <tr class='size-option'>
                                                                                <td class='form-group'><label class='text-uppercase' id='formularioLabel'>Divisão:</label></td>
                                                                                <td class='form-group'><label class='text-uppercase' id='formularioLabel'>Classe:</label></td>
                                                                            </tr>

                                                                            <tr>
                                                                                <td class='form-group' id='select7'>
                                                                                    <select class='input search-categories' id='formulario' name='divisaoFormulario'>
                                                                                    <option>Selecione</option>
                                                                                    <option>" . $linhaFormulario2["divisao"] . "</option>
                                                                                    <option onclick='extraFormulario7()'>Outro</option>
                                                                                    </select></td>
                                                                                <td class='form-group' id='select8'>
                                                                                    <select class='input search-categories' id='formulario' name='classeFormulario'>
                                                                                    <option>Selecione</option>
                                                                                    <option>" . $linhaFormulario2["classe"] . "</option>
                                                                                    <option onclick='extraFormulario8()'>Outro</option>
                                                                                    </select></td>
                                                                            </tr>


                                                                            <tr class='size-option'>
                                                                                <td class='form-group' id='f7'></td>
                                                                                <td class='form-group' id='f8'></td>
                                                                            </tr>


                                                                            <tr class='size-option'>
                                                                                <td class='form-group'><label class='text-uppercase' id='formularioLabel'>Ordem:</label></td>
                                                                                <td class='form-group'><label class='text-uppercase' id='formularioLabel'>Família:</label></td>
                                                                            </tr>
                                                                            <tr class='size-option'>
                                                                                <td class='form-group' id='select9'>
                                                                                <select class='input search-categories' id='formulario' name='ordemFormulario'>
                                                                                <option>" . $linhaFormulario2["ordem"] . "</option>
                                                                                <option onclick='extraFormulario9()'>Outro</option>
                                                                                </select></td>

                                                                                <td class='form-group' id='select10'>
                                                                                <select class='input search-categories' id='formulario' name='familiaFormulario'>
                                                                                <option>Selecione</option>
                                                                                <option>" . $linhaFormulario2["familia"] . "</option>
                                                                                <option onclick='extraFormulario10()'>Outro</option>
                                                                                </select></td>

                                                                            </tr>
                                                                            
                                                                                <tr class='size-option'>
                                                                                    <td class='form-group' id='f9'></td>
                                                                                    <td class='form-group' id='f10'></td>
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

                                                                            </table>";

                                                                               
                                                                    }
                                                                } else {
                                                                    echo "<table id='fichamento1'>
                                                                        <tr class='size-option'>
                                                                                <td class='form-group'><label class='text-uppercase' id='formularioLabel'>Nome Científico:</label></td>
                                                                                <td class='form-group'><label class='text-uppercase' id='formularioLabel'>Nome Popular:</label></td>
                                                                            </tr>

                                                                            <tr class='size-option'>
                                                                                <td class='form-group'><input class='input search-input' id='formulario' name='nomeCientificoCarpoteca' type='text' placeholder='Nome Científico da Carpoteca'></td>
                                                                                
                                                                                <td class='form-group'>
                                                                                    <input class='input search-input' id='formulario' name='nomePopularCarpoteca' type='text' placeholder='Nome Popular'>
                                                                                </td>                                                                                 

                                                                            </tr>
                                                                 
                                                                            <tr class='size-option'>
                                                                                <td class='form-group'><label class='text-uppercase' id='formularioLabel'>Divisão:</label></td>
                                                                                <td class='form-group'><label class='text-uppercase' id='formularioLabel'>Classe:</label></td>
                                                                            </tr>

                                                                            <tr>
                                                                                <td class='form-group'><input class='input search-input' id='formulario' name='divisaoFormulario' type='text' placeholder='Divisão'></td>
                                                                                <td class='form-group'><input class='input search-input' id='formulario' name='classeFormulario' type='text' placeholder='Classe'></td>
                                                                            </tr>

                                                                            <tr class='size-option'>
                                                                                <td class='form-group'><label class='text-uppercase' id='formularioLabel'>Ordem:</label></td>
                                                                                <td class='form-group'><label class='text-uppercase' id='formularioLabel'>Família:</label></td>
                                                                            </tr>
                                                                            <tr class='size-option'>
                                                                                <td class='form-group'><input class='input search-input' id='formulario' name='ordemFormulario' type='text' placeholder='Ordem'></td>

                                                                                <td class='form-group'><input class='input search-input' id='formulario' name='familiaFormulario' type='text' placeholder='Família'></td>

                                                                            </tr>
                                                                            
                                                                                <tr class='size-option'>
                                                                                    <td class='form-group' id='f4'></td>
                                                                                    <td class='form-group' id='f5'></td>
                                                                                </tr>

                                                                                <tr class='size-option'>
                                                                                    <td colspan='2' class='form-group'><label class='text-uppercase'>Imagem:</label></td>
                                                                                </tr>
                                                                                <tr class='size-option'>
                                                                                    <td class='form-group'>
                                                                                        <input type='file' id='formulario' name='fotoPlanta1' size='25'>
                                                                                    </td>
                                                                                    <td class='form-group'>
                                                                                        <input type='file' id='formulario' name='fotoPlanta2' size='25'>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class='size-option'>
                                                                                    <td class='form-group'>
                                                                                        <input type='file' id='formulario' name='fotoPlanta3' size='25'>
                                                                                    </td>
                                                                                    <td class='form-group'>
                                                                                        <input type='file' id='formulario' name='fotoPlanta4' size='25'>
                                                                                    </td>
                                                                                </tr>

                                                                            </table>";
                                                                }
                                                                ?>
                                                        </form>



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
                                                                <td><input type="submit" class="primary-btn" value="Adicionar Carpoteca"></td>
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

