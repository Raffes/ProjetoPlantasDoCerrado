<?php
session_start();

if(!isset($_SESSION['login']) && !isset($_SESSION['senha'])){
    echo "<script type='text/javascript'>
        window.location = 'index.php';
        </script>";
}

