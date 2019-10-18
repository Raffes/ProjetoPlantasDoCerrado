<?php
include 'conexao.php';

//Dados do formulario do cadastro do usuário
$identificacao = $_POST["ident"];
$senhaUsuario = $_POST["senha"];
$modificadorArtigo = $_POST["modificadorArtigo"];
$cadastrador = $_POST["cadastrador"];
$tipoUsuario = $_POST["tipoDePessoa"];
$outroUsuario = $_POST["outroUsuario"];

//Inserir registro

/*$cadastro = "CREATE USER '$identificacao' @ 'localhost' IDENTIFIED BY '$senhaUsuario'";

if($modificadorArtigo == TRUE){
    $privilegioModificador = "GRANT CREATE ON plantasDoCerrado.plantas FROM '$indentificador' @ 'localhost'";
}*/

//if() aqui vai na sessão conectar o usuario a pagina de cadastro de ususrio


$cadastro1 = "INSERT INTO cadastro(login, senha)"
        . "VALUES('$identificacao','$senhaUsuario')";

$cadastro2 = "INSERT INTO tipoDeUsuario(usuario, outro)"
        . "VALUES ('$tipoUsuario', '$outroUsuario')";


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