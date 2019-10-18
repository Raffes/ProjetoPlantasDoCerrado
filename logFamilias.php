<?php include 'php/conexao.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Família</title>

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
                                    <form action="#" method="POST">
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
                                                            <li class="text-uppercase">Indentificação:</li>
                                                            <li><input type="text" name="login" class="input search-input"></li>
                                                            <li class="text-uppercase">Senha:</li>
                                                            <li><input type="password" name="senha" class="input search-input"></li>
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
                                            <li id="inicio"><a href="index.php"><span class="category-header">Início <!--<i class="fa fa-list"></i>--></span></a></li>
						<li class="dropdown mega-dropdown full-width"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Filo <i class="fa fa-caret-down"></i></a>
							<div class="custom-menu">
								<div class="row">
									
                                                                    <div class="col-md-3">
										
                                                                               <ul class='list-links'>
                                                                                    <li><h3 class='list-links-title'>Categorias</h3></li>
										
                                                                                    <?php
                                                                                    
                                                                                    $filoSelect = "SELECT filo FROM plantas";

                                                                                    $resultadoFilo = $conecta->query(($filoSelect));
                                                                                    if($resultadoFilo->num_rows > 0){
                                                                                        $linhaFilo = $resultadoFilo->fetch_assoc();
                                                                                        $numItems = sizeof($resultadoFilo->fetch_assoc());
                                                                                        $maxRows = 5;
                                                                                        $maxItems = 4 * $maxRows;
                                                                                        for($i = 0; $i < $numItems; $i++){ 
                                                                                            echo "<li><a href='#'>".$linhaFilo["filo"]."</a></li>";
                                                                                            if(($i + 1) % 4 == 0){
                                                                                                echo "</ul>"
                                                                                                . "<hr class='hidden-md hidden-lg'>"
                                                                                                . "</div>"
                                                                                                . "<div class='col-md-3'>"
                                                                                                . "<ul class='list-links'>";
                                                                                            }
                                                                                            
                                                                                            if($i == $numItems){
                                                                                                echo "</ul>"
                                                                                                . "<hr class='hidden-md hidden-lg'>"
                                                                                                . "</div>";
                                                                                            }
                                                                                            
                                                                                            if($i+1 >= $maxItems){
                                                                                                echo "</div><bottom>Add</bottom>";
                                                                                                return;
                                                                                            }
                                                                                        }
                                                                                    }      
                                                                                        
                                                                                    
                                                                                    
                                                                                    
                                                                                    ?>
                                                                               </ul>
                                                                                    
                                                                     
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
	
	<!-- /NAVIGATION -->

	<!-- BREADCRUMB -->
	<div id="breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
				
				<li class="active">Página Inicial</li>
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

                                    <div class="section-title">
                                        <h3 class="title">Feed</h3>
                                    </div>
                                    <?php
                                   
                                    $feed = "SELECT * FROM plantas LIMIT 5";

                                        $resultado = $conecta->query(($feed));
                                        if($resultado->num_rows > 0){
                                            while($linha = $resultado->fetch_assoc()) { 
                                                echo "<div class='product product-single'>"
                                                ."<div class='product-thumb'>"
                                                ."<table id='feed1'>"
                                                ."<tr>"
                                                ."<td colspan='4'><img src=' .img/" . $linha["imagem"]. "' alt='imagem'></td>"
                                                ."</tr>"
                                                ."<tr>"
                                                ."<td class='text-uppercase'> <h6 class='title'>Nome Científico: </h6></td>" 
                                                ."<td>".$linha["nomeCientifico"]. "</td>"
                                                ."<td class='text-uppercase'><h6 class='title'>Nome Popular: </h6></td>" 
                                                ."<td>".$linha["nomePopular"]."</td>" 
                                                ."</tr>"
                                                ."<tr>"
                                                ."<td class='text-uppercase'> <h6 class='title'>Filo: </h6></td>" 
                                                ."<td>".$linha["filo"]."</td>"
                                                ."<td class='text-uppercase'><h6 class='title'>Classe: </h6></td>" 
                                                ."<td>".$linha["classe"]."</td>"
                                                ."</tr>"
                                                ."<tr>"
                                                ."<td class='text-uppercase'> <h6 class='title'>Ordem: </h6></td>" 
                                                ."<td>" .$linha["ordem"]."</td>"
                                                ."<td class='text-uppercase'><h6 class='title'>Familia: </h6></td>" 
                                                ."<td>". $linha["familia"]."</td>"
                                                ."</tr>"
                                                ."<tr>"
                                                ."<td class='text-uppercase'><h6 class='title'>Carpoteca: </h6></td>" 
                                                ."<td colspan='3'>".$linha["carpoteca"]. "</td>"
                                                ."</tr>"
                                                ."</table>"
                                                ."<table id='feed2'>"
                                                ."<tr>"
                                                ."<th colspan='4'  class='section-title'> <h6 class='title'>Descrição: </h6></th>" 
                                                ."</tr>"
                                                ."<tr id='desc'>"
                                                ."<td colspan='4' id='des'>". $linha["descricao"]. "</td>"
                                                ."</tr>"
                                                ."<tr>"
                                                ."<td colspan='4' class='product-btns'>
                                                  <button class='main-btn icon-btn'><i class='fa fa-heart'></i></button></td>"
                                                ."</tr>"        
                                                ."</table>"
                                                ."<button class='main-btn quick-view' oneclick='abrirIframe()'><i class='fa fa-search-plus'></i> Vê Descrição Completa</button>"
                                                ."</div>"
                                                  
                                                ."</div>";
                                        }
                                        } else { echo "0 results";
                                        } $conecta->close();
                                    
                                    ?>
                                    

                                    </div>
                            </div>
                            
                            
                         <div class="col-md-6">
                             <div class="section-title">
								<h3 class="title">Filtro</h3>
							</div>
                             <form>
                                 
                                 <!--<div id="tabelaFiltro">-->
                                                
                                                    <table id="tabelaFiltro">
                                                        <tr>
                                                            <th colspan="2" class="section-title"><h5 class="title">Tipo</h5></th>
                                                        </tr>
                                                        <tr>
                                                            
                                                            <td class="text-uppercase">Filo</td>
                                                            
                                                            <td class="text-uppercase">Classe</td>
                                                        </tr>
                                                        <tr>
                                                            <td><select class="input search-categories">
								<option value="0">Todos</option>
								<option value="1">Category 01</option>
								<option value="1">Category 02</option>
                                                                </select></td>
                                                                
                                                                <td><select class="input search-categories">
								<option value="0">Todos</option>
								<option value="1">Category 01</option>
								<option value="1">Category 02</option>
							</select></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-uppercase">Ordem</td>
                                                            <td class="text-uppercase">Família</td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <td><select class="input search-categories">
								<option value="0">Todos</option>
								<option value="1">Category 01</option>
								<option value="1">Category 02</option>
                                                                </select></td>
                                                            
                                                            <td><select class="input search-categories">
								<option value="0">Todos</option>
								<option value="1">Category 01</option>
								<option value="1">Category 02</option>
                                                                </select></td>
                                                            

                                                        </tr>
                                                        <tr>
                                                            
                                                            <td colspan="2" class="text-uppercase">Carpoteca</td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2"><select class="input search-categories">
								<option value="0">Todos</option>
								<option value="1">Category 01</option>
								<option value="1">Category 02</option>
                                                                </select></td>
                                                        </tr>
                                                        <th colspan="2" class="section-title"><h5 class="title">Nome</h5></th>
                                                           
                                              
                                                        <tr>
                                                            <td class="text-uppercase">Nome Científico</td>
                                                            <td class="text-uppercase">Nome Popular</td>
                                                        </tr>
                                                        <tr>
                                                            <td><select class="input search-categories">
								<option value="0">Todos</option>
								<option value="1">Category 01</option>
								<option value="1">Category 02</option>
                                                                </select></td>
                                                                
                                                                <td><select class="input search-categories">
								<option value="0">Todos</option>
								<option value="1">Category 01</option>
								<option value="1">Category 02</option>
							</select></td>
                                                        </tr>
                                                        
                                                        
                                                    </table>
                                                        <div class="pull-right">
                                                            <button class="primary-btn">Pesquisar</button>
                                                        </div>

                                                    
						</form>
                        </div>
                            
                    </form>
                       
		</div>
			
		</div>
		<!-- /container -->
	</div>
        
	
            
            <!-- /section -->
        
        
        <!-- Search -->
        <!--<aside id="side">
            <div id="lado">
                                
					<div>
                                            <form>
                                                <table>
                                                    <th id="linhaH">Nome</th>
                                                </table>
                                                    <table>
                                                        <tr>
                                                            
                                                            <td>Grupo</td>
                                                            
                                                            <td>Família</td>
                                                        </tr>
                                                        <tr>
                                                            <td><select class="input search-categories">
								<option value="0">Todos</option>
								<option value="1">Category 01</option>
								<option value="1">Category 02</option>
                                                                </select></td>
                                                                
                                                                <td><select class="input search-categories">
								<option value="0">Todos</option>
								<option value="1">Category 01</option>
								<option value="1">Category 02</option>
							</select></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Autor</td>
                                                            <td>Nome Popular</td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <td><input class="input search-input" type="text"></td>
                                                            
                                                            <td><input class="input search-input" type="text"></td>
                                                            

                                                        </tr>
                                                        <tr>
                                                            
                                                            <td colspan="2">Nome completo</td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2"><input class="input search-input" type="text"></td>
                                                        </tr>
                                                            <th id="linhaH">Forma de Vida</th>
                                              
                                                        <tr>
                                                            <td>Forma de Vida</td>
                                                            <td>Subtrato</td>
                                                        </tr>
                                                        <tr>
                                                            <td><select class="input search-categories">
								<option value="0">Todos</option>
								<option value="1">Category 01</option>
								<option value="1">Category 02</option>
                                                                </select></td>
                                                                
                                                                <td><select class="input search-categories">
								<option value="0">Todos</option>
								<option value="1">Category 01</option>
								<option value="1">Category 02</option>
							</select></td>
                                                        </tr>
                                                        
                                                        
                                                    </table>
                                                    <table id="btn">
                                                        <tr>
                                                            <td><input type="submit" class="primary-btn" value="Pesquisar"></td>
                                                        </tr>
                                                    </table>
                                                    
						</form>
					</div>
            </div>
        </aside>
        
        <!-- /Search -->

        
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

</body>

</html>



