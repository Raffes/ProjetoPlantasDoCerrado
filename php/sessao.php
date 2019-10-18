<?php
include 'conexao.php';


$login = $_POST['login'];
$senhaLogin = $_POST['senhaDeLogin'];



$result = mysqli_query($conecta,"SELECT * FROM cadastro WHERE login = '$login' AND senha = '$senhaLogin' LIMIT 1")
        or die("Error");

$linhas = mysqli_num_rows($result);


if($linhas == ''){
    echo "Usuário e/ou senha inválidos";
}else{
    echo "Vale mel dels maria jusá!!!!!";
}


//Verificar login e senha estão corretas

//$verificacao = "SELECT * FROM cadastro WHERE 'login' = $login AND 'senha' = $senhaLogin";

/*$resultado = $conecta->query($linhas);

if($resultado->num_rows > 0){
    $_SESSION['login'] = $login;
    $_SESSION['senha'] = $senhaLogin;
    header('location: logIndex.php');
}else{
    unset ($_SESSION['login']);
    unset ($_SESSION['senha']);
header('location: index.php');}
    
    /*session_unset();
    session_destroy();
    echo "<script>"
    . "alert('Login ou senha incorrta');"
    . "window.location.href = 'index.php'"
    . "</script>";*/

