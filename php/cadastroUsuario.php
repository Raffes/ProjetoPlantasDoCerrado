<?php
include 'conexao.php';

//Dados do formulario do cadastro do usuário
$identificacao = $_POST["ident"];
$nomeUsuario = $_POST["nome"];
$senhaUsuario = $_POST["senha"];
//$modificadorArtigo = $_POST["modificadorArtigo"];
//$cadastrador = $_POST["cadastrador"];
$tipoUsuario = $_POST["tipoDePessoa"];

//Inserir registro

/*$cadastro = "CREATE USER '$identificacao' @ 'localhost' IDENTIFIED BY '$senhaUsuario'";

if($modificadorArtigo == TRUE){
    $privilegioModificador = "GRANT CREATE ON plantasDoCerrado.plantas FROM '$indentificador' @ 'localhost'";
}*/

//if() aqui vai na sessão conectar o usuario a pagina de cadastro de ususrio


$cadastro1 = "INSERT INTO cadastroDeUsuario(login, nome, senha)"
        . "VALUES('$identificacao', '$nomeUsuario','$senhaUsuario')";

$cadastro2 = "INSERT INTO tipoDeUsuario(usuario)"
        . "VALUES ('$tipoUsuario')";



if($conecta->query($cadastro1)===TRUE){
    echo "<script>alert('Novo registro criado com sucesso');</script>";
}else{
    echo "Erro: ".$cadastro1."<br>".$conecta->error."<br>";
}

if($conecta->query($cadastro2)===TRUE){
    echo "<script>alert('Novo registro criado com sucesso');</script>";
}else{
    echo "Erro: ".$cadastro2."<br>".$conecta->error."<br>";
}

$conecta->close();