<?php

include 'conexao.php';



$formulario1 = "SELECT * FROM VwFormPlanta";

$resultado = mysqli_query($conecta, $formulario1);
$options = "";
$options1 = "";
$options2 = "";
$options3 = "";
$options4 = "";

while ($row = mysqli_fetch_assoc($resultado)) {
    $options = $options . "<option value='".$row["nomeCientifico"]."'>".$row["nomeCientifico"]."</option>";
    $options1 = $options1 . "<option value='".$row["divisao"]."'>".$row["divisao"]."</option>";
    $options2 = $options2 . "<option value='".$row["classe"]."'>".$row["classe"]."</option>";
    $options3 = $options3 . "<option value='".$row["ordem"]."'>".$row["ordem"]."</option>";
    $options4 = $options4 . "<option value='".$row["familia"]."'>".$row["familia"]."</option>";
    
}

