<?php
$nome_servidor = "localhost";
$nome_usuario = "root";
$senha = "";
$nome_banco = "plantasDoCerrado";

//Conecão com banco
$conecta = new mysqli($nome_servidor, $nome_usuario, $senha, $nome_banco);

//Verificar conexão
if($conecta -> connect_error){
    die("Parabéns, não funcionou: ".$conecta->connect_error."<br>");
}



