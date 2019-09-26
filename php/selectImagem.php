<?php
include 'conexao.php';

$caminho = "img/";

$busca = mysqli_query($conexao, "SELECT imagem FROM plantas");
while($perfil = msqli_fetch_object($busca)):
$img = $caminho . $perfil->img;
echo "<div class='perfil'>"
. "<h1> Plantas</h1>"
        . "<img src='$img' alt=''/>Imagem: $perfil->imagem"
        . "</div>";
     endwhile;

/*$sql = "SELECT imagem FROM plantas";
$resultado = mysql_query($sql);
$img = mysq_fetch_object($resultado);

echo " <img src='$img->imagem'>";

/*while($imagem = mysqli_fetch_object($sql)){
    $img = "img/".$imagem->imagem;
    echo "<img src='$img' alt='$imagem->imagem'/>";
}

/*$resultado = $conecta->query(($sql));
if($resultado->num_rows > 0){
    while($linha = $resultado->fetch_assoc()) { 
        $diretorio = $linha["imagem"];
        echo "<img src='$diretorio'>";
}
} else { echo "0 results";
}
 *  */


$conecta->close();

