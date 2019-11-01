<?php
include 'conexao.php';

//Dados do formulário
$nomeCientifico = $_POST["nomeCientificoPlanta"];
$nomePopular = $_POST["nomePopular"];
$divisao = $_POST["divisaoFormulario"];
$classe = $_POST["classeFormulario"];
$ordem = $_POST["ordemFormulario"];
$familia = $_POST["familiaFormulario"];
$imagem1 = $_POST["fotoPlanta1"];
$imagem2 = $_POST["fotoPlanta2"];
$imagem3 = $_POST["fotoPlanta3"];
$imagem4 = $_POST["fotoPlanta4"];
$descricao = $_POST["descricao"];

//Inserir registro
$insert1 = "INSERT INTO plantas (nomeCientifico, nomePopular, divisao, classe, ordem, familia, descricao)"
        . "VALUES('$nomeCientifico','$nomePopular','$divisao','$classe','$ordem','$familia','$descricao')";

$insert2 = "INSERT INTO imagemPlantas (imgPlanta1, imgPlanta2, imgPlanta3, imgPlanta4)"
        . "VALUES('$imagem1','$imagem2','$imagem3','$imagem4')";

if($conecta->query($insert1)===TRUE && $conecta->query($insert2)===TRUE){
    echo "<script>alert('Novo registro criado com sucesso');"
    . "window.location = '../formularioPlanta.php';</script>";
}else{
    echo "Erro: ".$insert1."<br>".$conecta->error."<br>";
    echo "Erro: ".$insert2."<br>".$conecta->error."<br>";
}
$conecta->close();