<?php

session_start();

if((!isset($_SESSION['login'])==true) and (!isset($_SESSION['senha'])==true)){
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header('location: index.php');
    
    /*session_unset();
    echo "<script>"
         ."alert('Esta pagina só pode ser acessada por usuário logado');"
         . "window.location.href = 'index.php'"    
         . "</scritp>";*/
}
$logado = $_SESSION['login'];

