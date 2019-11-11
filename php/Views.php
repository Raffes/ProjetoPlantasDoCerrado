<?php
include 'conexao.php';


$view1 = "CREATE VIEW `VwFeed` AS 
SELECT a.id_plantas, a.nomeCientifico, a.nomePopular, a.divisao, a.classe, a.ordem, a.familia, a.descricao, b.imgPlanta1 
FROM plantas as a LEFT JOIN imagemPlantas as b on a.id_plantas = b.id_imagemPlantas ORDER BY a.id_plantas DESC";

$view2 = "CREATE VIEW `VwFiltro` AS SELECT c.nomeCientifico, c.nomePopular, c.divisao, c.classe, c.ordem, c.familia"
        . ", d.nomeCientificoCarpoteca FROM plantas as c left join carpoteca as d on c.id_plantas = d.id_carpoteca";

$view3 = "CREATE VIEW `VwFormPlanta` AS 
SELECT nomeCientifico, divisao, classe, ordem, familia
FROM plantas";

$view4 = "CREATE VIEW `VwFeedDivisao` AS "
        . "SELECT a.nomeCientifico, a.nomePopular, a.divisao, a.classe, a.ordem, a.familia, a.descricao, b.imgPlanta1 "
        . "FROM plantas as a LEFT JOIN imagemPlantas as b on a.id_plantas = b.id_imagemPlantas ORDER BY a.divisao ASC";
        
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

if($conecta->query($view3)===TRUE){
    echo "View Formulario da planta criada com sucesso<br>";
}else{
    echo "Erro na criação da view Formulario da planta: ".$conecta->error."<br>";
}

if($conecta->query($view4)===TRUE){
    echo "View Feed da divisão criada com sucesso<br>";
}else{
    echo "Erro na criação da view Feed da divisão: ".$conecta->error."<br>";
}