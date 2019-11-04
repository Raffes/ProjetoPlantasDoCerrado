<?php
include 'conexao.php';


$view1 = "CREATE VIEW `VwFeed` AS 
SELECT a.nomeCientifico, a.nomePopular, a.divisao, a.classe, a.ordem, a.familia, a.descricao, b.imgPlanta1 
FROM plantas as a LEFT JOIN imagemPlantas as b on a.id_plantas = b.id_imagemPlantas";

$view2 = "CREATE VIEW `VwFiltro` AS SELECT c.*, d.nomeCientificoCarpoteca FROM plantas as c left join carpoteca as d on c.id_plantas = d.id_carpoteca";

if($conecta->query($view1)===TRUE){
    echo "View Feed criada com sucesso<br>";
}else{
    echo "Erro na criação da view Feed: ".$conecta->error."<br>";
}

if($conecta->query($view2)===TRUE){
    echo "View Filtro criada com sucesso<br>";
}else{
    echo "Erro na criação da view Filtro: ".$conecta->error."<br>";
}
