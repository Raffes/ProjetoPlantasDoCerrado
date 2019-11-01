<?php
include 'conexao.php';

//Dados do formulário
$nomeCientificoCarpoteca = $_POST["nomeCientificoCarpoteca"];
$nomePopularCarpoteca = $_POST["nomePopularCarpoteca"];
$divisao = $_POST["divisaoFormulario"];
$classe = $_POST["classeFormulario"];
$ordem = $_POST["ordemFormulario"];
$familia = $_POST["familiaFormulario"];
$imagem1 = $_POST["fotoCarpoteca1"];
$imagem2 = $_POST["fotoCarpoteca2"];
$imagem3 = $_POST["fotoCarpoteca3"];
$imagem4 = $_POST["fotoCarpoteca4"];
$descricao = $_POST["descricao"];

//Inserir registro
$insert1 = "INSERT INTO carpoteca (nomeCientificoCarpoteca, nomePopularCarpoteca, descricao)"
        . "VALUES('$nomeCientificoCarpoteca','$nomePopularCarpoteca','$descricao')";

$insert2 = "INSERT INTO plantas (divisao, classe, ordem, familia) "
        . "VALUES('$divisao','$classe','$ordem','$familia')";

$insert3 = "INSERT INTO imagemCarpoteca (imgCarpoteca1, imgCarpoteca2, imgCarpoteca3, imgCarpoteca4)"
        . "VALUES('$imagem1','$imagem2','$imagem3','$imagem4')";

if($conecta->query($insert1)===TRUE && $conecta->query($insert2)===TRUE || $conecta->query($insert3)===TRUE){
    echo "<script>alert('Novo registro criado com sucesso');"
    . "window.location = '../formularioCarpoteca.php';</script>";
}else{
    echo "Erro: ".$sql."<br>".$conecta->error."<br>";
}
$conecta->close();
