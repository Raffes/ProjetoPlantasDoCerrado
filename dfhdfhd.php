<!DOCTYPE html><?php
include 'php/conexao.php';
$formulario1 = "SELECT c.nomeCientifico, c.nomePopular, c.divisao, c.classe, c.ordem, c.familia" . ", d.nomeCientificoCarpoteca "
        . "FROM plantas as c left join carpoteca as d on c.id_plantas = d.id_carpoteca";



$resultado = mysqli_query($conecta, $formulario1);
$options = "";
$options1 = "";
$options2 = "";
$options3 = "";
$options4 = "";
$options5 = "";
$options6 = "";

while ($row = mysqli_fetch_array($resultado)) {
    $options = $options . "<option>".$row["nomeCientifico"]."</option>";
    $options1 = $options1 . "<option>".$row["nomePopular"]."</option>";
    $options2 = $options2 . "<option>".$row["divisao"]."</option>";
    $options3 = $options3 . "<option>".$row["classe"]."</option>";
    $options4 = $options4 . "<option>".$row["ordem"]."</option>";
    $options5 = $options5 . "<option>".$row["familia"]."</option>";
    $options6 = $options6 . "<option>".$row["nomeCientificoCarpoteca"]."</option>";
    
}
?>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <select>
<?php echo $options; ?>
        </select>
        <select>
<?php echo $options1; ?>
        </select>
        <select>
<?php echo $options2; ?>
        </select>
        <select>
<?php echo $options3; ?>
        </select>
        <select>
<?php echo $options4; ?>
        </select>
        <select>
<?php echo $options5; ?>
        </select>
        <select>
<?php echo $options6; ?>
        </select>
        <select>
<?php echo $options7; ?>
        </select>
    </body>
</html>
