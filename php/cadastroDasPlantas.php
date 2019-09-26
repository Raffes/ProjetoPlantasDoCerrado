<?php
include 'conexao.php';

//Dados do formulário
$nomeCientifico = $_POST["nomeCientifico"];
$nomePopular = $_POST["nomePopular"];
$filo = $_POST["filoFormulario"];
$classe = $_POST["classeFormulario"];
$ordem = $_POST["ordemFormulario"];
$familia = $_POST["familiaFormulario"];
$carpoteca = $_POST["carpotecaFormulario"];
$imagem = $_POST["fotoPlanta"];
$descricao = $_POST["descricao"];

//Inserir registro
$sql = "INSERT INTO plantas (nomeCientifico, nomePopular, filo, classe, ordem, familia, carpoteca, imagem, descricao)"
        . "VALUES('$nomeCientifico','$nomePopular','$filo','$classe','$ordem','$familia','$carpoteca','$imagem','$descricao')";

if($conecta->query($sql)===TRUE){
    echo "Novo registro criado com sucesso";
}else{
    echo "Erro: ".$sql."<br>".$conecta->error."<br>";
}
$conecta->close();