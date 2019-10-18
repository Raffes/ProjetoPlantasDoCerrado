<?php
include 'conexao.php';

//Dados do formulário
$nomeCientifico = $_POST["nomeCientifico"];
$nomePopular = $_POST["nomePopular"];
$filo = $_POST["filoFormulario"];
$classe = $_POST["classeFormulario"];
$ordem = $_POST["ordemFormulario"];
$familia = $_POST["familiaFormulario"];
$imagem1 = $_POST["fotoPlanta1"];
$imagem2 = $_POST["fotoPlanta2"];
$imagem3 = $_POST["fotoPlanta3"];
$imagem4 = $_POST["fotoPlanta4"];
$descricao = $_POST["descricao"];

//Inserir registro
$insert1 = "INSERT INTO plantas (nomeCientifico, nomePopular, filo, classe, ordem, familia, descricao)"
        . "VALUES('$nomeCientifico','$nomePopular','$filo','$classe','$ordem','$familia','$carpoteca','$descricao')";

$insert2 = "INSERT INTO plantas (img1, img2, img3, img4)"
        . "VALUES('$imagem1','$imagem2','$imagem3','$imagem4')";

if($conecta->query($insert1)===TRUE && $conecta->query($insert2)===TRUE){
    echo "<script>alert('Novo registro criado com sucesso');</script>";
}else{
    echo "Erro: ".$sql."<br>".$conecta->error."<br>";
}
$conecta->close();
