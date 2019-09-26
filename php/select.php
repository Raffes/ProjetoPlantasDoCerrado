<?php
include 'conexao.php';

$sql = "SELECT * FROM plantas";

$resultado = $conecta->query(($sql));
if($resultado->num_rows > 0){
    while($linha = $resultado->fetch_assoc()) { 
        echo "id: " . $linha["id"]. "<br> Name Cientifico: " . $linha["nomeCientifico"]. "<br> Nome Popular: " . $linha["nomePopular"]. 
        "<br> Filo: " . $linha["filo"]. "<br> Classe: " . $linha["classe"]. "<br> Ordem: " . $linha["ordem"]. 
        "<br> Familia: " . $linha["familia"]. "<br> Carpoteca: " . $linha["carpoteca"]. 
        "<br> Imagem: <img src=".$linha["imagem"].">". "<br> Descrição: " . $linha["descricao"]. "<br>";
}
} else { echo "0 results";
} $conecta->close();



