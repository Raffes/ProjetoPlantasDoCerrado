<?php
include 'conexao.php';

/*$tabela1 = "drop table cadastro";

$tabela2 = "drop table imagemPlantas";

$tabela3 = "drop table imagemCarpoteca";

$tabela4 = "drop table carpoteca";

$tabela5 = "drop table plantas";

$tabela6 = "drop table tipoDeUsuario";

$tabela7 = "drop table likeArtigo";*/

$tabela1 = "CREATE TABLE IF NOT EXISTS cadastroDeUsuario(
id_cadastro int(55) primary key auto_increment not null,
login varchar(20) not null,
senha varchar(15) not null
)";

$tabela2 = "CREATE TABLE IF NOT EXISTS imagemPlantas(
    id int(55) primary key auto_increment not null,
    img1 longblob,
    img2 longblob,
    img3 longblob,
    img4 longblob
)";

$tabela3 = "CREATE TABLE IF NOT EXISTS imagemCarpoteca(
    id int(55) primary key auto_increment not null,
    img1 longblob,
    img2 longblob,
    img3 longblob,
    img4 longblob
)";

$tabela4 = "CREATE TABLE IF NOT EXISTS carpoteca(
id int(55) primary key auto_increment not null,
nomeCientificoCarpoteca varchar(35) not null,
nomePopularCarpoteca varchar(35) not null,
descricao text(3000) not null,
id_imgCarpoteca int(55),
id_cadastro int(55) not null,
foreign key (id_imgCarpoteca) references imagemCarpoteca(id),
foreign key (id_cadastro) references cadastroDeUsuario(id_cadastro)
)";

$tabela5 = "CREATE TABLE IF NOT EXISTS plantas(
id int(55) primary key auto_increment not null,
nomeCientifico varchar(35) not null,
nomePopular varchar(35) not null,
divisao varchar(35) not null,
classe varchar(35) not null,
ordem varchar(35) not null,
familia varchar(35) not null,
descricao text(3000) not null,
id_cadastro int(55) not null,
id_likeArtigo int(55),
id_imgPlanta int(55),
id_carpoteca int(55),
foreign key (id_likeArtigo) references likeArtigo(id),
foreign key (id_imgPlanta) references imagemPlantas(id),
foreign key (id_carpoteca) references carpoteca(id),
foreign key (id_cadastro) references cadastroDeUsuario(id_cadastro)
)";

$tabela6 = "CREATE TABLE IF NOT EXISTS tipoDeUsuario(
id int(55) primary key auto_increment not null,
usuario varchar(15) not null,
id_cadastro int(55) not null,
foreign key (id_cadastro) references cadastroDeUsuario(id_cadastro)
)";

$tabela7 = "CREATE TABLE IF NOT EXISTS likeArtigo(
id int(55) primary key auto_increment,
gostei boolean,
id_cadastro int(55),
foreign key (id_cadastro) references cadastroDeUsuario(id_cadastro)
)";



if($conecta->query($tabela1)===TRUE){
    echo "Tabela cadastro criada com sucesso<br>";
}else{
    echo "Erro na criação da tabela cadastro: ".$conecta->error."<br>";
}

if($conecta->query($tabela2)===TRUE){
    echo "Tabela imagens das plantas criada com sucesso<br>";
}else{
    echo "Erro na criação da tabela imagens das plantas: ".$conecta->error."<br>";
}

if($conecta->query($tabela3)===TRUE){
    echo "Tabela imagens da Carpoteca criada com sucesso<br>";
}else{
    echo "Erro na criação da tabela imagens da Carpoteca: ".$conecta->error."<br>";
}

if($conecta->query($tabela4)===TRUE){
    echo "Tabela carpoteca criada com sucesso<br>";
}else{
    echo "Erro na criação da tabela carpoteca: ".$conecta->error."<br>";
}

if($conecta->query($tabela5)===TRUE){
    echo "Tabela plantas criada com sucesso<br>";
}else{
    echo "Erro na criação da tabela plantas: ".$conecta->error."<br>";
}

if($conecta->query($tabela6)===TRUE){
    echo "Tabela tipo de usuario criada com sucesso<br>";
}else{
    echo "Erro na criação da tabela tipo de usuário: ".$conecta->error."<br>";
}

if($conecta->query($tabela7)===TRUE){
    echo "Tabela tipo de likeDoUsuario criada com sucesso<br>";
}else{
    echo "Erro na criação da tabela de likeDoUsuario: ".$conecta->error."<br>";
}

$conecta->close();


