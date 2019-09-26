<?php
include 'conexao.php';

$tabela1 = "CREATE TABLE IF NOT EXISTS cadastro(
id_cadastro int(55) primary key auto_increment,
login varchar(20),
senha varchar(15)
)";


$tabela2 = "CREATE TABLE IF NOT EXISTS plantas(
id int(55) primary key auto_increment,
nomeCientifico varchar(35),
nomePopular varchar(35),
filo varchar(35),
classe varchar(35),
ordem varchar(35),
familia varchar(35),
carpoteca varchar(35),
imagem longblob,
descricao text(3000),
id_cadastro int(55),
foreign key (id_cadastro) references cadastro(id_cadastro)
)";


if($conecta->query($tabela1)===TRUE){
    echo "Tabela cadastro criada com sucesso<br>";
}else{
    echo "Erro na criação da tabela cadastro: ".$conecta->error."<br>";
}

if($conecta->query($tabela2)===TRUE){
    echo "Tabela plantas criada com sucesso<br>";
}else{
    echo "Erro na criação da tabela plantas: ".$conecta->error."<br>";
}

$conecta->close();


