<?php

include 'conexao.php';



$formulariol = "SELECT * FROM VwFiltro";


$resultado = mysqli_query($conecta, $formulariol);


$options = "";
$options1 = "";
$options2 = "";
$options3 = "";
$options4 = "";
$options5 = "";
$options6 = "";

while ($row = mysqli_fetch_assoc($resultado)) {
    $options = $options . "<option value='".$row["nomeCientificoCarpoteca"]."'>".$row["nomeCientificoCarpoteca"]."</option>";
    $options1 = $options1 . "<option value=''>".$row["divisao"]."</option>";
    $options2 = $options2 . "<option value='".$row["divisao"]."'>".$row["classe"]."</option>";
    $options3 = $options3 . "<option value='".$row["ordem"]."'>".$row["ordem"]."</option>";
    $options4 = $options4 . "<option value='".$row["familia"]."'>".$row["familia"]."</option>";
    $options5 = $options5 . "<option value='".$row["nomeCientifico"]."'>".$row["nomeCientifico"]."</option>";
    $options6 = $options6 . "<option value='".$row["nomePopular"]."'>".$row["nomePopular"]."</option>";
}

