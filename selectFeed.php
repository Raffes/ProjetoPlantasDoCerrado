<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Feed</title>

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
	
		
		<!-- container -->
	</header>
<div class="section">
		<!-- container -->
		<div class="container">
			<div class="row">
                        
                            <div class="col-md-6">
                                <div class="billing-details">

<?php

include 'php/conexao.php';
                                    
                                    $feed = "SELECT * FROM plantas";

                                        $resultado = $conecta->query(($feed));
                                        if($resultado->num_rows > 0){
                                            while($linha = $resultado->fetch_assoc()) { 
                                                echo "<div class='product product-single'>"
                                                
                                                ."<table id='feed1'>"
                                                ."<tr>"
                                                ."<td colspan='4'><a href src='.img/" . $linha["imagem"]. "'> </a></td>"
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
                                                ."<tr>"
                                                ."<td colspan='4'>". $linha["descricao"]. "</td>"
                                                ."</tr>"
                                                ."<tr>"
                                                ."<td colspan='4' class='product-btns'>
                                                  <button class='main-btn icon-btn'><i class='fa fa-heart'></i></button></td>"
                                                ."</tr>"        
                                                ."</table>"
                                                
                                                ."</div>";
                                        }
                                        } else { echo "0 results";
                                        } $conecta->close();
                                        ?>
                                </div>
                            </div>
                        </div>
                </div>
</div>

</body>
</html>