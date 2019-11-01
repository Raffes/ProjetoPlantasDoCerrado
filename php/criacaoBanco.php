<?php
include 'conexao.php';

$sql = "CREATE DATABASE IF NOT EXISTS dbPlantasDoCerrado";
if($conecta->query($sql)==TRUE){
    echo "Banco de dados criado com sucesso <br>";
}else{
    echo "Erro na criação do banco de dados: ".$conecta->error."<br>";
}

$conecta->close();

