<?php
$nome_servidor = "localhost";
$nome_usuario = "root";
$senha = "";
$nome_banco = "plantasDoCerrado";

//Conecão com banco
$conecta = new mysqli($nome_servidor, $nome_usuario, $senha, $nome_banco);

//Verificar conexão
if($conecta -> connect_error){
    die("Deu merda: ".$conecta->connect_error."<br>");
}echo 'Deus esta aqui<br>';

//Dados do formulário
$nomeCientifico = $_POST["nomeCientifico"];
$nomePopular = $_POST["nomePopular"];
$filo = $_POST["filoFormulario"];
$classe = $_POST["classeFormulario"];
$ordem = $_POST["ordemFormulario"];
$familia = $_POST["familiaFormulario"];
$carpoteca = $_POST["caportecaFormulario"];
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